<?php

include("config.inc.php");
include("functions.inc.php");

$arsc_ip = getenv("REMOTE_ADDR");
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
$arsc_result = mysql_query("SELECT COUNT(*) as howmany from arsc_users WHERE user = '$arsc_user'");
$arsc_a = mysql_fetch_array($arsc_result);
if ($arsc_a["howmany"] > 0 OR $arsc_user == "System" OR $arsc_user == "system")
{
 header ("Location: home.php?arsc_error=double_user&arsc_language=".$arsc_language);
 die();
}
$arsc_result = mysql_query("SELECT COUNT(*) as howmany from arsc_registered_users WHERE user = '$arsc_user'");
$arsc_a = mysql_fetch_array($arsc_result);
if ($arsc_a["howmany"] > 0)
{
 $arsc_result = mysql_query("SELECT COUNT(*) as howmany from arsc_registered_users WHERE user = '$arsc_user' AND password = '$arsc_password' AND flag_locked = '0'");
 $arsc_a = mysql_fetch_array($arsc_result);
 if ($arsc_a["howmany"] <> 1 OR $arsc_user == "System" OR $arsc_user == "system")
 {
  header ("Location: home.php?arsc_error=wrong_credentials&arsc_language=".$arsc_language);
  die();
 }
}
elseif ($arsc_parameters["register_force"] == "yes")
{
 header ("Location: home.php?arsc_error=wrong_credentials&arsc_language=".$arsc_language);
 die();
}
$arsc_result = mysql_query("SELECT COUNT(*) as howmany from arsc_bannlist WHERE ip = '$arsc_ip' AND until > '".time()."'");
$arsc_a = mysql_fetch_array($arsc_result);
if ($arsc_a["howmany"] > 0)
{
 header ("Location: home.php?arsc_error=banned&arsc_language=".$arsc_language);
 die();
}
else
{
 $arsc_result = mysql_query("SELECT COUNT(*) as howmany from arsc_users WHERE room = '$arsc_room'");
 $arsc_a = mysql_fetch_array($arsc_result);
 if ($arsc_a["howmany"] == 0 AND $arsc_parameters["first_user_gets_op"] == "yes")
 {
  $arsc_level = 1;
 }
 else
 {
  $arsc_level = 0;
 }
 mt_srand((double)microtime()*1000000);
 $arsc_sid = md5(mt_rand(0, mt_getrandmax()));
 $arsc_ping = time();
 // Some chars must be stripped out or replaced
 $arsc_user = ereg_replace("\\\\\'", "", $arsc_user);
 $arsc_user = ereg_replace("\\\\\"", "", $arsc_user);
 $arsc_user = ereg_replace("\\\\", "", $arsc_user);
 $arsc_user = ereg_replace("&", "", $arsc_user);
 $arsc_user = ereg_replace("\?", "", $arsc_user);
 $arsc_user = ereg_replace("~", "", $arsc_user);
 $arsc_user = ereg_replace("#", "", $arsc_user);
 $arsc_user = ereg_replace(" ", "_", $arsc_user);
 mysql_query("INSERT into arsc_users (user, lastping, ip, room, language, level, sid, version) VALUES ('$arsc_user', '$arsc_ping', '$arsc_ip', '$arsc_room', '$arsc_language', '$arsc_level', '$arsc_sid', '$arsc_chatversion')");
 header ("Location: version_".$arsc_chatversion."/index.php?arsc_sid=".$arsc_sid."&arsc_enter=true");
 die();
}
?>