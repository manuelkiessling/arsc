<?php include("config.inc.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html>
 <head>
  <title>
   <?php echo $arsc_parameters["title"]; ?>
  </title>
 </head>
 <body bgcolor="#FFFFFF">
  <form action="home.php" METHOD="POST">
   <?php
   $handle = opendir("./shared/language");
   while ($file = readdir($handle))
   { 
    if ($file != "." && $file != "..")
    { 
     $arsc_language = str_replace(".inc.php", "", $file);
     ?>
     <input type="radio" name="arsc_language" value="<?php echo $arsc_language; ?>">
     <font face="Arial" size="2">
      <?php echo ucfirst($arsc_language); ?>
     </font>
     <br>
     <?php
    } 
   }
   closedir($handle);
   ?>
   <br>
   <input type="submit" value="OK">
  </form>
 </body>
</html>
