<?php

include("../config.inc.php");
if ($arsc_my = getdatafromsid($arsc_sid))
{
 include("../shared/language/".find_language($arsc_my["user"]).".inc.php");
 
 if ($arsc_my["level"] >= 0)
  {
  ?>
  <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
  <html>
   <head>
    <title>
     Chat Input
    </title>
    <script language="Javascript">
    <!--
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
   </head>
   <body OnLoad="document.f.arsc_message.focus()" bgcolor="#DDDDDD">
    <form action="../shared/chatins.php" method="GET" target="empty" name="f" OnSubmit="return empty_field_and_submit()">
     <input type="text" name="arsc_message" size="50" maxlength="1000" value="<?php echo $arsc_pretext; ?>">
     <font face="Arial" size="2">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="../logout.php?arsc_sid=<?php echo $arsc_sid; ?>" target="_parent"><?php echo $arsc_lang_leave; ?></a>
     </font>
    </form>
    <form action="../shared/chatins.php" method="GET" target="empty" name="fdummy" OnSubmit="return empty_field_and_submit()">
     <input type="hidden" name="arsc_sid" value="<?php echo $arsc_sid; ?>">
     <input type="hidden" name="arsc_chatversion" value="header_js">
     <input type="hidden" name="arsc_message">
    </form>
   </body>
  </html>
  <?php
 }
 else
 {
  ?>
  <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
  <html>
   <head>
    <title>
     I am out!
    </title>
   </head>
   <body bgcolor="#DDDDDD">
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