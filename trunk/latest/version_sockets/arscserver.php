#!/usr/local/php-cgi/4.0.7rc2/bin/php -q
<?php
set_time_limit (0);

include ("../config.inc.php");

function arsc_getmessages($arsc_sid)
{
 GLOBAL $arsc_my,
        $arsc_lang_enter,
        $arsc_lang_quit,
        $arsc_lang_kicked,
        $arsc_lang_op,
        $arsc_lang_deop,
        $arsc_lang_whispers,
        $arsc_lang_whispersops,
        $arsc_lang_roomchange,
        $arsc_lang_help;
 
 $arsc_sid = str_replace("/", "", $arsc_sid);
 
 if ($arsc_my = getdatafromsid($arsc_sid) <> FALSE)
 {
  $arsc_room = $arsc_my["room"];
  if ($arsc_my["level"] < 0)
  {
   include("../shared/language/".find_language($arsc_my["user"]).".inc.php");
   switch($arsc_my["level"])
   {
    case "-1": return filter_posting("System", date("H:i:s"), "<font size=\"4\"><b>".$arsc_lang_youwerekicked."</b></font>", $arsc_room);
               mysql_query("DELETE from arsc_users WHERE sid = '$arsc_sid'");
   }
  }
  $arsc_my = getdatafromsid($arsc_sid);
  $arsc_room = $arsc_my["room"];
  if ($arsc_my["level"] > -1)
  {
   $arsc_posting = "\n";
   include("../shared/language/".find_language($arsc_my["user"]).".inc.php");
   
   set_magic_quotes_runtime(0);
   set_time_limit(0);
   $arsc_result = mysql_query("SELECT lastmessageping from arsc_users WHERE sid = '$arsc_sid'");
   $arsc_b = mysql_fetch_array($arsc_result);
   if ($arsc_b["lastmessageping"] == "0")
   {
    $arsc_lastmessageping = my_microtime();
    mysql_query("UPDATE arsc_users SET lastmessageping = '$arsc_lastmessageping' WHERE sid = '$arsc_sid'");
   }
   else
   {
    $arsc_lastmessageping = $arsc_b["lastmessageping"];
    $arsc_result = mysql_query("SELECT * from arsc_room_$arsc_room WHERE timeid > '$arsc_lastmessageping' ORDER BY timeid ASC, id ASC");
    while ($arsc_a = mysql_fetch_array($arsc_result))
    {
     $arsc_posting .= filter_posting($arsc_a["user"], $arsc_a["sendtime"], $arsc_a["message"], $arsc_room);
     $arsc_lastmessageping = $arsc_a["timeid"];
    }
    $arsc_ping = time();
    $arsc_ip = getenv("REMOTE_ADDR");
    mysql_query("UPDATE arsc_users SET lastping = '$arsc_ping', ip = '$arsc_ip', lastmessageping = '$arsc_lastmessageping' WHERE sid = '$arsc_sid'");
   }
   return $arsc_posting;
  }
 }
}


$htmlheader = "<html><head><script language=\"JavaScript\">\n<!--\nfunction move()\n{\nparent.msg.scroll(1,5000000);\nwindow.setTimeout(\"move()\",100);\n}\nmove();\n//-->\n</script>\n</head>\n<body bgcolor=\"#FFFFFF\">\n\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n<!-- nix -->\n";

if( false === ( $listen_socket = @socket_create_listen( (string)$arsc_server_port, $arsc_server_maximumusers))) die( "Couldn't create listening socket on port $arsc_server_port.\n");
if( false === @socket_setopt( $listen_socket, SOL_SOCKET, SO_REUSEADDR, 1)) die( "Couldn't set socket option\n");

echo date("[Y-m-d H:i:s]")." Started ARSC server listening on port ".$arsc_server_port.".\n";

do
{
 if( false === ( $accepted = @socket_accept( $listen_socket))) die( "Couldn't establish connection\n"); 

 $pid = pcntl_fork();
 if ($pid == 0)
 {
  socket_getsockname( $accepted, &$address, &$port); 
  echo date("[Y-m-d H:i:s]")." A new client connected\n"; 
  while( false !== ( $received_data = @socket_read( $accepted, 1024)))
  {
   if ($received_data <> "")
   {
    ereg("arsc_sid=(.*) HTTP", $received_data, $a);
    $arsc_sid = $a[1];
    if ($arsc_sid <> "")
    {
     $arsc_my = getdatafromsid($arsc_sid);
     echo date("[Y-m-d H:i:s]")." New ARSC connection: SID $arsc_sid, nickname {$arsc_my["user"]}, room {$arsc_my["room"]}\n";
     socket_write($accepted, $htmlheader, strlen($htmlheader));
     while(true)
     {
      $newmessages = arsc_getmessages($arsc_sid);
      if ($newmessages <> "")
      {
       if (!@socket_write($accepted, $newmessages, strlen($newmessages)))
       {
        $arsc_user = $arsc_my["user"];
        $arsc_room = $arsc_my["room"];
        $arsc_nice_room = nice_room($arsc_room);
        $arsc_timeid = my_microtime();
        $arsc_sendtime = date("H:i:s");
        mysql_query("DELETE from arsc_users WHERE sid = '$arsc_sid'");
        mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('arsc_user_quit~~$arsc_user~~$arsc_nice_room', 'System', '$arsc_sendtime', '$arsc_timeid')");
        die (date("[Y-m-d H:i:s]")." Could not write to socket. Connection lost: SID $arsc_sid, nickname {$arsc_my["user"]}, room {$arsc_my["room"]}\n");
        break(4);
       }
      }
      else
      {
       $arsc_user = $arsc_my["user"];
       $arsc_room = $arsc_my["room"];
       $arsc_nice_room = nice_room($arsc_room);
       $arsc_timeid = my_microtime();
       $arsc_sendtime = date("H:i:s");
       mysql_query("DELETE from arsc_users WHERE sid = '$arsc_sid'");
       mysql_query("INSERT into arsc_room_$arsc_room (message, user, sendtime, timeid) VALUES ('arsc_user_quit~~$arsc_user~~$arsc_nice_room', 'System', '$arsc_sendtime', '$arsc_timeid')");
       die (date("[Y-m-d H:i:s]")." Connection lost: SID $arsc_sid, nickname {$arsc_my["user"]}, room {$arsc_my["room"]}\n");
       break(3);
      }
      usleep(200000);
     }
    }
   }
  }
 }
} while(true);
?>
