<?php

// Some more parameters

define("ARSC_VERSION", "3.0-alpha1");
define("ARSC_PARAMETER_HOSTNAME", $_SERVER["HTTP_HOST"]);
define("ARSC_PARAMETER_CURRENTDIR", dirname($_SERVER["PHP_SELF"]));
define("ARSC_PARAMETER_HTMLHEAD", "<html><head></head>\n<body bgcolor=\"#FFFFFF\">\n\n\n".str_repeat("<!-- dummy -->\n", 100)); // The HTML head for the message window to start with (<!-- dummy --> is used to get some browsers starting with output)
define("ARSC_PARAMETER_HTMLHEAD_JS", "<html><head><script language=\"JavaScript\">\n<!--\nfunction move()\n{\nif (scroll_active) window.scroll(1,400000);\nwindow.setTimeout(\"move()\",100);\n}\nscroll_active = true;\nmove();\n//-->\n</script>\n</head>\n<body bgcolor=\"#FFFFFF\" onBlur=\"scroll_active = true\" onFocus=\"scroll_active = false\">\n\n\n".str_repeat("<!-- dummy -->\n", 100)); // The HTML head for the message window to start with (with js scrolling)
define("ARSC_PARAMETER_HTMLHEAD_OUT", "<html><head><title>ARSC</title></head><body bgcolor=\"#FFFFFF\"></body></html>"); // The HTML code for standard empty pages (e.g. if a user was kicked out)


// Basic security checking FIXME: Need regexp!

function arsc_checkvar($var)
{
 if(   eregi(" UPDATE ", $var)
    OR eregi(" SELECT ", $var)
    OR eregi(" DELETE ", $var)
    OR eregi(" INSERT ", $var)
    OR eregi(" DATA ", $var)
    OR eregi(" FILE ", $var)
   ) die("Invalid data: ".$var);
 return TRUE;
}

function arsc_getvar($var)
{
 GLOBAL $_GET, $_POST;
 if ($_GET[$var] <> "") $return = $_GET[$var]; elseif ($_POST[$var] <> "") $return = $_POST[$var];
 arsc_checkvar($return);
 return($return);
}

// Get and check user-submitted values
if ($_GET["arsc_sid"] <> "")
{
 $arsc_sid = $_GET["arsc_sid"];
 if (!strlen($arsc_sid) == 32) die("Invalid session");
}
elseif ($_POST["arsc_sid"] <> "")
{
 $arsc_sid = $_POST["arsc_sid"];
 if (!strlen($arsc_sid) == 32) die("Invalid session");
}
arsc_checkvar($arsc_sid);

$arsc_error = arsc_getvar("arsc_error");
$arsc_user = arsc_getvar("arsc_user");
$arsc_password = arsc_getvar("arsc_password");
$arsc_room = arsc_getvar("arsc_room");
$arsc_chatversion = arsc_getvar("arsc_chatversion");
$arsc_template = arsc_getvar("arsc_template");
$arsc_language = arsc_getvar("arsc_language");
$arsc_message = arsc_getvar("arsc_message");
$arsc_pretext = arsc_getvar("arsc_pretext");
$arsc_color = arsc_getvar("arsc_color");


// Connect the database
define("ARSC_PARAMETER_DB_LINK", mysql_connect(ARSC_PARAMETER_DB_HOST, ARSC_PARAMETER_DB_USER, ARSC_PARAMETER_DB_PASSWORD));
mysql_select_db(ARSC_PARAMETER_DB_DATABASE, ARSC_PARAMETER_DB_LINK);

// Get parameters from db
if($arsc_query = mysql_query("SELECT name, value FROM arsc_parameters", ARSC_PARAMETER_DB_LINK))
{
 while ($arsc_result = mysql_fetch_array($arsc_query))
 {
  define("ARSC_PARAMETER_".strtoupper($arsc_result["name"]), $arsc_result["value"]);
 }
}

// Get templates from db
if($arsc_query1 = mysql_query("SELECT DISTINCT template FROM arsc_templates", ARSC_PARAMETER_DB_LINK))
{
 while ($arsc_result1 = mysql_fetch_array($arsc_query1))
 {
  $arsc_temp_varname = "arsc_template_".$arsc_result1["template"];
  if($arsc_query2 = mysql_query("SELECT name, value FROM arsc_templates WHERE template = '{$arsc_result1["template"]}'", ARSC_PARAMETER_DB_LINK))
  {
   while ($arsc_result2 = mysql_fetch_array($arsc_query2))
   {
    $arsc_temp_name = $arsc_result2["name"];
    $arsc_temp_value = $arsc_result2["value"];
    ${$arsc_temp_varname}["$arsc_temp_name"] = $arsc_temp_value;
   }
  }
 }
}

// Get smilies from db
if($arsc_query = mysql_query("SELECT id, value FROM arsc_smilies", ARSC_PARAMETER_DB_LINK))
{
 while ($arsc_result = mysql_fetch_array($arsc_query))
 {
  $arsc_temp_id = $arsc_result["id"];
  $arsc_temp_value = $arsc_result["value"];
  $arsc_smilies[$arsc_temp_id] = $arsc_temp_value;
 }
}

// Because we include the language file, and its name is a user supplied variable, we check for allowed values
if ($arsc_language <> "german" AND $arsc_language <> "english")
{
 $arsc_language = ARSC_PARAMETER_STANDARD_LANGUAGE;
}

?>