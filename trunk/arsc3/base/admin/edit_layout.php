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

  <?php
  if ($arsc_create_new == 1)
  {
   mysql_query("INSERT INTO arsc_layouts (name) VALUES ('$arsc_new_name')", ARSC_PARAMETER_DB_LINK);
   $arsc_result = mysql_query("SELECT id FROM arsc_layouts WHERE name = '$arsc_new_name'", ARSC_PARAMETER_DB_LINK);
   $arsc_a = mysql_fetch_array($arsc_result);
   $arsc_layout_id = $arsc_a["id"];
   $arsc_result = mysql_query("SELECT * FROM arsc_layouts WHERE id = 1", ARSC_PARAMETER_DB_LINK);
   $arsc_a = mysql_fetch_array($arsc_result);
   while (list($arsc_key, $arsc_val) = each($arsc_a))
   {
    if ($arsc_key <> "id" && $arsc_key <> "name" && !is_numeric($arsc_key))
    {
     if (ereg("template_browser_", $arsc_key)) $arsc_val = "<!-- DEFINING THIS ONE MAKE NO SENSE! -->";
     $arsc_query .= $arsc_key." = '".$arsc_val."', ";
    }
   }
   $arsc_query = substr($arsc_query, 0, -2);
   mysql_query("UPDATE arsc_layouts SET ".$arsc_query." WHERE id = ".$arsc_layout_id, ARSC_PARAMETER_DB_LINK);
  }
  ?>

  <form action="save_layout.php" method="POST">
   <input type="hidden" name="arsc_layout_id" value="<?php echo $arsc_layout_id; ?>">
   <?php

   $arsc_layoutvalues = $arsc_api->getLayoutValues($arsc_layout_id);
   reset($arsc_layoutvalues);
   while (list($arsc_key, $arsc_val) = each($arsc_layoutvalues))
   {
    if (!is_numeric($arsc_key) && $arsc_key <> "id")
    {
     ?>
     <font face="Arial" size="2">
      <?php echo $arsc_key; ?>:
     </font>
     <br>
     <?php
     if (ereg("template_", $arsc_key))
     {
      ?>
      <textarea rows="30" cols="100" wrap="virtual" name="arsc_save[<?php echo $arsc_key; ?>]"><?php echo stripslashes(htmlspecialchars($arsc_val)); ?></textarea>
      <?php
     }
     else
     {
      ?>
      <input type="text" name="arsc_save[<?php echo $arsc_key; ?>]" value="<?php echo $arsc_val; ?>">
      <?php
     }
     ?>
     <br>
     <br>
     <?php
    }
   }
   ?>
   <input type="submit">
  </form>
<?php include("footer.inc.php"); ?>
