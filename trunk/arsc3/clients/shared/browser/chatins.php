<?php

include("../../../base/inc/config.inc.php");
include("../../../base/inc/init.inc.php");
include("../../../base/inc/functions.inc.php");
include("../../../base/inc/inputvalidation.inc.php");
include("../../../base/inc/api.inc.php");

$arsc_api = new arsc_api_Class;

$arsc_api->addTraffic("incoming", strlen($arsc_message));
if ($arsc_my = $arsc_api->getUserValuesBySID(arsc_validateinput($_GET["arsc_sid"], NULL, "/[^a-z0-9]/", 40, 40)))
{
 /*
  Now this one is difficult: How can we filter user messages without being too restrictive?
  A whitelist filter is not possible - just think of all the Umlauts in all those languages in the world,
  or what if people chat about MySQL commands etc.?
  Thus, we will use a blacklist to filter out the nastiest things, and hope that mysql_escape_string does it's job.
 */
 //$arsc_message = arsc_validateinput(htmlentities($_GET["arsc_message"], ENT_NOQUOTES), NULL, "/[^a-zA-Z0-9_ \?!\^\*\{\}\(\)\[\]=,\.\$\-&;\"'\\\]/", 0, ARSC_PARAMETER_INPUT_MAXSIZE);
 $arsc_message = arsc_validateinput(htmlentities($_GET["arsc_message"], ENT_NOQUOTES), NULL, NULL, 0, ARSC_PARAMETER_INPUT_MAXSIZE);
 if (get_magic_quotes_gpc() == 1 OR get_magic_quotes_runtime() == 1)
 {
  $arsc_message = stripslashes($arsc_message);
 }
 if ($arsc_api->handleReceivedMessage($arsc_my["sid"], $arsc_message, "../../../"))
 {
  $arsc_chatversion = arsc_validateinput($_GET["arsc_chatversion"], array("browser_push", "socket", "header_js", "header", "box", "text"), NULL, NULL, NULL);
  if ($arsc_chatversion == "header" OR $arsc_chatversion == "box")
  {
   header("Location: ../../".$arsc_chatversion."/chatinput.php?arsc_sid=".$arsc_my["sid"]);
   die();
  }
  elseif ($arsc_chatversion == "text")
  {
   header("Location: ../../".$arsc_chatversion."/index.php?arsc_sid=".$arsc_my["sid"]."&arsc_lastid=".$arsc_lastid);
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
}

?>
