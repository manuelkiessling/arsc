<?php

include ("../config.inc.php");

function shutdown()
{
 GLOBAL $arsc_sid,
        $arsc_my;
 if ($arsc_my["user"] <> "")
 {
  $arsc_user = $arsc_my["user"];
  $arsc_room = $arsc_my["room"];
  $arsc_nice_room = nice_room($arsc_room);
  $arsc_timeid = my_microtime();
  $arsc_sendtime = date("H:i:s");
  mysql_query("DELETE from arsc_users WHERE sid = '$arsc_sid'");
  mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('arsc_user_quit~~$arsc_user~~$arsc_nice_room', 'System', '$arsc_sendtime', '$arsc_timeid')");
 }
}

register_shutdown_function("shutdown");

$arsc_my = getdatafromsid($arsc_sid);

while(!connection_aborted())
{
 echo " ";
 flush();
 sleep(2);
}

?>