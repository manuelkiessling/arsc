<?php

include("../../../base/inc/config.inc.php");
include("../../../base/inc/init.inc.php");
include("../../../base/inc/functions.inc.php");
include("../../../base/inc/api.inc.php");

$arsc_api = new arsc_api_Class;

if ($arsc_my = $arsc_api->getUserValuesBySID($arsc_sid))
{
 $arsc_api->userIsValid($arsc_my["user"]);
 include("../../../languages/".$arsc_my["language"].".inc.php");
 $arsc_layout = $arsc_api->getBasicLayoutValues();
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
 <html>
  <head>
   <title>
    <?php echo $arsc_lang["helplink"]." - ".ARSC_PARAMETER_TITLE; ?>
   </title>
  </head>
  <body text="#FFFFFF" link="#EEEEEE" vlink="#DDDDDD" bgcolor="<?php echo $arsc_layout["default_background_color"]; ?>">
   <div align="justify">
    <font face="<?php echo $arsc_layout["default_font_face"]; ?>" size="<?php echo $arsc_layout["default_font_size"]; ?>" color="#<?php echo $arsc_layout["default_font_color"]; ?>">
     <?php
     echo nl2br($arsc_lang["help"]);
     if ($arsc_my["level"] > 0)
     {
      echo "<br>\n<br>\n".nl2br($arsc_lang["helpop"]);
     }
     ?>
    </font>
   </div>
  </body>
 </html>
 <?php
} 
else
{
 header("Location: ../empty.php");
 die();
}

?>
