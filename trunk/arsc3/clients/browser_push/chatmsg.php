<?php

if (ini_get("safe_mode") == 0) set_time_limit(0);
set_magic_quotes_runtime(0);
ob_end_flush();

include("../../base/inc/config.inc.php");
include("../../base/inc/init.inc.php");
include("../../base/inc/functions.inc.php");
include("../../base/inc/inputvalidation.inc.php");
include("../../base/inc/api.inc.php");
include("../../base/inc/filter.inc.php");

$arsc_api = new arsc_api_Class;
register_shutdown_function("arsc_shutdown");

function arsc_shutdown()
{
 GLOBAL $arsc_api, $arsc_my;
 $arsc_api->removeUserFromRoom($arsc_my);
}

function arsc_getmessages($arsc_sid)
{
 GLOBAL $arsc_api,
        $arsc_smilies,
        $arsc_lang,
        $arsc_my;

 if ($arsc_my = $arsc_api->getUserValuesBySID($arsc_sid))
 {
  if (!$arsc_api->userIsValid($arsc_my["user"]))
  {
   $arsc_api->removeUserFromRoom($arsc_my);
  }
  else
  {
   $arsc_posting = "\n";
   $arsc_lastmessageping = $arsc_api->getUserValueByName("lastmessageping", $arsc_my["user"]);
   if ($arsc_lastmessageping == 0)
   {
    // fixme: time() des aktuellen nachricht ermitteln
    $arsc_api->setUserValueByName("lastmessageping", 1, $arsc_my["user"]);
   }
   else
   {
    $arsc_messages = $arsc_api->getMessages($arsc_lastmessageping, $arsc_my["room"], $arsc_my["template"]);
    if ($arsc_messages[0] <> "")
    {
     $arsc_posting .= $arsc_messages[0];
    }
    if ($arsc_messages[1] <> "") $arsc_api->setUserValueByName("lastmessageping", $arsc_messages[2], $arsc_my["user"]);
   }
   $arsc_posting = str_replace("#ret#", "\n", $arsc_posting);
   if ($arsc_posting <> "\n")
   {
    if (ARSC_PARAMETER_SMILIES == "yes" AND $arsc_api->checkCommandAllowed($arsc_my["level"], "smilies"))
    {
     reset($arsc_smilies);
     $arsc_posting = arsc_smilies_replace($arsc_posting, $arsc_smilies, ARSC_PARAMETER_SMILIES_PATH);
    }
   }
   return str_replace("#arsc_dummy_space#", "", $arsc_posting);
  }
 }
}

if ($arsc_my = $arsc_api->getUserValuesBySID(arsc_validateinput($_GET["arsc_sid"], NULL, "/[^a-z0-9]/", 40, 40, __FILE__, __LINE__)))
{
 include("../../languages/".$arsc_my["language"].".inc.php");
 if ($arsc_api->userIsValid($arsc_my["user"]))
 {
  $arsc_compatibility_hack = "";
  if(eregi("Safari", getenv("HTTP_USER_AGENT")))
  {
   $arsc_compatibility_hack = str_repeat(" ", 1000);
  }
  echo ARSC_PARAMETER_HTMLHEAD_JS;
  $arsc_template_varname = "arsc_template_".$arsc_my["template"];
  echo arsc_filter_posting("System", date("H:i:s"), "/msg ".$arsc_my["user"]." ".str_replace("{title}", ARSC_PARAMETER_TITLE, $arsc_lang["welcome"]), $arsc_my["room"], 0, 0, 0, $$arsc_template_varname);
  if(ARSC_PARAMETER_WELCOME_MESSAGE <> "") echo arsc_filter_posting("System", date("H:i:s"), "/msg ".$arsc_my["user"]." ".ARSC_PARAMETER_WELCOME_MESSAGE, $arsc_my["room"], 0, 0, 0, $$arsc_template_varname);
  flush();
  while (!connection_aborted())
  {
   $arsc_api->setUserValueByName("lastping", time(), $arsc_my["user"]);
   $arsc_messages = arsc_getmessages($arsc_my["sid"]).$arsc_compatibility_hack;
   if (trim($arsc_messages) == "")
   {
    srand((double)microtime()*1000000);
    if(rand(0, 10) == 0)
    {
     echo $arsc_messages;
     flush();
    }
   }
   else
   {
    echo $arsc_messages;
    flush();
   }
   usleep(ARSC_PARAMETER_REFRESH);
  }
 }
}

?>
