<?php

include("config.inc.php");
include("functions.inc.php");
include("browserdetect.inc.php");
include("shared/language/".$arsc_language.".inc.php");

$arsc_timebuffer = time() - $arsc_parameters["ping"];
mysql_query("DELETE from arsc_users WHERE lastping < '$arsc_timebuffer' AND version <> 'text'");
$arsc_timebuffer = time() - $arsc_parameters["ping_text"];
mysql_query("DELETE from arsc_users WHERE lastping < '$arsc_timebuffer' AND version = 'text'");
$arsc_result = mysql_query("SELECT user from arsc_users");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html>
 <head>
  <title>
   <?php echo $arsc_parameters["title"]; ?>
  </title>
 </head>
 <body bgcolor="#FFFFFF">
  <?php
  if ($arsc_parameters["activate_counter_pic"] == "yes")
  {
   ?>
   <img src="http://manuel.kiessling.net/arsccounter.php" width="1" height="1" border="0" alt=" "><br>
   <?php
  }
  ?>
  <table width="500" align="center" cellpadding="6" bgcolor="<?php echo $arsc_parameters["color_userlist_window_background"]; ?>">
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
     <form action="login.php" METHOD="POST">
      <table>
       <tr>
        <td>
         <font face="Arial" size="2">
          <b>
           <?php echo $arsc_lang["entername"]; ?>
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
           <?php echo $arsc_lang["enterpassword"]; ?>
          </b>
         </font>
        </td>
        <td>
         <input type="password" name="arsc_password" size="12">
        </td>
       </tr>
      </table>
      <br>
      <font face="Arial" size="2">
       <center>
        <a href="register.php?arsc_language=<?php echo $arsc_language; ?>"><?php echo $arsc_lang["clicktoregister"]; ?></a>
       </center>
       <br>
       <br>
       <?php
       if ($arsc_parameters["show_version_selection"] == "yes")
       {
        ?>
         <b>
          <?php echo $arsc_lang["whichversion"]; ?>
         </b>
        </font>
        <br>
        <table border="0">
        <?php
       } 
       $browser = arsc_browser_detect($HTTP_USER_AGENT);
       if ($arsc_parameters["socketserver_use"] == "yes")
       {
        arsc_display_version("sockets", $browser);
       }
       else
       {
        arsc_display_version("push_js", $browser);
       }
       arsc_display_version("header_js", $browser);
       arsc_display_version("header", $browser);
       arsc_display_version("box", $browser);
       arsc_display_version("text", $browser);
       if ($arsc_parameters["show_version_selection"] == "yes")
       {
        ?>
        </table>
        <?php
       }
       ?>
      <br>
      <font face="Arial" size="2">
       <b>
        <?php echo $arsc_lang["selectroom"]; ?>
       </b>
      </font>
      &nbsp;
      <select name="arsc_room">
       <?php
       $arsc_result = mysql_query("SHOW tables LIKE 'arsc_room_%'");
       while ($arsc_a = mysql_fetch_array($arsc_result))
       {
        $arsc_room = substr($arsc_a[0], 10);
        if ($arsc_room <> "")
        {
         echo "<option value=\"".$arsc_room."\">".arsc_nice_room($arsc_room)." </option>\n";
        }
       }
       ?>
      </select>
      <input type="hidden" name="arsc_language" value="<?php echo $arsc_language; ?>">
      <input type="submit" value="<?php echo $arsc_lang["startbutton"]; ?>">
     </form>
     <br>
     <br>
     <?php
      $arsc_result = mysql_query("SELECT COUNT(*) as howmany from arsc_users");
      $arsc_b = mysql_fetch_array($arsc_result);
      if ($arsc_b["howmany"] > 0)
      {
       $arsc_result = mysql_query("SELECT user, room from arsc_users ORDER BY room ASC, level DESC, user ASC");
       ?>
       <font face="Arial" size="2">
        <b>
         <?php echo $arsc_lang["usersinchat"]; ?>
        </b>
       </font>
       <table width=300>
       <tr bgcolor="#EEEEEE">
       <td width="40%">
        <font face="Arial" size="2">
         <?php echo $arsc_lang["usersinchat_name"]; ?>
        </font>
       </td>
       <td width="60%">
        <font face="Arial" size="2">
         <?php echo $arsc_lang["usersinchat_room"]; ?>
        </font>
       </td>
       <?php
        while ($arsc_a = mysql_fetch_array($arsc_result))
        {
         echo "<tr>\n<td>\n<font face=\"Arial\" size=\"2\">\n";
         echo $arsc_a["user"];
         echo "</font>\n</td>\n<td>\n<font face=\"Arial\" size=\"2\">\n";
         echo arsc_nice_room($arsc_a["room"]);
         echo "</font>\n</td>\n</tr>\n";
        }
       ?>
      </table>
      <?php
      }
     ?>
    </td>
   </tr>
  </table>
 </body>
</html>
