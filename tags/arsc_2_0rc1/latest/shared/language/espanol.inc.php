<?php

/*
  This is an ARSC language file. If you translate it, please send me
  a copy to <arsc-help@lists.sourceforge.net>, I will add it to ARSC then. Thanks.

  This file is for versions: 1.0, 1.0.1, 1.0.1p1, 1.0.2
*/


// Homepage

$arsc_lang["entername"]         = "Introduzca aquí su nombre de chat:";
$arsc_lang["enterpassword"]     = "Introduzca aquí su contraseña:";
$arsc_lang["whichversion"]      = "¿Qué versión desea Ud. utilizar?";
$arsc_lang["version_dontknow"]  = "Seleccione esta versión si no sabe Ud. lo que es un buscador o ignora cuál está Ud. utilizando.";
$arsc_lang["version_sockets"]   = "Versión recomendada para buscadores modernos. Utiliza JavaScript y marcos.";
// If you installed the socket server, version_push_js will not be shown, and vice versa, this is why they are same.
$arsc_lang["version_push_js"]   = "Versión recomendada para buscadores modernos. Utiliza JavaScript y marcos.";
$arsc_lang["version_header_js"] = "Una versión alternativa para buscadores modernos por si la anterior no funcionase. Utiliza JavaScript y marcos.";
$arsc_lang["version_header"]    = "Una versión que solamente utiliza marcos, pero no JavaScript.";
$arsc_lang["version_box"]       = "Una versión para la Zuum WebTV box.";
$arsc_lang["version_text"]      = "Versión sencilla para buscador de texto.";
$arsc_lang["yes"]               = "Sí";
$arsc_lang["no"]                = "No";
$arsc_lang["selectroom"]        = "Seleccione una sala:";
$arsc_lang["startbutton"]       = "¡Iniciar el chat!";
$arsc_lang["usersinchat"]       = "Los siguientes usuarios se encuentran actualmente en el chat:S";
$arsc_lang["usersinchat_room"]  = "Sala";
$arsc_lang["usersinchat_name"]  = "Nombre";
$arsc_lang["clicktoregister"]   = "¡Proteja su nombre de chat!";


// Register page and eMail

$arsc_lang["register_intro"]                 = "Para proteger su nombre de chat de forma permanente, rellene por favor el siguiente formulario.";
$arsc_lang["register_intro_force"]           = "Recibirá entonces una contraseña por correo electrónico a la dirección indicada.";
$arsc_lang["register_entername"]             = "Nombre de chat deseado:";
$arsc_lang["register_enteremail"]            = "Su dirección electrónica:";
$arsc_lang["register_enterpassword"]         = "Contraseña deseada:";
$arsc_lang["register_send"]                  = "Enviar inscripción";
$arsc_lang["register_yougetmail"]            = "Muchas gracias, ahora recibirá Ud. un correo electrónico con su contraseña.";
$arsc_lang["register_emailtemplate_subject"] = "Su inscripción en el Chat Abacho";

$arsc_lang["register_emailtemplate"]         = "
Hola,

se ha inscrito Ud. en el Chat ARSC.

El nombre de chat escogido por Ud. '{username}' está desde este
momento protegido por la siguiente contraseña: '{password}'

¡Ya puede Ud. pues registrarse en
{homepage}
para este chat!

¡Diviértase!

--
 {chatowner}
";


// Password Change Page

$arsc_lang["changepassword"]                 = "Change password";
$arsc_lang["changepassword_intro"]           = "To change your password, enter your username, your current password, and your new password below.";
$arsc_lang["changepassword_entername"]       = "Nickname:";
$arsc_lang["changepassword_entercurrent"]    = "Current password:";
$arsc_lang["changepassword_enternew"]        = "New password:";
$arsc_lang["error_password_changed"]         = "Your password was successfully changed!";
$arsc_lang["changepassword_submit"]          = "Change";


// Chat interface

$arsc_lang["usersinroom"]     = "Usuarios en la sala";
$arsc_lang["sendmessage"]     = "Enviar";
$arsc_lang["refreshmessages"] = "Actualizar mensajes";
$arsc_lang["leave"]           = "Salir";
$arsc_lang["roomlist"]        = "Lista de salas";
$arsc_lang["refresh"]         = "Actualizar";
$arsc_lang["otherfunctions"]  = "Otras funciones";
$arsc_lang["smilielist"]      = "Lista de todos los smilies";
$arsc_lang["scroll_active"]   = "Autoscroll";
$arsc_lang["drawboard"]       = "Tabla de símbolos";


// Errors

$arsc_lang["error_register_double_user"] = "Lo sentimos, pero este nombre de chat ya ha sido adjudicado. Por favor, escoja otro.";
$arsc_lang["error_waitformail"]          = "Tan pronto como reciba el correo con sus datos de acceso podrá Ud. registrarse con la contraseña allí incluida.";
$arsc_lang["error_double_user"]          = "¡Ya hay registrado un usuario con este nombre!";
$arsc_lang["error_no_name"]              = "¡Debe Ud. indicar un nombre de usuario!";
$arsc_lang["error_bad_name"]             = "¡Lo sentimos, este nombre no es válido!";
$arsc_lang["error_wrong_credentials"]    = "¡Ha sido denegado el acceso! ¿Son correctos sus datos de acceso?";
$arsc_lang["error_banned"]               = "El acceso ha sido temporalmente bloqueado.";


