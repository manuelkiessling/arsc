<?php

/*
  This is an ARSC language file. If you translate it, please send me
  a copy to <arsc-help@lists.sourceforge.net>, I will add it to ARSC then. Thanks.

  This file is for versions: 1.0, 1.0.1, 1.0.1p1, 1.0.2
*/


// Homepage

$arsc_lang["entername"]         = "Geben Sie hier Ihren Chatnamen ein:";
$arsc_lang["enterpassword"]     = "Geben Sie hier Ihr Passwort ein:";
$arsc_lang["whichversion"]      = "Welche Version m&ouml;chten Sie benutzen?";
$arsc_lang["version_dontknow"]  = "W&auml;hlen Sie diese Version, wenn Sie nicht wissen was ein Browser ist oder welchen Browser Sie verwenden.";
$arsc_lang["version_sockets"]   = "Empfohlene Version f&uuml;r moderne Browser. Verwendet JavaScript und Frames.";
// If you installed the socket server, version_push_js will not be shown, and vice versa, this is why they are same.
$arsc_lang["version_push_js"]   = "Empfohlene Version f&uuml;r moderne Browser. Verwendet JavaScript und Frames.";
$arsc_lang["version_header_js"] = "Eine alternative Version f&uuml;r moderne Browser, falls die vorhergehende nicht funktionieren sollte. Verwendet JavaScript und Frames.";
$arsc_lang["version_header"]    = "Eine Version die nur Frames, jedoch kein JavaScript ben&ouml;tigt.";
$arsc_lang["version_box"]       = "Eine Version f&uuml;r die Zuum WebTV box.";
$arsc_lang["version_text"]      = "Einfache Version f&uuml;r Textbrowser.";
$arsc_lang["yes"]               = "Ja";
$arsc_lang["no"]                = "Nein";
$arsc_lang["selectroom"]        = "W&auml;hlen Sie einen Raum:";
$arsc_lang["startbutton"]       = "Chat starten!";
$arsc_lang["usersinchat"]       = "Folgende Benutzer sind momentan im Chat:";
$arsc_lang["usersinchat_room"]  = "Raum";
$arsc_lang["usersinchat_name"]  = "Name";
$arsc_lang["clicktoregister"]   = "Sch&uuml;tzen Sie ihren Chatnamen!";


// Register page and eMail

$arsc_lang["register_intro"]                 = "Um sich Ihren Chatnamen dauerhaft zu sichern, f&uuml;llen Sie bitte das folgende Formular aus.";
$arsc_lang["register_intro_force"]           = "Sie bekommen dann ein Passwort an die angegebene eMail-Adresse zugesendet.";
$arsc_lang["register_entername"]             = "Gew&uuml;nschter Chatname:";
$arsc_lang["register_enteremail"]            = "Ihre eMail-Adresse:";
$arsc_lang["register_enterpassword"]         = "Gew&uuml;nschtes Passwort:";
$arsc_lang["register_send"]                  = "Anmeldung absenden";
$arsc_lang["register_yougetmail"]            = "Vielen Dank, Sie bekommen nun eine eMail mit Ihrem Passwort.";
$arsc_lang["register_emailtemplate_subject"] = "Ihre Anmeldung im Abacho Chat";

$arsc_lang["register_emailtemplate"]         = "
Hallo,

Sie haben sich im ARSC Chat angemeldet.

Der von Ihnen gewählte Chatname '{username}'
ist ab sofort mit folgendem Passwort geschützt:

            '{password}'

Sie können sich nun also auf
{homepage}
in den Chat einloggen!

Wir wünschen Ihnen viel Spass!

--
 {chatowner}

";


// Password Change Page

$arsc_lang["changepassword"]                 = "Passwort &auml;ndern";
$arsc_lang["changepassword_intro"]           = "Um Ihr Passwort zu &auml;ndern, geben Sie bitte Ihren Chatnamen, Ihr momentanes Passwort, und Ihr neues Passwort ein.";
$arsc_lang["changepassword_entername"]       = "Chatname:";
$arsc_lang["changepassword_entercurrent"]    = "Momentanes Passwort:";
$arsc_lang["changepassword_enternew"]        = "Neues Passwort:";
$arsc_lang["error_password_changed"]         = "Ihr Passwort wurde ge&auml;dert!";
$arsc_lang["changepassword_submit"]          = "&Auml;ndern";


// Chat interface

$arsc_lang["usersinroom"]     = "Benutzer in Raum";
$arsc_lang["sendmessage"]     = "Senden";
$arsc_lang["refreshmessages"] = "Nachrichten auffrischen";
$arsc_lang["leave"]           = "Verlassen";
$arsc_lang["roomlist"]        = "Raumliste";
$arsc_lang["refresh"]         = "Aktualisieren";
$arsc_lang["otherfunctions"]  = "Weitere Funktionen";
$arsc_lang["smilielist"]      = "Liste aller Smilies";
$arsc_lang["scroll_active"]   = "Autoscroll";
$arsc_lang["drawboard"]       = "Zeichenbrett";


