<?php

include("../config.inc.php");
include("../functions.inc.php");

if (!$arsc_admin_password == $arsc_parameters["selfop_password"])
{
 ?>
  <form action="index.php" method="POST">
   Admin password:
   <input type="text" name="arsc_admin_password">
   <input type="submit" value="Login">
  </form>
 <?php
 die();
}

set_magic_quotes_runtime(1);

$arsc_save_parameters["title"] = str_replace("'", "&quot;", $arsc_save_parameters["title"]);
$arsc_save_parameters["title"] = str_replace("\2", "&quot;", $arsc_save_parameters["title"]);

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
  mysql_query("UPDATE arsc_parameters_smilies SET value = '".stripslashes($val)."' WHERE id = '$key'");
 }
 else
 {
  mysql_query("INSERT INTO arsc_parameters (id, value) VALUES ('$key', '".stripslashes($val)."')");
 }
}

header("Location: ./?arsc_admin_password=".urlencode($arsc_admin_password)."&arsc_message=".urlencode("Parameters successfully saved.<br>Please note that if you use the socket server, it needs to be restarted for most changes to take effect."));
die();

?>