<?php

    // index.php does a pre-check for the existence of Javascript and frames.
    // Neither are required for this to work.

require_once ('shared/misc/config.php');
require_once ('shared/misc/functions.php');
?>
<html>
<head>
<title><?php echo $arsc_params['title']; ?></title>
<script language='Javascript'>
<!-- 

function arsc_JsSubmit(x)
{
    var d,f;
    if (x == 1)
    {
        d = _.document;
    }
    else
    {
        d = document;
    }
    f = d.forms[0];
    f.arsc_js.value = 1;
    f.submit();
}

// -->
</script>
</head>
<frameset rows=100%,*>
    <frame name='_' src='shared/misc/frametest.php'>

    <!-- Only lynx-type users will see the frame name below - 
         they should not use frames, even though they can -->
    <frame name='Please use the form below.' src='shared/misc/blank.html'>

<noframes>
<?php
$arsc_s = 0;
include ('shared/misc/indexbody.php');
?>
</noframes>
</frameset>
</html>

