#!/usr/local/php-cgi/current/bin/php -q
<?php
set_time_limit (0);
set_magic_quotes_runtime(0);

include("../config.inc.php");
include("../functions.inc.php");
include("../filter.inc.php");

function arsc_getmessages($arsc_sid)
{
 GLOBAL $arsc_my,
        $arsc_param,
        $arsc_lang,
        $argv,
        $arsc_num;
 
 $arsc_sid = str_replace("/", "", $arsc_sid);
 
 if ($arsc_my = arsc_getdatafromsid($arsc_sid) <> FALSE)
 {
  $arsc_room = $arsc_my["room"];
  if ($arsc_my["level"] < 0)
  {
   include("../shared/language/".arsc_find_language($arsc_my["user"]).".inc.php");
   switch($arsc_my["level"])
   {
    case "-1": return arsc_filter_posting("System", date("H:i:s"), "<font size=\"4\"><b>".$arsc_lang["youwerekicked"]."</b></font>", $arsc_room, 0);
               mysql_query("DELETE from arsc_users WHERE sid = '$arsc_sid'");
   }
  }
  $arsc_my = arsc_getdatafromsid($arsc_sid);
  $arsc_room = $arsc_my["room"];
  if ($arsc_my["level"] > -1)
  {
   $arsc_posting = " \n ";
   include("../shared/language/".arsc_find_language($arsc_my["user"]).".inc.php");
   $arsc_result = mysql_query("SELECT lastmessageping from arsc_users WHERE sid = '$arsc_sid'");
   $arsc_b = mysql_fetch_array($arsc_result);
   if ($arsc_b["lastmessageping"] == "0")
   {
    $arsc_lastmessageping = arsc_microtime();
    mysql_query("UPDATE arsc_users SET lastmessageping = '$arsc_lastmessageping' WHERE sid = '$arsc_sid'");
   }
   else
   {
    $arsc_lastmessageping = $arsc_b["lastmessageping"];
    $arsc_result = mysql_query("SELECT message, user, flag_ripped, sendtime, timeid from arsc_room_$arsc_room WHERE timeid > '$arsc_lastmessageping' ORDER BY timeid ASC, id ASC");
    while ($arsc_a = mysql_fetch_array($arsc_result))
    {
     $arsc_posting .= arsc_filter_posting($arsc_a["user"], $arsc_a["sendtime"], $arsc_a["message"], $arsc_room, $arsc_a["flag_ripped"]);
     $arsc_lastmessageping = $arsc_a["timeid"];
     if ($argv[1] == "-v")
     {
      echo date("[Y-m-d H:i:s]")." {MESG} #$arsc_num | Room: $arsc_room | User: {$arsc_a["user"]} | Sendtime: {$arsc_a["sendtime"]} | Message: {$arsc_a["message"]}\n";
     }
    }
    $arsc_ping = time();
    mysql_query("UPDATE arsc_users SET lastping = '$arsc_ping', lastmessageping = '$arsc_lastmessageping' WHERE sid = '$arsc_sid'");
   }
   return $arsc_posting;
  }
 }
}

if ($argv[1] == "--help" OR $argv[1] == "-h" OR $argv[1] == "/?")
{
 echo "Starts the ARSC socket server on port {$arsc_param["socketserver_port"]}\n";
 echo "(as defined in ../config.inc.php).\n\n";
 echo "If you give the option -v ARSC will be verbose, i.e. it will\n";
 echo "print all messages an user receives. This will be quite much!\n\n";
 echo "<manuel@kiessling.net>\n\n";
 die();
}

if( false === ( $arsc_listen_socket = socket_create_listen( (string)$arsc_param["socketserver_port"], $arsc_param["socketserver_maximumusers"])))
 die( "Couldn't create listening socket on port {$arsc_param["socketserver_port"]}.\n");
if( false === socket_setopt( $arsc_listen_socket, SOL_SOCKET, SO_REUSEADDR, 1))
 die( "Couldn't set socket option\n");

socket_set_nonblock($arsc_listen_socket);
$arsc_socket_set = socket_fd_alloc();
$arsc_connected_clients = 0;
$arsc_connections = array();
$arsc_connection_info = array();
$arsc_sid = array();

echo date("[Y-m-d H:i:s]")." {SOCK} Started ARSC server listening on port ".$arsc_param["socketserver_port"].".\n";

