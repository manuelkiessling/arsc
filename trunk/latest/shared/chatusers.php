<?php

include("../config.inc.php");
if ($arsc_my = getdatafromsid($arsc_sid))
{
 include("../shared/language/".find_language($arsc_my["user"]).".inc.php");
 
 if ($arsc_my["level"] >= 0)
 {
  $arsc_room = $arsc_my["room"];
  if ($arsc_enter == "true")
  {
   $arsc_sendtime = date("H:i:s");
   $arsc_timeid = my_microtime();
   $arsc_message = "arsc_user_enter~~".$arsc_my["user"]."~~".nice_room($arsc_room);
   mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('$arsc_message', 'System', '$arsc_sendtime', '$arsc_timeid')");
  }
 
  $arsc_timebuffer = time() - $arsc_logoutbuffer;
  mysql_query("DELETE from arsc_users WHERE (lastping < '$arsc_timebuffer' AND version <> 'text')");
  $arsc_timebuffer = time() - $arsc_logoutbuffertext;
  mysql_query("DELETE from arsc_users WHERE lastping < '$arsc_timebuffer' AND version = 'text'");
  $arsc_result = mysql_query("SELECT user, level from arsc_users WHERE room = '$arsc_room' ORDER BY level DESC, user ASC");
 
  header("Expires: Sun, 28 Dec 1997 09:32:45 GMT");
  header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache");
  header("Content-Type: text/html");
  header("Refresh: ".$arsc_userlist_refresh."; URL=chatusers.php?arsc_sid=".$arsc_sid);
  ?>
  <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
  <html>
   <head>
    <title>
     <?php echo $arsc_lang_usersinroom." ".nice_room($arsc_room); ?>
    </title>
   </head>
   <body bgcolor="<?php echo $arsc_color["userlist_window_background"]; ?>" text="<?php echo $arsc_color["userlist_window_text"]; ?>" link="<?php echo $arsc_color["userlist_window_link"]; ?>" vlink="<?php echo $arsc_color["userlist_window_link"]; ?>" alink="<?php echo $arsc_color["userlist_window_link"]; ?>">
    <font face="Arial" size="2">
     <center>
      <?php echo $arsc_lang_usersinroom; ?><br>
      <b>
       <i>
        <?php echo nice_room($arsc_room); ?>
       </i>
      </b>
     </center>
    </font>
     <br>
     <?php
      while ($arsc_a = mysql_fetch_array($arsc_result))
      {
       $arsc_opstring = "";
       if ($arsc_a["level"] == 1)
       {
        $arsc_opstring = "<font face=\"Arial\" size=\"2\" color=\"".$arsc_color["userlist_window_level1"]."\">@";
       }
       elseif ($arsc_a["level"] == 2)
       {
        $arsc_opstring = "<font face=\"Arial\" size=\"2\" color=\"".$arsc_color["userlist_window_level2"]."\"><b>@</b>";
       }
       else
       {
        $arsc_opstring = "<font face=\"Arial\" size=\"2\" color=\"".$arsc_color["userlist_window_level0"]."\">";
       }
       if ($arsc_a["user"] == $arsc_my["user"])
       {
        echo "<i>".$arsc_opstring.$arsc_a["user"]."</i></font><br>\n";
       }
       else
       {
        echo "<a href=\"../version_".$arsc_my["version"]."/chatinput.php?arsc_sid=".$arsc_my["sid"]."&arsc_pretext=".urlencode("/msg ".$arsc_a["user"]." ")."\" target=\"input\">".$arsc_opstring.$arsc_a["user"]."</a></font><br>\n";
       }
      }
     ?>
   </body>
  </html>
  <?php
 }
 else
 {
  echo $arsc_htmlhead_out;
 }
}
else
{
 echo $arsc_htmlhead_out;
}
?>
