<?php

include("../config.inc.php");
include("../functions.inc.php");

set_magic_quotes_runtime(1);

reset($arsc_save_parameters);
while (list($key, $val) = each($arsc_save_parameters))
{
 if (mysql_query("SELECT value FROM arsc_parameters WHERE name = '$key'"))
 {
  mysql_query("UPDATE arsc_parameters SET value = '".stripslashes($val)."' WHERE name = '$key'");
 }
 else
 {
  mysql_query("INSERT INTO arsc_parameters (name, value) VALUES ('$key', '".stripslashes($val)."')");
 }
}

reset($arsc_save_parameters_smilies);
while (list($key, $val) = each($arsc_save_parameters_smilies))
{
 if (mysql_query("SELECT value FROM arsc_parameters WHERE id = '$key'"))
 {
  mysql_query("UPDATE arsc_parameters_smilies SET value = '".stripslashes($val)."' WHERE id = '$key'")
 }
 else
 {
  mysql_query("INSERT INTO arsc_parameters (id, value) VALUES ('$key', '".stripslashes($val)."')");
 }
}

header("Location: index.php?arsc_message=".urlencode("Parameters successfully saved."));

?>