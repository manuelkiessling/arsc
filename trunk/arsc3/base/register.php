<?php

include("inc/config.inc.php");
include("inc/init.inc.php");
include("inc/functions.inc.php");
include("inc/api.inc.php");
include("inc/browserdetect.inc.php");
if (!is_file("../languages/".$arsc_language.".inc.php")) die("Invalid language");
include("../languages/".$arsc_language.".inc.php");

$arsc_email = arsc_getvar("arsc_email");
$arsc_send = arsc_getvar("arsc_send");

$arsc_api = new arsc_api_Class;

if ($arsc_send == "")
{
 $arsc_current["error"] = $arsc_lang["error_".$arsc_error];
 $arsc_current["language"] = $arsc_language;

 echo $arsc_api->parseLayoutTemplate("register");
}
else
{
 $arsc_result = mysql_query("SELECT COUNT(*) as howmany FROM arsc_registered_users WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
 $arsc_a = mysql_fetch_array($arsc_result);
 if ($arsc_a["howmany"] == 0)
 {
  $arsc_location = "Location: home.php?arsc_language=".$arsc_language."&arsc_user=".$arsc_user;
  mail($arsc_email, str_replace("{title}", ARSC_PARAMETER_TITLE, $arsc_lang["register_emailtemplate_subject"]), str_replace("{chatowner}", ARSC_PARAMETER_REGISTER_OWNER, str_replace("{homepage}", ARSC_PARAMETER_REGISTER_HOMEPAGE, str_replace("{password}", $arsc_password, str_replace("{username}", $arsc_user, str_replace("{title}", ARSC_PARAMETER_TITLE, $arsc_lang["register_emailtemplate"]))))), "From: ".ARSC_PARAMETER_REGISTER_OWNER_EMAIL);
  mysql_query("INSERT INTO arsc_registered_users (user, password, email) VALUES ('$arsc_user', '$arsc_password', '$arsc_email')", ARSC_PARAMETER_DB_LINK);
  header($arsc_location);
  die();
 }
 else
 {
  header("Location: register.php?arsc_email=".$arsc_email."&arsc_language=".$arsc_language."&arsc_error=register_double_user");
  die();
 }
}
?>
