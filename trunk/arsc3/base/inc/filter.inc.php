<?php

// Ah, the big thing.
// This function returns the correct posting depending on wether it is a system message, a command is used etc.

function arsc_filter_posting($arsc_user, $arsc_sendtime, $arsc_message, $arsc_room, $arsc_flag_ripped, $arsc_template)
{
 GLOBAL $arsc_smilies,
        $arsc_lang,
        $arsc_my;

 $arsc_api = new arsc_api_Class;

 if ($arsc_user == "System" AND strstr($arsc_message, "~~"))
 {
  // We have a system message
  $arsc_sysmsg = explode("~~", $arsc_message);
  switch($arsc_sysmsg[0])
  {
   case "arsc_user_enter":
                          $arsc_posting = $arsc_lang["enter"];
                          $arsc_posting = str_replace("{user}", $arsc_sysmsg[1], $arsc_posting);
                          $arsc_posting = str_replace("{room}", $arsc_sysmsg[2], $arsc_posting);
                          $arsc_posting = str_replace("{user}", $arsc_user, str_replace("{sendtime}", substr($arsc_sendtime, 0, 5), str_replace("{message}", $arsc_posting, $arsc_template["system"])));
                          break;
   case "arsc_user_quit":
                          $arsc_posting = $arsc_lang["quit"];
                          $arsc_posting = str_replace("{user}", $arsc_sysmsg[1], $arsc_posting);
                          $arsc_posting = str_replace("{room}", $arsc_sysmsg[2], $arsc_posting);
                          $arsc_posting = str_replace("{user}", $arsc_user, str_replace("{sendtime}", substr($arsc_sendtime, 0, 5), str_replace("{message}", $arsc_posting, $arsc_template["system"])));
                          break;
   case "arsc_user_kicked":
                          $arsc_posting = $arsc_lang["kicked"];
                          $arsc_posting = str_replace("{useractive}", $arsc_sysmsg[1], $arsc_posting);
                          $arsc_posting = str_replace("{userpassive}", $arsc_sysmsg[2], $arsc_posting);
                          $arsc_posting = str_replace("{user}", $arsc_user, str_replace("{sendtime}", substr($arsc_sendtime, 0, 5), str_replace("{message}", $arsc_posting, $arsc_template["system"])));
                          break;
   case "arsc_user_op":
                          $arsc_posting = $arsc_lang["op"];
                          $arsc_posting = str_replace("{useractive}", $arsc_sysmsg[1], $arsc_posting);
                          $arsc_posting = str_replace("{userpassive}", $arsc_sysmsg[2], $arsc_posting);
                          $arsc_posting = str_replace("{user}", $arsc_user, str_replace("{sendtime}", substr($arsc_sendtime, 0, 5), str_replace("{message}", $arsc_posting, $arsc_template["system"])));
                          break;
   case "arsc_user_deop":
                          $arsc_posting = $arsc_lang["deop"];
                          $arsc_posting = str_replace("{useractive}", $arsc_sysmsg[1], $arsc_posting);
                          $arsc_posting = str_replace("{userpassive}", $arsc_sysmsg[2], $arsc_posting);
                          $arsc_posting = str_replace("{user}", $arsc_user, str_replace("{sendtime}", substr($arsc_sendtime, 0, 5), str_replace("{message}", $arsc_posting, $arsc_template["system"])));
                          break;
   case "arsc_user_roomchange":
                          if ($arsc_my["level"] > 0)
                          {
                           $arsc_posting = $arsc_lang["roomchange"];
                           $arsc_posting = str_replace("{user}", $arsc_sysmsg[1], $arsc_posting);
                           $arsc_posting = str_replace("{room1}", $arsc_sysmsg[2], $arsc_posting);
                           $arsc_posting = str_replace("{room2}", $arsc_sysmsg[3], $arsc_posting);
                           $arsc_posting = str_replace("{user}", $arsc_user, str_replace("{sendtime}", substr($arsc_sendtime, 0, 5), str_replace("{message}", $arsc_posting, $arsc_template["system"])));
                          }
                          break;
   case "arsc_user_croom":
                          $arsc_posting = $arsc_lang["croom"];
                          $arsc_posting = str_replace("{user}", $arsc_sysmsg[1], $arsc_posting);
                          $arsc_posting = str_replace("{room}", $arsc_sysmsg[2], $arsc_posting);
                          $arsc_posting = str_replace("{user}", $arsc_user, str_replace("{sendtime}", substr($arsc_sendtime, 0, 5), str_replace("{message}", $arsc_posting, $arsc_template["system"])));
                          break;
  }
 }
 else
 {
  // Do we have a command or a normal posting?
  if (preg_match("/^\/([a-z]+|\?)(\z| )/", $arsc_message))
  {
   // We have a command.
   if (substr($arsc_message, 0, 4) == "/me ")
   {
    $arsc_result = mysql_query("SELECT type FROM arsc_rooms WHERE roomname = '$arsc_room'", ARSC_PARAMETER_DB_LINK);
    $arsc_a = mysql_fetch_array($arsc_result);
    if ($arsc_a["type"] <> 2)
    {
     $arsc_posting = $arsc_template["me"];
     $arsc_posting = str_replace("{user}", $arsc_user, $arsc_posting);
     $arsc_posting = str_replace("{message}", $arsc_message, $arsc_posting);
     $arsc_posting = str_replace("{sendtime}", substr($arsc_sendtime, 0, 5), $arsc_posting);
     $arsc_posting = str_replace("/me ", "", $arsc_posting);
    }
   }
   if (substr($arsc_message, 0, 6) == "/kick ")
   {
    $userpassive = str_replace("/kick ", "", $arsc_message);
    $result = mysql_query("SELECT room, level FROM arsc_users WHERE user = '$userpassive'", ARSC_PARAMETER_DB_LINK);
    $a = mysql_fetch_array($result);
    $result = mysql_query("SELECT room, level FROM arsc_users WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
    $b = mysql_fetch_array($result);
    if ($a["room"] == $b["room"] AND $arsc_api->checkCommandAllowed($b["level"], "kick") AND $b["level"] >= $a["level"])
    {
     mysql_query("UPDATE arsc_users SET level = -1 WHERE user = '$userpassive'", ARSC_PARAMETER_DB_LINK);
     mysql_query("DELETE FROM arsc_room_$arsc_room WHERE user = '$arsc_user' AND sendtime = '$arsc_sendtime' AND message = '$arsc_message'", ARSC_PARAMETER_DB_LINK);
     $arsc_message = "arsc_user_kicked~~".$arsc_user."~~".$userpassive;
     $arsc_sendtime = date("H:i:s");
     $arsc_timeid = arsc_microtime();
     mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
    }
   }
   if (substr($arsc_message, 0, 6) == "/bann ")
   {
    $userpassive = str_replace("/bann ", "", $arsc_message);
    $userpassive = substr($userpassive, 0, strpos($userpassive, " "));
    $duration = str_replace("/bann ".$userpassive." ", "", $arsc_message);
    $until = time() + $duration;
    $result = mysql_query("SELECT room, level, ip FROM arsc_users WHERE user = '$userpassive'", ARSC_PARAMETER_DB_LINK);
    $a = mysql_fetch_array($result);
    $result = mysql_query("SELECT room, level FROM arsc_users WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
    $b = mysql_fetch_array($result);
    if ($a["room"] == $b["room"] AND $arsc_api->checkCommandAllowed($b["level"], "bann") AND $b["level"] >= $a["level"])
    {
     mysql_query("INSERT INTO arsc_bannlist (ip, until) VALUES ('".$a["ip"]."', '$until')", ARSC_PARAMETER_DB_LINK);
     mysql_query("UPDATE arsc_users SET level = -1 WHERE user = '$userpassive'", ARSC_PARAMETER_DB_LINK);
     mysql_query("DELETE FROM arsc_room_$arsc_room WHERE user = '$arsc_user' AND sendtime = '$arsc_sendtime' AND message = '$arsc_message'", ARSC_PARAMETER_DB_LINK);
     $arsc_message = "arsc_user_kicked~~".$arsc_user."~~".$userpassive;
     $arsc_sendtime = date("H:i:s");
     $arsc_timeid = arsc_microtime();
     mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
    }
   }
   if (substr($arsc_message, 0, 6) == "/lock ")
   {
    // BTW: unlocking must be done via the admin interface...
    $userpassive = str_replace("/lock ", "", $arsc_message);
    $result = mysql_query("SELECT room, level FROM arsc_users WHERE user = '$userpassive'", ARSC_PARAMETER_DB_LINK);
    $a = mysql_fetch_array($result);
    $result = mysql_query("SELECT room, level FROM arsc_users WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
    $b = mysql_fetch_array($result);
    if ($a["room"] == $b["room"] AND $arsc_api->checkCommandAllowed($b["level"], "lock") AND $b["level"] >= $a["level"])
    {
     mysql_query("UPDATE arsc_users SET level = -1 WHERE user = '$userpassive'", ARSC_PARAMETER_DB_LINK);
     mysql_query("UPDATE arsc_registered_users SET flag_locked = 1 WHERE user = '$userpassive'", ARSC_PARAMETER_DB_LINK);
     mysql_query("DELETE FROM arsc_room_$arsc_room WHERE user = '$arsc_user' AND sendtime = '$arsc_sendtime' AND message = '$arsc_message'", ARSC_PARAMETER_DB_LINK);
     $arsc_message = "arsc_user_kicked~~".$arsc_user."~~".$userpassive;
     $arsc_sendtime = date("H:i:s");
     $arsc_timeid = arsc_microtime();
     mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
    }
   }
   if (substr($arsc_message, 0, 5) == "/rip ")
   {
    $userpassive = str_replace("/rip ", "", $arsc_message);
    $result = mysql_query("SELECT room, level, flag_ripped FROM arsc_users WHERE user = '$userpassive'", ARSC_PARAMETER_DB_LINK);
    $a = mysql_fetch_array($result);
    $result = mysql_query("SELECT room, level FROM arsc_users WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
    $b = mysql_fetch_array($result);
    if ($a["room"] == $b["room"] AND $arsc_api->checkCommandAllowed($b["level"], "rip") AND $a["flag_ripped"] == 0 AND $a["level"] <= $b["level"])
    {
     mysql_query("UPDATE arsc_users SET flag_ripped = 1 WHERE user = '$userpassive'", ARSC_PARAMETER_DB_LINK);
     mysql_query("DELETE FROM arsc_room_$arsc_room WHERE user = '$arsc_user' AND sendtime = '$arsc_sendtime' AND message = '$arsc_message'", ARSC_PARAMETER_DB_LINK);
     $arsc_message = "arsc_user_rip~~".$arsc_user."~~".$userpassive;
     $arsc_sendtime = date("H:i:s");
     $arsc_timeid = arsc_microtime();
     mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
    }
   }
   if (substr($arsc_message, 0, 7) == "/unrip ")
   {
    $userpassive = str_replace("/unrip ", "", $arsc_message);
    $result = mysql_query("SELECT room, level, flag_ripped FROM arsc_users WHERE user = '$userpassive'", ARSC_PARAMETER_DB_LINK);
    $a = mysql_fetch_array($result);
    $result = mysql_query("SELECT room, level FROM arsc_users WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
    $b = mysql_fetch_array($result);
    if ($a["room"] == $b["room"] AND $arsc_api->checkCommandAllowed($b["level"], "unrip") AND $a["flag_ripped"] == 1 AND $a["level"] <= $b["level"])
    {
     mysql_query("UPDATE arsc_users SET flag_ripped = 0 WHERE user = '$userpassive'", ARSC_PARAMETER_DB_LINK);
     mysql_query("DELETE FROM arsc_room_$arsc_room WHERE user = '$arsc_user' AND sendtime = '$arsc_sendtime' AND message = '$arsc_message'", ARSC_PARAMETER_DB_LINK);
     $arsc_message = "arsc_user_unrip~~".$arsc_user."~~".$userpassive;
     $arsc_sendtime = date("H:i:s");
     $arsc_timeid = arsc_microtime();
     mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
    }
   }
   if (substr($arsc_message, 0, 4) == "/op ")
   {
    $userpassive = str_replace("/op ", "", $arsc_message);
    $result = mysql_query("SELECT room, level FROM arsc_users WHERE user = '$userpassive'", ARSC_PARAMETER_DB_LINK);
    $a = mysql_fetch_array($result);
    $result = mysql_query("SELECT room, level FROM arsc_users WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
    $b = mysql_fetch_array($result);
    if ($a["room"] == $b["room"] AND $arsc_api->checkCommandAllowed($b["level"], "op") AND $a["level"] < 10)
    {
     mysql_query("UPDATE arsc_users SET level = 10 WHERE user = '$userpassive'", ARSC_PARAMETER_DB_LINK);
     mysql_query("DELETE FROM arsc_room_$arsc_room WHERE user = '$arsc_user' AND sendtime = '$arsc_sendtime' AND message = '$arsc_message'", ARSC_PARAMETER_DB_LINK);
     $arsc_message = "arsc_user_op~~".$arsc_user."~~".$userpassive;
     $arsc_sendtime = date("H:i:s");
     $arsc_timeid = arsc_microtime();
     mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
    }
   }
   if (substr($arsc_message, 0, 6) == "/deop ")
   {
    $userpassive = str_replace("/deop ", "", $arsc_message);
    $result = mysql_query("SELECT room, level FROM arsc_users WHERE user = '$userpassive'", ARSC_PARAMETER_DB_LINK);
    $a = mysql_fetch_array($result);
    $result = mysql_query("SELECT room, level FROM arsc_users WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
    $b = mysql_fetch_array($result);
    if ($a["room"] == $b["room"] AND $arsc_api->checkCommandAllowed($b["level"], "deop") AND $a["level"] <= $b["level"])
    {
     mysql_query("UPDATE arsc_users SET level = 0 WHERE user = '$userpassive'", ARSC_PARAMETER_DB_LINK);
     mysql_query("DELETE FROM arsc_room_$arsc_room WHERE user = '$arsc_user' AND sendtime = '$arsc_sendtime' AND message = '$arsc_message'", ARSC_PARAMETER_DB_LINK);
     $arsc_message = "arsc_user_deop~~".$arsc_user."~~".$userpassive;
     $arsc_sendtime = date("H:i:s");
     $arsc_timeid = arsc_microtime();
     mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
    }
   }
   if (substr($arsc_message, 0, 7) == "/whois ")
   {
    mysql_query("DELETE FROM arsc_room_$arsc_room WHERE user = '$arsc_user' AND sendtime = '$arsc_sendtime' AND message = '$arsc_message'", ARSC_PARAMETER_DB_LINK);
    $userpassive = str_replace("/whois ", "", $arsc_message);
    $result = mysql_query("SELECT level FROM arsc_users WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
    $b = mysql_fetch_array($result);
    if ($result = mysql_query("SELECT user, room, level, ip, language, version, flag_ripped FROM arsc_users WHERE user = '$userpassive'", ARSC_PARAMETER_DB_LINK))
    {
     $a = mysql_fetch_array($result);
    }
    if($b["level"] == 99) // Only the REAL admin may see passwords
    {
     if ($result = mysql_query("SELECT password, email, color, sex, location FROM arsc_registered_users WHERE user = '$userpassive'", ARSC_PARAMETER_DB_LINK))
     {
      $c = mysql_fetch_array($result);
     }
    }
    elseif ($result = mysql_query("SELECT email, color, sex, location FROM arsc_registered_users WHERE user = '$userpassive'", ARSC_PARAMETER_DB_LINK))
    {
     $c = mysql_fetch_array($result);
    }
    if ($arsc_api->checkCommandAllowed($b["level"], "whois") AND $a["level"] <= $b["level"] AND $a["room"] <> "")
    {
     $arsc_message = "/msg ".$arsc_user." ";
     while (list ($key, $val) = each ($a))
     {
      if (!is_numeric($key))
      {
       $arsc_message .= "<br>$key = $val";
      }
     }
     if ($c["password"] <> "")
     {
      while (list ($key, $val) = each ($c))
      {
       if (!is_numeric($key))
       {
        $arsc_message .= "<br>$key = $val";
       }
      }
     }
     $arsc_sendtime = date("H:i:s");
     $arsc_timeid = arsc_microtime();
     mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
     $arsc_message = "";
    }
   }
   if (substr($arsc_message, 0, 9) == "/userlist")
   {
    mysql_query("DELETE FROM arsc_room_$arsc_room WHERE user = '$arsc_user' AND sendtime = '$arsc_sendtime' AND message = '$arsc_message'", ARSC_PARAMETER_DB_LINK);
    $result = mysql_query("SELECT level FROM arsc_users WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
    $a = mysql_fetch_array($result);
    if ($arsc_api->checkCommandAllowed($a["level"], "userlist"))
    {
     $result = mysql_query("SELECT user, level FROM arsc_users WHERE room = '$arsc_room'", ARSC_PARAMETER_DB_LINK);
     $arsc_message = "/msg ".$arsc_user." ";
     while ($a = mysql_fetch_array($result))
     {
      $opstring = "";
      if ($a["level"] > 0)
      {
       $opstring = "@";
      }
      $arsc_message .= "[".$opstring.$a["user"]."] ";
     }
     $arsc_sendtime = date("H:i:s");
     $arsc_timeid = arsc_microtime();
     mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
     $arsc_message = "";
    }
   }
   if (substr($arsc_message, 0, 9) == "/roomlist")
   {
    mysql_query("DELETE FROM arsc_room_$arsc_room WHERE user = '$arsc_user' AND sendtime = '$arsc_sendtime' AND message = '$arsc_message'", ARSC_PARAMETER_DB_LINK);
    $result = mysql_query("SELECT level FROM arsc_users WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
    $a = mysql_fetch_array($result);
    if ($arsc_api->checkCommandAllowed($a["level"], "roomlist"))
    {
     $arsc_message = "/msg ".$arsc_user." ";
     $arsc_roomlist = $arsc_api->getReadableRoomlist();
     while (list($arsc_key, $arsc_val) = each($arsc_roomlist))
     {
      $arsc_message .= "[".$arsc_val."] ";
     }
     $arsc_sendtime = date("H:i:s");
     $arsc_timeid = arsc_microtime();
     mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
     $arsc_message = "";
    }
   }
   /* Better: adding a registered user with level 4
   if (substr($arsc_message, 0, 8) == "/selfop ")
   {
    $password = str_replace("/selfop ", "", $arsc_message);
    if ($password == ARSC_PARAMETER_SELFOP_PASSWORD)
    {
     mysql_query("UPDATE arsc_users SET level = 3 WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
     mysql_query("DELETE FROM arsc_room_$arsc_room WHERE message LIKE '/selfop%' AND user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
     $arsc_message = "arsc_user_selfop~~".$arsc_user;
     $arsc_sendtime = date("H:i:s");
     $arsc_timeid = arsc_microtime();
     mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
    }
   }
   */
   if (substr($arsc_message, 0, 5) == "/msg " AND $arsc_flag_ripped <> 1)
   {
    $userpassive = str_replace("/msg ", "", $arsc_message);
    $userpassive = substr($userpassive, 0, strpos($userpassive, " "));
    $result = mysql_query("SELECT level FROM arsc_users WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
    $b = mysql_fetch_array($result);
    if ($userpassive == $arsc_my["user"] AND (($arsc_my["level"] == 20 XOR $arsc_user <> "System") OR $arsc_my["level"] <> 20) AND $arsc_api->checkCommandAllowed($b["level"], "msg"))
    {
     mysql_query("DELETE FROM arsc_room_$arsc_room WHERE user = '$arsc_user' AND sendtime = '$arsc_sendtime' AND message = '$arsc_message'", ARSC_PARAMETER_DB_LINK);
     $arsc_message = str_replace("/msg ".$userpassive." ", "", $arsc_message);
     $arsc_posting = $arsc_template["msg"];
     $arsc_posting = str_replace("{sendtime}", substr($arsc_sendtime, 0, 5), $arsc_posting);
     $arsc_posting = str_replace("{user}", $arsc_user, $arsc_posting);
     $arsc_posting = str_replace("{whispers}", $arsc_lang["whispers"], $arsc_posting);
     $arsc_posting = str_replace("{message}", $arsc_message, $arsc_posting);
     $arsc_sendtime = date("H:i:s");
     $arsc_timeid = arsc_microtime();
     $arsc_message = "/msg ".$arsc_user." ".str_replace("{message}", $arsc_message, str_replace("{user}", $userpassive, $arsc_lang["gotmsg"]));
     mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
    }
   }
   if (substr($arsc_message, 0, 8) == "/msgops " AND $arsc_flag_ripped <> 1)
   {
    $arsc_message = str_replace("/msgops ", "", $arsc_message);
    if ($arsc_my["level"] >= 10)
    {
     $result = mysql_query("SELECT level FROM arsc_users WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
     $a = mysql_fetch_array($result);
     if ($arsc_api->checkCommandAllowed($a["level"], "msgops"))
     {
      $arsc_posting = $arsc_template["msgops"];
      $arsc_posting = str_replace("{sendtime}", substr($arsc_sendtime, 0, 5), $arsc_posting);
      $arsc_posting = str_replace("{user}", $arsc_user, $arsc_posting);
      $arsc_posting = str_replace("{whispersops}", $arsc_lang["whispersops"], $arsc_posting);
      $arsc_posting = str_replace("{message}", $arsc_message, $arsc_posting);
     }
     else
     {
      mysql_query("DELETE FROM arsc_room_$arsc_room WHERE user = '$arsc_user' AND sendtime = '$arsc_sendtime' AND message = '/msgops $arsc_message'", ARSC_PARAMETER_DB_LINK);
     }
    }
   }
   if (substr($arsc_message, 0, 7) == "/opcall" AND $arsc_flag_ripped <> 1)
   {
    if ($arsc_my["level"] >= 10)
    {
     $result = mysql_query("SELECT level FROM arsc_users WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
     $a = mysql_fetch_array($result);
     if ($arsc_api->checkCommandAllowed($a["level"], "opcall"))
     {
      $arsc_posting = $arsc_template["msgops"];
      $arsc_posting = str_replace("{sendtime}", substr($arsc_sendtime, 0, 5), $arsc_posting);
      $arsc_posting = str_replace("{user}", $arsc_user, $arsc_posting);
      $arsc_posting = str_replace("{whispersops}", $arsc_lang["whispersops"], $arsc_posting);
      $arsc_posting = str_replace("{message}", $arsc_lang["opcall"], $arsc_posting);
     }
     else
     {
      mysql_query("DELETE FROM arsc_room_$arsc_room WHERE user = '$arsc_user' AND sendtime = '$arsc_sendtime' AND message = '$arsc_message'", ARSC_PARAMETER_DB_LINK);
     }
    }
   }
   /* Vorerst sollte Hilfe �ber einen Link ein Popup �ffnen o.�.
   if (substr($arsc_message, 0, 5) == "/help" OR substr($arsc_message, 0, 2) == "/?")
   {
    $result = mysql_query("SELECT level, language FROM arsc_users WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
    $a = mysql_fetch_array($result);
    if($arsc_my["language"] == $a["language"])
    {
     $arsc_message = "/msg ".$arsc_user." ".$arsc_lang["help"];
     if ($a["level"] > 0)
     {
      $arsc_message .= $arsc_lang["helpop"];
     }
     $arsc_timeid = arsc_microtime();
     mysql_query("DELETE FROM arsc_room_$arsc_room WHERE message LIKE '/help%' OR message LIKE '/?%' AND user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
     mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
    }
   }
   */
   if (substr($arsc_message, 0, 8) == "/smilies")
   {
    $result = mysql_query("SELECT level FROM arsc_users WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
    $a = mysql_fetch_array($result);
    if ($arsc_api->checkCommandAllowed($a["level"], "smilies"))
    {
     reset($arsc_smilies);
     while(list($key, $val) = each($arsc_smilies))
     {
      $smilielist .= "\n".$val." ".substr($val, 0, 1)."#arsc_dummy_space#".substr($val, 1);
     }
     $arsc_message = "/msg ".$arsc_user." ".$smilielist;
     $arsc_timeid = arsc_microtime();
    }
    mysql_query("DELETE FROM arsc_room_$arsc_room WHERE message = '/smilies' AND user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
    mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
   }
   if (substr($arsc_message, 0, 3) == "/j ")
   {
    $arsc_new_room = $arsc_api->getInternalRoomname(str_replace("/j ", "", $arsc_message));
    $result = mysql_query("SHOW tables LIKE 'arsc_room_%'", ARSC_PARAMETER_DB_LINK);
    while ($a = mysql_fetch_array($result))
    {
     if (substr($a[0], 10) == $arsc_new_room)
     {
      mysql_query("DELETE FROM arsc_room_$arsc_room WHERE message = '$arsc_message' AND user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
      mysql_query("UPDATE arsc_users SET room = '$arsc_new_room' WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
      $arsc_sendtime = date("H:i:s");
      $arsc_timeid = arsc_microtime();
      $arsc_message = "arsc_user_quit~~".$arsc_user."~~".$arsc_api->getReadableRoomname($arsc_room);
      mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
      $arsc_message = "arsc_user_enter~~".$arsc_user."~~".$arsc_api->getReadableRoomname($arsc_new_room);
      mysql_query("INSERT into arsc_room_$arsc_new_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
      $arsc_message = "arsc_user_roomchange~~".$arsc_user."~~".$arsc_api->getReadableRoomname($arsc_room)."~~".$arsc_api->getReadableRoomname($arsc_new_room);
      mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
     }
    }
   }
   if (substr($arsc_message, 0, 6) == "/room ")
   {
    mysql_query("DELETE FROM arsc_room_$arsc_room WHERE message = '$arsc_message' AND user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
    $result = mysql_query("SELECT level FROM arsc_users WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
    $a = mysql_fetch_array($result);
    if ($arsc_api->checkCommandAllowed($a["level"], "room"))
    {
     if (eregi("#", $arsc_message))
     {
      $arsc_new_room = $arsc_api->getInternalRoomname(substr($arsc_message, 6, strpos($arsc_message, "#") - 7));
      $arsc_password = substr($arsc_message, strpos($arsc_message, "#"), 5);
     }
     else
     {
      $arsc_new_room = $arsc_api->getInternalRoomname(str_replace("/room ", "", $arsc_message));
      $arsc_password = "";
     }
     $result = mysql_query("SELECT roomname, password, type FROM arsc_rooms WHERE roomname = '$arsc_new_room'", ARSC_PARAMETER_DB_LINK);
     $a = mysql_fetch_array($result);
     if ($a["roomname"] == $arsc_new_room AND $a["password"] == $arsc_password AND $a["type"] <> "")
     {
      mysql_query("UPDATE arsc_users SET room = '$arsc_new_room' WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
      $arsc_result = mysql_query("SELECT owner FROM arsc_rooms WHERE roomname = '$arsc_room'", ARSC_PARAMETER_DB_LINK);
      $arsc_a = mysql_fetch_array($arsc_result);
      if ($arsc_a["owner"] == $arsc_user)
      {
       $arsc_result = mysql_query("SELECT COUNT(user) AS cnt FROM arsc_users WHERE room = '$arsc_room'", ARSC_PARAMETER_DB_LINK);
       $arsc_a = mysql_fetch_array($arsc_result);
       if ($arsc_a["cnt"] == 0)
       {
        mysql_query("DROP TABLE arsc_room_".$arsc_room, ARSC_PARAMETER_DB_LINK);
        mysql_query("DELETE FROM arsc_rooms WHERE roomname = '$arsc_room'", ARSC_PARAMETER_DB_LINK);
       }
      }
      $arsc_sendtime = date("H:i:s");
      $arsc_timeid = arsc_microtime();
      $arsc_message = "arsc_user_quit~~".$arsc_user."~~".$arsc_api->getReadableRoomname($arsc_room);
      mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
      $arsc_message = "arsc_user_enter~~".$arsc_user."~~".$arsc_api->getReadableRoomname($arsc_new_room);
      mysql_query("INSERT into arsc_room_$arsc_new_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
      $arsc_message = "arsc_user_roomchange~~".$arsc_user."~~".$arsc_api->getReadableRoomname($arsc_room)."~~".$arsc_api->getReadableRoomname($arsc_new_room);
      mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
     }
     else
     {
      if ($a["password"] <> $arsc_password)
      {
       $arsc_sendtime = date("H:i:s");
       $arsc_timeid = arsc_microtime();
       $arsc_message = "/msg ".$arsc_user." ".str_replace("{room}", $arsc_api->getReadableRoomname($arsc_new_room), $arsc_lang["room_wrong_password"]);
       mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
      }
      if ($a["roomname"] <> $arsc_new_room)
      {
       $arsc_sendtime = date("H:i:s");
       $arsc_timeid = arsc_microtime();
       $arsc_message = "/msg ".$arsc_user." ".str_replace("{room}", $arsc_api->getReadableRoomname($arsc_new_room), $arsc_lang["room_not_exist"]);
       mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
      }
     }
    }
   }
   if (substr($arsc_message, 0, 6) == "/move ")
   {
    $userpassive = str_replace("/move ", "", $arsc_message);
    $userpassive = substr($userpassive, 0, strpos($userpassive, " "));
    $arsc_new_room = $arsc_api->getInternalRoomname(str_replace("/move ".$userpassive." ", "", $arsc_message));
    $result = mysql_query("SELECT room, level FROM arsc_users WHERE user = '$userpassive'", ARSC_PARAMETER_DB_LINK);
    $a = mysql_fetch_array($result);
    $result = mysql_query("SELECT room, level FROM arsc_users WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
    $b = mysql_fetch_array($result);
    if ($arsc_api->checkCommandAllowed($b["level"], "move") AND $a["level"] <= $b["level"])
    {
     $result = mysql_query("SHOW tables LIKE 'arsc_room_%'", ARSC_PARAMETER_DB_LINK);
     while ($c = mysql_fetch_array($result))
     {
      if (substr($c[0], 10) == $arsc_new_room)
      {
       mysql_query("DELETE FROM arsc_room_$arsc_room WHERE message = '$arsc_message' AND user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
       mysql_query("UPDATE arsc_users SET room = '$arsc_new_room' WHERE user = '$userpassive'", ARSC_PARAMETER_DB_LINK);
       $arsc_sendtime = date("H:i:s");
       $arsc_timeid = arsc_microtime();
       $arsc_message = "arsc_user_quit~~".$userpassive."~~".$arsc_api->getReadableRoomname($a["room"]);
       mysql_query("INSERT into arsc_room_{$a["room"]} (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
       $arsc_message = "arsc_user_enter~~".$userpassive."~~".$arsc_api->getReadableRoomname($arsc_new_room);
       mysql_query("INSERT into arsc_room_$arsc_new_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
       $arsc_message = "arsc_user_roomchange~~".$userpassive."~~".$arsc_api->getReadableRoomname($a["room"])."~~".$arsc_api->getReadableRoomname($arsc_new_room);
       mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
      }
     }
    }
   }
   if (substr($arsc_message, 0, 7) == "/croom ")
   {
    mysql_query("DELETE FROM arsc_room_$arsc_room WHERE message = '$arsc_message' AND user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
    $result = mysql_query("SELECT level FROM arsc_users WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
    $a = mysql_fetch_array($result);
    if ($arsc_api->checkCommandAllowed($a["level"], "croom"))
    {
     $arsc_new_room = $arsc_api->getInternalRoomname(str_replace("/croom ", "", $arsc_message));
     $arsc_result = mysql_query("SELECT roomname FROM arsc_rooms WHERE roomname = '$arsc_new_room'", ARSC_PARAMETER_DB_LINK);
     $arsc_a = mysql_fetch_array($arsc_result);
     if ($arsc_a["roomname"] <> $arsc_new_room)
     {
      srand ((double)microtime()*1000000);
      $arsc_password = substr(md5(rand()), 0, 4);
      mysql_query("INSERT INTO arsc_rooms (roomname, owner, password) VALUES ('$arsc_new_room', '$arsc_user', '#".$arsc_password."')", ARSC_PARAMETER_DB_LINK);
      mysql_query("CREATE TABLE arsc_room_$arsc_new_room (id int(11) NOT NULL auto_increment,
                                                          message text NOT NULL,
                                                          user varchar(64) NOT NULL default '',
                                                          flag_ripped tinyint(4) NOT NULL default '0',
                                                          sendtime time NOT NULL default '00:00:00',
                                                          timeid bigint(20) NOT NULL default '0',
                                                          PRIMARY KEY (id),
                                                          KEY timeid (timeid)
                                                         )", ARSC_PARAMETER_DB_LINK);
      mysql_query("UPDATE arsc_users SET room = '$arsc_new_room' WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
      $arsc_sendtime = date("H:i:s");
      $arsc_timeid = arsc_microtime();
      $arsc_message = "arsc_user_croom~~".$arsc_user."~~".$arsc_new_room;
      mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
      $arsc_message = "arsc_user_roomchange~~".$arsc_user."~~".$arsc_api->getReadableRoomname($arsc_room)."~~".$arsc_api->getReadableRoomname($arsc_new_room);
      mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
      $arsc_timeid = arsc_microtime();
      $arsc_message = "/msg ".$arsc_user." ".str_replace("{room}", $arsc_api->getReadableRoomname($arsc_new_room), $arsc_lang["room_created"]);
      mysql_query("INSERT into arsc_room_$arsc_new_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
     }
     else
     {
      $arsc_sendtime = date("H:i:s");
      $arsc_timeid = arsc_microtime();
      $arsc_message = "/msg ".$arsc_user." ".str_replace("{room}", $arsc_api->getReadableRoomname($arsc_new_room), $arsc_lang["room_exists"]);
      mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
     }
    }
   }
   if (substr($arsc_message, 0, 8) == "/invite ")
   {
    mysql_query("DELETE FROM arsc_room_$arsc_room WHERE message = '$arsc_message' AND user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
    $result = mysql_query("SELECT level FROM arsc_users WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
    $a = mysql_fetch_array($result);
    if ($arsc_api->checkCommandAllowed($a["level"], "invite"))
    {
     $arsc_result = mysql_query("SELECT password FROM arsc_rooms WHERE owner = '$arsc_user' AND roomname = '$arsc_room'", ARSC_PARAMETER_DB_LINK);
     $arsc_a = mysql_fetch_array($arsc_result);
     $arsc_password = $arsc_a["password"];
     if ($arsc_password <> "")
     {
      $arsc_userpassive = str_replace("/invite ", "", $arsc_message);
      $arsc_result = mysql_query("SELECT room FROM arsc_users WHERE user = '$arsc_userpassive'", ARSC_PARAMETER_DB_LINK);
      $arsc_a = mysql_fetch_array($arsc_result);
      if ($arsc_a["room"] <> "")
      {
       $arsc_sendtime = date("H:i:s");
       $arsc_timeid = arsc_microtime();
       $arsc_message = "/msg ".$arsc_userpassive." ".str_replace("{user}", $arsc_user, str_replace("{password}", $arsc_password, str_replace("{room}", $arsc_api->getReadableRoomname($arsc_room), $arsc_lang["invite"])));
       mysql_query("INSERT INTO arsc_room_".$arsc_a["room"]." (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
      }
      else
      {
       $arsc_sendtime = date("H:i:s");
       $arsc_timeid = arsc_microtime();
       $arsc_message = "/msg ".$arsc_user." ".str_replace("{user}", $arsc_userpassive, $arsc_lang["invite_notexist"]);
       mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
      }
     }
     else
     {
      $arsc_sendtime = date("H:i:s");
      $arsc_timeid = arsc_microtime();
      $arsc_message = "/msg ".$arsc_user." ".$arsc_lang["invite_notownroom"];
      mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
     }
    }
   }
  }
  else
  {
   if ($arsc_flag_ripped <> 1)
   {
    $arsc_result = mysql_query("SELECT type FROM arsc_rooms WHERE roomname = '$arsc_room'", ARSC_PARAMETER_DB_LINK);
    $arsc_a = mysql_fetch_array($arsc_result);
    if ($arsc_a["type"] <> 2)
    {
     $arsc_posting = $arsc_template["normal"];
     $arsc_result = mysql_query("SELECT color FROM arsc_users WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
     $arsc_a = mysql_fetch_array($arsc_result);
     $arsc_posting = str_replace("{color}", $arsc_a["color"], $arsc_posting);
     $arsc_posting = str_replace("{sendtime}", substr($arsc_sendtime, 0, 5), $arsc_posting);
     $arsc_posting = str_replace("{user}", $arsc_user, $arsc_posting);
     $arsc_posting = str_replace("{message}", $arsc_message, $arsc_posting);
    }
    else
    {
     if ($arsc_my["level"] >= 30)
     {
      $arsc_posting = $arsc_template["normal"];
      $arsc_result = mysql_query("SELECT color FROM arsc_users WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
      $arsc_a = mysql_fetch_array($arsc_result);
      $arsc_posting = str_replace("{color}", $arsc_a["color"], $arsc_posting);
      $arsc_posting = str_replace("{sendtime}", substr($arsc_sendtime, 0, 5), $arsc_posting);
      $arsc_posting = str_replace("{user}", $arsc_user, $arsc_posting);
      $arsc_posting = str_replace("{message}", $arsc_message, $arsc_posting);
      $arsc_posting = str_replace("{sid}", $arsc_my["sid"], $arsc_posting);
      $arsc_posting = str_replace("{path}", ARSC_PARAMETER_REGISTER_HOMEPAGE."clients/shared/browser/", $arsc_posting);
      $arsc_posting = str_replace("{moderate_message}", urlencode($arsc_message), $arsc_posting);
      $arsc_posting = str_replace("{moderate_user}", urlencode($arsc_user), $arsc_posting);
     }
     else
     {
      if ($arsc_my["user"] == $arsc_user AND $arsc_my["level"] <> 20)
      {
       $arsc_posting = $arsc_template["normal"];
       $arsc_result = mysql_query("SELECT color FROM arsc_users WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
       $arsc_a = mysql_fetch_array($arsc_result);
       $arsc_posting = str_replace("{color}", $arsc_a["color"], $arsc_posting);
       $arsc_posting = str_replace("{sendtime}", substr($arsc_sendtime, 0, 5), $arsc_posting);
       $arsc_posting = str_replace("{user}", $arsc_user, $arsc_posting);
       $arsc_posting = str_replace("{message}", str_replace("{message}", $arsc_message, $arsc_lang["moderate_message"]), $arsc_posting);
      }
      else
      {
       $arsc_result = mysql_query("SELECT level FROM arsc_users WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
       $arsc_a = mysql_fetch_array($arsc_result);
       if ($arsc_a["level"] >= 10)
       {
        $arsc_posting = $arsc_template["normal"];
        $arsc_result = mysql_query("SELECT color FROM arsc_users WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
        $arsc_a = mysql_fetch_array($arsc_result);
        $arsc_posting = str_replace("{color}", $arsc_a["color"], $arsc_posting);
        $arsc_posting = str_replace("{sendtime}", substr($arsc_sendtime, 0, 5), $arsc_posting);
        $arsc_posting = str_replace("{user}", $arsc_user, $arsc_posting);
        $arsc_posting = str_replace("{message}", $arsc_message, $arsc_posting);
       }
      }
     }
    }
   }
  }
 }
 return $arsc_posting;
}

?>