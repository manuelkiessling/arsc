<?php

// Ah, the big thing.
// This function returns the correct posting depending on wether it is a system message, a command is used etc.

function arsc_filter_posting($arsc_user, $arsc_sendtime, $arsc_message, $arsc_room, $arsc_flag_ripped)
{
 GLOBAL $arsc_parameters,
        $arsc_parameters_smilies,
        $arsc_lang,
        $arsc_my;

 if ($arsc_user == "System" AND strstr($arsc_message, "~~"))
 {
  // We have a system message
  $arsc_sysmsg = explode("~~", $arsc_message);
  switch($arsc_sysmsg[0])
  {
   case "arsc_user_enter":
                          $arsc_posting = $arsc_lang["enter"];
                          $arsc_posting = str_replace("{user}", "</i>".$arsc_sysmsg[1]."<i>", $arsc_posting);
                          $arsc_posting = str_replace("{room}", "</i>".$arsc_sysmsg[2]."<i>", $arsc_posting);
                          $arsc_posting = str_replace("{sendtime}", substr($arsc_sendtime, 0, 5), str_replace("{message}", $arsc_posting, $arsc_parameters["template_system"]));
                          break;
   case "arsc_user_quit":
                          $arsc_posting = $arsc_lang["quit"];
                          $arsc_posting = str_replace("{user}", "</i>".$arsc_sysmsg[1]."<i>", $arsc_posting);
                          $arsc_posting = str_replace("{room}", "</i>".$arsc_sysmsg[2]."<i>", $arsc_posting);
                          $arsc_posting = str_replace("{sendtime}", substr($arsc_sendtime, 0, 5), str_replace("{message}", $arsc_posting, $arsc_parameters["template_system"]));
                          break;
   case "arsc_user_kicked":
                          $arsc_posting = $arsc_lang["kicked"];
                          $arsc_posting = str_replace("{useractive}", "</i>".$arsc_sysmsg[1]."<i>", $arsc_posting);
                          $arsc_posting = str_replace("{userpassive}", "</i>".$arsc_sysmsg[2]."<i>", $arsc_posting);
                          $arsc_posting = str_replace("{sendtime}", substr($arsc_sendtime, 0, 5), str_replace("{message}", $arsc_posting, $arsc_parameters["template_system"]));
                          break;
   case "arsc_user_op":
                          $arsc_posting = $arsc_lang["op"];
                          $arsc_posting = str_replace("{useractive}", "</i>".$arsc_sysmsg[1]."<i>", $arsc_posting);
                          $arsc_posting = str_replace("{userpassive}", "</i>".$arsc_sysmsg[2]."<i>", $arsc_posting);
                          $arsc_posting = str_replace("{sendtime}", substr($arsc_sendtime, 0, 5), str_replace("{message}", $arsc_posting, $arsc_parameters["template_system"]));
                          break;
   case "arsc_user_deop":
                          $arsc_posting = $arsc_lang["deop"];
                          $arsc_posting = str_replace("{useractive}", "</i>".$arsc_sysmsg[1]."<i>", $arsc_posting);
                          $arsc_posting = str_replace("{userpassive}", "</i>".$arsc_sysmsg[2]."<i>", $arsc_posting);
                          $arsc_posting = str_replace("{sendtime}", substr($arsc_sendtime, 0, 5), str_replace("{message}", $arsc_posting, $arsc_parameters["template_system"]));
                          break;
   case "arsc_user_roomchange":
                          if ($arsc_my["level"] > 0)
                          {
                           $arsc_posting = $arsc_lang["roomchange"];
                           $arsc_posting = str_replace("{user}", "</i>".$arsc_sysmsg[1]."<i>", $arsc_posting);
                           $arsc_posting = str_replace("{room1}", "</i>".$arsc_sysmsg[2]."<i>", $arsc_posting);
                           $arsc_posting = str_replace("{room2}", "</i>".$arsc_sysmsg[3]."<i>", $arsc_posting);
                           $arsc_posting = str_replace("{sendtime}", substr($arsc_sendtime, 0, 5), str_replace("{message}", $arsc_posting, $arsc_parameters["template_system"]));
                          }
                          break;
  }
 }
 else
 {
  // We have a command or normal posting
  if (substr($arsc_message, 0, 1) == "/")
  {
   // We have a command
   if (substr($arsc_message, 0, 4) == "/me ")
   {
    $arsc_posting = $arsc_parameters["template_me"];
    $arsc_posting = str_replace("{user}", $arsc_user, $arsc_posting);
    $arsc_posting = str_replace("{message}", $arsc_message, $arsc_posting);
    $arsc_posting = str_replace("{sendtime}", substr($arsc_sendtime, 0, 5), $arsc_posting);
    $arsc_posting = str_replace("/me ", "", $arsc_posting);
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
     $arsc_timeid = arsc_microtime();
     mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
    }
   }
   if (substr($arsc_message, 0, 6) == "/bann ")
   {
    $userpassive = str_replace("/bann ", "", $arsc_message);
    $userpassive = substr($userpassive, 0, strpos($userpassive, " "));
    $duration = str_replace("/bann ".$userpassive." ", "", $arsc_message);
    $until = time() + $duration;
    $result = mysql_query("SELECT room, level, ip from arsc_users WHERE user = '$userpassive'");
    $a = mysql_fetch_array($result);
    $result = mysql_query("SELECT room, level from arsc_users WHERE user = '$arsc_user'");
    $b = mysql_fetch_array($result);
    if ($a["room"] == $b["room"] AND $b["level"] > 0 AND $b["level"] >= $a["level"])
    {
     mysql_query("INSERT INTO arsc_bannlist (ip, until) VALUES ('".$a["ip"]."', '$until')");
     mysql_query("UPDATE arsc_users SET level = -1 WHERE user = '$userpassive'");
     mysql_query("DELETE from arsc_room_$arsc_room WHERE user = '$arsc_user' AND sendtime = '$arsc_sendtime' AND message = '$arsc_message'");
     $arsc_message = "arsc_user_kicked~~".$arsc_user."~~".$userpassive;
     $arsc_sendtime = date("H:i:s");
     $arsc_timeid = arsc_microtime();
     mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
    }
   }
   if (substr($arsc_message, 0, 6) == "/lock ")
   {
    // BTW: unlocking must be done via the admin interface...
    $userpassive = str_replace("/lock ", "", $arsc_message);
    $result = mysql_query("SELECT room, level from arsc_users WHERE user = '$userpassive'");
    $a = mysql_fetch_array($result);
    $result = mysql_query("SELECT room, level from arsc_users WHERE user = '$arsc_user'");
    $b = mysql_fetch_array($result);
    if ($a["room"] == $b["room"] AND $b["level"] > 0 AND $b["level"] >= $a["level"])
    {
     mysql_query("UPDATE arsc_users SET level = -1 WHERE user = '$userpassive'");
     mysql_query("UPDATE arsc_registered_users SET flag_locked = 1 WHERE user = '$userpassive'");
     mysql_query("DELETE from arsc_room_$arsc_room WHERE user = '$arsc_user' AND sendtime = '$arsc_sendtime' AND message = '$arsc_message'");
     $arsc_message = "arsc_user_kicked~~".$arsc_user."~~".$userpassive;
     $arsc_sendtime = date("H:i:s");
     $arsc_timeid = arsc_microtime();
     mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
    }
   }
   if (substr($arsc_message, 0, 5) == "/rip ")
   {
    $userpassive = str_replace("/rip ", "", $arsc_message);
    if ($userpassive == "*")
    {
     $result = mysql_query("SELECT level, room FROM arsc_users WHERE user = '$arsc_user'");
     $a = mysql_fetch_array($result);
     mysql_query("UPDATE arsc_users SET flag_ripped = 1 WHERE level = 0 AND level < ".$a["level"]." AND room = '".$a["room"]."'");
     mysql_query("DELETE FROM arsc_room_$arsc_room WHERE user = '$arsc_user' AND sendtime = '$arsc_sendtime' AND message = '$arsc_message'");
    }
    else
    {
     $result = mysql_query("SELECT room, level, flag_ripped from arsc_users WHERE user = '$userpassive'");
     $a = mysql_fetch_array($result);
     $result = mysql_query("SELECT room, level from arsc_users WHERE user = '$arsc_user'");
     $b = mysql_fetch_array($result);
     if ($a["room"] == $b["room"] AND $b["level"] > 0 AND $a["flag_ripped"] == 0 AND $a["level"] <= $b["level"])
     {
      mysql_query("UPDATE arsc_users SET flag_ripped = 1 WHERE user = '$userpassive'");
      mysql_query("DELETE from arsc_room_$arsc_room WHERE user = '$arsc_user' AND sendtime = '$arsc_sendtime' AND message = '$arsc_message'");
      $arsc_message = "arsc_user_rip~~".$arsc_user."~~".$userpassive;
      $arsc_sendtime = date("H:i:s");
      $arsc_timeid = arsc_microtime();
      mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
     }
    }
   }
   if (substr($arsc_message, 0, 7) == "/unrip ")
   {
    $userpassive = str_replace("/unrip ", "", $arsc_message);
    if ($userpassive == "*")
    {
     $result = mysql_query("SELECT level, room FROM arsc_users WHERE user = '$arsc_user'");
     $a = mysql_fetch_array($result);
     mysql_query("UPDATE arsc_users SET flag_ripped = 0 WHERE level = 0 AND level < ".$a["level"]." AND room = '".$a["room"]."'");
     mysql_query("DELETE FROM arsc_room_$arsc_room WHERE user = '$arsc_user' AND sendtime = '$arsc_sendtime' AND message = '$arsc_message'");
    }
    else
    {
     $result = mysql_query("SELECT room, level, flag_ripped from arsc_users WHERE user = '$userpassive'");
     $a = mysql_fetch_array($result);
     $result = mysql_query("SELECT room, level from arsc_users WHERE user = '$arsc_user'");
     $b = mysql_fetch_array($result);
     if ($a["room"] == $b["room"] AND $b["level"] > 0 AND $a["flag_ripped"] == 1 AND $a["level"] <= $b["level"])
     {
      mysql_query("UPDATE arsc_users SET flag_ripped = 0 WHERE user = '$userpassive'");
      mysql_query("DELETE from arsc_room_$arsc_room WHERE user = '$arsc_user' AND sendtime = '$arsc_sendtime' AND message = '$arsc_message'");
      $arsc_message = "arsc_user_unrip~~".$arsc_user."~~".$userpassive;
      $arsc_sendtime = date("H:i:s");
      $arsc_timeid = arsc_microtime();
      mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
     }
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
     $arsc_timeid = arsc_microtime();
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
     $arsc_timeid = arsc_microtime();
     mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
    }
   }
   if (substr($arsc_message, 0, 7) == "/whois ")
   {
    mysql_query("DELETE from arsc_room_$arsc_room WHERE user = '$arsc_user' AND sendtime = '$arsc_sendtime' AND message = '$arsc_message'");
    $userpassive = str_replace("/whois ", "", $arsc_message);
    if ($result = mysql_query("SELECT user, room, level, ip, language, version, flag_ripped from arsc_users WHERE user = '$userpassive'"))
    {
     $a = mysql_fetch_array($result);
    }
    if($result = mysql_query("SELECT password, email from arsc_registered_users WHERE user = '$userpassive'"))
    {
     $c = mysql_fetch_array($result);
    }
    $result = mysql_query("SELECT level from arsc_users WHERE user = '$arsc_user'");
    $b = mysql_fetch_array($result);
    if ($b["level"] > 0 AND $a["level"] <= $b["level"] AND $a["room"] <> "")
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
     mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
     $arsc_message = "";
    }
   }
   if (substr($arsc_message, 0, 9) == "/userlist")
   {
    mysql_query("DELETE from arsc_room_$arsc_room WHERE user = '$arsc_user' AND sendtime = '$arsc_sendtime' AND message = '$arsc_message'");
    $result = mysql_query("SELECT user, level from arsc_users WHERE room = '$arsc_room'");
    $arsc_message = "/msg ".$arsc_user." ";
    while ($a = mysql_fetch_array($result))
    {
     $opstring = "";
     if ($a["level"] > 0)
     {
      $opstring = "@";
     }
     $arsc_message .= "&lt;".$opstring.$a["user"]."&gt; ";
    }
    $arsc_sendtime = date("H:i:s");
    $arsc_timeid = arsc_microtime();
    mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
    $arsc_message = "";
   }
   if (substr($arsc_message, 0, 9) == "/roomlist")
   {
    mysql_query("DELETE from arsc_room_$arsc_room WHERE user = '$arsc_user' AND sendtime = '$arsc_sendtime' AND message = '$arsc_message'");
    $result = mysql_query("SHOW tables LIKE 'arsc_room_%'");
    $arsc_message = "/msg ".$arsc_user." ";
    while ($a = mysql_fetch_array($result))
    {
     $opstring = "";
     if ($a["level"] > 0)
     {
      $opstring = "@";
     }
     $arsc_message .= "[".$opstring.substr($a[0], 10)."] ";
    }
    $arsc_sendtime = date("H:i:s");
    $arsc_timeid = arsc_microtime();
    mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
    $arsc_message = "";
   }
   if (substr($arsc_message, 0, 8) == "/selfop ")
   {
    $password = str_replace("/selfop ", "", $arsc_message);
    if ($password == $arsc_parameters["selfop_password"])
    {
     mysql_query("UPDATE arsc_users SET level = 2 WHERE user = '$arsc_user'");
     mysql_query("DELETE from arsc_room_$arsc_room WHERE message LIKE '/selfop%' AND user = '$arsc_user'");
     $arsc_message = "arsc_user_selfop~~".$arsc_user;
     $arsc_sendtime = date("H:i:s");
     $arsc_timeid = arsc_microtime();
     mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
    }
   }
   if (substr($arsc_message, 0, 7) == "/color ")
   {
    $color = str_replace("/color ", "", $arsc_message);
    mysql_query("UPDATE arsc_users SET color = '$color' WHERE user = '$arsc_user'");
    mysql_query("DELETE from arsc_room_$arsc_room WHERE message = '$arsc_message' AND user = '$arsc_user'");
   }
   if (substr($arsc_message, 0, 5) == "/msg " AND $arsc_flag_ripped <> 1)
   {
    $userpassive = str_replace("/msg ", "", $arsc_message);
    $userpassive = substr($userpassive, 0, strpos($userpassive, " "));
    $arsc_message = str_replace("/msg ".$userpassive." ", "", $arsc_message);
    if ($userpassive == $arsc_my["user"])
    {
     $arsc_posting = $arsc_parameters["template_msg"];
     $arsc_posting = str_replace("{sendtime}", substr($arsc_sendtime, 0, 5), $arsc_posting);
     $arsc_posting = str_replace("{user}", $arsc_user, $arsc_posting);
     $arsc_posting = str_replace("{whispers}", $arsc_lang["whispers"], $arsc_posting);
     $arsc_posting = str_replace("{message}", $arsc_message, $arsc_posting);
     $arsc_sendtime = date("H:i:s");
     $arsc_timeid = arsc_microtime();
     $arsc_message = "/msg ".$arsc_user." ".str_replace("{message}", $arsc_message, str_replace("{user}", $userpassive, $arsc_lang["gotmsg"]));
     mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
    }
   }
   if (substr($arsc_message, 0, 8) == "/msgops " AND $arsc_flag_ripped <> 1)
   {
    $arsc_message = str_replace("/msgops ", "", $arsc_message);
    if ($arsc_my["level"] > 0)
    {
     $result = mysql_query("SELECT level from arsc_users WHERE user = '$arsc_user'");
     $a = mysql_fetch_array($result);
     if ($a["level"] > 0)
     {
      $arsc_posting = $arsc_parameters["template_msgops"];
      $arsc_posting = str_replace("{sendtime}", substr($arsc_sendtime, 0, 5), $arsc_posting);
      $arsc_posting = str_replace("{user}", $arsc_user, $arsc_posting);
      $arsc_posting = str_replace("{whispersops}", $arsc_lang["whispersops"], $arsc_posting);
      $arsc_posting = str_replace("{message}", $arsc_message, $arsc_posting);
     }
     else
     {
      mysql_query("DELETE from arsc_room_$arsc_room WHERE user = '$arsc_user' AND sendtime = '$arsc_sendtime' AND message = '/msgops $arsc_message'");
     }
    }
   }
   if (substr($arsc_message, 0, 5) == "/help" OR substr($arsc_message, 0, 2) == "/?")
   {
    $result = mysql_query("SELECT level, language from arsc_users WHERE user = '$arsc_user'");
    $a = mysql_fetch_array($result);
    if($arsc_my["language"] == $a["language"])
    {
     $arsc_message = "/msg ".$arsc_user." ".$arsc_lang["help"];
     if ($a["level"] > 0)
     {
      $arsc_message .= $arsc_lang["helpop"];
     }
     $arsc_timeid = arsc_microtime();
     mysql_query("DELETE from arsc_room_$arsc_room WHERE message LIKE '/help%' OR message LIKE '/?%' AND user = '$arsc_user'");
     mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
    }
   }
   if (substr($arsc_message, 0, 8) == "/smilies")
   {
    reset($arsc_parameters_smilies);
    while(list($key, $val) = each($arsc_parameters_smilies))
    {
     $smilielist .= "<br>".$val."&nbsp;&nbsp;&nbsp;</i>".substr($val, 0, 1)."<b></b>".substr($val, 1)."<i>";
    }
    $arsc_message = "/msg ".$arsc_user." ".$smilielist;
    $arsc_timeid = arsc_microtime();
    mysql_query("DELETE from arsc_room_$arsc_room WHERE message = '/smilies' AND user = '$arsc_user'");
    mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
   }
   if (substr($arsc_message, 0, 3) == "/j ")
   {
    $arsc_new_room = arsc_denice_room(str_replace("/j ", "", $arsc_message));
    $result = mysql_query("SHOW tables LIKE 'arsc_room_%'");
    while ($a = mysql_fetch_array($result))
    {
     if (substr($a[0], 10) == $arsc_new_room)
     {
      mysql_query("DELETE from arsc_room_$arsc_room WHERE message = '$arsc_message' AND user = '$arsc_user'");
      mysql_query("UPDATE arsc_users SET room = '$arsc_new_room' WHERE user = '$arsc_user'");
      $arsc_sendtime = date("H:i:s");
      $arsc_timeid = arsc_microtime();
      $arsc_message = "arsc_user_quit~~".$arsc_user."~~".arsc_nice_room($arsc_room);
      mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
      $arsc_message = "arsc_user_enter~~".$arsc_user."~~".arsc_nice_room($arsc_new_room);
      mysql_query("INSERT into arsc_room_$arsc_new_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
      $arsc_message = "arsc_user_roomchange~~".$arsc_user."~~".arsc_nice_room($arsc_room)."~~".arsc_nice_room($arsc_new_room);
      mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
     }
    }
   }
   if (substr($arsc_message, 0, 6) == "/room ")
   {
    $arsc_new_room = arsc_denice_room(str_replace("/room ", "", $arsc_message));
    $result = mysql_query("SHOW tables LIKE 'arsc_room_%'");
    while ($a = mysql_fetch_array($result))
    {
     if (substr($a[0], 10) == $arsc_new_room)
     {
      mysql_query("DELETE from arsc_room_$arsc_room WHERE message = '$arsc_message' AND user = '$arsc_user'");
      mysql_query("UPDATE arsc_users SET room = '$arsc_new_room' WHERE user = '$arsc_user'");
      $arsc_sendtime = date("H:i:s");
      $arsc_timeid = arsc_microtime();
      $arsc_message = "arsc_user_quit~~".$arsc_user."~~".arsc_nice_room($arsc_room);
      mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
      $arsc_message = "arsc_user_enter~~".$arsc_user."~~".arsc_nice_room($arsc_new_room);
      mysql_query("INSERT into arsc_room_$arsc_new_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
      $arsc_message = "arsc_user_roomchange~~".$arsc_user."~~".arsc_nice_room($arsc_room)."~~".arsc_nice_room($arsc_new_room);
      mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
     }
    }
   }
   if (substr($arsc_message, 0, 6) == "/move ")
   {
    $userpassive = str_replace("/move ", "", $arsc_message);
    $userpassive = substr($userpassive, 0, strpos($userpassive, " "));
    $arsc_new_room = arsc_denice_room(str_replace("/move ".$userpassive." ", "", $arsc_message));
    $result = mysql_query("SELECT room, level from arsc_users WHERE user = '$userpassive'");
    $a = mysql_fetch_array($result);
    $result = mysql_query("SELECT room, level from arsc_users WHERE user = '$arsc_user'");
    $b = mysql_fetch_array($result);
    if ($b["level"] > 0 AND $a["level"] <= $b["level"])
    {
     $result = mysql_query("SHOW tables LIKE 'arsc_room_%'");
     while ($c = mysql_fetch_array($result))
     {
      if (substr($c[0], 10) == $arsc_new_room)
      {
       mysql_query("DELETE from arsc_room_$arsc_room WHERE message = '$arsc_message' AND user = '$arsc_user'");
       mysql_query("UPDATE arsc_users SET room = '$arsc_new_room' WHERE user = '$userpassive'");
       $arsc_sendtime = date("H:i:s");
       $arsc_timeid = arsc_microtime();
       $arsc_message = "arsc_user_quit~~".$userpassive."~~".arsc_nice_room($a["room"]);
       mysql_query("INSERT into arsc_room_{$a["room"]} (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
       $arsc_message = "arsc_user_enter~~".$userpassive."~~".arsc_nice_room($arsc_new_room);
       mysql_query("INSERT into arsc_room_$arsc_new_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
       $arsc_message = "arsc_user_roomchange~~".$userpassive."~~".arsc_nice_room($a["room"])."~~".arsc_nice_room($arsc_new_room);
       mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
      }
     }
    }
   }
  }
  else
  {
   if ($arsc_flag_ripped <> 1)
   {
    if ($arsc_parameters["allow_textformatting"] == "yes")
    {
     if (substr($arsc_message, 0, 1) == "*")
     {
      $arsc_message = "<i>".substr($arsc_message, 1)."</i>";
     }
     elseif (substr($arsc_message, 0, 1) == "_")
     {
      $arsc_message = "<b>".substr($arsc_message, 1)."</b>";
     }
    }
    $arsc_posting = $arsc_parameters["template_normal"];
    $arsc_result = mysql_query("SELECT color FROM arsc_users WHERE user = '$arsc_user'"); 
    $arsc_a = mysql_fetch_array($arsc_result);
    $arsc_posting = str_replace("{color}", $arsc_a["color"], $arsc_posting); 
    $arsc_posting = str_replace("{sendtime}", substr($arsc_sendtime, 0, 5), $arsc_posting);
    $arsc_posting = str_replace("{user}", $arsc_user, $arsc_posting);
    $arsc_posting = str_replace("{message}", $arsc_message, $arsc_posting);
   }
  }
 }
 if ($arsc_parameters["smilies"] == "yes")
 {
  reset($arsc_parameters_smilies);
  $arsc_posting = arsc_smilies_replace($arsc_posting, $arsc_parameters_smilies, $arsc_parameters["smilies_path"]);
 }
 return $arsc_posting;
}

?>