<?php

include("inc/config.inc.php");
include("inc/init.inc.php");
include("inc/functions.inc.php");
include("inc/inputvalidation.inc.php");

$arsc_language = arsc_validateinput($_POST["arsc_language"], $arsc_available_languages);
if ($arsc_language == "") $arsc_language = ARSC_PARAMETER_STANDARD_LANGUAGE;
if (!is_file("../languages/".$arsc_language.".inc.php")) arsc_error_log(ARSC_ERRORLEVEL_FATAL, "Could not open language file. Something is really messed up!", __FILE__, __LINE__);
$arsc_user = arsc_validateinput($_POST["arsc_user"], NULL, "/[^a-zA-Z0-9_]/", 0, 64);
$arsc_password = arsc_validateinput($_POST["arsc_user"], NULL, "/[^a-zA-Z0-9_]/", 0, 64);
$arsc_room = arsc_validateinput($_POST["arsc_room"], NULL, "/[^a-z0-9_]/", 0, 32);
$arsc_chatversion = arsc_validateinput($_POST["arsc_chatversion"], array("browser_push", "browser_socket"));
$arsc_template = arsc_validateinput($_POST["arsc_template"], array("html", "html_moderate", "xml")); // fixme: get available templates

$arsc_ip = getenv("REMOTE_ADDR");
$arsc_level = 0;
$arsc_color = "000000";

if ($arsc_user == "")
{
 header ("Location: home.php?arsc_error=no_name&arsc_language=".$arsc_language);
 die();
}
if (strstr($arsc_user, "<") OR strstr($arsc_user, ">"))
{
 header ("Location: home.php?arsc_error=bad_name&arsc_language=".$arsc_language);
 die();
}
$arsc_result = mysql_query("SELECT COUNT(*) as howmany from arsc_users WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
$arsc_a = mysql_fetch_array($arsc_result);
if ($arsc_a["howmany"] > 0 OR $arsc_user == "System" OR $arsc_user == "system" OR $arsc_user == "-1")
{
 header ("Location: home.php?arsc_error=double_user&arsc_language=".$arsc_language);
 die();
}
$arsc_result = mysql_query("SELECT COUNT(*) as howmany from arsc_registered_users WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
$arsc_a = mysql_fetch_array($arsc_result);
if ($arsc_a["howmany"] > 0)
{
 $arsc_result = mysql_query("SELECT COUNT(*) as howmany from arsc_registered_users WHERE user = '$arsc_user' AND password = '$arsc_password' AND flag_locked = '0'", ARSC_PARAMETER_DB_LINK);
 $arsc_a = mysql_fetch_array($arsc_result);
 if ($arsc_a["howmany"] <> 1 OR $arsc_user == "System" OR $arsc_user == "system")
 {
  header ("Location: home.php?arsc_error=wrong_credentials&arsc_language=".$arsc_language);
  die();
 }
 $arsc_result = mysql_query("SELECT level, color FROM arsc_registered_users WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
 $arsc_a = mysql_fetch_array($arsc_result);
 $arsc_level = $arsc_a["level"];
 $arsc_color = $arsc_a["color"];
}
elseif (ARSC_PARAMETER_REGISTER_FORCE == "yes")
{
 header ("Location: home.php?arsc_error=wrong_credentials&arsc_language=".$arsc_language);
 die();
}
$arsc_result = mysql_query("SELECT COUNT(*) as howmany from arsc_bannlist WHERE ip = '$arsc_ip' AND until > '".time()."'", ARSC_PARAMETER_DB_LINK);
$arsc_a = mysql_fetch_array($arsc_result);
if ($arsc_a["howmany"] > 0)
{
 header ("Location: home.php?arsc_error=banned&arsc_language=".$arsc_language);
 die();
}
else
{
 $arsc_result = mysql_query("SELECT COUNT(*) as howmany from arsc_users WHERE room = '$arsc_room'", ARSC_PARAMETER_DB_LINK);
 $arsc_a = mysql_fetch_array($arsc_result);
 if ($arsc_a["howmany"] == 0 AND ARSC_PARAMETER_FIRST_USER_GETS_OP == "yes" AND $arsc_level == 0)
 {
  $arsc_level = 10;
 }
 mt_srand((double)microtime()*1000000);
 $arsc_sid = sha1(mt_rand(0, mt_getrandmax()));
 $arsc_ping = time();
 // Some chars must be stripped out or replaced
 if ($arsc_chatversion == "applet")
 {
  header ("Location: ../clients/".$arsc_chatversion."/index.php?arsc_user=".urlencode($arsc_user)."&arsc_room=".urlencode($arsc_room)."&arsc_password=".urlencode($arsc_password)."&arsc_language=".urlencode($arsc_language));
  die();
 }
 $arsc_result = mysql_query("SELECT type FROM arsc_rooms WHERE roomname = '$arsc_room'", ARSC_PARAMETER_DB_LINK);
 $arsc_a = mysql_fetch_array($arsc_result);
 if ($arsc_a["type"] == 2 AND $arsc_level >= 30)
 {
  $arsc_template = "html_moderate";
 }
 mysql_query("INSERT into arsc_users (user, color, lastping, ip, room, language, level, sid, version, template) VALUES ('$arsc_user', '$arsc_color', '$arsc_ping', '$arsc_ip', '$arsc_room', '$arsc_language', '$arsc_level', '$arsc_sid', '$arsc_chatversion', '$arsc_template')", ARSC_PARAMETER_DB_LINK);
 header ("Location: ../clients/".$arsc_chatversion."/index.php?arsc_sid=".$arsc_sid."&arsc_enter=true");
 die();
}
?>
