<?php

include("init.inc.php");
include("../inc/config.inc.php");
include("../inc/init.inc.php");
include("../inc/functions.inc.php");
include("header.inc.php");

set_magic_quotes_runtime(1);

?>
<table cellspacing="4">
<?php
$arsc_parameters = get_defined_constants();
while(list($key, $val) = each($arsc_parameters))
{
 echo "<tr bgcolor=\"#EEEEEE\"><td><font face=\"Arial\" size=\"2\"><b> $key: </b></font></td><td><font face=\"Arial\" size=\"2\">".htmlspecialchars($val)."</font></td><tr>\n";
}
?>
</table>
<?php include("footer.inc.php"); ?>
