<?php

include("inc/config.inc.php");
include("inc/init.inc.php");
include("inc/functions.inc.php");
include("inc/inputvalidation.inc.php");
include("inc/api.inc.php");

$arsc_api = new arsc_api_Class;

if ($arsc_my = $arsc_api->getUserValuesBySID(arsc_validateinput($_GET["arsc_sid"], NULL, "/[^a-z0-9]/", 40, 40)))
{
 mysql_query("DELETE from arsc_users WHERE sid = '$arsc_sid'", ARSC_PARAMETER_DB_LINK);
 if (!$arsc_post_logout == "false")
 {
  $arsc_user = $arsc_my["user"];
  $arsc_room = $arsc_my["room"];
  $arsc_nice_room = $arsc_api->getReadableRoomname($arsc_room);
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
