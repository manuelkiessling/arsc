<?php

set_magic_quotes_runtime(0);

define ('ARSC_VERSION', '3.0.0');
$arsc_params['sitePath'] = $HTTP_SERVER_VARS['SERVER_NAME'];
$arsc_dbConn = mysql_connect ($arsc_params['dbHost'], $arsc_params['dbUser'], $params['dbPass']);
mysql_select_db ($arsc_params['dbName'], $arsc_dbConn);
if ($arsc_result = mysql_query ('SELECT p.name, sp.value FROM arsc_params p, arsc_siteParams sp, arsc_sites s WHERE s.path = ' . $arsc_params['sitePath'] . ' AND sp.siteID = s.siteID AND p.paramID = sp.paramID') )
{
	while ($arsc_row = mysql_fetch_row ($arsc_result))
	{
		$arsc_params[$arsc_row[0]] = $arsc_row[1];
	}
}

if ( ($arsc_params['locked'] == 1) && !(stristr ($HTTP_SERVER_VARS['PHP_SELF'], 'admin')) )
{
	die ('<font face="' . $arsc_params['defaultFont'] . '">The chat system is currently down.</font>');
}

if ($arsc_result = mysql_query ('SELECT id, value FROM arsc_smileys') )
{
	while ($arsc_row = mysql_fetch_row ($arsc_result))
    {
		$arsc_smileys[$arsc_row[0]] = $arsc_row[1];
	}
}

if (!isset ($arsc_lang) OR !file_exists('shared/lang/'.$arsc_lang.'.php'))
{
	$arsc_lang=$arsc_params['defaultLang'];
}

// crunch multiple strings
$arsc_dtd1 = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0';
$arsc_dtd2 = '//EN" "http://www.w3.org/TR/';
$arsc_dtd  = $arsc_dtd1 . ' Transitional' . $arsc_dtd2 . 'REC-html40/loose.dtd">
';
$arsc_dtdf = $arsc_dtd1 . '1 Frameset' . $arsc_dtd2 . 'html4/frameset.dtd">
';
$arsc_html = '<html>
<head>
';
$arsc_hNorm = $arsc_dtd . $arsc_html;
$arsc_hFrame = $arsc_dtdf . $arsc_html;
$arsc_startJs = '<script language=Javascript>
<!--
';
$arsc_scrollJs = $arsc_startJs . 'function arsc_doScroll()
{    
    if (arsc_tScroll)
    {
        this.scroll(1, 400000);
        this.setTimeout("arsc_doScroll()", 100);
    }
}
arsc_tScroll = true;
arsc_doScroll();
';
$arsc_miTitle = '<title>Message Input</title>
';
$arsc_endJS = '// -->
</script>
';
$arsc_body='</head>
<body bgcolor="';

// fill IE's buffer
$arsc_fill='">

' . str_repeat (' ', 256) . '
';
$arsc_miBody = $arsc_body . $arsc_params['inputBGcolor'] . '" link="' . $arsc_params['inputLINKcolor'] . '"';
$arsc_ClrMsg1 = $arsc_hNorm . $arsc_miTitle . $arsc_startJS . 'var d=document;
function doSubmit()
{
    d.h.msg.value = d.s.msg.value;
    d.h.submit();
    d.s.msg.';
$arsc_ClrMsg2 = ';
    d.s.msg.';
$arsc_ClrMsg3 = '();
    return false;
}
' . $arsc_endJS . $arsc_miBody . ' onLoad="d.s.msg.focus();d.s.msg.select()">';


$arsc_head = $arsc_hNorm . $arsc_body . $arsc_params['msgBGcolor'] . $arsc_fill;
$arsc_headJS = $arsc_hNorm . $arsc_scrollJS . $arsc_endJS . $arsc_body . $arsc_params['msgBGcolor']. '" onBlur="arsc_tScroll = true" onFocus="arsc_tScroll = false' . $arsc_fill;
$arsc_headOut = $arsc_hNorm . '<title>Not in chat</title>' . $arsc_body . $arsc_params['defaultBGcolor'].'">
</body>
</html>';
$arsc_msgInput = $arsc_hNorm . $arsc_miTitle . $arsc_miBody. '>';
if ($arsc_params['clearMsg'] == 0)
{
	$arsc_msgInputJs = $arsc_ClrMsg1 . 'focus()' . $arsc_ClrMsg2 . 'select' . $arsc_ClrMsg3;
}
else
{
	$arsc_msgInputJs = $arsc_ClrMsg1 . 'value=""' . $arsc_ClrMsg2 . 'focus' . $arsc_ClrMsg3;
}

function arsc_mTime()
{
	return str_replace ('0.', '', implode (array_reverse (explode (' ', microtime()) ) ) );
}

function arsc_expandSid($sid)
{
	return mysql_fetch_assoc (mysql_query ('SELECT * FROM sessions WHERE sid = "' . $sid . '"') );
}

function arsc_expandSmileys($txt,$smileys,$path)
{
	while (list ($key, $val) = each ($smileys) )
	{
		$txt = str_replace ($val, '<img src="' . $path . $key . '.gif" border=0 alt="' . $val . '">', $txt);
	}
	return $txt;
}

?>
