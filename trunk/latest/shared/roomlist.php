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