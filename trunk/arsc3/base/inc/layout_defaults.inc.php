<?php

$arsc_result = mysql_query("SELECT roomname, roomname_nice FROM arsc_rooms WHERE owner = '-1' ORDER BY type", ARSC_PARAMETER_DB_LINK);
while ($arsc_a = mysql_fetch_array($arsc_result))
{
 $arsc_room = $arsc_a["roomname"];
 $arsc_option .= "<option value=\"".$arsc_room."\">".$arsc_a["roomname_nice"]." </option>\n";
}
$arsc_layout["room_selection"] = '
<select name="arsc_room">
'.$arsc_option.'
</select>
';


$arsc_roomlist = $this->getInternalRoomlist();
while (list($arsc_key, $arsc_val) = each($arsc_roomlist))
{
 $arsc_userlist = $this->getSimpleUserlistWithRights($arsc_val);
 if (is_array($arsc_userlist))
 {
  while (list($arsc_keyu, $arsc_valu) = each($arsc_userlist))
  {
   $arsc_line .= "<tr>\n<td width=\"50%\" valign=\"top\">\n<font face=\"".$arsc_layout["default_font_face"]."\" size=\"".$arsc_layout["default_font_size"]."\" color=\"".$arsc_layout["default_font_color"]."\">\n";
   $arsc_line .= $arsc_keyu;
   $arsc_line .= "</font>\n</td>\n<td width=\"50%\" valign=\"top\">\n<font face=\"".$arsc_layout["default_font_face"]."\" size=\"".$arsc_layout["default_font_size"]."\" color=\"".$arsc_layout["default_font_color"]."\">\n";
   $arsc_line .= $this->getReadableRoomname($arsc_val);
   $arsc_line .= "</font>\n</td>\n</tr>\n";
  }
 }
}
$arsc_layout["usersinchat_table"] = "<table width=\"100%\">".$arsc_line."</table>";


if ($arsc_my["version"] == "browser_socket" OR $arsc_my["version"] == "browser_push" OR $arsc_my["version"] == "browser_header_js")
{
 $arsc_layout["scrolling_form"] = '
<form name="scrollform">
 <input type="checkbox" name="scrollcheck" value="true" OnClick="scrolling()" checked>
 <font face="'.$arsc_layout["default_font_face"].'" size="'.$arsc_layout["default_font_size"].'" color="'.$arsc_layout["default_font_color"].'">
  '.$arsc_lang["scroll_active"].'
 </font>
</form>
';
}
else $arsc_layout["scrolling_form"] = '';


if ($arsc_my["version"] == "browser_socket" OR $arsc_my["version"] == "browser_push" OR $arsc_my["version"] == "browser_header_js")
{
 $arsc_layout["scrolling_script"] = '
<script language="JavaScript">
 <!--
  function scrolling()
  {
   if (document.scrollform.scrollcheck.checked)
   {
    parent.msg.scroll_active=true;
   }
   else
   {
    parent.msg.scroll_active=false;
   }
  }
 //-->
</script>
';
}
else $arsc_layout["scrolling_script"] = '';


