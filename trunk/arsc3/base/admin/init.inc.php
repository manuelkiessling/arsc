<?php
while (list($arsc_key, $arsc_val) = each($_GET))
{
 $$arsc_key = $arsc_val;
}
while (list($arsc_key, $arsc_val) = each($_POST))
{
 $$arsc_key = $arsc_val;
}
?>