<?php

include("../config.inc.php");
include("../functions.inc.php");

$arsc_my = arsc_getdatafromsid($arsc_sid);
if ($arsc_my["level"] >= 0)
{
 $arsc_room = $arsc_my["room"];
 $arsc_user = $arsc_my["user"];
 $arsc_result = mysql_query("SELECT COUNT(*) as howmany from arsc_room_$arsc_room");
 $arsc_a = mysql_fetch_array($arsc_result);
 if ($arsc_a["howmany"] > $arsc_param["rowlimit"])
 {
  $arsc_row_difference = $arsc_a["howmany"] - $arsc_param["rowlimit"] - 1;
  $arsc_result = mysql_query("SELECT timeid from arsc_room_$arsc_room ORDER BY timeid ASC LIMIT $arsc_row_difference, 1");
  $arsc_result_array = mysql_fetch_array($arsc_result);
  $arsc_delete_id = $arsc_result_array["timeid"];
  mysql_query("DELETE from arsc_room_$arsc_room WHERE timeid < '$arsc_delete_id'");
 }

 $arsc_sendtime = date("H:i:s");
 $arsc_timeid = arsc_microtime();
 $arsc_message = strip_tags($arsc_message);
 $arsc_message = ereg_replace("'", "&acute;", $arsc_message);
 if ($arsc_message <> "")
 {
  $arsc_result = mysql_query("SELECT user, room, flood_count, flood_lastmessage from arsc_users WHERE sid = '$arsc_sid'");
  $arsc_a = mysql_fetch_array($arsc_result);
  if ($arsc_a["flood_lastmessage"] == $arsc_message)
  {
   if ($arsc_a["flood_count"] > $arsc_param["flood_max"])
   {
    $arsc_room = $arsc_a["room"];
    $arsc_message = "arsc_user_kicked~~System~~".$arsc_a["user"];
    $arsc_sendtime = date("H:i:s");
    $arsc_timeid = arsc_microtime();
    mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
    mysql_query("DELETE from arsc_users WHERE sid = '$arsc_sid'");
    header("Location: empty.php");
    die();
   }
   $arsc_a["flood_count"]++;
   mysql_query("UPDATE arsc_users SET flood_count = '{$arsc_a["flood_count"]}' WHERE sid = '$arsc_sid'");
  }
  else
  {
   mysql_query("UPDATE arsc_users SET flood_lastmessage = '$arsc_message', flood_count = '0' WHERE sid = '$arsc_sid'");
  }
  mysql_query("INSERT into arsc_room_$arsc_room (message, user, flag_ripped, sendtime, timeid) VALUES ('$arsc_message', '$arsc_user', '{$arsc_my["flag_ripped"]}', '$arsc_sendtime', '$arsc_timeid')");
 }
 if ($arsc_chatversion == "header" OR $arsc_chatversion == "box")
 {
  header("Location: ../version_".$arsc_chatversion."/chatinput.php?arsc_sid=".$arsc_sid);
 }
 else if ($arsc_chatversion == "text")
 {
  header("Location: ../version_".$arsc_chatversion."/index.php?arsc_sid=".$arsc_sid."&arsc_lastid=".$arsc_lastid);
  die();
 }
 else
 {
  header("Location: empty.php");
  die();
 }
}
else
{
 echo $arsc_htmlhead_out;
}
?>