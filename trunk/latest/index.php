<?php include("config.inc.php"); ?>
<?php include("functions.inc.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html>
 <head>
  <title>
   <?php echo $arsc_parameters["title"]; ?>
  </title>
 </head>
 <body bgcolor="#FFFFFF">
  <br>
  <br>
  <form action="home.php" METHOD="POST">
   <table align="center" cellpadding="6" bgcolor="<?php echo $arsc_parameters["color_userlist_window_background"]; ?>">
    <tr>
     <td>
      <font face="Arial, Verdana, sans-serif">
       <b>
        Choose your language:
       </b>
      </font>
      <select name="arsc_language">
       <?php
       $handle = opendir("shared/language");
       while ($file = readdir($handle))
       { 
        if ($file != "." && $file != "..")
        { 
         $arsc_language = str_replace(".inc.php", "", $file);
         ?>
         <option value="<?php echo $arsc_language; ?>"<?php if ($arsc_language == $arsc_parameters["standard_language"]) echo " selected"; ?>><?php echo ucfirst($arsc_language); ?></option>
         <?php
        } 
       }
       closedir($handle);
       ?>
      </select>
      <input type="submit" value="Go &gt;">
     </td>
    </tr>
   </table>
  </form>
 </body>
</html>
