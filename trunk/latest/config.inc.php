<?php

// Change these values to your needs

$arsc_dbhost   = "localhost";
$arsc_dbuser   = "root";
$arsc_dbpasswd = "gs62h27";
$arsc_dbdb     = "arscdev";         // This db must already exist!

// If you want to use the ARSC server, you must give the adress (IP or Host) and port to use

$arsc_server_adress = "194.231.30.146";
$arsc_server_port = 4444; // Four is my lucky number ;-)
$arsc_server_maximumusers = 99;

// This is the password that you need if you want give yourself operator status.
// Choose something VERY VERY VERY secure here!
// Not your dogs name, not your girlfriends name, not your birthdate, ok?
// In the chat, you use it like this: /selfop password

// I must not tell you that you should change this, no?

$selfoppassword = "password";

//////////////////////////////////////////////






// Hack around here only if you know what you are doing

// Connecting the db
mysql_connect($arsc_dbhost, $arsc_dbuser, $arsc_dbpasswd);
mysql_select_db($arsc_dbdb);

// How long do we wait for a users 'ping'?
$arsc_logoutbuffer = 11;

// After howmany seconds do you want the userlist window to refresh? This MUST be smaller than the ping value above!
$arsc_userlist_refresh = 8;

// How long do we wait for the 'ping' of a lynxuser?
$arsc_logoutbuffertext = 600;

// After how many entrys will the db be emptied? Dunno if this is a good value... find out under your conditions
$arsc_rowlimit = 40;

// The standard language
if ($arsc_language == "")
{
 $arsc_language = "english";
}

// Templates for the messages
$arsc_template_normal = "<font face=\"Arial\" size=\"2\"><font color=\"#666666\" size=\"1\">[{sendtime}]</font> &lt;{user}&gt; {message}<br>";
$arsc_template_msg = "<font face=\"Arial\" size=\"2\"><font color=\"#666666\" size=\"1\">[{sendtime}]</font> &lt;{user}&gt; {whispers}: <i>{message}</i></b><br>";
$arsc_template_msgops = "<font face=\"Arial\" size=\"2\"><font color=\"#666666\" size=\"1\">[{sendtime}]</font> &lt;{user}&gt; {whispersops}: <i>{message}</i></b><br>";
$arsc_template_me = "<font face=\"Arial\" size=\"2\"><font color=\"#666666\" size=\"1\">[{sendtime}]</font> * {user} {message}<br>";

function my_microtime()
{
 $mt = microtime();
 $mta = explode(" ",$mt);
 $mt = $mta[1].$mta[0];
 $mt = str_replace("0.", "", $mt);
 return $mt;
}

// This function returns an array with all important values attached to a sessionid
function getdatafromsid($arsc_sid)
{
 if (!$result = mysql_query("SELECT * from arsc_users WHERE sid = '$arsc_sid'"))
 {
  $result = mysql_query("SELECT * from arsc_users WHERE sid = '$arsc_sid'");
 }
 if(!$a = mysql_fetch_array($result))
 {
  $result = mysql_query("SELECT * from arsc_users WHERE sid = '$arsc_sid'");
  $a = mysql_fetch_array($result);
 }
 return $a;
}

// This function returns the language the given user has choosen
function find_language($arsc_user)
{
 if (!$result = mysql_query("SELECT language from arsc_users WHERE user = '$arsc_user'"))
 {
  $result = mysql_query("SELECT language from arsc_users WHERE user = '$arsc_user'");
 }
 if(!$a = mysql_fetch_array($result))
 {
  $result = $result = mysql_query("SELECT language from arsc_users WHERE user = '$arsc_user'");
  $a = mysql_fetch_array($result);
 }
 return $a["language"];
}


// This function returns a human readable translation of the room name
function nice_room($arsc_room)
{
 $arsc_room = ereg_replace("__", " / ", $arsc_room);
 $arsc_room = ereg_replace("_", " ", $arsc_room);
 $arsc_room = ucwords($arsc_room);
 return $arsc_room;
}

