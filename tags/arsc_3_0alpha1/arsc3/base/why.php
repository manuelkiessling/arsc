<?php

include("inc/config.inc.php");
include("inc/init.inc.php");
include("inc/functions.inc.php");
include("inc/api.inc.php");
if(!is_file("../languages/".$arsc_language.".inc.php")) die("Invalid language");
include("../languages/".$arsc_language.".inc.php");

$arsc_api = new arsc_api_Class;
$arsc_layout = $arsc_api->getBasicLayoutValues();

?>
<html>
 <head>
  <title>
   <?php echo ARSC_PARAMETER_TITLE; ?>
  </title>
 </head>
 <body
  bgcolor="#<?php echo $arsc_layout["default_background_color"]; ?>"
  text="#<?php echo $arsc_layout["default_font_color"]; ?>"
  link="#<?php echo $arsc_layout["default_font_color"]; ?>"
  vlink="#<?php echo $arsc_layout["default_font_color"]; ?>"
  alink="#<?php echo $arsc_layout["default_font_color"]; ?>"
 >
  <table align="center" width="80%" bgcolor="#<?php echo $arsc_layout["default_foreground_color"]; ?>">
   <tr>
    <td>
     <div align="justify">
      <font face="<?php echo $arsc_layout["default_font_face"]; ?>" size="<?php echo $arsc_layout["default_font_size"]; ?>" color="#<?php echo $arsc_layout["default_font_color"]; ?>">
       <?php echo nl2br($arsc_lang["why_kicked"]); ?>
      </font>
     </div>
    </td>
   </tr>
  </table>
 </body>
</html>