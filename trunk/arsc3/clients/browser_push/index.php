<?php

include("../../base/inc/config.inc.php");
include("../../base/inc/init.inc.php");
include("../../base/inc/functions.inc.php");
include("../../base/inc/api.inc.php");

$arsc_api = new arsc_api_Class;
$arsc_my = $arsc_api->getUserValuesBySID($arsc_sid);

if ($arsc_api->userIsValid($arsc_my["user"]))
{
 define("ARSC_PARAMETER_VIRTUALSERVERS_CURRENT", arsc_getVirtualServer($arsc_my["ip"]));
 echo $arsc_api->parseLayoutTemplate("browser_push_index", FALSE);
}
?>
