<?php

include("../config.inc.php");
include("../functions.inc.php");

set_magic_quotes_runtime(1);

reset($arsc_save_parameters);
while (list($key, $val) = each($arsc_save_parameters))
{
 mysql_query("UPDATE arsc_parameters SET value = '".stripslashes($val)."' WHERE name = '$key'");
}

reset($arsc_save_parameters_smilies);
while (list($key, $val) = each($arsc_save_parameters_smilies))
{
 mysql_query("UPDATE arsc_parameters_smilies SET value = '".stripslashes($val)."' WHERE id = '$key'");
}

header("Location: index.php?arsc_message=".urlencode("Parameters successfully saved."));

?>