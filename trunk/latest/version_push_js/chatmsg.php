<?php

function arsc_shutdown()
{
 GLOBAL $arsc_sid,
        $arsc_my;
 if ($arsc_my["user"] <> "")
 {
  $arsc_user = $arsc_my["user"];
  $arsc_room = $arsc_my["room"];
  $arsc_nice_room = nice_room($arsc_room);
  $arsc_timeid = my_microtime();
  $arsc_sendtime = date("H:i:s");
  mysql_query("DELETE from arsc_users WHERE sid = '$arsc_sid'");
  mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('arsc_user_quit~~$arsc_user~~$arsc_nice_room', 'System', '$arsc_sendtime', '$arsc_timeid')");
 }
}

register_shutdown_function("arsc_shutdown");

include ("../config.inc.php");
if ($arsc_my = getdatafromsid($arsc_sid))
{
 include("../shared/language/".find_language($arsc_my["user"]).".inc.php");
 
 function strrepeat($input, $mult)
 {
  $ret = "";
  while ($mult > 0)
  {
   $ret .= $input;
   $mult --;
  }
  return $ret;
 }
 
 $arsc_room = $arsc_my["room"];
 if ($arsc_lastid == "")
 {
  $arsc_result = mysql_query("SELECT * from arsc_room_$arsc_room ORDER BY timeid DESC");
  $arsc_b = mysql_fetch_array($arsc_result);
  $arsc_lastid = $arsc_b["timeid"];
 }
 
 echo $html_header_js;
 
 set_magic_quotes_runtime(0);
 set_time_limit(0);
 $arsc_sendtime = date("H:i:s");
 $arsc_timeid = my_microtime();
 $arsc_message = "/msg ".$arsc_my["user"]." ".$arsc_lang_welcome;
 echo filter_posting("System", $arsc_sendtime, $arsc_message, $arsc_room);
 $i = 0;
 while(!connection_aborted())
 {
  $arsc_result = mysql_query("SELECT * from arsc_room_$arsc_room ORDER BY timeid DESC");
  $arsc_b = mysql_fetch_array($arsc_result);
  if ($arsc_lastid == "")
  {
   $arsc_lastid = $arsc_b["timeid"];
  }
  $arsc_lastid_save = $arsc_b["timeid"];
  $arsc_my = getdatafromsid($arsc_sid);
  if ($arsc_my["level"] < 0)
  {
   switch($arsc_my["level"])
   {
    case "-1": echo filter_posting("System", date("H:i:s"), "<font size=4><b>".$arsc_lang_youwerekicked."</b></font>", $arsc_room);
               mysql_query("DELETE from arsc_users WHERE sid = '$arsc_sid'");
               break;
   }
   break;
  }
  
  $i++;
  $arsc_result = mysql_query("SELECT * from arsc_room_$arsc_room WHERE timeid > '$arsc_lastid' ORDER BY timeid ASC, id ASC");
  while ($arsc_a = mysql_fetch_array($arsc_result))
  {
   $arsc_posting = filter_posting($arsc_a["user"], $arsc_a["sendtime"], $arsc_a["message"], $arsc_room);
   echo "$arsc_posting";
  }
  $arsc_lastid = $arsc_lastid_save;
  $arsc_ping = time();
  $arsc_ip = getenv("REMOTE_ADDR");
  mysql_query("UPDATE arsc_users SET lastping = '$arsc_ping', ip = '$arsc_ip' WHERE sid = '$arsc_sid'");
  echo " ";
  flush();
  usleep(500000);
  flush();
  flush();
  flush();
  flush();
  flush();
  // just to be sure :)
 }
}
else
{
 ?>
  <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
  <html>
   <head>
    <title>
     You are out!
    </title>
   </head>
   <body bgcolor="#DDDDDD">
   </body>
  </html>
 <?php
}
?>
