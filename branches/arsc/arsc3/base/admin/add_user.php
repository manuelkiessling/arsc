<?php

include("init.inc.php");
include("../inc/config.inc.php");
include("../inc/init.inc.php");
include("../inc/functions.inc.php");

set_magic_quotes_runtime(1);

$arsc_newuser = arsc_cleanUserName($arsc_newuser);

mysql_query("INSERT INTO arsc_registered_users (user) VALUES ('$arsc_newuser')", ARSC_PARAMETER_DB_LINK);
header("Location: change_user.php?arsc_user=".urlencode($arsc_newuser));

?>
