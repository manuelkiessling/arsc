<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
 <head>
  <title>
   ARSC - ARSC Really Simple Chat
  </title>
 </head>
 <frameset cols="*,120" border="0" framespacing="no" frameborder="0" marginwidth="2" marginheight="1">
  <frameset rows="*,40,1" border="1" framespacing="no" frameborder="0" marginwidth="2" marginheight="1">
   <frame src="chatmsg.php?arsc_sid=<?php echo $arsc_sid; ?>#end" NAME="msg" scrolling="auto" noresize marginwidth="2" marginheight="1">
   <frame src="chatinput.php?arsc_sid=<?php echo $arsc_sid; ?>" name="input"  scrolling="no" noresize marginwidth="2" marginheight="1">
   <frame src="../shared/catchlogout.php?arsc_sid=<?php echo $arsc_sid; ?>" NAME="catchlogout" scrolling="no" noresize marginwidth="0" marginheight="0">
  </frameset>
  <frame src="../shared/chatusers.php?arsc_sid=<?php echo $arsc_sid; ?>&arsc_enter=true" name="users" scrolling="auto" noresize marginwidth="5" marginheight="5">
 </frameset>
 <noframes>
  Sorry, ARSC needs a browser that understands framesets.
 </noframes>
</html>
