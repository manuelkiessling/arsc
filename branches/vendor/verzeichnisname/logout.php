<?php

include("config.inc.php");
if ($arsc_my = getdatafromsid($arsc_sid))
{
 mysql_query("DELETE from arsc_users WHERE sid = '$arsc_sid'");
 header ("Location: home.php?arsc_language=".$arsc_my["language"]);
}
else
{
 header ("Location: index.php");
}

?>