// Errors

$arsc_lang["error_register_double_user"] = "Dieser Chatname ist leider schon vergeben. W&auml;hlen Sie bitte einen neuen.";
$arsc_lang["error_waitformail"]          = "Sobald die eMail mit den Ihren Zugangsdaten eingetroffen ist, k&ouml;nnen Sie sich mit dem dort angezeigten Passwort einloggen.";
$arsc_lang["error_double_user"]          = "Ein Benutzer mit diesem Namen ist bereits eingeloggt!";
$arsc_lang["error_no_name"]              = "Sie m&uuml;ssen einen Benutzernamen angeben!";
$arsc_lang["error_bad_name"]             = "Dieser Name ist leider ung&uuml;ltig!";
$arsc_lang["error_wrong_credentials"]    = "Der Zugang wurde verweigert!<br>Stimmen Ihre Zugangsdaten?";
$arsc_lang["error_banned"]               = "Der Zugang wurde zeitweise gesperrt.";


// Chat System Messages

$arsc_lang["enter"]         = "Benutzer {user} betritt den Raum {room}.";
$arsc_lang["welcome"]       = "Willkommen! Geben Sie /? in das Textfeld ein, um die verf&uuml;gbaren Befehle zu sehen.";
$arsc_lang["quit"]          = "Benutzer {user} verl&auml;sst den Raum {room}.";
$arsc_lang["roomchange"]    = "Benutzer {user} verl&auml;sst den Raum {room1} und betritt den Raum {room2}.";
$arsc_lang["kicked"]        = "Benutzer {userpassive} wurde von {useractive} des Chats verwiesen.";
$arsc_lang["youwerekicked"] = "Sie wurden des Chats verwiesen!";
$arsc_lang["op"]            = "Benutzer {userpassive} hat Operatorstatus von Benutzer {useractive} erhalten.";
$arsc_lang["deop"]          = "Benutzer {useractive} hat den Operatorstatus von Benutzer {userpassive} entfernt.";
$arsc_lang["whispers"]      = "fl&uuml;stert";
$arsc_lang["whispersops"]   = "fl&uuml;stert an alle Operatoren";
$arsc_lang["gotmsg"]        = "Sie fl&uuml;stern zu </i>{user}<i>: {message}";

$arsc_lang["help"]          = "
</i><br><br>&nbsp;<b>Allgemeine Hilfe:</b>
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
<br>&nbsp;&nbsp;&nbsp;/userlist -- Zeigt eine Liste aller User im Raum
<br>&nbsp;&nbsp;&nbsp;/roomlist -- Zeigt eine Liste aller R&auml;ume
<br>&nbsp;&nbsp;&nbsp;/smilies -- Zeigt eine Liste aller Smilies und wie man sie erzeugt
<br><br><i>";

$arsc_lang["helpop"]        = "
</i>&nbsp;<b>Operatorenbefehle:</b>
<br>&nbsp;&nbsp;&nbsp;/msgops <i>Nachricht</i> -- Fl&uuml;stert eine <i>Nachricht</i> an alle Operatoren
<br>&nbsp;&nbsp;&nbsp;/whois <i>Benutzer</i> -- Zeigt Informationen &uuml;ber <i>Benutzer</i> an
<br>&nbsp;&nbsp;&nbsp;/kick <i>Benutzer</i> -- Verweist <i>Benutzer</i> des Chats
<br>&nbsp;&nbsp;&nbsp;/bann <i>Benutzer X</i> -- Sperrt IP des <i>Benutzer</i>s <i>X</i> Sekunden vom Chat aus
<br>&nbsp;&nbsp;&nbsp;/lock <i>Benutzer</i> -- Sperrt den Account des (registrierten!) <i>Benutzer</i>s dauerhaft
<br>&nbsp;&nbsp;&nbsp;/rip <i>Benutzer</i> -- Was <i>Benutzer</i> sagt, wird nicht mehr angezeigt
<br>&nbsp;&nbsp;&nbsp;/unrip <i>Benutzer</i> -- Was <i>Benutzer</i> sagt wird wieder angezeigt
<br>&nbsp;&nbsp;&nbsp;/op <i>Benutzer</i> -- Gibt <i>Benutzer</i> Operatorstatus
<br>&nbsp;&nbsp;&nbsp;/deop <i>Benutzer</i> -- Nimmt <i>Benutzer</i> Operatorenstatus weg
<br>&nbsp;&nbsp;&nbsp;/move <i>Benutzer Raum</i> -- &acute;Verschiebt&acute; <i>Benutzer</i> in <i>Raum</i>
<br><br><i>";
?>