if ($arsc_my["version"] == "browser_socket" OR $arsc_my["version"] == "browser_push" OR $arsc_my["version"] == "browser_header_js")
{
 $arsc_layout["help_script"] = '
<script language="JavaScript">
 <!--
  function open_help()
  {
   window.open(\'./help.php?arsc_sid='.$arsc_my["sid"].'\', \'Help\', \'toolbar=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,copyhistory=no,width=500,height=500\');
  }
 //-->
</script>
';
 $arsc_layout["help_link"] = '
<a href="javascript:open_help();">'.$arsc_lang["helplink"].'</a>
';
}
else
{
 $arsc_layout["help_script"] = '';
 $arsc_layout["help_link"] = '
<a href="./help.php?arsc_sid='.$arsc_my["sid"].'" target="_blank">'.$arsc_lang["helplink"].'</a>
';
}


// FIXME(?)
$arsc_layout["drawboard_script"] = '';
$arsc_layout["drawboard_link"] = '';


$arsc_layout["currentroom"] = $this->getReadableRoomname($arsc_my["room"]);


if ($arsc_current["reloadallframes"] == 1)
{
 $arsc_layout["reloadallframes_script"] = '
<script language="JavaScript">
<!--
  for (var i=0;i<reloadableFrames.length;i++)
  {
   for (var j=0;j<top.frames.length;j++)
   {
    if (top.frames[j].name == reloadableFrames[i])
    top.frames[j].location.reload();
   }
  }
//-->
</script>
';
}
else $arsc_layout["reloadallframes_script"] = '';


if ($arsc_current["user_got_kicked"] == 1)
{
 $arsc_layout["kickuser_script"] = '
<script language="JavaScript">
<!--
 top.location.href = "'.ARSC_PARAMETER_BASEURL.'base/why.php?arsc_language='.arsc_validateinput($_GET["arsc_language"], $arsc_available_languages, NULL, 0, 64, __FILE__, __LINE__).'";
//-->
</script>
';
}
else $arsc_layout["kickuser_script"] = '';


if ($arsc_my["version"] == "browser_socket" OR $arsc_my["version"] == "browser_push" OR $arsc_my["version"] == "browser_header_js")
{
 $arsc_layout["idcard_script"] = '
<script language="JavaScript">
<!--
 function idcard(arsc_user)
 {
  window.open(\'./idcard/index.php?arsc_sid='.$arsc_my["sid"].'&arsc_user=\' + arsc_user, \''.rand().'\', \'toolbar=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,copyhistory=no,width=300,height=500\');
 }
//-->
</script>
';
}
else $arsc_layout["idcard_script"] = '';


if ($this->checkCommandAllowed($arsc_my["level"], "userlist"))
{
 $arsc_layout["userlist"] = '<table width="100%">';
 $arsc_userlist = $this->getSimpleUserlistWithRights($arsc_my["room"]);
 if (is_array($arsc_userlist))
 {
  reset($arsc_userlist);
  while (list($arsc_key, $arsc_val) = each($arsc_userlist))
  {
   $arsc_layout["userlist"] .= '<tr> <td bgcolor="'.$arsc_layout["default_foreground_color"].'"> ';
   $arsc_opstring = "";
   // ID Card
   $arsc_result = mysql_query("SELECT COUNT(user) AS cnt FROM arsc_registered_users WHERE user = '$arsc_key'", ARSC_PARAMETER_DB_LINK);
   $arsc_a = mysql_fetch_array($arsc_result);
   if ($arsc_a["cnt"] == 1)
   {
    $arsc_layout["userlist"] .= '<font face="'.$arsc_layout["small_font_face"].'" size="'.$arsc_layout["small_font_size"].'" color="'.$arsc_layout["small_font_color"].'">';
    if ($arsc_my["version"] == "browser_socket" OR $arsc_my["version"] == "browser_push" OR $arsc_my["version"] == "browser_header_js")
    {
     $arsc_layout["userlist"] .= '<a href="javascript:idcard(\''.$arsc_key.'\');" title="'.$arsc_lang["cmd_idcard"].'">ID</a> ';
    }
    else
    {
     $arsc_layout["userlist"] .= '<a href="./idcard/index.php?arsc_sid='.$arsc_my["sid"].'" title="'.$arsc_lang["cmd_idcard"].'" target="_blank">ID</a> ';
    }
    $arsc_layout["userlist"] .= '</font>';
   }
   if ($arsc_val == 1)
   {
    $arsc_opstring = "<font face=\"".$arsc_layout["default_font_face"]."\" size=\"".$arsc_layout["default_font_size"]."\" color=\"".$arsc_layout["default_font_color"]."\">@";
   }
   elseif ($arsc_val == 2)
   {
    $arsc_opstring = "<font face=\"".$arsc_layout["default_font_face"]."\" size=\"".$arsc_layout["default_font_size"]."\" color=\"".$arsc_layout["default_font_color"]."\"><b>@</b>";
   }
   else
   {
    $arsc_opstring = "<font face=\"".$arsc_layout["default_font_face"]."\" size=\"".$arsc_layout["default_font_size"]."\" color=\"".$arsc_layout["default_font_color"]."\">";
   }
   if ($arsc_key == $arsc_my["user"])
   {
    $arsc_layout["userlist"] .= '<i>'.$arsc_opstring.$arsc_key.'</i></font> ';
   }
   else
   {
    if ($arsc_my["level"] >= 1)
    {
     $arsc_layout["userlist"] .= '<font face="'.$arsc_layout["small_font_face"].'" size="'.$arsc_layout["small_font_size"].'" color="'.$arsc_layout["small_font_color"].'">';
     // whois
     if ($this->checkCommandAllowed($arsc_my["level"], "whois")) $arsc_layout["userlist"] .= "<a href=\"chatins.php?arsc_sid=".$arsc_my["sid"]."&arsc_message=".urlencode("/whois ".$arsc_key."")."&arsc_chatversion=".$arsc_my["version"]."\" target=\"empty\" title=\"".$arsc_lang["opcmd_w"]."\">W</a> ";
     // kick
     if ($this->checkCommandAllowed($arsc_my["level"], "kick")) $arsc_layout["userlist"] .= "<a href=\"chatins.php?arsc_sid=".$arsc_my["sid"]."&arsc_message=".urlencode("/kick ".$arsc_key."")."&arsc_chatversion=".$arsc_my["version"]."\" target=\"empty\" title=\"".$arsc_lang["opcmd_k"]."\">K</a> ";
     // bann
     if ($this->checkCommandAllowed($arsc_my["level"], "bann")) $arsc_layout["userlist"] .= "<a href=\"input.php?arsc_sid=".$arsc_my["sid"]."&arsc_pretext=".urlencode("/bann ".$arsc_key." 120")."\" target=\"input\" title=\"".$arsc_lang["opcmd_b"]."\">B</a> ";
     // Lock (if registered)
     if ($this->checkCommandAllowed($arsc_my["level"], "lock")) $arsc_layout["userlist"] .= "<a href=\"chatins.php?arsc_sid=".$arsc_my["sid"]."&arsc_message=".urlencode("/lock ".$arsc_key."")."&arsc_chatversion=".$arsc_my["version"]."\" target=\"empty\" title=\"".$arsc_lang["opcmd_l"]."\">L</a> ";
     // R.I.P.
     if ($this->checkCommandAllowed($arsc_my["level"], "rip")) $arsc_layout["userlist"] .= "<a href=\"chatins.php?arsc_sid=".$arsc_my["sid"]."&arsc_message=".urlencode("/rip ".$arsc_key."")."&arsc_chatversion=".$arsc_my["version"]."\" target=\"empty\" title=\"".$arsc_lang["opcmd_r"]."\">R</a> ";
     // Un-R.I.P.
     if ($this->checkCommandAllowed($arsc_my["level"], "unrip")) $arsc_layout["userlist"] .= "<a href=\"chatins.php?arsc_sid=".$arsc_my["sid"]."&arsc_message=".urlencode("/unrip ".$arsc_key."")."&arsc_chatversion=".$arsc_my["version"]."\" target=\"empty\" title=\"".$arsc_lang["opcmd_u"]."\">U</a> ";
     // Give OP
     if ($this->checkCommandAllowed($arsc_my["level"], "op")) $arsc_layout["userlist"] .= "<a href=\"chatins.php?arsc_sid=".$arsc_my["sid"]."&arsc_message=".urlencode("/op ".$arsc_key."")."&arsc_chatversion=".$arsc_my["version"]."\" target=\"empty\" title=\"".$arsc_lang["opcmd_o"]."\">O</a> ";
     // DeOP
     if ($this->checkCommandAllowed($arsc_my["level"], "deop")) $arsc_layout["userlist"] .= "<a href=\"chatins.php?arsc_sid=".$arsc_my["sid"]."&arsc_message=".urlencode("/deop ".$arsc_key."")."&arsc_chatversion=".$arsc_my["version"]."\" target=\"empty\" title=\"".$arsc_lang["opcmd_d"]."\">D</a> ";
     // Move
     if ($this->checkCommandAllowed($arsc_my["level"], "move")) $arsc_layout["userlist"] .= "<a href=\"input.php?arsc_sid=".$arsc_my["sid"]."&arsc_pretext=".urlencode("/move ".$arsc_key."")." room\" target=\"input\" title=\"".$arsc_lang["opcmd_m"]."\">M</a>";
     $arsc_layout["userlist"] .= "</font> ";
    }
    // Send a message
    $arsc_layout["userlist"] .= "<a href=\"input.php?arsc_sid=".$arsc_my["sid"]."&arsc_pretext=".urlencode("/msg ".$arsc_key." ")."&arsc_chatversion=".$arsc_my["version"]."\" target=\"input\" title=\"".$arsc_lang["cmd_m"]."\">".$arsc_opstring.$arsc_key."</a></font><br> ";
   }
   $arsc_layout["userlist"] .= "</td>";
   $arsc_layout["userlist"] .= "</tr>";
  }
  $arsc_layout["userlist"] .= '</table>';
 }
}
else
{
 $arsc_layout["userlist"] .= '';
}

if ($this->checkCommandAllowed($arsc_my["level"], "color"))
{
 $arsc_layout["colorselection_title"] = $arsc_lang["select_color"];
}

if ($this->checkCommandAllowed($arsc_my["level"], "color"))
{
 $arsc_layout["colorselection_table"] = '
<table width="100%" border="0" cellspacing="0" cellpadding="2" bgcolor="'.$arsc_my["color"].'">
 <tr>
  <td width="20%">
   <table border="0" cellspacing="0" cellpadding="0" align="center" width="100%">
    <tr>
     <td bgcolor="#ffffcc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FFFFCC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#ffcccc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FFCCCC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#ff99cc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FF99CC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#ff66cc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FF66CC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#ff33cc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FF33CC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#ff00cc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FF00CC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
    </tr>
    
    <tr>
     <td bgcolor="#ccffcc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CCFFCC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#cccccc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CCCCCC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#cc99cc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CC99CC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#cc66cc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CC66CC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#cc33cc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CC33CC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#cc00cc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CC00CC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
    </tr>
    
    <tr>
     <td bgcolor="#99ffcc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=99FFCC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#99cccc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=99CCCC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#9999cc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=9999CC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#9966cc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=9966CC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#9933cc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=9933CC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#9900cc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=9900CC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
    </tr>
    
    <tr>
     <td bgcolor="#66ffcc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=66FFCC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#66cccc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=66CCCC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#6699cc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=6699CC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#6666cc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=6666CC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#6633cc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=6633CC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#6600cc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=6600CC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
    </tr>

    <tr>
     <td bgcolor="#33ffcc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=33FFCC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#33cccc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=33CCCC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#3399cc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=3399CC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#3366cc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=3366CC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#3333cc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=3333CC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#3300cc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=3300CC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
    </tr>
    
    <tr>
     <td bgcolor="#00ffcc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=00FFCC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#00cccc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=00CCCC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#0099cc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=0099CC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#0066cc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=0066CC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#0033cc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=0033CC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#0000cc" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=0000CC"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
    </tr>
   </table>
  </td>
  <td width="20%">
   <table border="0" cellspacing="0" cellpadding="0" align="center" width="100%">
    <tr>
     <td bgcolor="#ffff99" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FFFF99"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#ffcc99" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FFCC99"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#ff9999" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FF9999"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#ff6699" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FF6699"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#ff3399" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FF3399"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#ff0099" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FF0099"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
    </tr>

    <tr>
     <td bgcolor="#ccff99" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CCFF99"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#cccc99" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CCCC99"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#cc9999" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CC9999"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#cc6699" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CC6699"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#cc3399" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CC3399"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#cc0099" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CC0099"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
    </tr>
    
    <tr>
     <td bgcolor="#99ff99" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=99FF99"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#99cc99" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=99CC99"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#999999" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=999999"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#996699" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=996699"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#993399" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=993399"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#990099" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=990099"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
    </tr>

    <tr>
     <td bgcolor="#66ff99" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=66FF99"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#66cc99" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=66CC99"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#669999" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=669999"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#666699" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=666699"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#663399" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=663399"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#660099" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=660099"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
    </tr>

    <tr>
     <td bgcolor="#33ff99" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=33FF99"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#33cc99" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=33CC99"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#339999" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=339999"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#336699" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=336699"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#333399" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=333399"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#330099" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=330099"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
    </tr>
    
    <tr>
     <td bgcolor="#00ff99" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=00FF99"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#00cc99" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=00CC99"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#009999" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=009999"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#006699" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=006699"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#003399" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=003399"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#000099" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=000099"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
    </tr>
   </table>
  </td>
  <td width="20%">
   <table border="0" cellspacing="0" cellpadding="0" align="center" width="100%">
     <tr>
      <td bgcolor="#ffff66" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FFFF66"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#ffcc66" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FFCC66"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#ff9966" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FF9966"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#ff6666" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FF6666"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#ff3366" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FF3366"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#ff0066" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FF0066"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     </tr>
     
     <tr>
      <td bgcolor="#ccff66" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CCFF66"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#cccc66" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CCCC66"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#cc9966" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CC9966"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#cc6666" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CC6666"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#cc3366" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CC3366"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#cc0066" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CC0066"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     </tr>

     <tr>
      <td bgcolor="#99ff66" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=99FF66"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#99cc66" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=99CC66"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#999966" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=999966"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#996666" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=996666"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#993366" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=993366"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#990066" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=990066"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     </tr>
     
     <tr>
      <td bgcolor="#66ff66" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=66FF66"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#66cc66" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=66CC66"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#669966" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=669966"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#666666" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=666666"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#663366" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=663366"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#660066" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=660066"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     </tr>

     <tr>
      <td bgcolor="#33ff66" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=33FF66"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#33cc66" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=33CC66"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#339966" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=339966"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#336666" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=336666"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#333366" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=333366"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#330066" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=330066"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     </tr>
     
     <tr>
      <td bgcolor="#00ff66" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=00FF66"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#00cc66" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=00CC66"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#009966" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=009966"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#006666" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=006666"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#003366" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=003366"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
      <td bgcolor="#000066" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=000066"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     </tr>
   </table>
  </td>
  <td width="20%">
   <table border="0" cellspacing="0" cellpadding="0" align="center" width="100%">
    <tr>
     <td bgcolor="#ffff33" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FFFF33"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#ffcc33" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FFCC33"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#ff9933" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FF9933"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#ff6633" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FF6633"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#ff3333" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FF3333"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#ff0033" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FF0033"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
    </tr>
    
    <tr>
     <td bgcolor="#ccff33" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CCFF33"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#cccc33" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CCCC33"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#cc9933" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CC9933"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#cc6633" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CC6633"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#cc3333" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CC3333"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#cc0033" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CC0033"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
    </tr>
    
    <tr>
     <td bgcolor="#99ff33" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=99FF33"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#99cc33" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=99CC33"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#999933" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=999933"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#996633" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=996633"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#993333" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=993333"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#990033" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=990033"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
    </tr>
    
    <tr>
     <td bgcolor="#66ff33" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=66FF33"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#66cc33" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=66CC33"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#669933" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=669933"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#666633" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=666633"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#663333" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=663333"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#660033" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=660033"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
    </tr>

    <tr>
     <td bgcolor="#33ff33" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=33FF33"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#33cc33" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=33CC33"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#339933" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=339933"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#336633" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=336633"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#333333" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=333333"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#330033" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=330033"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
    </tr>
    
    <tr>
     <td bgcolor="#00ff33" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=00FF33"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#00cc33" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=00CC33"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#009933" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=009933"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#006633" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=006633"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#003333" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=003333"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#000033" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=000033"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
    </tr>
   </table>
  </td>
  <td width="20%">
   <table border="0" cellspacing="0" cellpadding="0" align="center" width="100%">
    <tr>
     <td bgcolor="#ffff00" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FFFF00"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#ffcc00" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FFCC00"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#ff9900" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FF9900"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#ff6600" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FF6600"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#ff3300" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FF3300"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#ff0000" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=FF0000"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
    </tr>
    
    <tr>
     <td bgcolor="#ccff00" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CCFF00"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#cccc00" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CCCC00"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#cc9900" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CC9900"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#cc6600" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CC6600"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#cc3300" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CC3300"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#cc0000" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=CC0000"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
    </tr>
    
    <tr>
     <td bgcolor="#99ff00" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=99FF00"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#99cc00" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=99CC00"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#999900" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=999900"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#996600" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=996600"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#993300" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=993300"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#990000" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=990000"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
    </tr>
    
    <tr>
     <td bgcolor="#66ff00" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=66FF00"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#66cc00" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=66CC00"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#669900" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=669900"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#666600" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=666600"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#663300" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=663300"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#660000" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=660000"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
    </tr>

    <tr>
     <td bgcolor="#33ff00" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=33FF00"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#33cc00" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=33CC00"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#339900" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=339900"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#336600" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=336600"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#333300" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=333300"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#330000" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=330000"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
    </tr>

    <tr>
     <td bgcolor="#00ff00" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=00FF00"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#00cc00" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=00CC00"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#009900" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=009900"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#006600" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=006600"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#003300" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=003300"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
     <td bgcolor="#000000" width="16%"><a href="changecolor.php?arsc_sid='.$arsc_my["sid"].'&arsc_color=000000"><img src="../../../base/pic/x.gif" border="0" width="100%" height="4" alt=""></a></td>
    </tr>
   </table>
  </td>
 </tr>
</table>
';
} else $arsc_layout["colorselection_table"] = '';


if ($this->checkCommandAllowed($arsc_my["level"], "roomlist"))
{
 $arsc_currentroom = $this->getReadableRoomname($arsc_my["room"]);
 $arsc_roomlist = $this->getReadableRoomlist();
 while (list($arsc_key, $arsc_val) = each($arsc_roomlist))
 {
  if ($arsc_val == $arsc_currentroom) $arsc_selected = " selected"; else $arsc_selected = "";
  $arsc_roomlist_select .= "<option value=\"/room ".$arsc_val."\"".$arsc_selected.">".$arsc_val."</option> ";
 }

 $arsc_layout["roomlist_form"] = '
 <form action="chatins.php" target="empty">
  <font face="'.$arsc_layout["default_font_face"].'" size="'.$arsc_layout["default_font_size"].'" color="'.$arsc_layout["default_font_color"].'">
   <b>
    '.$arsc_lang["roomlist"].':
   </b>
  </font>
  <input type="hidden" name="arsc_sid" value="'.$arsc_my["sid"].'">
  <input type="hidden" name="arsc_chatversion" value="'.$arsc_my["version"].'">
  <select name="arsc_message">
   '.$arsc_roomlist_select.'
  </select>
  <input type="submit" value="'.$arsc_lang["go_room"].'">
 </form>';
}
else $arsc_layout["roomlist_form"] = '';


if (ARSC_PARAMETER_KEEP_SENDED_MESSAGE == "yes")
{
 $arsc_layout["msginput_script"] = '
<script language="Javascript">
 <!--
  scroll_active = true;
  function empty_field_and_submit()
  {
   document.fdummy.arsc_message.value=document.f.arsc_message.value;
   document.fdummy.submit();
   document.f.arsc_message.focus();
   document.f.arsc_message.select();
   return false;
  }
 // -->
</script>
';
 $arsc_layout["msginput_onload"] = 'document.f.arsc_message.focus();document.f.arsc_message.select();';

}
else
{
 $arsc_layout["msginput_script"] = '
<script language="Javascript">
 <!--
  scroll_active = true;
  function empty_field_and_submit()
  {
   document.fdummy.arsc_message.value=document.f.arsc_message.value;
   document.fdummy.submit();
   document.f.arsc_message.value=\'\';
   document.f.arsc_message.focus();
   return false;
  }
 // -->
</script>
';
 $arsc_layout["msginput_onload"] = 'document.f.arsc_message.focus();';
}

$arsc_layout["pretext"] = $_GET["arsc_pretext"];
?>