<?php

include("../../../base/inc/config.inc.php");
include("../../../base/inc/init.inc.php");
include("../../../base/inc/functions.inc.php");
include("../../../base/inc/inputvalidation.inc.php");

$arsc_user = arsc_validateinput($_GET["arsc_user"], NULL, "/[^a-zA-Z0-9_\-]/", 0, 32, __FILE__, __LINE__);

header("Expires: Wed, 4 Oct 1978 09:32:45 GMT");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Content-Type: text/html");
mysql_query("UPDATE arsc_users SET lastping = '".time()."' WHERE user = '".mysql_escape_string($arsc_user)."'", ARSC_PARAMETER_DB_LINK);
header("Refresh: ".(ARSC_PARAMETER_USERLIST_REFRESH / 2)."; URL=ping.php?arsc_user=".$arsc_user."&arsc_random=".time());

echo "[".date("H:i:s")."] - ".$arsc_user." - Refresh in ".(ARSC_PARAMETER_USERLIST_REFRESH / 2)." seconds.";

?>
