<?php

include("inc/config.inc.php");
include("inc/init.inc.php");
include("inc/functions.inc.php");
include("inc/api.inc.php");
if(!is_file("../languages/".$arsc_language.".inc.php")) die("Invalid language");
include("../languages/".$arsc_language.".inc.php");

$arsc_api = new arsc_api_Class;

// Delete idle users
$arsc_timebuffer = time() - ARSC_PARAMETER_PING;
mysql_query("DELETE from arsc_users WHERE lastping < '$arsc_timebuffer' AND version <> 'text'", ARSC_PARAMETER_DB_LINK);
$arsc_timebuffer = time() - ARSC_PARAMETER_PING_TEXT;
mysql_query("DELETE from arsc_users WHERE lastping < '$arsc_timebuffer' AND version = 'text'", ARSC_PARAMETER_DB_LINK);
$arsc_result = mysql_query("SELECT user from arsc_users", ARSC_PARAMETER_DB_LINK);

// Delete empty private rooms
$arsc_result = mysql_query("SELECT roomname FROM arsc_rooms WHERE owner <> '-1'", ARSC_PARAMETER_DB_LINK);
while ($arsc_a = mysql_fetch_array($arsc_result))
{
 $arsc_result2 = mysql_query("SELECT COUNT(user) AS cnt FROM arsc_users WHERE room = '{$arsc_a["roomname"]}'", ARSC_PARAMETER_DB_LINK);
 $arsc_b = mysql_fetch_array($arsc_result2);
 if ($arsc_b["cnt"] == 0)
 {
  mysql_query("DROP TABLE arsc_room_".$arsc_a["roomname"], ARSC_PARAMETER_DB_LINK);
  mysql_query("DELETE FROM arsc_rooms WHERE roomname = '{$arsc_a["roomname"]}'", ARSC_PARAMETER_DB_LINK);
 }
}

$arsc_current["user"] = $arsc_user;
$arsc_current["error"] = $arsc_lang["error_".$arsc_error];
$arsc_current["language"] = $arsc_language;

echo $arsc_api->parseLayoutTemplate("home");

?>
