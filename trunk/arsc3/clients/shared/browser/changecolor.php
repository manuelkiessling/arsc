<?php

include("../../../base/inc/config.inc.php");
include("../../../base/inc/init.inc.php");
include("../../../base/inc/functions.inc.php");
include("../../../base/inc/api.inc.php");

$arsc_api = new arsc_api_Class;

if ($arsc_my = $arsc_api->getUserValuesBySID($arsc_sid))
{
 if ($arsc_api->userIsValid($arsc_my["user"]) AND $arsc_api->checkCommandAllowed($arsc_my["level"], "color"))
 {
  mysql_query("UPDATE arsc_users SET color = '".mysql_escape_string($arsc_color)."' WHERE sid = '".mysql_escape_string($arsc_sid)."'", ARSC_PARAMETER_DB_LINK);
  mysql_query("UPDATE arsc_registered_users SET color = '".mysql_escape_string($arsc_color)."' WHERE user = '".mysql_escape_string($arsc_my["user"])."'", ARSC_PARAMETER_DB_LINK);
 }
 header("Location: ".getenv("HTTP_REFERER"));
 die();
}
?>
