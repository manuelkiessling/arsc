<?php

include("../../../base/inc/config.inc.php");
include("../../../base/inc/init.inc.php");
include("../../../base/inc/functions.inc.php");
include("../../../base/inc/api.inc.php");

$arsc_current_room = arsc_getvar("arsc_current_room");

$arsc_api = new arsc_api_Class;

if ($arsc_my = $arsc_api->getUserValuesBySID($arsc_sid))
{
 include("../../../languages/".$arsc_my["language"].".inc.php");

 if ($arsc_api->userIsValid($arsc_my["user"]))
 {
  $arsc_room = $arsc_my["room"];
  if (isset($arsc_enter))
  {
   $arsc_api->postMessage($arsc_my["room"], "arsc_user_enter~~".$arsc_my["user"]."~~".$arsc_api->getReadableRoomname($arsc_my["room"]), "System", date("H:i:s"), arsc_microtime(), 0);
  }
  $arsc_api->deleteIdleUsers();

  header("Expires: Wed, 4 Oct 1978 09:32:45 GMT");
  header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache");
  header("Content-Type: text/html");
  header("Refresh: ".ARSC_PARAMETER_USERLIST_REFRESH."; URL=userlist.php?arsc_sid=".$arsc_sid."&arsc_current_room=".$arsc_my["room"]."&arsc_language=".$arsc_my["language"]);

  if($arsc_current_room <> "" AND $arsc_current_room <> $arsc_my["room"]) $arsc_current["reloadallframes"] = 1; else $arsc_current["reloadallframes"] = 0;

  echo $arsc_api->parseLayoutTemplate("userlist");
 }
 else
 {
  $arsc_current["user_got_kicked"] = 1;
  echo $arsc_api->parseLayoutTemplate("userlist");
 }
}
else
{
 $arsc_current["user_got_kicked"] = 1;
 echo $arsc_api->parseLayoutTemplate("userlist");
}
?>