<?php

include("config.inc.php");

$arsc_result = mysql_query("SELECT COUNT(*) as howmany from arsc_users WHERE user = '$arsc_user'");
$arsc_a = mysql_fetch_array($arsc_result);
if ($arsc_a["howmany"] > 0 OR $arsc_user == "System" OR $arsc_user == "system")
{
 header ("Location: home.php?arsc_error=double_user");
}
elseif ($arsc_user == "")
{
 header ("Location: home.php?arsc_error=no_name");
}
else
{
 $arsc_result = mysql_query("SELECT COUNT(*) as howmany from arsc_users WHERE room = '$arsc_room'");
 $arsc_a = mysql_fetch_array($arsc_result);
 if ($arsc_a["howmany"] == 0)
 {
  $arsc_level = 1;
 }
 else
 {
  $arsc_level = 0;
 }
 srand((double)microtime()*1000000);
 $arsc_sid = md5(rand(0,9999999));
 $arsc_ping = time();
 $arsc_ip = getenv("REMOTE_ADDR");
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
}
?>
