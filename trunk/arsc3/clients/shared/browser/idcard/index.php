<?php

include("../../../../base/inc/config.inc.php");
include("../../../../base/inc/init.inc.php");
include("../../../../base/inc/functions.inc.php");
include("../../../../base/inc/api.inc.php");

$arsc_api = new arsc_api_Class;

if ($arsc_my = $arsc_api->getUserValuesBySID($arsc_sid))
{
 if ($arsc_my["user"] == $arsc_user)
 {
  header("Location: admin.php?arsc_sid=".$arsc_sid);
  die();
 }
 else
 {
  header("Location: view.php?arsc_sid=".$arsc_sid."&arsc_user=".urlencode($arsc_user));
  die();
 }
}
?>