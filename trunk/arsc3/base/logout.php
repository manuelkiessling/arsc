<?php

include("config.inc.php");
include("functions.inc.php");

if ($arsc_my = arsc_getdatafromsid($arsc_sid))
{
 mysql_query("DELETE from arsc_users WHERE sid = '$arsc_sid'", ARSC_PARAMETER_DB_LINK);
 if (!$arsc_post_logout == "false")
 {
  $arsc_user = $arsc_my["user"];
  $arsc_room = $arsc_my["room"];
  $arsc_nice_room = arsc_nice_room($arsc_room);
  $arsc_timeid = arsc_microtime();
  $arsc_sendtime = date("H:i:s");
  mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('arsc_user_quit~~$arsc_user~~$arsc_nice_room', 'System', '$arsc_sendtime', '$arsc_timeid')", ARSC_PARAMETER_DB_LINK);
 }
 header ("Location: home.php?arsc_language=".$arsc_my["language"]);
 die();
}
else
{
 header ("Location: index.php");
 die();
}

?>