// Chat System Messages

$arsc_lang["enter"]         = "El usuario {user} entra en la sala {room}.";
$arsc_lang["welcome"]       = "¡Bienvenido! Teclee /? en el campo de texto para ver los comandos disponibles.";
$arsc_lang["quit"]          = "El usuario {user} abandona la sala {room}.";
$arsc_lang["roomchange"]    = "El usuario {user} abandona la sala {room1} y entra en la sala {room2}.";
$arsc_lang["kicked"]        = "El usuario {userpassive} ha sido expulsado del chat por {useractive}.";
$arsc_lang["youwerekicked"] = "¡Ha sido Ud. expulsado del chat!";
$arsc_lang["op"]            = "El usuario {userpassive} ha recibido el estatus de operador del usuario {useractive}.";
$arsc_lang["deop"]          = "El usuario {useractive} le ha retirado el estatus de operador al usuario {userpassive}.";
$arsc_lang["whispers"]      = "susurra";
$arsc_lang["whispersops"]   = "susurra a todos los operadores";
$arsc_lang["gotmsg"]        = "Ud. susurra a </i>{user}<i>: {message}";

$arsc_lang["help"]          = "
</i><br><br>&nbsp;<b>Ayuda general:</b>
<br>&nbsp;&nbsp;&nbsp;En el marco derecho puede Ud. ver todos
<br>&nbsp;&nbsp;&nbsp;los usuarios que se encuentran en esta sala.
<br>
<br>&nbsp;&nbsp;&nbsp;Los usuarios con una @ delante de su nombre son
<br>&nbsp;&nbsp;&nbsp;son operadores, y pueden expulsar a los demás usuarios
<br>&nbsp;&nbsp;&nbsp;de la sala, así como otorgar y retirar el estatus de
<br>&nbsp;&nbsp;&nbsp;operador.
<br>
<br>&nbsp;&nbsp;&nbsp;Al hacer clic sobre un nombre se rellena automáticamente
<br>&nbsp;&nbsp;&nbsp;el campo de texto con el comando necesario para enviar
<br>&nbsp;&nbsp;&nbsp;un mensaje a este usuario - Ud. sólo tiene que añadir su
<br>&nbsp;&nbsp;&nbsp;mensaje al final del comando.
<br>
<br>&nbsp;<b>Comandos generales:</b>
<br>&nbsp;&nbsp;&nbsp;/me <i>mensaje</i> -- Representa una acción, p. ej. <i>/me hace café</i> escribe <i>* El usuario hace café</i>
<br>&nbsp;&nbsp;&nbsp;/msg <i>mensaje usuario</i> -- Envía un <i>mensaje</i> privado a un <i>usuario</i>
<br>&nbsp;&nbsp;&nbsp;/j <i>nombre de sala</i> -- Abandona la sala actual y entra en <i>nombre de sala</i>
<br>&nbsp;&nbsp;&nbsp;/room <i>nombre de sala</i> -- La misma función que /j
<br>&nbsp;&nbsp;&nbsp;/userlist -- Muestra una lista de todos los usuarios en la sala
<br>&nbsp;&nbsp;&nbsp;/roomlist -- Muestra una lista de todas las salas
<br>&nbsp;&nbsp;&nbsp;/smilies -- Muestra una lista de todos los Smilies y cómo se generan
<br><br><i>";

$arsc_lang["helpop"]        = "
</i>&nbsp;<b>Comandos operadores:</b>
<br>&nbsp;&nbsp;&nbsp;/msgops <i>mensaje</i> -- Susurra un <i>mensaje</i> a todos los operadores
<br>&nbsp;&nbsp;&nbsp;/whois <i>usuario</i> -- Muestra información sobre el <i>usuario</i>
<br>&nbsp;&nbsp;&nbsp;/kick <i>usuario</i> -- Expulsa al <i>usario</i> del chat
<br>&nbsp;&nbsp;&nbsp;/bann <i>usuario X</i> -- Bloquea el IP del <i>usuario X</i> segundos fuera del chat
<br>&nbsp;&nbsp;&nbsp;/lock <i>usuario</i> -- Bloquea la cuenta del <i>usario</i> (¡registrado!) de manera permanente
<br>&nbsp;&nbsp;&nbsp;/rip <i>usuario</i> -- Ya no se muestra lo que dice el <i>usario</i>
<br>&nbsp;&nbsp;&nbsp;/unrip <i>usuario</i> -- Vuelve a mostrarse lo que dice el <i>usuario</i>
<br>&nbsp;&nbsp;&nbsp;/op <i>usuario</i> -- Otorga el estatus de operador al <i>usuario</i>
<br>&nbsp;&nbsp;&nbsp;/deop <i>usuario</i> -- Retira el estatus de operador al <i>usuario</i>
<br>&nbsp;&nbsp;&nbsp;/move <i>usuario sala</i> -- &acute;Mueve&acute; al <i>usario</i> a la <i>sala</i>
<br><br><i>";
?>