<?php

include("init.inc.php");
include("../inc/config.inc.php");
include("../inc/init.inc.php");
include("../inc/functions.inc.php");
include("../inc/api.inc.php");
include("header.inc.php");

$arsc_api = new arsc_api_Class;

set_magic_quotes_runtime(1);

?>
  <font face="Arial" color="#FF0000">
   <b>
    <?php echo $arsc_message; ?>
   </b>
  </font>
  <h2>
   <font face="Arial">
    Layouts
   </font>
  </h2>

  <font face="Arial" size="2">
  <?php

  $arsc_layoutlist = $arsc_api->getLayoutlist();
  reset($arsc_layoutlist);
  while (list($arsc_key, $arsc_val) = each($arsc_layoutlist))
  {
   ?>
   <a href="edit_layout.php?arsc_layout_id=<?php echo $arsc_key; ?>"><?php echo $arsc_val; ?></a>
   <br>
   <?php
  }
  ?>
  </font>
  <form action="edit_layout.php" method="POST">
   <input type="hidden" name="arsc_create_new" value="1">
   <font face="Arial" size="2">
    Create new:
   </font>
   <input type="text" name="arsc_new_name">
   <input type="submit" value="Create">
  <form>

<?php include("footer.inc.php"); ?>
