<?php

include("../config.inc.php");
include("../functions.inc.php");

if ($arsc_my = arsc_getdatafromsid($arsc_sid))
{
 include("../shared/language/".arsc_find_language($arsc_my["user"]).".inc.php");
 
 if ($arsc_my["level"] >= 0)
 {
  header("Expires: Wed, 4 Oct 1978 09:32:45 GMT");
  header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache");
  header("Content-Type: text/html");
  header("Refresh: ".$arsc_parameters["roomlist_refresh"]."; URL=roomlist.php?arsc_sid=".$arsc_sid);
  ?>
  <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
  <html>
   <head>
    <title>
     <php echo $arsc_parameters["title"]; ?>
    </title>
    <?php
    if ($arsc_my["version"] == "sockets" OR $arsc_my["version"] == "push_js" OR $arsc_my["version"] == "header_js")
    {
     ?>
     <script language="JavaScript">
      <!--
       function scrolling()
       {
        if(document.scrollform.scrollcheck.checked)
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
     <?php
    }
    ?>
    <?php
    if ($arsc_parameters["drawboard"] == "yes")
    {
     ?>
     <script language="JavaScript">
      <!--
       function popup()
       {
        window.open('../drawboard/drawboard.php?arsc_sid=<?php echo $arsc_sid; ?>', 'drawboard', 'toolbar=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,copyhistory=no,width=<?php echo $arsc_parameters["drawboard_width"]; ?>,height=<?php echo $arsc_parameters["drawboard_height"]; ?>');
       }
      //-->
     </script>
     <?php
    }
    ?>
   </head>
   <body bgcolor="<?php echo $arsc_parameters["color_roomlist_window_background"]; ?>" topmargin="0" leftmargin="0" marginleft="0" margintop="0">
    <img src="../pic/<?php echo $arsc_parameters["logo_path"]; ?>" alt="Logo" border="0"><br>
    <table width="95%" bgcolor="<?php echo $arsc_parameters["color_roomlist_window_foreground"]; ?>" align="center">
     <tr>
      <td>
       <font face="Arial" size="2">
        <b>
         <?php echo $arsc_lang["roomlist"]; ?>:
         <br>
        </b>
        <?php
         $arsc_result = mysql_query("SHOW tables LIKE 'arsc_room_%'");
         while ($arsc_a = mysql_fetch_array($arsc_result))
         {
          $arsc_room = substr($arsc_a[0], 10);
          if ($arsc_room <> "")
          {
           echo "<li><a href=\"../version_".$arsc_my["version"]."/chatinput.php?arsc_sid=".$arsc_my["sid"]."&arsc_pretext=".urlencode("/room ".arsc_nice_room($arsc_room)."")."\" target=\"input\">".arsc_nice_room($arsc_room)."</a></li>\n";
          }
         }
        ?>
        <br>
        <div align="right">
         <font size="1">
          <a href="roomlist.php?arsc_sid=<?php echo $arsc_sid; ?>"><?php echo $arsc_lang["refresh"]; ?></a>
         </font>
        </div>
       </font>
      </td>
     </tr>
    </table>
    <br>
    
    <table width="95%" border="0" cellspacing="0" cellpadding="2" align="center" bgcolor="#<?php echo $arsc_my["color"]; ?>">
     <tr>
      <td width="17%">
       <table border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
         <td bgcolor="#FFFFFF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FFFFFF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#FFCCFF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FFCCFF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#FF99FF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FF99FF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#FF66FF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FF66FF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#FF33FF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FF33FF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#FF00FF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FF00FF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
        
        <tr>
         <td bgcolor="#CCFFFF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CCFFFF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#CCCCFF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CCCCFF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#CC99FF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CC99FF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#CC66FF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CC66FF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#CC33FF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CC33FF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#CC00FF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CC00FF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
        
        <tr>
         <td bgcolor="#99FFFF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 99FFFF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#99CCFF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 99CCFF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#9999FF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 9999FF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#9966FF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 9966FF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#9933FF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 9933FF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#9900FF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 9900FF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
        
        <tr>
         <td bgcolor="#66FFFF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 66FFFF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#66CCFF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 66CCFF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#6699FF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 6699FF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#6666FF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 6666FF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#6633FF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 6633FF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#6600FF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 6600FF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
        
        <tr>
         <td bgcolor="#33FFFF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 33FFFF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#33CCFF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 33CCFF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#3399FF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 3399FF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#3366FF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 3366FF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#3333FF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 3333FF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#3300FF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 3300FF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
        
        <tr>
         <td bgcolor="#00FFFF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 00FFFF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#00CCFF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 00CCFF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#0099FF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 0099FF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#0066FF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 0066FF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#0033FF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 0033FF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#0000FF"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 0000FF"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
       </table>
      </td>
      <td width="17%">
       <table border="0" CELLspacing="0" cellpadding="0" align="center">
        <tr>
         <td bgcolor="#FFFFCC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FFFFCC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#FFCCCC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FFCCCC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#FF99CC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FF99CC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#FF66CC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FF66CC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#FF33CC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FF33CC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#FF00CC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FF00CC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
        
        <tr>
         <td bgcolor="#CCFFCC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CCFFCC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#CCCCCC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CCCCCC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#CC99CC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CC99CC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#CC66CC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CC66CC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#CC33CC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CC33CC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#CC00CC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CC00CC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
        
        <tr>
         <td bgcolor="#99FFCC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 99FFCC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#99CCCC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 99CCCC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#9999CC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 9999CC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#9966CC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 9966CC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#9933CC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 9933CC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#9900CC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 9900CC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
        
        <tr>
         <td bgcolor="#66FFCC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 66FFCC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#66CCCC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 66CCCC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#6699CC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 6699CC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#6666CC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 6666CC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#6633CC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 6633CC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#6600CC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 6600CC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
        
        <tr>
         <td bgcolor="#33FFCC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 33FFCC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#33CCCC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 33CCCC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#3399CC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 3399CC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#3366CC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 3366CC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#3333CC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 3333CC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#3300CC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 3300CC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
        
        <tr>
         <td bgcolor="#00FFCC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 00FFCC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#00CCCC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 00CCCC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#0099CC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 0099CC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#0066CC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 0066CC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#0033CC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 0033CC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#0000CC"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 0000CC"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
       </table>
      </td>
      <td width="16%">
       <table border="0" CELLspacing="0" cellpadding="0" align="center">
        <tr>
         <td bgcolor="#FFFF99"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FFFF99"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#FFCC99"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FFCC99"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#FF9999"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FF9999"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#FF6699"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FF6699"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#FF3399"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FF3399"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#FF0099"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FF0099"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
        
        <tr>
         <td bgcolor="#CCFF99"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CCFF99"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#CCCC99"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CCCC99"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#CC9999"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CC9999"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#CC6699"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CC6699"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#CC3399"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CC3399"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#CC0099"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CC0099"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
        
        <tr>
         <td bgcolor="#99FF99"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 99FF99"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#99CC99"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 99CC99"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#999999"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 999999"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#996699"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 996699"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#993399"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 993399"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#990099"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 990099"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
        
        <tr>
         <td bgcolor="#66FF99"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 66FF99"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#66CC99"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 66CC99"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#669999"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 669999"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#666699"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 666699"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#663399"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 663399"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#660099"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 660099"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
        
        <tr>
         <td bgcolor="#33FF99"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 33FF99"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#33CC99"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 33CC99"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#339999"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 339999"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#336699"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 336699"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#333399"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 333399"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#330099"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 330099"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
        
        <tr>
         <td bgcolor="#00FF99"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 00FF99"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#00CC99"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 00CC99"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#009999"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 009999"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#006699"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 006699"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#003399"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 003399"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#000099"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 000099"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
       </table>
      </td>
      <td width="17%">
       <table border="0" CELLspacing="0" cellpadding="0" align="center">
         <tr>
          <td bgcolor="#FFFF66"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FFFF66"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#FFCC66"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FFCC66"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#FF9966"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FF9966"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#FF6666"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FF6666"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#FF3366"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FF3366"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#FF0066"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FF0066"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         </tr>
         
         <tr>
          <td bgcolor="#CCFF66"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CCFF66"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#CCCC66"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CCCC66"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#CC9966"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CC9966"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#CC6666"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CC6666"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#CC3366"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CC3366"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#CC0066"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CC0066"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         </tr>
         
         <tr>
          <td bgcolor="#99FF66"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 99FF66"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#99CC66"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 99CC66"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#999966"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 999966"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#996666"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 996666"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#993366"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 993366"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#990066"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 990066"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         </tr>
         
         <tr>
          <td bgcolor="#66FF66"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 66FF66"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#66CC66"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 66CC66"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#669966"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 669966"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#666666"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 666666"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#663366"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 663366"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#660066"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 660066"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         </tr>
         
         <tr>
          <td bgcolor="#33FF66"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 33FF66"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#33CC66"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 33CC66"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#339966"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 339966"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#336666"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 336666"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#333366"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 333366"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#330066"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 330066"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         </tr>
         
         <tr>
          <td bgcolor="#00FF66"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 00FF66"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#00CC66"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 00CC66"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#009966"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 009966"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#006666"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 006666"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#003366"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 003366"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
          <td bgcolor="#000066"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 000066"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         </tr>
       </table>
      </td>
      <td width="16%">
       <table border="0" CELLspacing="0" cellpadding="0" align="center">
        <tr>
         <td bgcolor="#FFFF33"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FFFF33"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#FFCC33"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FFCC33"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#FF9933"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FF9933"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#FF6633"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FF6633"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#FF3333"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FF3333"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#FF0033"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FF0033"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
        
        <tr>
         <td bgcolor="#CCFF33"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CCFF33"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#CCCC33"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CCCC33"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#CC9933"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CC9933"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#CC6633"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CC6633"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#CC3333"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CC3333"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#CC0033"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CC0033"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
        
        <tr>
         <td bgcolor="#99FF33"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 99FF33"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#99CC33"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 99CC33"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#999933"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 999933"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#996633"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 996633"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#993333"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 993333"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#990033"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 990033"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
        
        <tr>
         <td bgcolor="#66FF33"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 66FF33"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#66CC33"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 66CC33"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#669933"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 669933"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#666633"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 666633"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#663333"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 663333"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#660033"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 660033"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
        
        <tr>
         <td bgcolor="#33FF33"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 33FF33"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#33CC33"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 33CC33"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#339933"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 339933"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#336633"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 336633"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#333333"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 333333"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#330033"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 330033"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
        
        <tr>
         <td bgcolor="#00FF33"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 00FF33"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#00CC33"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 00CC33"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#009933"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 009933"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#006633"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 006633"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#003333"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 003333"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#000033"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 000033"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
       </table>
      </td>
      <td width="17%">
       <table border="0" CELLspacing="0" cellpadding="0" align="center">
        <tr>
         <td bgcolor="#FFFF00"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FFFF00"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#FFCC00"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FFCC00"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#FF9900"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FF9900"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#FF6600"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FF6600"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#FF3300"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FF3300"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#FF0000"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color FF0000"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
        
        <tr>
         <td bgcolor="#CCFF00"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CCFF00"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#CCCC00"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CCCC00"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#CC9900"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CC9900"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#CC6600"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CC6600"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#CC3300"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CC3300"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#CC0000"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color CC0000"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
        
        <tr>
         <td bgcolor="#99FF00"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 99FF00"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#99CC00"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 99CC00"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#999900"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 999900"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#996600"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 996600"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#993300"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 993300"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#990000"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 990000"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
        
        <tr>
         <td bgcolor="#66FF00"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 66FF00"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#66CC00"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 66CC00"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#669900"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 669900"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#666600"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 666600"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#663300"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 663300"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#660000"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 660000"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
        
        <tr>
         <td bgcolor="#33FF00"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 33FF00"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#33CC00"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 33CC00"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#339900"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 339900"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#336600"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 336600"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#333300"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 333300"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#330000"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 330000"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
        
        <tr>
         <td bgcolor="#00FF00"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 00FF00"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#00CC00"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 00CC00"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#009900"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 009900"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#006600"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 006600"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#003300"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 003300"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
         <td bgcolor="#000000"><a href="../version_<?php echo $arsc_my["version"]; ?>/chatinput.php?arsc_sid=<?php echo $arsc_my["sid"]; ?>&arsc_pretext=<?php echo urlencode("/color 000000"); ?>" target="input"><img src="../pic/x.gif" border="0" width="4" height="4" alt=""></a></td>
        </tr>
       </table>
      </td>
     </tr>
    </table>

    
    <table width="95%" bgcolor="<?php echo $arsc_parameters["color_roomlist_window_foreground"]; ?>" align="center">
     <tr>
      <td>
       <font face="Arial" size="2">
        <b>
         <?php echo $arsc_lang["otherfunctions"]; ?>:
         <br>
        </b>
        <?php
        if ($arsc_my["version"] == "sockets" OR $arsc_my["version"] == "push_js" OR $arsc_my["version"] == "header_js")
        {
         ?>
         <form name="scrollform">
          <input type="checkbox" name="scrollcheck" value="true" OnClick="scrolling()" checked>
          <font face="Arial" size="2">
           <?php echo $arsc_lang["scroll_active"]; ?>
          </font>
         </form>
         <?php
        }
        if ($arsc_parameters["smilies"] == "yes")
        {
         echo "<li><a href=\"../version_".$arsc_my["version"]."/chatinput.php?arsc_sid=".$arsc_my["sid"]."&arsc_pretext=/smilies\" target=\"input\">".$arsc_lang["smilielist"]."</a></li>\n";
        }
        ?>
        <?php
        if ($arsc_parameters["drawboard"] == "yes")
        {
         ?>
         <li><a href="javascript:popup();"><?php echo $arsc_lang["drawboard"]; ?></a></li>
         <?php
        }
        ?>
        <li><a href="../logout.php?arsc_sid=<?php echo $arsc_sid; ?>&arsc_post_logout=true" target="_parent"><?php echo $arsc_lang["leave"]; ?></a></li>
       </font>
      </td>
     </tr>
    </table>
   </body>
  </html>
  <?php
 }
}
?>