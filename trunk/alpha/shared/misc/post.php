<?php
// new feature: multiple sites per server
function arsc_systemPost($siteID,$msg,$scope) // messages posted by the system; user messages have to be filtered by arsc_userPost() first
{
	@mysql_query('INSERT INTO arsc_messages(messageID, siteID, message, scope, time) VALUES (NULL, "' . $siteID . '", "$arsc_frmt_time1' .date('H:i:s') . '$arsc_frmt_time2 ' . $msg . '","' . $scope . '","' . mTime() . '")');
}

function arsc_userPost($input, $siteID, $roomID, $sid, $user, $nick, $level, $blocked, $selfopPass)
{
	$input = preg_replace ('/\s+/',' ', trim (strip_tags ($input) ) ); // get rid of bad user input
	$inputParts = explode(' ', $input);
	$cmd0 = $inputParts[0];                         // extract message parts which may be significant
	$cmd1 = $inputParts[1];
	$cmd2 = $inputParts[2];
	$msg[0] = '';                                   // initialize msg and scope [intended recipient(s)] -- why array? we may be sending an additional message (back to whisperer)
	$scope[0] = '#' . $roomID;                      // default: current room; # differentiates room from user
	if (substr ($cmd0, 0, 1) == '/')                // we have a command
	{
		$cmd0 = str_replace ('/', $blocked, $cmd0); // first character of command becomes 0 (normal user) or 1 (blocked user [formerly known as ripped])
		switch($cmd0)                               // I'm not sure what ripped users couldn't do, but there's very little a blocked user can do
        {
            case '0me': // action
                // &#36; - replace dollar signs in input to reserve their use for templating only (here, $arsc_frmt_me1 and $arsc_frmt_me2 are formatting templates)
                // this is one of the major changes in the way things are done; templates are inserted directly in the messages table
                // another is that only SELECTS and INSERTS are used on the messages table; no DELETES or UPDATES are ever needed
                // messages are filtered once at post time only; this is what eliminates the whisper bug; versions that don't rely on server push don't keep posting to the db
				$msg[0] = '$arsc_frmt_me1' . $nick . ' ' . str_replace ('$', '&#36;', substr ($input, 3) ) . '$arsc_frmt_me2'; 
				break;
			case '0msg': // whisper
				$row = mysql_fetch_row (mysql_query ('SELECT user FROM sessions WHERE siteID = "'.$siteID.'" AND nick = "'.$cmd1.'"') );
				$input = str_replace ('$', '&#36;', substr ($input, (strlen ($cmd1) + 4)) );
				$msg[0] = '$arsc_frmt_msg1' . $nick. ' $whispers: ' . $input . '$arsc_frmt_msg2';
				$scope[0] = $row[0];
				$msg[1] = '$arsc_frmt_system1$arsc_lang_youWhisperedTo ' . $cmd1 . ': ' . $input . '$arsc_frmt_system2'; // send an ack back to the whisperer
				$scope[1] = $user;
				break;
			case '0nick': // new feature: change your nick -- First condition: new nick is not a registered username (unless user is changing back to own registered nick)                              second condition: nick is not currently in use
				if ( (mysql_num_rows (mysql_query ('SELECT user FROM siteUsers WHERE siteID = "' . $siteID . '" AND user = "' . $cmd1 . '" AND user != "' . $user . '"') ) == 0) AND (mysql_num_rows (mysql_query ('SELECT nick FROM sessions WHERE siteID = "' . $siteID . '" AND nick = "' . $cmd1 . '"') ) == 0) )
				{
					mysql_query('UPDATE sessions SET nick = "' . $cmd1 . '" WHERE sid = "' . $sid . '"');                // okay to change nick
					$msg[0] = '$arsc_frmt_system1' . $nick . ' $arsc_lang_isNowKnownAs ' . $cmd1 . '$arsc_frmt_system2';
				}
				else
				{
					$msg[0] = '$arsc_frmt_system1' . $cmd1 . ' $arsc_lang_isNotAvailable$arsc_frmt_system2';             // nick in use or registered to someone else
					$scope[0] = $user;
				}
				break;
			case '0smileys':
			case '1smileys': // blocked user can still look at smileys
				$msg[0] = '$arsc_frmt_system1$arsc_show_smileys$arsc_frmt_system2';
				$scope[0] = $user;
				break;
			case '0?':
			case '1?':
			case '0help':
			case '1help': // blocked user can still get help
				$msg[0] = '$arsc_frmt_system1$arsc_show_help$arsc_frmt_system2';
				$scope[0] = $user;
				break;
			default:
				switch($cmd0)      // get info about passive user for the next set of commands, if needed
				{
					case '0selfop':
					case '0join':
					case '0room':
						break;
					default:       // expanded whois now gets profile info also, so okay for blocked user to do a whois
						if ( ( ($blocked == 0) OR ($cmd0 = '1whois') ) AND ($result = mysql_query ('SELECT * FROM sessions WHERE siteID = "' . $siteID . '" AND nick = "' . $cmd1 . '"') ) )
						{
							$user2 = mysql_fetch_assoc ($result);
						}
				}
				$cmdLevel = 0;    // increases when falling through certain similar cases
				switch ($cmd0)
				{
					case '0whois':
					case '1whois':
						$msg[0] = '$arsc_frmt_system1$arsc_lang_userInfoFor ' . $user2['nick'] . '<br>';
						$whois='';
						if (isset ($user2))
						{
							$private = mysql_fetch_assoc (mysql_query ('SELECT u.user, u.pass, u.link, s.nick, s.level, s.ip, s.lastMsgPing, s.language, s.version, s.blocked, r.firstName, r.lastName, r.email FROM siteUsers u, sessions s, regPrivate r WHERE s.siteID = "' . $siteID . '" AND s.nick="' . $cmd1 . '" AND u.user = s.user AND r.regPrivateID = u.regPrivateID') );
							if ($result = mysql_query ('SELECT * FROM regPublic WHERE sessions.siteID = "' . $siteID . '" AND sessions.nick = "' . $user2['nick'] . '" AND siteUsers.user = sessions.user AND regPublic.regPublicID = siteUsers.regPublicID') )
							{
								$public = mysql_fetch_assoc ($result);
							}
							if ( ($level > 0) AND ($level >= $user2['level']) AND ($user2['room'] != '') )
							{
				      			while (list ($key, $val) = each ($private) )
				      			{
									if (strlen ($val) > 0)
									{
										$whois .= '<nobr>' . $key . ':&nbsp;' . $val . '&nbsp;&nbsp;&nbsp;</nobr>';
									}
								}
							}
							if (isset($public))
							{
								while (list ($key, $val) = each ($public))
								{
									if (strlen($val) > 0)
									{
										$whois .= '<nobr>' . $key . ':&nbsp;' . $val . '&nbsp;&nbsp;&nbsp;</nobr>';
									}
								}
							}
						}
						if ($whois == '')
						{
							$whois = '$arsc_lang_noInfoAvailable';
						}
						$msg[0] .= $whois . '$arsc_frmt_system2';
						$scope[0] = $user;
						break;
					case '0lock':
						$cmdLevel++;
					case '0ban':
						$cmdLevel++;
					case '0kick':
						if ((isset ($user2)) AND ($roomID == $user2['roomID']) AND ($level > 0) AND ($level >= $user2['level']))
						{
							if ($cmdLevel == 2)
							{
								mysql_query('UPDATE siteUsers SET locked = 1 WHERE siteID = "' . $siteID . '" AND sessions.nick="' . $cmd1 . '" AND siteUsers.user = sessions.user');
							}
							elseif ($cmdLevel == 1)
							{
								mysql_query ('INSERT INTO banlist (banListID, siteID, ip, until) VALUES (NULL, "' . $siteID . '","' . $user2['ip'] . '","' . (time() + floor ($cmd2 * 60)) . '")');
								$cmd0 .= 'n'; // proper grammar
							}
							mysql_query ('UPDATE sessions SET level = -1 WHERE siteID = "' . $siteID . '" AND nick = "' . $cmd1 . '"');
							$msg[0] = '$arsc_frmt_system1' . $cmd1 . ' $arsc_lang_' . substr ($cmd0, 1) . 'ed$arsc_frmt_system2';
						}
						break;
					case '0unblock':
						$cmdLevel++;
					case '0block':
						if ($cond = ($cmd1 == '*'))
						{
							$query='(level = 0) AND (level < ' . $level . ') AND (roomID = "' . $roomID . '")';
						}
						elseif ($cond = ((isset($user2)) AND ($user2['room'] == $room) AND ($level > 0) AND ($user2['blocked'] == $cmdLevel) AND ($user2['level'] <= $level)))
						{
							$query = 'nick = "'.$cmd[1] . '"';
						}
						if($cond)
						{
							mysql_query ('UPDATE sessions SET blocked = "' . $cmdLevel . '" WHERE ' . $query . ' AND siteID = "' . $siteID . '"');
							$msg[0] = '$arsc_frmt_system1' . (($cmd1 == '*') ? ('$arsc_lang_usersHave') : ($cmd[1] . '$arsc_lang_has')) . '$arsc_lang_beenBlocked$arsc_frmt_system2';
						}
						break;
					case '0selfop':
						$cmdLevel++;
					case '0op':
						$cmdLevel++;
					case '0deop':
						$opUser = ( ($cmdLevel==2) ? ($user) : ($cmd1) );
						if ( (($cmdLevel == 2) AND ($cmd1 == $selfopPass)) OR ( (isset($user2)) AND ($user2['roomID'] == $roomID) AND ($level > 0) AND (($cmdLevel == 1) ? ($user2['level'] < 1) : ($user2['level'] <= $level)) ) )
						{
							mysql_query('UPDATE sessions SET level = "' . $cmdLevel . '" WHERE siteID = "' . $siteID . '" AND nick = "' . $opUser. '"');
							$msg[0] = '$arsc_frmt_system1' . $opUser . ' $arsc_lang_is' . (($cmdLevel == 0) ? 'NoLonger' : 'Now') . 'AnOperator$arsc_frmt_system2';
						}
						break;
					case '0move':     // new feature: temporary rooms can be created by users by joining a non-existant one
						$cmdLevel++;
					case '0join':
					case '0room':
						$cond = (substr ($cmd0, 1) == 'move');
						$roomUser = ( ($cond) ? ($cmd1) : ($nick) )
						//   conditions need to be met for moving a user to a different room...            but not for just joining
						if( ((isset($user2)) AND $cond AND (($level > 0) AND ($user2['level'] <= $level))) OR (!$cond) )
						{
							$newRoom = substr ($input, ( ($cond) ? (strlen ($roomUser) + 7) : 6) );
							$result = mysql_query ('SELECT roomID FROM rooms WHERE roomName = "' . $newRoom . '" AND siteID = "' . $siteID . '"');
							if (mysql_num_rows ($result) == 0)
							{
								mysql_query('INSERT INTO rooms (RoomID, SiteID, RoomName, RoomTopic, RoomVis, RoomPerm) VALUES (NULL, "' . $site . '","' . $newRoom . '","'. $arsc_lang_welcomeTo . ' ' . $newRoom . ', ' . $arsc_lang_createdBy . ' ' . $roomUser . '","0","0")');
								$newRoomID = mysql_insert_id();
							}
							else
							{
								$row = mysql_fetch_row ($result);
								$newRoomID = $row[0];
							}
							mysql_query ('UPDATE sessions SET roomID = "' . $newRoomID . '" WHERE nick = "' . $roomUser . '" AND SiteID = "' . $site . '"');
							$msg[0] = '$arsc_frmt_system1' . $roomUser . ' $arsc_lang_movedTo ' . $newRoom . '$arsc_frmt_system2';
							$msg[1] = '$arsc_frmt_system1' . $roomUser . ' $arsc_lang_entersTheRoom$arsc_frmt_system2';
							$scope[1] = '#' . $newRoomID;
						}
						break;
					default:
						$msg[0] = '$arsc_frmt_system1$arsc_lang_unknownOrUnavailableCommand$arsc_frmt_system2';
						$scope[0] = $user;
				}
		}
	}else{ // regular message
		$msg[0]='$arsc_frmt_normal1' . $nick . ': ' . str_replace('$','&#36;',$input) . '$arsc_frmt_normal2';
	}
	if($msg[0] == '') // blocked user trying to post message or operator with insufficient privileges
	{
		$msg[0] = '$arsc_frmt_system1$arsc_lang_notAllowed: ' . str_replace ('$', '&#36;', $input) . '$arsc_frmt_system2';
		$scope[0] = $user;
	}
	$msgCount = count ($msg);
	for ($i = 0; $i < $msgCount; $i++) // post the message(s)
	{
		arsc_systemPost($siteID, $msg[$i], $scope[$i]);
	}
}
?>