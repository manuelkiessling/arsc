<?php

function arsc_validateinput($source, $allowedvalues, $filter = NULL, $minlenght = 0, $maxlenght = ARSC_PARAMETER_USERINPUTMAXLENGHT)
{
 if(is_array($allowedvalues))
 {
  if(!in_array($source, $allowedvalues))
  {
   arsc_error_log(ARSC_ERRORLEVEL_WARN, "Value '".$source."' is not in the given array of allowed values.");
   return "";
  }
  else
  {
   return $source;
  }
 }
 else
 {
  if(strlen($source) < $minlenght OR strlen($source) > $maxlenght)
  {
   arsc_error_log(ARSC_ERRORLEVEL_WARN, "Value '".$source."' is out of range, must be > ".$minlenght.", < ".$maxlenght.".");
   return "";
  }
  else
  {
   if($filter != NULL)
   {
    if(preg_match($filter, $source))
    {
     arsc_error_log(ARSC_ERRORLEVEL_WARN, "Value '".$source."' could not be filtered through '".$filter."'.");
     return "";
    }
    else
    {
     return $source;
    }
   }
  }
 }
}

/*
$arsc_error = arsc_validateinput($_GET["arsc_error"], "/^[a-zA-Z0-9\.!\?]/", 0, 128);
$arsc_user = arsc_validateinput($_POST["arsc_user"], "/^[a-zA-Z0-9_\-]/", 0, 64);
$arsc_password = arsc_validateinput($_POST["arsc_password"], "/^[a-zA-Z0-9_\-]/", 0, 20);
$arsc_room = arsc_validateinput($_POST["arsc_room"], "/^[a-z0-9_\-]/", 1, 20);
$arsc_chatversion = arsc_validateinput($_POST["arsc_chatversion"], "/^[a-zA-Z0-9_\-]/", 0, 10);
$arsc_template = arsc_validateinput($_POST["arsc_template"], "/^[a-zA-Z0-9_\-]/", 0, 30);
$arsc_message = arsc_validateinput($_POST["arsc_message"], NULL, 1, 400);
$arsc_pretext = arsc_validateinput($_POST["arsc_pretext"], NULL, 0, 200);
$arsc_color = arsc_validateinput($_POST["arsc_pretext"], "/^[0-9]/", 6, 6);
*/

?>
