<?php

// FIXME: We register globals ourself. Yes, this is cheating. Yes, this has to be done cleanly soon.

while (list($arsc_key, $arsc_val) = each($_GET))
{
 $$arsc_key = $arsc_val;
}
while (list($arsc_key, $arsc_val) = each($_POST))
{
 $$arsc_key = $arsc_val;
}
?>
