<?php

include("init.inc.php");
include("../inc/config.inc.php");
include("../inc/init.inc.php");
include("../inc/functions.inc.php");
include("header.inc.php");

set_magic_quotes_runtime(1);

?>
  <font face="Arial" color="#FF0000">
   <b>
    <?php echo $arsc_message; ?>
   </b>
  </font>
  <h2>
   <font face="Arial">
    Change User <?php echo $arsc_user; ?>
   </font>
  </h2>
  <form action="save_user.php" method="POST">
   <?php
   if ($arsc_rgsl == "") $arsc_rgsl = 0;
   $arsc_query = mysql_query("SELECT * FROM arsc_registered_users WHERE user = '$arsc_user'", ARSC_PARAMETER_DB_LINK);
   $arsc_result = mysql_fetch_array($arsc_query);
   ?>
   <input type="hidden" name="arsc_save_id" value="<?php echo $arsc_result["id"]; ?>">
   <input type="hidden" name="arsc_user" value="<?php echo $arsc_result["user"]; ?>">
   <table>
    <tr>
     <td valign="top">
      <font face="Arial" size="2">
       Username:
      </font>
     </td>
     <td valign="top">
      <input type="text" size="30" maxlength="64" name="arsc_save_user" value="<?php echo $arsc_result["user"]; ?>">
     </td>
    </tr>
    <tr>
     <td valign="top">
      <font face="Arial" size="2">
       Level:
      </font>
     </td>
     <td valign="top">
      <input type="text" size="2" maxlength="2" name="arsc_save_level" value="<?php echo $arsc_result["level"]; ?>">
      <font face="Verdana, Arial" size="1">
       (0-99, 0=Guest, 10=Operator, 20=VIP, 30=Moderator, 99=Admin)
      </font>
     </td>
    </tr>
    <tr>
     <td valign="top">
      <font face="Arial" size="2">
       Password:
      </font>
     </td>
     <td valign="top">
      <input type="text" size="30" maxlength="64" name="arsc_save_password" value="<?php echo $arsc_result["password"]; ?>">
     </td>
    </tr>
    <tr>
     <td valign="top">
      <font face="Arial" size="2">
       Default language:
      </font>
     </td>
     <td valign="top">
      <input type="text" size="30" maxlength="64" name="arsc_save_language" value="<?php echo $arsc_result["language"]; ?>">
     </td>
    </tr>
    <tr>
     <td valign="top">
      <font face="Arial" size="2">
       Default color (HEX):
      </font>
     </td>
     <td valign="top">
      <input type="text" size="6" maxlength="6" name="arsc_save_color" value="<?php echo $arsc_result["color"]; ?>">
     </td>
    </tr>
    <tr>
     <td valign="top">
      <font face="Arial" size="2">
       Text template: FIXME: Make dropdown of available text templates
      </font>
     </td>
     <td valign="top">
      <input type="text" size="1" maxlength="1" name="arsc_save_template" value="<?php echo $arsc_result["template"]; ?>">
     </td>
    </tr>
    <tr>
     <td valign="top">
      <font face="Arial" size="2">
       eMail adress:
      </font>
     </td>
     <td valign="top">
      <input type="text" size="30" maxlength="255" name="arsc_save_email" value="<?php echo $arsc_result["email"]; ?>">
     </td>
    </tr>
    <tr>
     <td valign="top">
      <font face="Arial" size="2">
       Sex (0=female, 1=male):
      </font>
     </td>
     <td valign="top">
      <input type="text" size="1" maxlength="1" name="arsc_save_sex" value="<?php echo $arsc_result["sex"]; ?>">
     </td>
    </tr>
    <tr>
     <td valign="top">
      <font face="Arial" size="2">
       Location:
      </font>
     </td>
     <td valign="top">
      <input type="text" size="30" maxlength="255" name="arsc_save_location" value="<?php echo $arsc_result["location"]; ?>">
     </td>
    </tr>
    <tr>
     <td valign="top">
      <font face="Arial" size="2">
       Hobbies:
      </font>
     </td>
     <td valign="top">
      <textarea rows="10" cols="30" wrap="virtual" name="arsc_save_hobbies"><?php echo $arsc_result["hobbies"]; ?></textarea>
     </td>
    </tr>
    <tr>
     <td valign="top">
      <font face="Arial" size="2">
       Make guestbook visible?:
      </font>
     </td>
     <td valign="top">
      <input type="text" size="1" maxlength="1" name="arsc_save_flag_guestbook" value="<?php echo $arsc_result["flag_guestbook"]; ?>">
      <font face="Verdana, Arial" size="1">
       (0=no, 1=yes)
      </font>
     </td>
    </tr>
    <tr>
     <td valign="top">
      <font face="Arial" size="2">
       Lock this user?:
      </font>
     </td>
     <td valign="top">
      <input type="text" size="1" maxlength="1" name="arsc_save_flag_locked" value="<?php echo $arsc_result["flag_locked"]; ?>">
      <font face="Verdana, Arial" size="1">
       (0=no, 1=yes)
      </font>
     </td>
    </tr>
   </table>
   <input type="submit" value="Save changes">
  </form>
  <font face="Arial" size="2">
   <a href="users.php">Back to userlist</a>
  </font>
<?php include("footer.inc.php"); ?>
