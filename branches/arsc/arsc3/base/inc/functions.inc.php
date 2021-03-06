<?php

// return an usable microtime
function arsc_microtime()
{
 $mt = microtime();
 $mta = explode(" ", $mt);
 return str_replace("0.", "", $mta[1].$mta[0]);
}

// Replace smilies with image tag
function arsc_smilies_replace($text, $smilies, $smilies_pfad)
{
 while(list($key, $val) = each($smilies))
 {
  $text = str_replace($val, "<img src=\"".$smilies_pfad.$key.".gif\" border=\"0\" alt=\"".$val."\">", $text);
 }
 return $text;
}

function arsc_getdirarray($path)
{
	$handle = opendir($path);
	while($file = readdir($handle)) $return[count($return)] = $file;
	closedir($handle);
	sort($return);
	reset($return);
	return $return;
}

function arsc_getVirtualServer($ip)
{
 if (ARSC_PARAMETER_VIRTUALSERVERS_USE == "yes")
 {
  $result = mysql_query("SELECT COUNT(id) AS cnt FROM arsc_users WHERE ip = '".$ip."'", ARSC_PARAMETER_DB_LINK);
  $a = mysql_fetch_array($result);
  $server = $a["cnt"] - 1;
  if ($server > 9 OR $server < 0)
  {
   srand((double)microtime*1000000);
   $server = rand(0, 9);
  }
  $return = str_replace("%", $server, ARSC_PARAMETER_VIRTUALSERVERS_NAME);
 }
 else
 {
  $return = "";
 }
 return $return;
}

function arsc_cleanUserName($arsc_user)
{
 $arsc_user = ereg_replace("\\\\\'", "", $arsc_user);
 $arsc_user = ereg_replace("\\\\\"", "", $arsc_user);
 $arsc_user = ereg_replace("\\\\", "", $arsc_user);
 $arsc_user = ereg_replace("&", "", $arsc_user);
 $arsc_user = ereg_replace("\?", "", $arsc_user);
 $arsc_user = ereg_replace("~", "", $arsc_user);
 $arsc_user = ereg_replace("#", "", $arsc_user);
 $arsc_user = ereg_replace(" ", "_", $arsc_user);
 return $arsc_user;
}

?>
