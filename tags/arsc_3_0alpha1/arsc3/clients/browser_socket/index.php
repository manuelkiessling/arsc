<?php

include("../../base/inc/config.inc.php");
include("../../base/inc/init.inc.php");
include("../../base/inc/functions.inc.php");
include("../../base/inc/api.inc.php");

$arsc_api = new arsc_api_Class;
$arsc_my = $arsc_api->getUserValuesBySID($arsc_sid);

$arsc_result = @mysql_query("SELECT COUNT(id) AS cnt FROM arsc_users WHERE ip = '".$arsc_my["ip"]."'", ARSC_PARAMETER_DB_LINK);
$arsc_a = @mysql_fetch_array($arsc_result);
$arsc_server = $arsc_a["cnt"] - 1;
if ($arsc_server > 9) $arsc_server = 0;


?>
<html>
 <head>
  <title>
   <?php echo ARSC_PARAMETER_TITLE; ?>
  </title>
 </head>
 <frameset cols="193,*" border="0" framespacing="no" frameborder="0" marginwidth="2" marginheight="1">
  <frame src="http://srv<?php echo $arsc_server; ?>.<?php echo getenv("HTTP_HOST"); ?><?php echo dirname($PHP_SELF); ?>/../shared/browser/roomlist.php?arsc_sid=<?php echo $arsc_sid; ?>" name="roomlist" scrolling="auto" noresize marginwidth="0" marginheight="0">
  <frameset cols="*,120" border="0" framespacing="no" frameborder="0" marginwidth="2" marginheight="1">
   <frameset rows="0,80,*,40" border="1" framespacing="no" frameborder="0" marginwidth="2" marginheight="1">
    <frame src="../shared/browser/empty.php" NAME="empty" scrolling="no" noresize marginwidth="0" marginheight="0">
    <frame src="http://www.christinafanclub.at/chat/kopf.php" name="external" scrolling="no" noresize marginwidth="0" marginheight="0">
    <frame src="http://srv<?php echo $arsc_server; ?>.<?php echo ARSC_PARAMETER_SOCKETSERVER_ADRESS.":".ARSC_PARAMETER_SOCKETSERVER_PORT; ?>/?arsc_sid=<?php echo $arsc_sid; ?>" NAME="msg" scrolling="auto" noresize marginwidth="2" marginheight="0">
    <frame src="chatinput.php?arsc_sid=<?php echo $arsc_sid; ?>" name="input" scrolling="no" noresize marginwidth="2" marginheight="1">
   </frameset>
   <frame src="../shared/browser/userlist.php?arsc_sid=<?php echo $arsc_sid; ?>" name="users" scrolling="auto" noresize marginwidth="2" marginheight="2">
  </frameset>
 </frameset>
 <noframes>
  Sorry, this version of ARSC needs a browser that understands framesets. But we have a lynx-friendly version too.
 </noframes>
</html>
