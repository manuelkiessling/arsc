<?php

/*
  This is an ARSC language file. If you translate it, please send me
  a copy to <manuel@kiessling.net>, I will add it to ARSC then. Thanks.

  This file is for version: <1.0beta3>
*/


// Homepage

$arsc_lang["entername"]         = "Please enter your nickname:";
$arsc_lang["enterpassword"]     = "Please enter your password:";
$arsc_lang["namelength"]        = "A maximum of 10 characters can be used.";
$arsc_lang["whichversion"]      = "Which version do you want to use?";
$arsc_lang["version_dontknow"]  = "Choose this version if you don't know which browser you use.";
$arsc_lang["version_sockets"]   = "Recommended version for modern browsers. Uses JavaScript and Frames.";
// If you installed the socket server, version_push_js will not be shown.
$arsc_lang["version_push_js"]   = "Recommended version for modern browsers. Uses JavaScript and Frames.";
$arsc_lang["version_header_js"] = "An alternative version for modern browsers if the one above did not work. Uses JavaScript and Frames.";
$arsc_lang["version_header"]    = "A version that only uses Frames, but no JavaScript.";
$arsc_lang["version_box"]       = "A version for the Zuum WebTV box.";
$arsc_lang["version_text"]      = "Simple version for text based browsers.";
$arsc_lang["yes"]               = "Yes";
$arsc_lang["no"]                = "No";
$arsc_lang["selectroom"]        = "Choose a room:";
$arsc_lang["startbutton"]       = "Start the chat!";
$arsc_lang["usersinchat"]       = "These users are currently logged in:";
$arsc_lang["usersinchat_room"]  = "Room";
$arsc_lang["usersinchat_name"]  = "User";
$arsc_lang["clicktoregister"]   = "Register your nickname!";


// Register page and eMail

$arsc_lang["register_intro"]                 = "To register your nickname fill in the fields below.";
$arsc_lang["register_intro_force"]           = "A password will then be sended to the given eMail adress.";
$arsc_lang["register_entername"]             = "Nickname:";
$arsc_lang["register_enteremail"]            = "eMail adress:";
$arsc_lang["register_enterpassword"]         = "Password:";
$arsc_lang["register_send"]                  = "Submit registration";
$arsc_lang["register_yougetmail"]            = "Thanks, you will now get an eMail with your password.";
$arsc_lang["register_emailtemplate_subject"] = "Your ARSC registration.";

$arsc_lang["register_emailtemplate"]         = "
Hello,

You registered for ARSC.

You chose the nickname '{username}'
It is now protected with this password:

            '{password}'

You can now log into the chat on this page:
{homepage}


Have a lot of fun!

--
 {chatowner}

";


// Chat interface

$arsc_lang["usersinroom"]     = "Users in room";
$arsc_lang["sendmessage"]     = "Send";
$arsc_lang["refreshmessages"] = "Refresh Messages";
$arsc_lang["leave"]           = "Leave";
$arsc_lang["roomlist"]        = "Roomliste";
$arsc_lang["refresh"]         = "Refresh";
$arsc_lang["otherfunctions"]  = "Additional functions";
$arsc_lang["smilielist"]      = "List of all smilies";
$arsc_lang["drawboard"]       = "Drawboard";


// Errors

$arsc_lang["error_register_double_user"] = "This nickname is already in use. Please choose another one.";
$arsc_lang["error_waitformail"]          = "When the eMail with your credentials arrived, you can log in the chat.";
$arsc_lang["error_double_user"]          = "A user with this name is already logged in!";
$arsc_lang["error_no_name"]              = "You must enter an username!";
$arsc_lang["error_wrong_credentials"]    = "Access denies!<br>Are your credentials correct?";
$arsc_lang["error_banned"]               = "Access is temporarily denied.";


// Chat System Messages

$arsc_lang["enter"]         = "User {user} enters the room {room}.";
$arsc_lang["welcome"]       = "Welcome! Enter /? into the textfield to see the available commands.";
$arsc_lang["quit"]          = "User {user} leaves the room {room}.";
$arsc_lang["roomchange"]    = "User {user} leaves the room {room1} and enters room {room2}.";
$arsc_lang["kicked"]        = "User {userpassive} was kicked out of the chat by {useractive}.";
$arsc_lang["youwerekicked"] = "You were kicked out of the chat!";
$arsc_lang["op"]            = "User {userpassive} got operator status from {useractive}.";
$arsc_lang["deop"]          = "User {useractive} removed the operator status of {userpassive}.";
$arsc_lang["whispers"]      = "whispers";
$arsc_lang["whispersops"]   = "whispers to all operators";
$arsc_lang["gotmsg"]        = "You whisper to </i>{user}<i>: {message}";

