<?php

include("../../../base/inc/config.inc.php");
include("../../../base/inc/init.inc.php");
include("../../../base/inc/functions.inc.php");
include("../../../base/inc/api.inc.php");

$arsc_api = new arsc_api_Class;

$arsc_api->addTraffic("incoming", strlen($arsc_message));
if($arsc_api->handleReceivedMessage($arsc_sid, $arsc_message, "../../../"))
{
 if($arsc_chatversion == "header" OR $arsc_chatversion == "box")
 {
  header("Location: ../../".$arsc_chatversion."/chatinput.php?arsc_sid=".$arsc_sid);
  die();
 }
 elseif ($arsc_chatversion == "text")
 {
  header("Location: ../../".$arsc_chatversion."/index.php?arsc_sid=".$arsc_sid."&arsc_lastid=".$arsc_lastid);
  die();
 }
 header("Location: empty.php");
 die();
}
else
{
 header("Location: empty.php");
 die();
}

?>