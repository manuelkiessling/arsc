<?php

// This is an ARSC language file. If you translate it, please send me a copy to <manuel@kiessling.net>, I will add it to ARSC then. Thanks.

$arsc_lang_entername = "Geben Sie hier Ihren Namen ein";
$arsc_lang_namelength = "Sie k&ouml;nnen maximal 10 Zeichen verwenden";
$arsc_lang_whichversion = "Welche Version m&ouml;chten Sie benutzen?";
$arsc_lang_version_dontknow = "W&auml;hlen Sie diese Version, wenn Sie nicht wissen was ein Browser ist oder welchen Browser Sie verwenden.";
$arsc_lang_version_sockets = "Empfohlene Version f&uuml;r moderne Browser. Verwendet JavaScript, Frames und einen zus&auml;tzlichen Port.";
$arsc_lang_version_sockets_browsers = array("Microsoft Internet Explorer 4.x - 6.x", "Netscape Navigator 3.x - 6.x", "Mozilla 0.9.x", "Opera 5.x");
$arsc_lang_version_push_js = "Alternative empfohlene Version f&uuml;r moderne Browser. Verwendet JavaScript, Frames und server push.";
$arsc_lang_version_push_js_browsers = array("Microsoft Internet Explorer 4.x - 6.x", "Netscape Navigator 3.x - 6.x", "Mozilla 0.9.x", "Opera 5.x");
$arsc_lang_version_header_js = "Eine weitere Version f&uuml;r moderne Browser, falls die vorhergehenden nicht funktionieren. Verwendet JavaScript und Frames.";
$arsc_lang_version_header_js_browsers = array("All of the above except Opera 5.x");
$arsc_lang_version_header = "Basisversion. Verwendet Frames.";
$arsc_lang_version_header_browsers = array("Alle vorher genannten", "Konqueror");
$arsc_lang_version_box = "Eine Version f&uuml;r die Zuum WebTV box.";
$arsc_lang_version_box_browsers = array("Alle vorher genannten", "Zuum Browser");
$arsc_lang_version_text = "Einfache Version f&uuml;r Textbrowser.";
$arsc_lang_version_text_browsers = array("Alle vorher genannten", "Konqueror", "Lynx", "w3b");
$arsc_lang_yes = "Ja";
$arsc_lang_no = "Nein";
$arsc_lang_selectroom = "W&auml;hlen Sie einen Raum";
$arsc_lang_startbutton = "Chat starten!";
$arsc_lang_usersinchat = "Folgende Benutzer sind momentan im Chat";
$arsc_lang_usersinroom = "Benutzer in Raum";
$arsc_lang_sendmessage = "Senden";
$arsc_lang_refreshmessages = "Nachrichten auffrischen";
$arsc_lang_leave = "Verlassen";

$arsc_lang_error_double_user = "Ein Benutzer mit diesem Namen existiert bereits!";
$arsc_lang_error_no_name = "Sie m&uuml;ssen einen Benutzernamen angeben!";

// Chat System Messages
$arsc_lang_enter = "Benutzer {user} betritt den Raum {room}.";
$arsc_lang_welcome = "Willkommen! Geben Sie </i>/?<i> in das Textfeld ein, um die verf&uuml;gbaren Befehle zu sehen.";
$arsc_lang_quit = "Benutzer {user} verl&auml;sst den Raum {room}.";
$arsc_lang_roomchange = "Benutzer </i>{user}<i> verl&auml;sst den Raum </i>{room1}<i> und betritt den Raum {room2}.";

$arsc_lang_kicked = "Benutzer {userpassive} wurde von {useractive} des Chats verwiesen.";
$arsc_lang_youwerekicked = "Sie wurden des Chats verwiesen!";

$arsc_lang_op = "Benutzer {userpassive} hat Operatorstatus von Benutzer {useractive} erhalten.";
$arsc_lang_deop = "Benutzer {useractive} hat den Operatorstatus von Benutzer {userpassive} entfernt.";

$arsc_lang_whispers = "fl&uuml;stert";
$arsc_lang_whispersops = "fl&uuml;ster an alle Operatoren";
$arsc_lang_gotmsg = "Benutzer </i>{user}<i> hat Ihre Nachricht erhalten.";

$arsc_lang_help = "</i><br><br>&nbsp;<b>Allgemeine Hilfe:</b>
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
		   <br>
		   <br>&nbsp;<b>Operatorenbefehle:</b>
		   <br>&nbsp;&nbsp;&nbsp;/msgops <i>Nachricht</i> -- Fl&uuml;stert eine <i>Nachricht</i> an alle Operatoren
		   <br>&nbsp;&nbsp;&nbsp;/op <i>Benutzer</i> -- Gibt <i>Benutzer</i> Operatorstatus
		   <br>&nbsp;&nbsp;&nbsp;/deop <i>Benutzer</i> -- Nimmt <i>Benutzer</i> Operatorenstatus weg
		   <br>&nbsp;&nbsp;&nbsp;/kick <i>Benutzer</i> -- Verweist <i>Benutzer</i> des Chats<br><br><i>";
?>
