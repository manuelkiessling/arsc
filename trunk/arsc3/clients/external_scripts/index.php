<?php

include("../../base/inc/config.inc.php");
include("../../base/inc/init.inc.php");
include("../../base/inc/functions.inc.php");
include("../../base/inc/api.inc.php");
include("../../base/inc/inputvalidation.inc.php");

include("../../base/inc/message_preprocessing.inc.php");

$arsc_api = new arsc_api_Class;

$arsc_room = arsc_validateinput($_GET["arsc_room"], NULL, "/[^a-z0-9_\-]/", 0, ARSC_PARAMETER_INPUT_MAXSIZE, __FILE__, __LINE__);
$arsc_message = arsc_validateinput($_GET["arsc_message"], NULL, NULL, 0, ARSC_PARAMETER_INPUT_MAXSIZE, __FILE__, __LINE__);
$arsc_user = arsc_validateinput($_GET["arsc_user"], NULL, "/[^a-zA-Z0-9_\-]/", 0, ARSC_PARAMETER_INPUT_MAXSIZE, __FILE__, __LINE__);
$arsc_message = arsc_message_preprocessing($arsc_message, $arsc_room, $arsc_api->getRoomType($arsc_room));
if (get_magic_quotes_gpc() == 1 OR get_magic_quotes_runtime() == 1)
{
 $arsc_message = stripslashes($arsc_message);
}

$arsc_api->postMessage($arsc_room, $arsc_message, $arsc_user, date("H:i:s"), arsc_microtime(), 0, 0);

?>