// This function returns the "real" roomname
function denice_room($arsc_room)
{
 $arsc_room = ereg_replace(" / ", "__", $arsc_room);
 $arsc_room = ereg_replace(" ", "_", $arsc_room);
 $arsc_room = strtolower($arsc_room);
 return $arsc_room;
}

// This function returns the correct posting depending on wether it is a system message, a command is used etc.
function filter_posting($arsc_user, $arsc_sendtime, $arsc_message, $arsc_room)
{
 GLOBAL $arsc_template_me,
        $arsc_template_normal,
        $arsc_template_msg,
        $arsc_template_msgops,
        $arsc_lang_enter,
        $arsc_lang_quit,
        $arsc_lang_kicked,
        $arsc_lang_op,
        $arsc_lang_deop,
        $arsc_lang_whispers,
        $arsc_lang_whispersops,
        $arsc_lang_help,
        $arsc_lang_roomchange,
        $selfoppassword,
        $arsc_my;
 if ($arsc_user == "System" AND strstr($arsc_message, "~~"))
 {
  $arsc_sysmsg = explode("~~", $arsc_message);
  switch($arsc_sysmsg[0])
  {
   case "arsc_user_enter":
                          $arsc_posting = $arsc_lang_enter;
                          $arsc_posting = ereg_replace("\{user\}", "</i>".$arsc_sysmsg[1]."<i>", $arsc_posting);
                          $arsc_posting = ereg_replace("\{room\}", "</i>".$arsc_sysmsg[2]."<i>", $arsc_posting);
                          $arsc_posting = "<font face=\"Arial\" size=\"2\" color=\"#666666\"><i>".$arsc_posting."</i></font><br>";
                          break;
   case "arsc_user_quit":
                          $arsc_posting = $arsc_lang_quit;
                          $arsc_posting = ereg_replace("\{user\}", "</i>".$arsc_sysmsg[1]."<i>", $arsc_posting);
                          $arsc_posting = ereg_replace("\{room\}", "</i>".$arsc_sysmsg[2]."<i>", $arsc_posting);
                          $arsc_posting = "<font face=\"Arial\" size=\"2\" color=\"#666666\"><i>".$arsc_posting."</i></font><br>";
                          break;
   case "arsc_user_kicked":
                          $arsc_posting = $arsc_lang_kicked;
                          $arsc_posting = ereg_replace("\{useractive\}", "</i>".$arsc_sysmsg[1]."<i>", $arsc_posting);
                          $arsc_posting = ereg_replace("\{userpassive\}", "</i>".$arsc_sysmsg[2]."<i>", $arsc_posting);
                          $arsc_posting = "<font face=\"Arial\" size=\"2\" color=\"#666666\"><i>".$arsc_posting."</i></font><br>";
                          break;
   case "arsc_user_op":
                          $arsc_posting = $arsc_lang_op;
                          $arsc_posting = ereg_replace("\{useractive\}", "</i>".$arsc_sysmsg[1]."<i>", $arsc_posting);
                          $arsc_posting = ereg_replace("\{userpassive\}", "</i>".$arsc_sysmsg[2]."<i>", $arsc_posting);
                          $arsc_posting = "<font face=\"Arial\" size=\"2\" color=\"#666666\"><i>".$arsc_posting."</i></font><br>";
                          break;
   case "arsc_user_deop":
                          $arsc_posting = $arsc_lang_deop;
                          $arsc_posting = ereg_replace("\{useractive\}", "</i>".$arsc_sysmsg[1]."<i>", $arsc_posting);
                          $arsc_posting = ereg_replace("\{userpassive\}", "</i>".$arsc_sysmsg[2]."<i>", $arsc_posting);
                          $arsc_posting = "<font face=\"Arial\" size=\"2\" color=\"#666666\"><i>".$arsc_posting."</i></font><br>";
                          break;
   case "arsc_user_roomchange":
                          $arsc_posting = $arsc_lang_roomchange;
                          $arsc_posting = ereg_replace("\{user\}", "</i>".$arsc_sysmsg[1]."<i>", $arsc_posting);
                          $arsc_posting = ereg_replace("\{room1\}", "</i>".$arsc_sysmsg[2]."<i>", $arsc_posting);
                          $arsc_posting = ereg_replace("\{room2\}", "</i>".$arsc_sysmsg[3]."<i>", $arsc_posting);
                          $arsc_posting = "<font face=\"Arial\" size=\"2\" color=\"#666666\"><i>".$arsc_posting."</i></font><br>";
                          break;
  }
 }
 else
 {
  if (substr($arsc_message, 0, 1) == "/")
  {
   if (substr($arsc_message, 0, 4) == "/me ")
   {
    $arsc_posting = $arsc_template_me;
    $arsc_posting = ereg_replace("\{user\}", $arsc_user, $arsc_posting);
    $arsc_posting = ereg_replace("\{message\}", $arsc_message, $arsc_posting);
    $arsc_posting = ereg_replace("\{sendtime\}", substr($arsc_sendtime, 0, 5), $arsc_posting);
    $arsc_posting = eregi_replace("/me ", "", $arsc_posting);
   }
   if (substr($arsc_message, 0, 6) == "/kick ")
   {
    $userpassive = str_replace("/kick ", "", $arsc_message);
    $result = mysql_query("SELECT room, level from arsc_users WHERE user = '$userpassive'");
    $a = mysql_fetch_array($result);
    $result = mysql_query("SELECT room, level from arsc_users WHERE user = '$arsc_user'");
    $b = mysql_fetch_array($result);
    if ($a["room"] == $b["room"] AND $b["level"] > 0 AND $b["level"] >= $a["level"])
    {
     mysql_query("UPDATE arsc_users SET level = -1 WHERE user = '$userpassive'");
     mysql_query("DELETE from arsc_room_$arsc_room WHERE user = '$arsc_user' AND sendtime = '$arsc_sendtime' AND message = '$arsc_message'");
     $arsc_message = "arsc_user_kicked~~".$arsc_user."~~".$userpassive;
     $arsc_sendtime = date("H:i:s");
     $arsc_timeid = my_microtime();
     mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
    }
   }
   if (substr($arsc_message, 0, 4) == "/op ")
   {
    $userpassive = str_replace("/op ", "", $arsc_message);
    $result = mysql_query("SELECT room, level from arsc_users WHERE user = '$userpassive'");
    $a = mysql_fetch_array($result);
    $result = mysql_query("SELECT room, level from arsc_users WHERE user = '$arsc_user'");
    $b = mysql_fetch_array($result);
    if ($a["room"] == $b["room"] AND $b["level"] > 0 AND $a["level"] < 1)
    {
     mysql_query("UPDATE arsc_users SET level = 1 WHERE user = '$userpassive'");
     mysql_query("DELETE from arsc_room_$arsc_room WHERE user = '$arsc_user' AND sendtime = '$arsc_sendtime' AND message = '$arsc_message'");
     $arsc_message = "arsc_user_op~~".$arsc_user."~~".$userpassive;
     $arsc_sendtime = date("H:i:s");
     $arsc_timeid = my_microtime();
     mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
    }
   }
   if (substr($arsc_message, 0, 6) == "/deop ")
   {
    $userpassive = str_replace("/deop ", "", $arsc_message);
    $result = mysql_query("SELECT room, level from arsc_users WHERE user = '$userpassive'");
    $a = mysql_fetch_array($result);
    $result = mysql_query("SELECT room, level from arsc_users WHERE user = '$arsc_user'");
    $b = mysql_fetch_array($result);
    if ($a["room"] == $b["room"] AND $b["level"] > 0 AND $a["level"] <= $b["level"])
    {
     mysql_query("UPDATE arsc_users SET level = 0 WHERE user = '$userpassive'");
     mysql_query("DELETE from arsc_room_$arsc_room WHERE user = '$arsc_user' AND sendtime = '$arsc_sendtime' AND message = '$arsc_message'");
     $arsc_message = "arsc_user_deop~~".$arsc_user."~~".$userpassive;
     $arsc_sendtime = date("H:i:s");
     $arsc_timeid = my_microtime();
     mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
    }
   }
   if (substr($arsc_message, 0, 8) == "/selfop ")
   {
    $password = str_replace("/selfop ", "", $arsc_message);
    if ($password == $selfoppassword)
    {
     mysql_query("UPDATE arsc_users SET level = 2 WHERE user = '$arsc_user'");
     mysql_query("DELETE from arsc_room_$arsc_room WHERE message LIKE '/selfop%' AND user = '$arsc_user'");
     $arsc_message = "arsc_user_selfop~~".$arsc_user;
     $arsc_sendtime = date("H:i:s");
     $arsc_timeid = my_microtime();
     mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
    }
   }
   if (substr($arsc_message, 0, 5) == "/msg ")
   {
    $userpassive = str_replace("/msg ", "", $arsc_message);
    $userpassive = substr($userpassive, 0, strpos($userpassive, " "));
    $arsc_message = str_replace("/msg ".$userpassive." ", "", $arsc_message);
    if ($userpassive == $arsc_my["user"])
    {
     $arsc_posting = $arsc_template_msg;
     $arsc_posting = ereg_replace("\{sendtime\}", substr($arsc_sendtime, 0, 5), $arsc_posting);
     $arsc_posting = ereg_replace("\{user\}", $arsc_user, $arsc_posting);
     $arsc_posting = ereg_replace("\{whispers\}", $arsc_lang_whispers, $arsc_posting);
     $arsc_posting = ereg_replace("\{message\}", $arsc_message, $arsc_posting);
    }
   }
   if (substr($arsc_message, 0, 8) == "/msgops ")
   {
    $arsc_message = str_replace("/msgops ", "", $arsc_message);
    if ($arsc_my["level"] > '0')
    {
     $arsc_posting = $arsc_template_msgops;
     $arsc_posting = ereg_replace("\{sendtime\}", substr($arsc_sendtime, 0, 5), $arsc_posting);
     $arsc_posting = ereg_replace("\{user\}", $arsc_user, $arsc_posting);
     $arsc_posting = ereg_replace("\{whispersops\}", $arsc_lang_whispersops, $arsc_posting);
     $arsc_posting = ereg_replace("\{message\}", $arsc_message, $arsc_posting);
    }
   }
   if (substr($arsc_message, 0, 5) == "/help" OR substr($arsc_message, 0, 2) == "/?")
   {
    $arsc_message = "/msg ".$arsc_user." ".$arsc_lang_help;
    $arsc_timeid = my_microtime();
    mysql_query("DELETE from arsc_room_$arsc_room WHERE message LIKE '/help%' OR message LIKE '/?%' AND user = '$arsc_user'");
    mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
   }
   if (substr($arsc_message, 0, 6) == "/room ")
   {
    $arsc_new_room = denice_room(str_replace("/room ", "", $arsc_message));
    $arsc_result = mysql_query("SHOW tables LIKE 'arsc_room_%'");
    while ($arsc_a = mysql_fetch_array($arsc_result))
    {
     if (substr($arsc_a[0], 10) == $arsc_new_room)
     {
      mysql_query("DELETE from arsc_room_$arsc_room WHERE message = '$arsc_message' AND user = '$arsc_user'");
      mysql_query("UPDATE arsc_users SET room = '$arsc_new_room' WHERE user = '$arsc_user'");
      $arsc_sendtime = date("H:i:s");
      $arsc_timeid = my_microtime();
      $arsc_message = "arsc_user_quit~~".$arsc_user."~~".nice_room($arsc_room);
      mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
      $arsc_message = "arsc_user_enter~~".$arsc_user."~~".nice_room($arsc_new_room);
      mysql_query("INSERT into arsc_room_$arsc_new_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
     }
    }
   }
  }
  else
  {
   $arsc_posting = $arsc_template_normal;
   $arsc_posting = ereg_replace("\{sendtime\}", substr($arsc_sendtime, 0, 5), $arsc_posting);
   $arsc_posting = ereg_replace("\{user\}", $arsc_user, $arsc_posting);
   $arsc_posting = ereg_replace("\{message\}", $arsc_message, $arsc_posting);
  }
 }
 return $arsc_posting;
}

?>
