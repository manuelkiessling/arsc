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
    <?php echo $arsc_param["title"]; ?>
   </title>
  </head>
  <body bgcolor="#FFFFFF">
   <table width="500" align="center" cellpadding="6" bgcolor="<?php echo $arsc_color["userlist_window_background"]; ?>">
    <tr>
     <td>
      <font face="Arial" size="2" color="#FF0000">
       <b>
        <?php
        if ($arsc_error <> "")
        {
         echo $arsc_lang["error_".$arsc_error];
        }
        ?>
       </b>
      </font>
      <form METHOD="POST">
       <input type="hidden" name="arsc_send" value="yes">
       <input type="hidden" name="arsc_language" value="<?php echo $arsc_language; ?>">
       <font face="Arial" size="2">
        <?php
        echo $arsc_lang["register_intro"]."\n";
        if ($arsc_param["register_force"] == "yes")
        {
         echo $arsc_lang["register_intro_force"];
        }
        ?>
       </font>
       <br>
       <br>
       <table>
        <tr>
         <td>
          <font face="Arial" size="2">
           <b>
            <?php echo $arsc_lang["register_entername"]; ?>
           </b>
          </font>
         </td>
         <td>
          <input type="text" name="arsc_user" size="12" maxlength="12">
         </td>
        </tr>
        <?php
        if ($arsc_param["register_force"] <> "yes")
        {
         ?>
         <tr>
          <td>
           <font face="Arial" size="2">
            <b>
             <?php echo $arsc_lang["register_enterpassword"]; ?>
            </b>
           </font>
          </td>
          <td>
           <input type="password" name="arsc_password" size="12" maxlength="12">
          </td>
         </tr>
         <?php
        }
        ?>
        <tr>
         <td>
          <font face="Arial" size="2">
           <b>
            <?php echo $arsc_lang["register_enteremail"]; ?>
           </b>
          </font>
         </td>
         <td>
          <input type="text" name="arsc_email" size="12" value="<?php echo $arsc_email; ?>">
         </td>
        </tr>
       </table>
       <input type="submit" value="<?php echo $arsc_lang["register_send"]; ?>">
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
 $arsc_result = mysql_query("SELECT COUNT(*) as howmany FROM arsc_registered_users WHERE user = '$arsc_user'");
 $arsc_a = mysql_fetch_array($arsc_result);
 if ($arsc_a["howmany"] == 0)
 {
  $arsc_location = "Location: home.php?arsc_language=".$arsc_language."&arsc_user=".$arsc_user;
  if ($arsc_param["register_force"] == "yes")
  {
   $arsc_password = substr(md5(time()), 0,5);
   $arsc_location = "Location: home.php?arsc_language=".$arsc_language."&arsc_error=waitformail&arsc_user=".$arsc_user;
  }
  mail($arsc_email, $arsc_lang["register_emailtemplate_subject"], str_replace("{chatowner}", $arsc_param["register_owner"], str_replace("{homepage}", $arsc_param["register_homepage"], str_replace("{password}", $arsc_password, str_replace("{username}", $arsc_user, $arsc_lang["register_emailtemplate"])))), "From: ".$arsc_param["register_owner_email"]);
  mysql_query("INSERT INTO arsc_registered_users (user, password, email) VALUES ('$arsc_user', '$arsc_password', '$arsc_email')");
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