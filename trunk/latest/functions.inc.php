<?php

// Hack around here only if you know what you are doing

// Connecting the db
mysql_connect($arsc_param["db_host"], $arsc_param["db_user"], $arsc_param["db_passwd"]);
mysql_select_db($arsc_param["db_db"]);

// The standard language
if (!isset($arsc_language))
{
 $arsc_language = $arsc_param["standard_language"];
}

// The HTML head for the message window to start with (<!-- nix --> is used to get some browsers starting with output
$arsc_param["htmlhead"] = "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\"><html><head></head>\n<body bgcolor=\"".$arsc_color["msg_window_background"]."\">\n\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n";

// The HTML head for the message window to start with (with js scrolling)
$arsc_param["htmlhead_js"] = "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\"><html><head><script language=\"JavaScript\">\n<!--\nfunction move()\n{\nif (scroll_active) window.scroll(1,400000);\nwindow.setTimeout(\"move()\",100);\n}\nscroll_active = true;\nmove();\n//-->\n</script>\n</head>\n<body bgcolor=\"".$arsc_color["msg_window_background"]."\" onBlur=\"scroll_active = true\" onFocus=\"scroll_active = false\">\n\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n";

// The HTML code for standard empty pages (e.g. if a user was kicked out)
$arsc_param["htmlhead_out"] = "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\"><html><head><title>You are out!</title></head><body bgcolor=\"".$arsc_color["standard_window_background"]."\"></body></html>";

// The HTML head for the message input page
$arsc_param["htmlhead_msginput"] = "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\"><html><head><title>Message Input</title></head><body bgcolor=\"".$arsc_color["msginput_window_background"]."\" link=\"".$arsc_color["msginput_window_link"]."\">";

// The HTML code for the message input page, with JavaScript
if ($arsc_param["keep_sended_message"] == "yes")
{
 $arsc_param["htmlhead_msginput_js"] = "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\"><html><head><title>Message Input</title>\n<script language=\"Javascript\">\n<!--\nscroll_active = true;\nfunction empty_field_and_submit()\n{\ndocument.fdummy.arsc_message.value=document.f.arsc_message.value;\ndocument.fdummy.submit();\ndocument.f.arsc_message.focus();\ndocument.f.arsc_message.select();\nreturn false;\n}\n// -->\n</script>\n</head><body bgcolor=\"".$arsc_color["msginput_window_background"]."\" link=\"".$arsc_color["msginput_window_link"]."\" OnLoad=\"document.f.arsc_message.focus();document.f.arsc_message.select();\">";
}
else
{
 $arsc_param["htmlhead_msginput_js"] = "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\"><html><head><title>Message Input</title>\n<script language=\"Javascript\">\n<!--\nscroll_active = true;\nfunction empty_field_and_submit()\n{\ndocument.fdummy.arsc_message.value=document.f.arsc_message.value;\ndocument.fdummy.submit();\ndocument.f.arsc_message.value='';\ndocument.f.arsc_message.focus();\n\nreturn false;\n}\n// -->\n</script>\n</head><body bgcolor=\"".$arsc_color["msginput_window_background"]."\" link=\"".$arsc_color["msginput_window_link"]."\" OnLoad=\"document.f.arsc_message.focus();document.f.arsc_message.select();\">";
}

// return an usable microtime
function arsc_microtime()
{
 $mt = microtime();
 $mta = explode(" ",$mt);
 return str_replace("0.", "", $mta[1].$mta[0]);
}

// This function returns an array with all important values attached to a sessionid
function arsc_getdatafromsid($arsc_sid)
{
 $result = mysql_query("SELECT user, lastping, ip, room, language, version, level, flag_ripped, sid, lastmessageping from arsc_users WHERE sid = '$arsc_sid'");
 return mysql_fetch_array($result);
}

// This function returns the language the given user has choosen
function arsc_find_language($arsc_user)
{
 $result = mysql_query("SELECT language from arsc_users WHERE user = '$arsc_user'");
 $a = mysql_fetch_array($result);
 return $a["language"];
}


// This function returns a human readable translation of the room name
function arsc_nice_room($arsc_room)
{
 $arsc_room = str_replace("__", " / ", $arsc_room);
 $arsc_room = str_replace("_", " ", $arsc_room);
 $arsc_room = ucwords($arsc_room);
 return $arsc_room;
}

// This function returns the "real" roomname
function arsc_denice_room($arsc_room)
{
 $arsc_room = str_replace(" / ", "__", $arsc_room);
 $arsc_room = str_replace(" ", "_", $arsc_room);
 $arsc_room = strtolower($arsc_room);
 return $arsc_room;
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

?>