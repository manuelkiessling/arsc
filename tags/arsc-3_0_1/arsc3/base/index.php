<?php

include("inc/config.inc.php");
include("inc/init.inc.php");
include("inc/functions.inc.php");
include("inc/api.inc.php");

$arsc_api = new arsc_api_Class;

include("../languages/english.inc.php");
$arsc_current["chooseyourlanguage"] = $arsc_lang["chooseyourlanguage"];
$arsc_current["next"] = $arsc_lang["next"];

// Get browser-accepted languages
$arsc_accepted_languages = explode(",", getenv("HTTP_ACCEPT_LANGUAGE"));
$handle = opendir("../languages");
while ($file = readdir($handle))
{ 
 if ($file != "." AND $file != ".." AND substr($file, -8) == ".inc.php")
 { 
  include("../languages/".$file);
  $arsc_language = str_replace(".inc.php", "", $file);
  $arsc_language_name = $arsc_lang_name[$arsc_language];
  if (is_array($arsc_lang_regions[$arsc_language]))
  {
   $arsc_selected = "";
   if (in_array($arsc_accepted_languages[0], $arsc_lang_regions[$arsc_language]))
   {
    $arsc_selected = " selected";
    $arsc_current["chooseyourlanguage"] = $arsc_lang["chooseyourlanguage"];
    $arsc_current["next"] = $arsc_lang["next"];
   }
  }
  $arsc_options .= '<option value="'.$arsc_language.'"'.$arsc_selected.'>'.$arsc_language_name.'</option>';
 } 
}
$arsc_current["languageselection"] = '
<select name="arsc_language">
 '.$arsc_options.'
</select>
';
closedir($handle);
$arsc_current["version"] = ARSC_VERSION;

echo $arsc_api->parseLayoutTemplate("languageselection");

?>
