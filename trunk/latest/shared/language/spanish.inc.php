<?php

// This is an ARSC language file. If you translate it, please send me a copy to <manuel@kiessling.net>, I will add it to ARSC then. Thanks.


$arsc_lang_entername = "Escribe tu nombre aqui";
$arsc_lang_namelength = "Máximo 10 caracteres";
$arsc_lang_whichversion = "¿Que versión quieres usar?";
$arsc_lang_version_dontknow = "Selecciona esta, si no conoces que navegador estas usando.";
$arsc_lang_version_sockets = "<b>Nuevo</b> Conectate a tu propio servidor Perl ARSC. <b>Intentalo, pero seguramente no funcionara.</b>";

$arsc_lang_version_push_js = "Versión recomendada, usa un servidor de tecnología push y JavaScript, es sin duda el más funcional. Debería de servir para la mayoría de los navegadores modernos que tengan activado JavaScript.";
$arsc_lang_version_push_js_browsers = array("Microsoft Internet Explorer 4.x - 6.x", "Netscape Navigator 2.x -6.x", "Mozilla 0.9.x", "Opera 5.x");
$arsc_lang_version_header_js = "Si tu navegador no trabaja con servidor push, pero es capaz de usar JavaScript,entonces escoge esta versión, podrás chatear sin usar el servidor push.";
$arsc_lang_version_header_js_browsers = array("Todo lo anterior");
$arsc_lang_version_header = "La versión estandar con frames pero sin JavaScript ni servidor push, debería de funcionar con todos los navegadores de la superficie de la tierra que soporten frames. Escoge esta versión sólo si no puedes usar ninguna otra - es menos funcional.";
$arsc_lang_version_header_browsers = array("Todo lo anterior", "Konqueror");
$arsc_lang_version_text = "Esta versión es  para los que quieren \"sensaciones fuertes\" y están usando de navegador de consola como Lynx o algún otro parecido. Esta es la menos funcional.";
$arsc_lang_version_text_browsers = array("Todo lo anterior", "Konqueror", "Lynx", "w3");
$arsc_lang_yes = "Si";
$arsc_lang_no = "No";
$arsc_lang_browser_identify = "He identificado tu navegador como {browser}, asi que deberías seleccional la versión {version}.";
$arsc_lang_browser_identify_js = "Asegurate que tu navegador tiene activado el soporte para JavaScript, si escoges esta versión.";
$arsc_lang_selectroom = "Escoge una sala";
$arsc_lang_startbutton = "Entrar en el Chat!";
$arsc_lang_usersinchat = "Estos usuarios estan actualmente en el chat";
$arsc_lang_usersinroom = "Usuarios en la sala";
$arsc_lang_sendmessage = "Enviar";
$arsc_lang_refreshmessages = "Actualizar mensajes";
$arsc_lang_leave = "Salir";

$arsc_lang_error_double_user = "!Ya existe un usuario con ese nombre!";
$arsc_lang_error_no_name = "Escribe un nombre de usuario!";

// Chat System Messages
$arsc_lang_enter = "El usuario {user} entra en la sala {room}";
$arsc_lang_welcome = "¡Bienvenido! Escribe </i>/?<i> para ver todas las funciones disponibles.";
$arsc_lang_quit = "El usuario {user} abandona la sala {room}";
$arsc_lang_roomchange = "El usuario {user} sale de la sala {room1} y entra en la sala {room2}.";

$arsc_lang_kicked = "El usuario {userpassive} ha sido expulsado por {useractive}";
$arsc_lang_youwerekicked = "¡Has sido expulsado del chat!";

$arsc_lang_op = "El usuario {userpassive} ha recibido permisos de moderador de {useractive}";
$arsc_lang_deop = "El usario {useractive} ha quitado los permisos de moderador a {userpassive}";

$arsc_lang_whispers = "privado";
$rsc_lang_whispersops = "privado a todos los moderadores";


$arsc_lang_help = "</i><br><br>&nbsp;<b>Ayuda general:</b><br>&nbsp;&nbsp;&nbsp;En el frame de la derecha puedes ver todos los usuarios que<br>&nbsp;&nbsp;&nbsp;están en la sala.<br><br>&nbsp;&nbsp;&nbsp;Los usuario que aparecen precedidos del símbolo @<br>&nbsp;&nbsp;&nbsp;son moderadores y pueden expulsar a otros usuarios<br>&nbsp;&nbsp;&nbsp;del chat o nombrar a otros usuarios moderadores.<br><br>&nbsp;&nbsp;&nbsp;Haciendo click sobre cualquier usuario,<br>&nbsp;&nbsp;&nbsp;se generará un comando que te permitirá<br>&nbsp;&nbsp;&nbsp;enviarles un mensaje privado<br>&nbsp;&nbsp;&nbsp;solo añade tu mensaje al final.<br><br>&nbsp;<b>Comandos generales:</b><br>&nbsp;&nbsp;&nbsp;/me <i>mensaje</i> -- Simboliza una acción, e.j. <i>/me se siente bien</i> imprimira <i>* nombre de usario se siente bien</i><br>&nbsp;&nbsp;&nbsp;/msg <i>usuario</i> <i>mensaje</i> -- Envia el <i>mensaje</i> de forma privada al <i>usuario</i><br><br>&nbsp;<b>Comandos del moderador:</b><br>&nbsp;&nbsp;&nbsp;/op<i>usuario</i> -- Da permiso de operador al <i>usuario</i><br>&nbsp;&nbsp;&nbsp;/deop <i>usuario</i> -- Quita los permisos de moderardor al <i>usuario</i><br>&nbsp;&nbsp;&nbsp;/kick <i>usuario</i> -- expulsa al <i>usuario</i> de la sala actual<br><br><i>";

?>