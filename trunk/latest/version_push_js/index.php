<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
 <head>
  <title>
   ARSC - ARSC Really Simple Chat
  </title>
 </head>
 <script language="JavaScript">
 <!--
  if(top.frames.length > 0)
  {
   top.location.href=self.location;
  }
 //-->
 </script>
 <frameset cols="193,*,120" border="0" framespacing="no" frameborder="0" marginwidth="2" marginheight="1">
  <frame src="../shared/roomlist.php?arsc_sid=<?php echo $arsc_sid; ?>" name="roomlist" scrolling="auto" noresize marginwidth="0" marginheight="0">
  <frameset rows="1,*,40" border="1" framespacing="no" frameborder="0" marginwidth="2" marginheight="1">
   <frame src="../shared/empty.php" NAME="empty" scrolling="no" noresize marginwidth="0" marginheight="0">
   <frame src="chatmsg.php?arsc_sid=<?php echo $arsc_sid; ?>" NAME="msg" scrolling="auto" noresize marginwidth="2" marginheight="1">
   <frame src="chatinput.php?arsc_sid=<?php echo $arsc_sid; ?>" name="input"  scrolling="no" noresize marginwidth="2" marginheight="1">
  </frameset>
  <frame src="../shared/userlist.php?arsc_sid=<?php echo $arsc_sid; ?>&arsc_enter=true" name="users" scrolling="auto" noresize marginwidth="5" marginheight="5">
 </frameset>
 <noframes>
  Sorry, ARSC needs a browser that understands framesets. We have a Lynx friendly version too.
 </noframes>
</html>
