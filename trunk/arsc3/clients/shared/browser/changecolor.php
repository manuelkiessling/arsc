<?php

include("../../../base/inc/config.inc.php");
include("../../../base/inc/init.inc.php");
include("../../../base/inc/functions.inc.php");
include("../../../base/inc/inputvalidation.inc.php");
include("../../../base/inc/api.inc.php");

$arsc_api = new arsc_api_Class;


if ($arsc_my = $arsc_api->getUserValuesBySID(arsc_validateinput($_GET["arsc_sid"], NULL, "/[^a-z0-9]/", 40, 40)))
{
 if ($arsc_api->userIsValid($arsc_my["user"]) AND $arsc_api->checkCommandAllowed($arsc_my["level"], "color"))
 {
  $arsc_color = arsc_validateinput($_GET["arsc_color"], NULL, "/[^A-F0-9]/", 6, 6);
  mysql_query("UPDATE arsc_users SET color = '".mysql_escape_string($arsc_color)."' WHERE sid = '".mysql_escape_string($arsc_my["sid"])."'", ARSC_PARAMETER_DB_LINK);
  mysql_query("UPDATE arsc_registered_users SET color = '".mysql_escape_string($arsc_color)."' WHERE user = '".mysql_escape_string($arsc_my["user"])."'", ARSC_PARAMETER_DB_LINK);
 }
 header("Location: ".getenv("HTTP_REFERER"));
 die();
}
?>
