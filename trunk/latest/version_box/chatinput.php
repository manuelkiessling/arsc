<?php

include("../config.inc.php");
include("../functions.inc.php");

if ($arsc_my = arsc_getdatafromsid($arsc_sid))
{
 include("../shared/language/".arsc_find_language($arsc_my["user"]).".inc.php");
 
 if ($arsc_my["level"] >= 0)
 {
  echo $arsc_param["htmlhead_msginput"];
  ?>
    <form action="../shared/chatins.php" METHOD="POST" name="f">
     <input type="hidden" name="arsc_sid" value="<?php echo $arsc_sid; ?>">
     <input type="hidden" name="arsc_chatversion" value="box">
     <input type="text" name="arsc_message" size="50" maxlength="<?php echo $arsc_param["input_maxsize"]; ?>" value="<?php echo $arsc_pretext; ?>">
     <input type="submit" value="<?php echo $arsc_lang["sendmessage"]; ?>">
     <font face="Arial" size="2">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="../logout.php?arsc_sid=<?php echo $arsc_sid; ?>" target="_parent"><?php echo $arsc_lang["leave"]; ?></a>
     </font>
    </form>
   </body>
  </html>
  <?php
 }
 else
 {
  echo $arsc_param["htmlhead_out"];
 }
}
else
{
 echo $arsc_param["htmlhead_out"];
}
?>