$arsc_lang["help"]          = "
</i><br><br>&nbsp;<b><i>Sorry, not yet translated!</i> Allgemeine Hilfe:</b>
<br>&nbsp;&nbsp;&nbsp;Im rechten Frame sehen Sie alle Benutzer,
<br>&nbsp;&nbsp;&nbsp;die sich in diesem Raum aufhalten.
<br>
<br>&nbsp;&nbsp;&nbsp;Benutzer mit einem @ Symbol vor ihrem Namen
<br>&nbsp;&nbsp;&nbsp;sind Operatoren und k&ouml;nnen Benutzer des Raumes
<br>&nbsp;&nbsp;&nbsp;verweisen sowie Benutzern Operatorstatus geben und
<br>&nbsp;&nbsp;&nbsp;nehmen.
<br>
<br>&nbsp;&nbsp;&nbsp;Indem Sie auf einen Namen klicken, wird das
<br>&nbsp;&nbsp;&nbsp;Texteingabefeld automatisch mit dem Befehl gef&uuml;llt
<br>&nbsp;&nbsp;&nbsp;der ben&ouml;tigt wird, um diesem Benutzer eine
<br>&nbsp;&nbsp;&nbsp;Nachricht zu senden - Sie m&uuml;ssen nur ihre Nachricht
<br>&nbsp;&nbsp;&nbsp;an das Ende des Befehls anf&uuml;gen.
<br>
<br>&nbsp;<b>Allgemeine Befehle:</b>
<br>&nbsp;&nbsp;&nbsp;/me <i>Nachricht</i> -- Symbolisiert eine Handlung, z.B. <i>/me macht Kaffee</i> schreibt <i>* Benutzer macht Kaffee</i>
<br>&nbsp;&nbsp;&nbsp;/msg <i>Benutzer</i> <i>Nachricht</i> -- Sendet eine private <i>Nachricht</i> an einen <i>Benutzer</i>
<br>&nbsp;&nbsp;&nbsp;/j <i>Raumname</i> -- Verl&auml;sst den aktuellen Raum und betritt <i>Raumname</i>
<br>&nbsp;&nbsp;&nbsp;/room <i>Raumname</i> -- Selbe Funktion wie /j
<br><br><i>";

$arsc_lang["helpop"]        = "
</i>&nbsp;<b>Operatorenbefehle:</b>
<br>&nbsp;&nbsp;&nbsp;/msgops <i>Nachricht</i> -- Fl&uuml;stert eine <i>Nachricht</i> an alle Operatoren
<br>&nbsp;&nbsp;&nbsp;/op <i>Benutzer</i> -- Gibt <i>Benutzer</i> Operatorstatus
<br>&nbsp;&nbsp;&nbsp;/deop <i>Benutzer</i> -- Nimmt <i>Benutzer</i> Operatorenstatus weg
<br>&nbsp;&nbsp;&nbsp;/kick <i>Benutzer</i> -- Verweist <i>Benutzer</i> des Chats
<br>&nbsp;&nbsp;&nbsp;/bann <i>Benutzer XX</i> -- Sperrt IP des <i>Benutzer</i>s <i>XX</i> vom Chat aus
<br>&nbsp;&nbsp;&nbsp;/lock <i>Benutzer</i> -- Sperrt den Account des (registrierten!) <i>Benutzer</i>s dauerhaft
<br>&nbsp;&nbsp;&nbsp;/rip <i>Benutzer</i> -- Was <i>Benutzer</i> sagt, wird nicht mehr angezeigt
<br>&nbsp;&nbsp;&nbsp;/unrip <i>Benutzer</i> -- Was <i>Benutzer</i> sagt wird wieder angezeigt
<br>&nbsp;&nbsp;&nbsp;/move <i>Benutzer Raum</i> -- &acute;Verschiebt&acute; <i>Benutzer</i> in <i>Raum</i>
<br><br><i>";
?>