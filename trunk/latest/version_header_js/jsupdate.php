<?php

include ("../config.inc.php");
if ($arsc_my = getdatafromsid($arsc_sid))
{
 include("../shared/language/".find_language($arsc_my["user"]).".inc.php");
 
 $arsc_room = $arsc_my["room"];
 $arsc_user = $arsc_my["user"];
 $arsc_result = mysql_query("SELECT * from arsc_room_$arsc_room ORDER BY timeid DESC");
 $arsc_b = mysql_fetch_array($arsc_result);
 if ($arsc_lastid == "")
 {
  $arsc_lastid = $arsc_b["timeid"];
 }
 
 if ($arsc_my["level"] < 0)
 {
  switch($arsc_my["level"])
  {
   case "-1": $arsc_message = $arsc_lang_youwerekicked;
              mysql_query("DELETE from arsc_users WHERE sid = '$arsc_sid'");
              break;
  }
  header("Expires: Sun, 28 Dec 1997 09:32:45 GMT");
  header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache");
  header("Content-Type: text/html");
  ?>
  <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
  <html>
   <head>
    <script language="Javascript">
    <!--
     parent.msg.document.write('<?php echo filter_posting("System", date("H:i:s"), "<font size=4><b>".$arsc_message."</b></font>", $arsc_room); ?>\n');
    // -->
    </script>
   </head>
  </html>
  <?php
 }
 else
 {
  header("Expires: Sun, 28 Dec 1997 09:32:45 GMT");
  header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache");
  header("Content-Type: text/html");
  header("Refresh: 4; URL=jsupdate.php?arsc_sid=".$arsc_sid."&arsc_lastid=".$arsc_b["timeid"]);
  ?>
  <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
  <html>
   <head>
    <script language="Javascript">
    <!--
     <?php
     set_magic_quotes_runtime(0);
     if ($arsc_enter == "true")
     {
      $arsc_sendtime = date("H:i:s");
      $arsc_timeid = my_microtime();
      $arsc_message = "/msg ".$arsc_my["user"]." ".$arsc_lang_welcome;
      $arsc_enter_text = filter_posting("System", $arsc_sendtime, $arsc_message, $arsc_room);
      ?>
      parent.msg.document.write('<?php echo str_replace("\n", "\\n", $arsc_htmlhead); ?>\n');
      parent.msg.document.write('<?php echo $arsc_enter_text; ?>\n');
      <?php
     }
     if ($arsc_result = mysql_query("SELECT * from arsc_room_$arsc_room WHERE timeid > '$arsc_lastid' ORDER BY timeid ASC"))
     {
      while ($arsc_a = mysql_fetch_array($arsc_result))
      {
       ?>
       parent.msg.document.write('<?php echo str_replace("\n", "\\n", filter_posting($arsc_a["user"], $arsc_a["sendtime"], $arsc_a["message"], $arsc_room)); ?>\n');
       <?php
      }
     }
     $arsc_ping = time();
     $arsc_ip = getenv ("REMOTE_ADDR");
     mysql_query("UPDATE arsc_users SET lastping = '$arsc_ping', ip = '$arsc_ip' WHERE sid = '$arsc_sid'");
     ?>
     parent.msg.scroll(1,5000000);
    // -->
    </script>
   </head>
   <body bgcolor="#FFFFFF">
   </body>
  </html>
  <?php
 }
}
else
{
 ?>
  <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
  <html>
   <head>
    <title>
     You are out!
    </title>
   </head>
   <body bgcolor="#DDDDDD">
   </body>
  </html>
 <?php
}
?>
