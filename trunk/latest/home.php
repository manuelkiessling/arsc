<?php

include("config.inc.php");
include("functions.inc.php");
include("shared/language/".$arsc_language.".inc.php");

function arsc_browser_detect($HTTP_USER_AGENT)
{
	if(eregi("(opera) ([0-9]{1,2}.[0-9]{1,3}){0,1}", $HTTP_USER_AGENT, $match)
	|| eregi("(opera/)([0-9]{1,2}.[0-9]{1,3}){0,1}", $HTTP_USER_AGENT, $match)
	)
	{
		$BName = "Opera"; $BVersion=$match[2];
	}
	elseif( eregi("(konqueror)/([0-9]{1,2}.[0-9]{1,3})", $HTTP_USER_AGENT, $match) )
	{
		$BName = "Konqueror"; $BVersion=$match[2];
	}
	elseif( eregi("(lynx)/([0-9]{1,2}.[0-9]{1,2}.[0-9]{1,2})", $HTTP_USER_AGENT, $match) )
	{
		$BName = "Lynx"; $BVersion=$match[2];
	}
	elseif( eregi("(links) \(([0-9]{1,2}.[0-9]{1,3})", $HTTP_USER_AGENT, $match) )
	{
		$BName = "Links"; $BVersion=$match[2];
	}
	elseif( eregi("(msie) ([0-9]{1,2}.[0-9]{1,3})", $HTTP_USER_AGENT, $match) )
	{
		$BName = "MSIE"; $BVersion=$match[2];
	}
	elseif( eregi("(netscape6)/(6.[0-9]{1,3})", $HTTP_USER_AGENT, $match) )
	{
		$BName = "Netscape"; $BVersion=$match[2];
	}
	elseif( eregi("mozilla/5", $HTTP_USER_AGENT) )
	{
		$BName = "Netscape"; $BVersion="Unknown";
	}
	elseif( eregi("(mozilla)/([0-9]{1,2}.[0-9]{1,3})", $HTTP_USER_AGENT, $match) )
	{
		$BName = "Netscape"; $BVersion=$match[2];
	}
	elseif( eregi("w3m", $HTTP_USER_AGENT) )
	{
		$BName = "w3m"; $BVersion="Unknown";
	}
	else
	{
		$BName = "Unknown"; $BVersion="Unknown";
	}

	if(eregi("linux", $HTTP_USER_AGENT))
	{
		$BPlatform = "Linux";
	}
	elseif( eregi("win32", $HTTP_USER_AGENT) )
	{
		$BPlatform = "Windows";
	}
	elseif( (eregi("(win)([0-9]{2})", $HTTP_USER_AGENT, $match) )
	||      (eregi("(windows) ([0-9]{2})", $HTTP_USER_AGENT, $match) )
	)
	{
		$BPlatform = "Windows $match[2]";
	}
	elseif( eregi("(winnt)([0-9]{1,2}.[0-9]{1,2}){0,1}", $HTTP_USER_AGENT, $match) )
	{
		$BPlatform = "Windows NT $match[2]";
	}
	elseif( eregi("(windows nt)( ){0,1}([0-9]{1,2}.[0-9]{1,2}){0,1}", $HTTP_USER_AGENT, $match) )
	{
		$BPlatform = "Windows NT $match[3]";
	}
	elseif( eregi("mac", $HTTP_USER_AGENT) )
	{
		$BPlatform = "Macintosh";
	}
	elseif( eregi("(sunos) ([0-9]{1,2}.[0-9]{1,2}){0,1}", $HTTP_USER_AGENT, $match) )
	{
		$BPlatform = "SunOS $match[2]";
	}
	elseif( eregi("(beos) r([0-9]{1,2}.[0-9]{1,2}){0,1}", $HTTP_USER_AGENT, $match) )
	{
		$BPlatform = "BeOS $match[2]";
	}
	elseif( eregi("freebsd", $HTTP_USER_AGENT) )
	{
		$BPlatform = "FreeBSD";
	}
	elseif( eregi("openbsd", $HTTP_USER_AGENT) )
	{
		$BPlatform = "OpenBSD";
	}
	elseif( eregi("irix", $HTTP_USER_AGENT) )
	{
		$BPlatform = "IRIX";
	}
	elseif( eregi("os/2", $HTTP_USER_AGENT) )
	{
		$BPlatform = "OS/2";
	}
	elseif( eregi("plan9", $HTTP_USER_AGENT) )
	{
		$BPlatform = "Plan9";
	}
	elseif( eregi("unix", $HTTP_USER_AGENT)
	||      eregi("hp-ux", $HTTP_USER_AGENT) )
	{
		$BPlatform = "Unix";
	}
	elseif( eregi("osf", $HTTP_USER_AGENT) )
	{
		$BPlatform = "OSF";
	}
	else
	{
		$BPlatform = "Unknown";
	}
 $return["name"] = $BName;
 $return["version"] = $BVersion;
 $return["platform"] = $BPlatform;
 return $return;
}

function arsc_display_version($version, $browser)
{
 GLOBAL $arsc_param, $arsc_lang;
 $checked = "";
 if (($version == "sockets") OR ($version == "push_js"))
 {
  $checked = "checked";
 }
 if (($version == "sockets" OR $version == "push_js")
     AND
     ($browser["name"] == "Lynx"
      OR
      $browser["name"] == "Links"
      OR
      $browser["name"] == "w3m"
      OR
      $browser["name"] == "Konqueror"
      OR
      ($browser["name"] == "Netscape" AND substr($browser["version"], 0, 1) == "2")))
 {
  $checked = "";
 }
 if (($version == "text")
     AND
     ($browser["name"] == "Lynx"
      OR
      $browser["name"] == "Links"
      OR
      $browser["name"] == "w3m"))
 {
  $checked = "checked";
 }
 if (($version == "header")
     AND
     ($browser["name"] == "Konqueror"))
 {
  $checked = "checked";
 }
 if (($version == "header_js")
     AND
     ($browser["name"] == "Netscape" AND substr($browser["version"], 0, 1) == "2"))
 {
  $checked = "checked";
 }
 if ($arsc_param["show_version_selection"] == "yes")
 {
  ?>
  <tr>
   <td valign="top">
    <input type="radio" name="arsc_chatversion" value="<?php echo $version; ?>"<?php echo $checked; ?>>
   </td>
   <td valign="top">
    <font face="Arial" size="2">
     <?php echo $arsc_lang["version_".$version]; ?>
    </font>
   </td>
  </tr>
  <?php
 }
 if ($arsc_param["show_version_selection"] == "no" AND $checked <> "")
 {
  ?>
  <input type="hidden" name="arsc_chatversion" value="<?php echo $version; ?>">
  <?php
 }
}

$arsc_timebuffer = time() - $arsc_param["ping"];
mysql_query("DELETE from arsc_users WHERE lastping < '$arsc_timebuffer' AND version <> 'text'");
$arsc_timebuffer = time() - $arsc_param["ping_text"];
mysql_query("DELETE from arsc_users WHERE lastping < '$arsc_timebuffer' AND version = 'text'");
$arsc_result = mysql_query("SELECT user from arsc_users");
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
       if ($arsc_param["show_version_selection"] == "yes")
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
       if ($arsc_param["socketserver_use"] == "yes")
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
       if ($arsc_param["show_version_selection"] == "yes")
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
