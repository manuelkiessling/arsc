<?php

include("config.inc.php");
include("shared/language/".$arsc_language.".inc.php");

$arsc_timebuffer = time() - $arsc_logoutbuffer;
mysql_query("DELETE from arsc_users WHERE lastping < '$arsc_timebuffer' AND version <> 'text'");
$arsc_timebuffer = time() - $arsc_logoutbuffertext;
mysql_query("DELETE from arsc_users WHERE lastping < '$arsc_timebuffer' AND version = 'text'");
$arsc_result = mysql_query("SELECT user from arsc_users");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html>
 <head>
  <title>
   ARSC - ARSC Really Simple Chat - Login
  </title>
 </head>
 <body>
  <p>
   <font face="Arial" size="2" color="#FF0000">
    <b>
     <?php
     if ($arsc_error <> "")
     {
      $arsc_varname = "arsc_lang_error_".$arsc_error;
      echo $$arsc_varname;
     }
     ?>
    </b>
   </font>
  </p>
  <form action="login.php" METHOD="POST">
   <p>
    <font face="Arial" size="2">
     <b>
      <?php echo $arsc_lang_entername; ?>:
     </b>
    </font>
    <br>
    <input type="text" name="arsc_user" size="10" maxlength="10">
    <font face="Arial" size="2" color="#666666">
     <i>
      (<?php echo $arsc_lang_namelength; ?>)
     </i>
    </font>
   </p>
   <p>
    <font face="Arial" size="2">
     <b>
      <?php echo $arsc_lang_whichversion; ?>
     </b>
    </font>
   </p>
   <table border="0">
    <tr>
     <td valign="top">
      <input type="radio" name="arsc_chatversion" value="push_js" checked>
     </td>
     <td valign="top">
      <font face="Arial" size="2">
       <?php echo $arsc_lang_version_dontknow; ?>
      </font>
     </td>
    </tr>
    <tr>
     <td valign="top">
      <input type="radio" name="arsc_chatversion" value="sockets">
     </td>
     <td valign="top">
      <font face="Arial" size="2">
       <?php echo $arsc_lang_version_sockets; ?>
      </font>
     </td>
    </tr>
    <tr>
     <td valign="top">
      <input type="radio" name="arsc_chatversion" value="push_js">
     </td>
     <td valign="top">
      <font face="Arial" size="2">
       <?php echo $arsc_lang_version_push_js; ?>
      </font>
     </td>
    </tr>
    <tr>
     <td valign="top">
      <input type="radio" name="arsc_chatversion" value="header_js">
     </td>
     <td valign="top">
      <font face="Arial" size="2">
       <?php echo $arsc_lang_version_header_js; ?>
      </font>
     </td>
    </tr>
    <tr>
     <td valign="top">
      <input type="radio" name="arsc_chatversion" value="header">
     </td>
     <td valign="top">
      <font face="Arial" size="2">
       <?php echo $arsc_lang_version_header; ?>
      </font>
     </td>
    </tr>
    <tr>
     <td valign="top">
      <input type="radio" name="arsc_chatversion" value="text">
     </td>
     <td valign="top">
      <font face="Arial" size="2">
       <?php echo $arsc_lang_version_text; ?>
      </font>
     </td>
    </tr>
   </table>
   <p>
    <font face="Arial" size="2">
     <b>
      <?php echo $arsc_lang_selectroom; ?>
     </b>
    </font>
    <select name="arsc_room">
     <?php
     $arsc_result = mysql_query("SHOW tables LIKE 'arsc_room_%'");
     while ($arsc_a = mysql_fetch_array($arsc_result))
     {
      $arsc_room = substr($arsc_a[0], 10);
      if ($arsc_room <> "")
      {
       echo "<option value=\"".$arsc_room."\">".nice_room($arsc_room)."</option>\n";
      }
     }
     ?>
    </select>
   </p>
   <p>
    <input type="hidden" name="arsc_language" value="<?php echo $arsc_language; ?>">
    <input type="submit" value="<?php echo $arsc_lang_startbutton; ?>">
   </p>
  </form>
  <?php
   $arsc_result = mysql_query("SELECT COUNT(*) as howmany from arsc_users");
   $arsc_b = mysql_fetch_array($arsc_result);
   if ($arsc_b["howmany"] > 0)
   {
    $arsc_result = mysql_query("SELECT user, room from arsc_users ORDER BY room ASC, level DESC, user ASC");
    ?>
    <font face="Arial" size="2">
     <b>
      <?php echo $arsc_lang_usersinchat; ?>:
     </b>
    </font>
    <table width=300>
    <tr bgcolor="#EEEEEE">
    <td width="40%">
     <font face="Arial" size=2>
      Name
     </font>
    </td>
    <td width="60%">
     <font face="Arial" size=2>
      Room
     </font>
    </td>
    <?php
     while ($arsc_a = mysql_fetch_array($arsc_result))
     {
      echo "<tr>\n<td>\n<font face=\"Arial\" size=2>\n";
      echo $arsc_a["user"];
      echo "</font>\n</td>\n<td>\n<font face=\"Arial\" size=2>\n";
      echo nice_room($arsc_a["room"]);
      echo "</font>\n</td>\n</tr>\n";
     }
    ?>
   </table>
   <?php
   }
  ?>
 </body>
</html>
