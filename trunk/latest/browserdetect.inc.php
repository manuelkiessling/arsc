<?php

function arsc_browser_detect($HTTP_USER_AGENT)
{
 if(eregi("(opera) ([0-9]{1,2}.[0-9]{1,3}){0,1}", $HTTP_USER_AGENT, $match)
 || eregi("(opera/)([0-9]{1,2}.[0-9]{1,3}){0,1}", $HTTP_USER_AGENT, $match))
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
 ||      (eregi("(windows) ([0-9]{2})", $HTTP_USER_AGENT, $match) ))
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
 GLOBAL $arsc_parameters, $arsc_lang;
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
 if ($arsc_parameters["show_version_selection"] == "yes")
 {
  ?>
  <tr>
   <td valign="top">
    <input type="radio" name="arsc_chatversion" value="<?php echo $version; ?>"<?php echo $checked; ?>>
   </td>
   <td valign="top" align="left">
    <font face="Arial" size="2">
     <?php echo $arsc_lang["version_".$version]; ?>
    </font>
   </td>
  </tr>
  <?php
 }
 if ($arsc_parameters["show_version_selection"] == "no" AND $checked <> "")
 {
  ?>
  <input type="hidden" name="arsc_chatversion" value="<?php echo $version; ?>">
  <?php
 }
}

?>