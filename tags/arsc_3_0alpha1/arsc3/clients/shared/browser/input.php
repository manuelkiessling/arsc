<?php

include("../../../base/inc/config.inc.php");
include("../../../base/inc/init.inc.php");
include("../../../base/inc/functions.inc.php");
include("../../../base/inc/api.inc.php");
include("../../../base/inc/filter.inc.php");

$arsc_api = new arsc_api_Class;

if ($arsc_my = $arsc_api->getUserValuesBySID($arsc_sid))
{
 include("../../../languages/".$arsc_my["language"].".inc.php");
 
 if ($arsc_api->userIsValid($arsc_my["user"]))
 {
  echo $arsc_api->parseLayoutTemplate("input");
 }
}
?>