<?php

include("init.inc.php");
include("../inc/config.inc.php");
include("../inc/init.inc.php");
include("../inc/functions.inc.php");

set_magic_quotes_runtime(1);

$arsc_save_user = arsc_cleanUserName($arsc_save_user);

if (mysql_query("UPDATE arsc_registered_users SET
                 user = '$arsc_save_user',
                 password = '$arsc_save_password',
                 language = '$arsc_save_language',
                 level = '$arsc_save_level',
                 color = '$arsc_save_color',
                 email = '$arsc_save_email',
                 sex = '$arsc_save_sex',
                 location = '$arsc_save_location',
                 color = '$arsc_save_color',
                 hobbies = '$arsc_save_hobbies',
                 flag_guestbook = '$arsc_save_flag_guestbook',
                 flag_locked = '$arsc_save_flag_locked'
                 WHERE id = '$arsc_save_id'", ARSC_PARAMETER_DB_LINK))
{
 header("Location: change_user.php?arsc_user=".$arsc_save_user."&arsc_message=".urlencode("Changes were saved"));
 die();
}
else
{
 header("Location: change_user.php?arsc_user=".$arsc_user."&arsc_message=".urlencode("Could not save changes!"));
 die();
}
?>