while(1) // A Neverending Story
{
 socket_fd_zero( $arsc_socket_set);
 socket_fd_set( $arsc_socket_set, array_merge( array( $arsc_listen_socket), $arsc_connections));
 if( socket_select( $arsc_socket_set, NULL, NULL, 0, 0))
 { 
  foreach( $arsc_connections as $connection) 
  if( socket_fd_isset( $arsc_socket_set, $connection))
  { 
   foreach( $arsc_connection_info as $arsc_num => $info)
   if( $connection == $info[ 'handle'])
   { 
    if ($arsc_sid[$arsc_num] == "")
    {
     $received_data = socket_read( $connection, 100);
     ereg("arsc_sid=(.*) HTTP", $received_data, $a);
     $arsc_sid[$arsc_num] = $a[1];
     if ($arsc_sid[$arsc_num] <> "")
     {
      $arsc_my = arsc_getdatafromsid($arsc_sid[$arsc_num]);
      echo date("[Y-m-d H:i:s]")." {ARSC} #$arsc_num | Connection is an ARSC client (SID $arsc_sid[$arsc_num], nickname {$arsc_my["user"]}, room {$arsc_my["room"]})\n";
      socket_write($connection, $arsc_param["htmlhead_js"], strlen($arsc_param["htmlhead_js"]));
      $arsc_sendtime = date("H:i:s");
      $arsc_timeid = arsc_microtime();
      @include("../shared/language/".arsc_find_language($arsc_my["user"]).".inc.php");
      $arsc_message = "/msg ".$arsc_my["user"]." ".$arsc_lang["welcome"];
      $arsc_message = arsc_filter_posting("System", $arsc_sendtime, $arsc_message, $arsc_my["room"], 0);
      socket_write($connection, $arsc_message, strlen($arsc_message));
     }
    }
    else
    {
     $arsc_newmessages = arsc_getmessages($arsc_sid[$arsc_num]);
     if ($arsc_newmessages <> "")
     {
      if (!@socket_write($connection, $arsc_newmessages, strlen($arsc_newmessages)))
      {
       $arsc_user = $arsc_my["user"];
       $arsc_room = $arsc_my["room"];
       $arsc_nice_room = arsc_nice_room($arsc_room);
       $arsc_timeid = arsc_microtime();
       $arsc_sendtime = date("H:i:s");
       mysql_query("DELETE from arsc_users WHERE sid = '{$arsc_sid[$arsc_num]}'");
       mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('arsc_user_quit~~$arsc_user~~$arsc_nice_room', 'System', '$arsc_sendtime', '$arsc_timeid')");
       echo date("[Y-m-d H:i:s]")." {SOCK} #$arsc_num | Client #$arsc_num {$arsc_connection_info[$arsc_num]['address']}:{$arsc_connection_info[ $arsc_num][ 'port']} disconnected\n";
       echo date("[Y-m-d H:i:s]")." {ARSC} #$arsc_num | Cannot reach user (SID $arsc_sid[$arsc_num], nickname {$arsc_my["user"]}, room {$arsc_my["room"]})\n";
       unset($arsc_connections[$index]);
       unset($arsc_connection_info[$arsc_num]);
       flush();
      }
     }
     else
     {
      $arsc_user = $arsc_my["user"];
      $arsc_room = $arsc_my["room"];
      $arsc_nice_room = arsc_nice_room($arsc_room);
      $arsc_timeid = arsc_microtime();
      $arsc_sendtime = date("H:i:s");
      mysql_query("DELETE from arsc_users WHERE sid = '{$arsc_sid[$arsc_num]}'");
      mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('arsc_user_quit~~$arsc_user~~$arsc_nice_room', 'System', '$arsc_sendtime', '$arsc_timeid')");
      echo date("[Y-m-d H:i:s]")." {ARSC} #$arsc_num | User no longer known to ARSC (SID was $arsc_sid[$arsc_num])\n";
      echo date("[Y-m-d H:i:s]")." {SOCK} #$arsc_num | Client {$arsc_connection_info[$arsc_num]['address']}:{$arsc_connection_info[ $arsc_num][ 'port']} disconnected\n";
      unset($arsc_connections[$index]);
      unset($arsc_connection_info[$arsc_num]);
      flush();
     }
    }
   }
  } 
  if( socket_fd_isset( $arsc_socket_set, $arsc_listen_socket))
  {
   $arsc_connection_info[ $arsc_connected_clients][ 'handle'] = socket_accept( $arsc_listen_socket);
   $arsc_connections[] = $arsc_connection_info[ $arsc_connected_clients][ 'handle'];
   socket_getpeername( $arsc_connection_info[ $arsc_connected_clients][ 'handle'], &$arsc_connection_info[ $arsc_connected_clients]['address'], &$arsc_connection_info[ $arsc_connected_clients][ 'port']);
   echo date("[Y-m-d H:i:s]")." {SOCK} #$arsc_connected_clients | Connection from {$arsc_connection_info[ $arsc_connected_clients]['address']} on port {$arsc_connection_info[ $arsc_connected_clients][ 'port']}\n";
   flush();
   $arsc_connected_clients++;
  } 
 } 
 usleep($arsc_param["socketserver_refresh"]); 
}

?>