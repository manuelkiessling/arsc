<?php

include("../inc/config.inc.php");
include("../inc/init.inc.php");

echo '<font face="Arial"><b>Step 1: Reading MySQL Dump...</b></font><br>';
$arsc_fp = fopen("install.sql", "r");
$arsc_sqlqueries = fread($arsc_fp, filesize("install.sql"));
$arsc_sqlquery = explode(";\n", $arsc_sqlqueries);
echo '<font face="Arial"><b>...done.</b></font><br><br>';

echo '<font face="Arial"><b>Step 2: Creating MySQL tables...</b></font><br>';
while(list($arsc_key, $arsc_query) = each($arsc_sqlquery))
{
 $arsc_query = trim(str_replace("\n", "", $arsc_query));
 if($arsc_query <> "")
 {
  mysql_query($arsc_query, ARSC_PARAMETER_DB_LINK);
  if(mysql_error() <> "")
  {
   echo '<font face="Arial" color="#FF0000">A MySQL error occured: </font><font face="Arial">'.mysql_error().'</font><br>';
  }
 }
}
echo '<font face="Arial"><b>...done.</b></font><br><br>';

echo '<font face="Arial"><b>Step 3: Setting parameters according to your environment...</b></font><br>';
$arsc_basedir = str_replace("base/install/index.php", "", $_SERVER["PHP_SELF"]);
mysql_query("UPDATE arsc_parameters SET value = '".$_SERVER["SERVER_NAME"]."' WHERE name = 'socketserver_adress'", ARSC_PARAMETER_DB_LINK);
if(mysql_error() <> "")
{
 echo '<font face="Arial" color="#FF0000">A MySQL error occured: </font><font face="Arial">'.mysql_error().'</font><br>';
}
mysql_query("UPDATE arsc_parameters SET value = 'http://".$_SERVER["SERVER_NAME"].$arsc_basedir."base/pic/smilies/' WHERE name = 'smilies_path'", ARSC_PARAMETER_DB_LINK);
if(mysql_error() <> "")
{
 echo '<font face="Arial" color="#FF0000">A MySQL error occured: </font><font face="Arial">'.mysql_error().'</font><br>';
}
mysql_query("UPDATE arsc_parameters SET value = 'webmaster@".$_SERVER["SERVER_NAME"]."' WHERE name = 'register_owner_email'", ARSC_PARAMETER_DB_LINK);
if(mysql_error() <> "")
{
 echo '<font face="Arial" color="#FF0000">A MySQL error occured: </font><font face="Arial">'.mysql_error().'</font><br>';
}
mysql_query("UPDATE arsc_parameters SET value = 'http://".$_SERVER["SERVER_NAME"].$arsc_basedir."' WHERE name = 'register_homepage'", ARSC_PARAMETER_DB_LINK);
if(mysql_error() <> "")
{
 echo '<font face="Arial" color="#FF0000">A MySQL error occured: </font><font face="Arial">'.mysql_error().'</font><br>';
}
mysql_query("UPDATE arsc_parameters SET value = 'http://".$_SERVER["SERVER_NAME"].$arsc_basedir."' WHERE name = 'baseurl'", ARSC_PARAMETER_DB_LINK);
if(mysql_error() <> "")
{
 echo '<font face="Arial" color="#FF0000">A MySQL error occured: </font><font face="Arial">'.mysql_error().'</font><br>';
}
echo '<font face="Arial"><b>...done.</b></font><br><br>';

echo '<font face="Arial"><b>Step 3: Setting account passwords...</b></font><br>';
mt_srand((double)microtime()*1000000);
$arsc_password = substr(sha1(mt_rand(0, mt_getrandmax())), 0, 8);
mysql_query("UPDATE arsc_registered_users SET password = '".sha1($arsc_password)."' WHERE user = 'Administrator'", ARSC_PARAMETER_DB_LINK);
if(mysql_error() <> "")
{
 echo '<font face="Arial" color="#FF0000">A MySQL error occured: </font><font face="Arial">'.mysql_error().'</font><br>';
}
echo '<font face="Arial"><i>Administrator:</i> '.$arsc_password.'</font><br>';
$arsc_password = substr(sha1(mt_rand(0, mt_getrandmax())), 0, 8);
mysql_query("UPDATE arsc_registered_users SET password = '".sha1($arsc_password)."' WHERE user = 'Display'", ARSC_PARAMETER_DB_LINK);
if(mysql_error() <> "")
{
 echo '<font face="Arial" color="#FF0000">A MySQL error occured: </font><font face="Arial">'.mysql_error().'</font><br>';
}
echo '<font face="Arial"><i>Display:</i> '.$arsc_password.'</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="Arial" color="#FF0000">Please write these down!</font><br>';
$arsc_password = substr(sha1(mt_rand(0, mt_getrandmax())), 0, 8);
mysql_query("UPDATE arsc_registered_users SET password = '".sha1($arsc_password)."' WHERE user = 'Moderator'", ARSC_PARAMETER_DB_LINK);
if(mysql_error() <> "")
{
 echo '<font face="Arial" color="#FF0000">A MySQL error occured: </font><font face="Arial">'.mysql_error().'</font><br>';
}
echo '<font face="Arial"><i>Moderator:</i> '.$arsc_password.'</font><br>';
echo '<font face="Arial"><b>...done.</b></font><br><br>';

?>
