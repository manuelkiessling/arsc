<body bgcolor="<?php echo $arsc_params['defaultBGcolor']; ?>"
      text="<?php echo $arsc_params['defaultTEXTcolor']; ?>"
      link="<?php echo $arsc_params['defaultLINKcolor']; ?>"
      alink="<?php echo $arsc_params['defaultALINKcolor']; ?>"
      vlink="<?php echo $arsc_params['defaultVLINKcolor']; ?>"
>
<center>
<div align=center>
<form method=post action=home.php onSubmit="<?php echo (($arsc_s == 1) ? 'parent.' : '') . 'arsc_JsSubmit(' . $arsc_s; ?>)">
<input type=hidden name=arsc_js value=0>
<input type=hidden name=arsc_fr value=<?php echo $arsc_s; ?>>
<table align=center cellpadding=6 bgcolor="<?php echo $arsc_params['userlistBGcolor']; ?>">
<tr>
<td>
<font face="<?php echo $arsc_params['defaultFont']; ?>"><b>Choose your language: </b></font>
<select name=arsc_lang>
<?php
if ($arsc_handle = opendir ('../lang') )
{
    while (false !== ($arsc_file = readdir ($arsc_handle) ) )
    {
        if (substr ($arsc_file, 0, 1) != '.')
        {
            $arsc_lang = substr ($arsc_file, -4);
            echo '<option' . ( ($arsc_lang == $arsc_params['defaultLang']) ? ' selected' : '') . '>' . ucfirst ($arsc_lang) . '</option>\n';
        }
    } 
    closedir ($arsc_handle); 
}
?>
</select>
<input type=submit value='Go &gt;'>
</form>
<table align=center cellpadding=1 cellspacing=0 border=0 bgcolor="<?php echo $params['versionBGcolor']; ?>">
<tr><td><a href='http://manuel.kiessling.net/projects/software/arsc/' target='_blank' title='The Homepage of ARSC'><img src='../images/poweredby102x47.jpg' width=102 height=47 border=0 alt='Powered by ARSC!'></a></td></tr>
</table>
<font face="<?php echo $arsc_params['defaultFont']; ?>" size='-2' color="<?php echo $arsc_params['versionTXTcolor']; ?>">[v<?php echo ARSC_VERSION; ?>]</font>
</div>
</center>
</body>
