<?php

include("init.inc.php");
include("../inc/config.inc.php");
include("../inc/init.inc.php");
include("../inc/functions.inc.php");

set_magic_quotes_runtime(1);

mysql_query("UPDATE arsc_parameters_levels SET level".$arsc_level." = '$arsc_switchto' WHERE command = '$arsc_command'", ARSC_PARAMETER_DB_LINK);
header("Location: levels.php?arsc_message=".urlencode("Right updated."));

?>
