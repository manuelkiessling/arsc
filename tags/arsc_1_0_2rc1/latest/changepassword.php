<?php

include("config.inc.php");
include("functions.inc.php");
include("shared/language/".$arsc_language.".inc.php");

if ($arsc_send == "")
{
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
 <html>
  <head>
   <title>
    <?php echo $arsc_parameters["title"]; ?>
   </title>
  </head>
  <body bgcolor="#FFFFFF">
   <table width="500" align="center" cellpadding="6" bgcolor="<?php echo $arsc_parameters["color_userlist_window_background"]; ?>">
    <tr>
     <td>
      <font face="Arial" size="2" color="#FF0000">
       <b>
        <?php
        if ($arsc_error <> "")
        {
         if ($arsc_lang["error_".$arsc_error] <> "")
         {
          echo $arsc_lang["error_".$arsc_error];
         }
         else
         {
          echo $arsc_error;
         }
        }
        ?>
       </b>
      </font>
      <form METHOD="POST">
       <input type="hidden" name="arsc_send" value="yes">
       <input type="hidden" name="arsc_language" value="<?php echo $arsc_language; ?>">
       <font face="Arial" size="2">
        <?php echo $arsc_lang["changepassword_intro"]; ?>
       </font>
       <br>
       <br>
       <table>
        <tr>
         <td>
          <font face="Arial" size="2">
           <b>
            <?php echo $arsc_lang["changepassword_entername"]; ?>
           </b>
          </font>
         </td>
         <td>
          <input type="text" name="arsc_user" size="12" maxlength="12" value="<?php echo $arsc_user; ?>">
         </td>
        </tr>
        <tr>
         <td>
          <font face="Arial" size="2">
           <b>
            <?php echo $arsc_lang["changepassword_entercurrent"]; ?>
           </b>
          </font>
         </td>
         <td>
          <input type="password" name="arsc_password_old" size="12" maxlength="12">
         </td>
        </tr>
        <tr>
         <td>
          <font face="Arial" size="2">
           <b>
            <?php echo $arsc_lang["changepassword_enternew"]; ?>
           </b>
          </font>
         </td>
         <td>
          <input type="password" name="arsc_password_new" size="12" maxlength="12">
         </td>
        </tr>
       </table>
       <input type="submit" value="<?php echo $arsc_lang["changepassword_submit"]; ?>">
      </form>
     </td>
    </tr>
   </table>
  </body>
 </html>
 <?php
}
else
{
 $arsc_result = mysql_query("SELECT COUNT(id) AS howmany FROM arsc_registered_users WHERE user = '$arsc_user' AND password = '$arsc_password_old'");
 $arsc_a = mysql_fetch_array($arsc_result);
 if ($arsc_a["howmany"] == 0)
 {
  header("Location: changepassword.php?arsc_language=".$arsc_language."&arsc_error=wrong_credentials&arsc_user=".$arsc_user);
  die();
 }
 else
 {
  header("Location: home.php?arsc_language=".$arsc_language."&arsc_error=password_changed&arsc_user=".$arsc_user);
  mysql_query("UPDATE arsc_registered_users SET password = '$arsc_password_new' WHERE user = '$arsc_user' AND password = '$arsc_password_old'");
  die();
 }
}
?>