<?php
function arsc_systemPost($siteID, $msg, $scope)
{
    // messages posted by the system; user messages have to be filtered by arsc_userPost() first
    $query = "INSERT INTO arsc_messages (messageID, siteID, message, scope, time) "
           . "VALUES (NULL, '$siteID', '%{arsc_frmt_time1}" . date('H:i:s')
           . "%{arsc_frmt_time2}$msg', '$scope', '" . mTime() . "')";
    mysql_query($query);
}

function arsc_userPost($input, $siteID, $roomID, $sid, $user, $nick, $level, $blocked, $selfopPass)
{
    $input = preg_replace("/\s+/", ' ', trim(strip_tags($input)));
    // compress spaces, get rid of bad user input (is strip_tags the best way?)
    // Q: Do we want to have/allow bb style tags? It would make things more complicated.
    
    $input = str_replace('$', '&#36;', str_replace('%', '&#37;', $input));
    // &#36; &#37; - replace % & $ in input to reserve their use for templating only 
    // to display, we do a str_replace of % with $, then eval the string
    // used to just use $, but that's more difficult than necessary to read and maintain
    // but we still have to replace $, because we don't want to be eval'ing any user input
    // the curly braces are acceptable in variables to separate them from other content

    // this is one of the major changes in the way things are done; templates are inserted 
    // directly in the messages table

    // another is that only SELECTS and INSERTS are done on the messages table
    // no DELETES or UPDATES are ever needed

    // messages are filtered once at post time only; this is what eliminates the whisper bug
    // versions that don't rely on server push don't keep posting to the db
    
    $inputParts = explode(' ', $input);
    $cmd0 = $inputParts[0];
    $cmd1 = $inputParts[1];
    $cmd2 = $inputParts[2];
    // extract message parts which may be significant
    
    $msg[0] = ''; 
    $scope[0] = "#$roomID";
    // initialize msg and scope [intended recipient(s)]
    // default scope: current room; # differentiates room from user
    // why array? we may be sending more than one message

     
    if (substr($cmd0, 0, 1) == '/') // we have a command
    {
        $cmd0 = str_replace('/', $blocked, $cmd0);
        // first character of command becomes 0 (normal user) or 1 (blocked user [formerly known as ripped])
        // I'm not sure what ripped users could do, but there's very little a blocked user can do
        // blocked users are displayed in the userlist with strikethough formatting
        
        switch ($cmd0)
        {
            case '0me': // action
                $msg[0] = "%{arsc_frmt_me1}$nick " . substr($input, 3) . '%{arsc_frmt_me2}'; 
                break;
            case '0msg': // whisper
                if (($cond = ($cmd1 == '@ops')) OR ($cmd1 == '@siteops')) // whisper to ops in (current room) OR (all rooms)
                {
                    if ($level > 0) // you have to be an op yourself to do this
                    {    
                        $query = "SELECT user FROM sessions WHERE siteID = '$siteID' AND level > 0 AND user != '$user'" . (($cond) ? (" AND roomID = '$roomID'") : (''));
                        $op = '@';
                    }
                    else // otherwise, no go
                    {
                        break;
                    }
                }
                else // regular whisper
                {
                    $query = "SELECT user FROM sessions WHERE siteID = '$siteID' AND nick = '$cmd1'";
                    $op = '';
                }
                $input = substr($input, (strlen($cmd1) + 4));
                $result = mysql_query($query);
                $whisperCount = 0;
                while ($row = mysql_fetch_row($result))
                {
                    // $op lets you know it's a whisper from an op; add a link around sender's name, so you can reply if sender not in same room (sender not on your buddy list, but you're on theirs)
                    $msg[$whisperCount] = "%{arsc_frmt_msg1}$op%{arsc_frmt_link1}$nick%{arsc_frmt_link2} %{arsc_lang_Whispers}: $input%{arsc_frmt_msg2}";
                    $scope[$whisperCount] = $row[0];
                    $whisperCount++;
                }
                if ($whisperCount > 0) // might not be any other ops on the site or on a regular whisper, user left in a split-second (not likely, but...)
                {
                    $msg[$whisperCount] = "%{arsc_frmt_system1}%{arsc_lang_YouWhisperedTo} $cmd1: $input%{arsc_frmt_system2}"; // send an ack back to the whisperer
                }
                elseif($op == '@') // make sure we don't ack an ops message back to a regular user
                {
                    $msg[0] = "%{arsc_frmt_system1}%{arsc_lang_NoOtherOpsOnSite}%{arsc_frmt_system2}";
                }
                else // mein Gott, the unthinkable happened :-)
                {
                    $msg[0] = "%{arsc_frmt_system1}%{arsc_lang_UserNotFound}: $cmd1%{arsc_frmt_system2}";
                }
                $scope[$whisperCount] = $user;
                break;
            case '0nick': // new feature: change your nick
                $query = "SELECT user FROM siteUsers WHERE siteID = '$siteID' AND user = '$cmd1' AND user != '$user'";
                // first condition: new nick is not a registered username (unless it's yours)
                $rows = mysql_num_rows(mysql_query($query));
                
                $query = "SELECT nick FROM sessions WHERE siteID = '$siteID' AND nick = '$cmd1'";
                // second condition: nick is not currently in use
                $rows += mysql_num_rows(mysql_query($query));
                
                if ($rows == 0) // okay to change nick
                {
                    mysql_query("UPDATE sessions SET nick = '$cmd1' WHERE sid = '$sid'");
                    $msg[0] = "%{arsc_frmt_system1}$nick %{arsc_lang_IsNowKnownAs} $cmd1%{arsc_frmt_system2}";
                }
                else
                {
                    $msg[0] = "%{arsc_frmt_system1}$cmd1 %{arsc_lang_IsNotAvailable}%{arsc_frmt_system2}";
                    $scope[0] = $user;
                }
                break;
            case '0smileys':
            case '1smileys': // blocked user can still look at smileys
                $msg[0] = "%{arsc_frmt_system1}%{arsc_show_smileys}%{arsc_frmt_system2}";
                $scope[0] = $user;
                break;
            case '0?':
            case '1?':
            case '0help':
            case '1help': // blocked user can still get help
                $msg[0] = "%{arsc_frmt_system1}%{arsc_show_help}%{arsc_frmt_system2}";
                $scope[0] = $user;
                break;
            default:
                switch($cmd0) // get info about passive user for the next set of commands, if needed
                {
                    case '0selfop':
                    case '0join':
                    case '0room':
                        break;
                    default:
                        if ( (($blocked == 0) OR ($cmd0 = '1whois')) AND
                             $result = mysql_query("SELECT * FROM sessions WHERE siteID = '$siteID' AND nick = '$cmd1'")
                           )
                        {
                            $user2 = mysql_fetch_assoc($result);
                        }
                }
                $cmdLevel = 0;    // increases when falling through certain similar cases
                switch($cmd0)
                {
                    case '0whois':
                    case '1whois':
                        // expanded whois now gets profile info also, so okay for blocked user to do a whois
                        $msg[0] = "%{arsc_frmt_system1}%{arsc_lang_UserInfoFor} $user2[nick]<br>";
                        $whois='';
                        if (isset($user2))
                        {
                            $query = 'SELECT u.user, u.pass, u.link, '
                                   . 's.nick, s.level, s.ip, s.lastMsgPing, s.language, s.version, s.blocked, '
                                   . 'r.firstName, r.lastName, r.email '
                                   . 'FROM siteUsers u, sessions s, regPrivate r '
                                   . "WHERE s.siteID = '$siteID' AND s.nick = '$cmd1' "
                                   . 'AND u.user = s.user AND r.regPrivateID = u.regPrivateID';
                            $private = mysql_fetch_assoc(mysql_query($query));
                            
                            $query = 'SELECT * FROM regPublic '
                                   . "WHERE sessions.siteID = '$siteID' AND sessions.nick = '$user2[nick]' "
                                   . 'AND siteUsers.user = sessions.user AND regPublic.regPublicID = siteUsers.regPublicID';
                            $public = array();
                            if ($result = mysql_query($query))
                            {
                                $public = mysql_fetch_assoc($result);
                            }
                            if (!(($level > 0) AND ($level >= $user2['level']) AND ($user2['room'] != '')))
                            {
                                $private = array();
                            }
                            $whoisArray = array_merge($private, $public);
                            while (list($key, $val) = each($whoisArray))
                                {
                                    if (strlen($val) > 0)
                                    {
                                        $whois .= "<nobr>$key:&nbsp;$val&nbsp;&nbsp;&nbsp;</nobr>";
                                    }
                                }
                            }
                        }
                        if ($whois == '')
                        {
                            $whois = '%{arsc_lang_NoInfoAvailable}';
                        }
                        $msg[0] .= "$whois%{arsc_frmt_system2}";
                        $scope[0] = $user;
                        break;
                    case '0lock':
                        $cmdLevel++;
                    case '0ban':
                        $cmdLevel++;
                    case '0kick':
                        if ((isset($user2)) AND ($roomID == $user2['roomID']) AND ($level > 0) AND ($level >= $user2['level']))
                        {
                            if ($cmdLevel == 2)
                            {
                                $query = 'UPDATE siteUsers SET locked = 1 '
                                       . "WHERE siteID = '$siteID' AND sessions.nick = '$cmd1' "
                                       . 'AND siteUsers.user = sessions.user';
                                mysql_query($query);
                            }
                            elseif ($cmdLevel == 1)
                            {
                                $query = 'INSERT INTO banlist (banListID, siteID, ip, until) ' // minutes
                                       . "VALUES (NULL, '$siteID','$user2[ip]','" . (time() + floor($cmd2 * 60)) . "')";
                                mysql_query($query);
                                $cmd0 .= 'n'; // proper grammar :-)
                            }
                            $query = 'UPDATE sessions SET level = -1 '
                                   . "WHERE siteID = '$siteID' AND nick = '$cmd1'";
                            mysql_query($query);
                            $msg[0] = "%{arsc_frmt_system1}$cmd1%{arsc_lang_" . ucfirst(substr($cmd0, 1)) . 'ed}%{arsc_frmt_system2}';
                        }
                        break;
                    case '0unblock':
                        $cmdLevel++;
                    case '0block':
                        if ($cond = ($cmd1 == '*'))
                        {
                            $query = "level = 0 AND level < $level AND roomID = '$roomID'";
                        }
                        elseif ($cond = ((isset($user2)) AND ($user2['room'] == $room) AND ($level > 0) AND ($user2['blocked'] == $cmdLevel) AND ($user2['level'] <= $level)))
                        {
                            $query = "nick = '$cmd1'";
                        }
                        if($cond)
                        {
                            mysql_query("UPDATE sessions SET blocked = '$cmdLevel' WHERE $query AND siteID = '$siteID'");
                            $msg[0] = '%{arsc_frmt_system1}' . (($cmd1 == '*') ? ('%{arsc_lang_UsersHave}') : ("$cmd1 %{arsc_lang_Has}")) . '%{arsc_lang_BeenBlocked}%{arsc_frmt_system2}';
                        }
                        break;
                    case '0selfop':
                        $cmdLevel++;
                    case '0op':
                        $cmdLevel++;
                    case '0deop':
                        $opUser = ( ($cmdLevel == 2) ? ($user) : ($cmd1) );
                        if ( (($cmdLevel == 2) AND ($cmd1 == $selfopPass))  OR
                        // selfop passwords are no longer hard-coded, but are part of one's profile; site admins can give people they trust this ability
                        
                             ((isset($user2)) AND ($user2['roomID'] == $roomID) AND ($level > 0) AND (($cmdLevel == 1) ? ($user2['level'] < 1) : ($user2['level'] <= $level)))
                           )
                        {
                            mysql_query("UPDATE sessions SET level = '$cmdLevel' WHERE siteID = '$siteID' AND nick = '$opUser'");
                            $msg[0] = "%{arsc_frmt_system1}$opUser %{arsc_lang_Is" . (($cmdLevel == 0) ? 'NoLonger' : 'Now') . 'AnOperator}%{arsc_frmt_system2}';
                        }
                        break;
                    case '0move':     // new feature: temporary rooms can be created by users by joining a non-existant one
                        $cmdLevel++;
                    case '0join':
                    case '0room':
                        $cond = (substr($cmd0, 1) == 'move');
                        $roomUser = ( ($cond) ? ($cmd1) : ($nick) );
                        
                        //   conditions need to be met for moving a user to a different room...            but not for just joining
                        if( ((isset($user2)) AND $cond AND (($level > 0) AND ($user2['level'] <= $level))) OR (!$cond) )
                        {
                            // room name can be in two different locations in the string
                            $newRoom = substr($input, ( ($cond) ? (strlen($roomUser) + 7) : 6) );

                            // does room exist?
                            $result = mysql_query("SELECT roomID FROM rooms WHERE roomName = '$newRoom' AND siteID = '$siteID'");
                            if (mysql_num_rows($result) == 0)
                            {
                                // no, create new room with initial settings: private, temporary
                                mysql_query("INSERT INTO rooms (RoomID, SiteID, RoomName, RoomTopic, RoomVis, RoomPerm) VALUES (NULL, '$site','$newRoom','%{arsc_lang_WelcomeTo} $newRoom , %{arsc_lang_CreatedBy} $roomUser ','0','0')");
                                $newRoomID = mysql_insert_id();
                            }
                            else
                            {
                                $row = mysql_fetch_row($result);
                                $newRoomID = $row[0];
                            }
                            mysql_query("UPDATE sessions SET roomID = '$newRoomID' WHERE nick = '$roomUser' AND siteID = '$site'");
                            $msg[0] = "%{arsc_frmt_system1}$roomUser %{arsc_lang_MovedTo} $newRoom%{arsc_frmt_system1}";
                            $msg[1] = "%{arsc_frmt_system1}$roomUser %{arsc_lang_EntersTheRoom}%{arsc_frmt_system1}";
                            $scope[1] = "#$newRoomID";
                        }
                        break;
                    default:
                        //insufficient privileges or unknown command
                        $msg[0] = '%{arsc_frmt_system1}%{arsc_lang_UnknownOrUnavailableCommand}%{arsc_frmt_system2}';
                        $scope[0] = $user;
                }
        }
    }else{ // regular message
        $msg[0]="%{arsc_frmt_normal1}$nick: $input%{arsc_frmt_normal1}";
    }

    if($msg[0] == '') // blocked user trying to post message or operator with insufficient privileges
    {
        $msg[0] = "%{arsc_frmt_system1}%{arsc_lang_NotAllowed}: $input%{arsc_frmt_system2}";
        $scope[0] = $user;
    }

    // post the message(s)
    $msgCount = count($msg);
    for ($i = 0; $i < $msgCount; $i++)
    {
        arsc_systemPost($siteID, $msg[$i], $scope[$i]);
    }
}
?>