<?php

include("../../../../base/inc/config.inc.php");
include("../../../../base/inc/init.inc.php");
include("../../../../base/inc/functions.inc.php");
include("../../../../base/inc/api.inc.php");

$arsc_save_sex = arsc_getvar("arsc_save_sex");
$arsc_save_location = arsc_getvar("arsc_save_location");
$arsc_save_color = arsc_getvar("arsc_save_color");
$arsc_save_hobbies = arsc_getvar("arsc_save_hobbies");
$arsc_save_flag_guestbook = arsc_getvar("arsc_save_flag_guestbook");
if (!is_numeric($arsc_save_flag_guestbook)) die("Invalid type");

$arsc_api = new arsc_api_Class;

if ($arsc_my = $arsc_api->getUserValuesBySID($arsc_sid))
{
 $arsc_api->userIsValid($arsc_my["user"]);
 include("../../../../languages/".$arsc_my["language"].".inc.php");
 if (mysql_query("UPDATE arsc_registered_users SET sex = '$arsc_save_sex', location = '$arsc_save_location', color = '$arsc_save_color', hobbies = '".substr($arsc_save_hobbies, 0, 250)."', flag_guestbook = '$arsc_save_flag_guestbook' WHERE user = '".$arsc_my["user"]."'", ARSC_PARAMETER_DB_LINK))
 {
  header("Location: admin.php?arsc_sid=".$arsc_sid."&arsc_message=".urlencode($arsc_lang["idcard_save_ok"]."<br>"));
 }
 else
 {
  header("Location: admin.php?arsc_sid=".$arsc_sid."&arsc_message=".urlencode($arsc_lang["idcard_save_no"]."<br>"));
 }
}
else
{
 header("Location: ../empty.php");
 die();
}

?>
