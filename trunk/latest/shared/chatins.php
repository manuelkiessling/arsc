<?php

include ("../config.inc.php");

$arsc_my = getdatafromsid($arsc_sid);
if ($arsc_my["level"] >= 0)
{
 $arsc_room = $arsc_my["room"];
 $arsc_user = $arsc_my["user"];
 $arsc_result = mysql_query("SELECT COUNT(*) as howmany from arsc_room_$arsc_room");
 $arsc_a = mysql_fetch_array($arsc_result);
 if ($arsc_a["howmany"] > $arsc_rowlimit)
 {
  $arsc_result = mysql_query("SELECT id from arsc_room_$arsc_room ORDER BY timeid ASC LIMIT 0,0");
  $arsc_anf = mysql_fetch_array($arsc_result);
  $arsc_tanf = $arsc_anf["id"];
  $arsc_result = mysql_query("SELECT id from arsc_room_$arsc_room ORDER BY timeid ASC LIMIT 1,1");
  $arsc_ende = mysql_fetch_array($arsc_result);
  $arsc_tend = $arsc_ende["id"];
  mysql_query("DELETE from arsc_room_$arsc_room WHERE id > '$arsc_tanf' AND id < '$arsc_tend'");
 }

 $arsc_sendtime = date("H:i:s");
 $arsc_timeid = my_microtime();
 $arsc_message = strip_tags($arsc_message, "<b>,<i>,<u>");
 $arsc_message = ereg_replace("'", "&acute;", $arsc_message);
 if ($arsc_message <> "")
 {
  mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', '$arsc_user', '$arsc_sendtime', '$arsc_timeid')");
 }
 if ($arsc_chatversion == "header")
 {
  header("Location: ../version_".$arsc_chatversion."/chatinput.php?arsc_sid=".$arsc_sid);
 }
 else if ($arsc_chatversion == "text")
 {
  header("Location: ../version_".$arsc_chatversion."/index.php?arsc_sid=".$arsc_sid."&arsc_lastid=".$arsc_lastid);
 }
 else
 {
  header("Location: empty.html");
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