<?php

include("../config.inc.php");
include("../functions.inc.php");

set_magic_quotes_runtime(1);

if (!($arsc_admin_password == $arsc_parameters["selfop_password"])) 
{
 ?>
  <form method="POST">
   <font face="Arial" size="2">
    <?php
    if ($arsc_admin_password <> "")
    {
     ?>
     <font color="#FF0000">
      Your password is <b>invalid</b>!
      <br>
      If you just changed your password, you have to log in again with the <b>new</b> password.
      <br>
      <br>
     </font>
     <?php
    }
    ?>
    Admin password:
   </font>
   <input type="password" name="arsc_admin_password">
   <input type="submit" value="Login &gt;">
  </form>
 <?php
 die();
}
if (($arsc_admin_password == "password") AND ($arsc_goto <> "yes")) 
{
 header("Location: index.php?arsc_admin_password=password&arsc_goto=yes#changepassword");
 die();
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html>
 <head>
  <title>
   <?php echo $arsc_parameters["title"]; ?>
  </title>
 </head>
 <body bgcolor="#FFFFFF">
  <font face="Arial" color="#FF0000">
   <b>
    <?php echo $arsc_message; ?>
   </b>
  </font>
  <form action="save.php" method="POST">
   <div align="right">
    <font face="Arial" size="2">
     <b>
      Any questions?
     </b>
     <a href="http://sourceforge.net/forum/forum.php?forum_id=102858" target="_blank">Visit our forum</a>!
    </font>
   </div>
   <h2>
    <font face="Arial">
     Parameters
    </font>
   </h2>
   <input type="hidden" name="arsc_admin_password" value="<?php echo $arsc_admin_password; ?>">
   <?php
   $arsc_result = mysql_query("SELECT * FROM arsc_parameters");
   while ($arsc_a = mysql_fetch_array($arsc_result))
   {
    ?>
     <table width="100%">
      <tr>
       <td bgcolor="#EEEEEE">
        <font face="Arial" size="2">
        <?php if ($arsc_a["name"] == "selfop_password") echo "<a name=\"changepassword\">"; echo stripslashes($arsc_a["description"]); ?>
       </font>
      </td>
     </tr>
     <tr>
      <td bgcolor="#DDDDDD">
       <?php
       if ($arsc_a["choices"] == "")
       {
        ?>
        <input type="text" size="50" name="arsc_save_parameters[<?php echo $arsc_a["name"]; ?>]" value="<?php echo stripslashes(htmlspecialchars($arsc_parameters["{$arsc_a["name"]}"])); ?>">
        <?php
       }
       else
       {
        ?>
        <select name="arsc_save_parameters[<?php echo $arsc_a["name"]; ?>]">
         <?php
         $arsc_choices = explode("|", $arsc_a["choices"]);
         while (list($arsc_key, $arsc_value) = each ($arsc_choices))
         {
          ?>
          <option value="<?php echo stripslashes(htmlspecialchars($arsc_value)); ?>"<?php if ($arsc_value == $arsc_parameters["{$arsc_a["name"]}"]) echo " selected"; ?>><?php echo stripslashes(htmlspecialchars($arsc_value)); ?></option>
          <?php
         }
         ?>
        </select>
        <?php
       }
       ?>
      </td>
     </tr>
    </table>
    <br>
    <?php
   }
   ?>

   <br>
   <h2>
    <font face="Arial">
     Smilies
    </font>
   </h2>
   <table width="100%">
    <tr>
     <td bgcolor="#EEEEEE">
      <font face="Arial" size="2">
       The smilie images are named by numbers (e.g. 0.gif, 1.gif etc.).
       <br>
       Here you can define which image is shown by which smilie or shortcut.
      </font>
      <br>
     </td>
    </tr>
    <tr>
     <td bgcolor="#DDDDDD">
      <?php
      $arsc_i = 0;
      for($arsc_i; $arsc_i < 99; $arsc_i++)
      {
       if (file_exists("../pic/smilies/".$arsc_i.".gif"))
       {
        ?>
        <img src="<?php echo $arsc_parameters["smilies_path"].$arsc_i.".gif"; ?>">
        <input type="text" size="50" name="arsc_save_parameters_smilies[<?php echo $arsc_i; ?>]" value="<?php echo $arsc_parameters_smilies[$arsc_i]; ?>">
        <br>
        <?php
       }
      }
      ?>
     </td>
    </tr>
   </table>
   <br>
   <br>
   <input type="submit" value="Save parameters">
  </form>
 </body>
</html>