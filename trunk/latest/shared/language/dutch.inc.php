<?php

/*
	 This is an ARSC language file. If you translate it, please send me
  a copy to <manuel@kiessling.net>, I will add it to ARSC then. Thanks.

  This file is for versions: 1.0, 1.0.1, 1.0.1p1, 1.0.2

	 Language file by KR@§h <webmaster@gratisringtones.nl>
	 <www.gratisringtones.nl>

	 Corrected by Kasper Souren <kasper@ppcnet.nl>
*/


// Homepage

$arsc_lang["entername"]         = "Voer je gebruikersnaam in:";
$arsc_lang["enterpassword"]     = "Voer je wachtwoord in:";
$arsc_lang["whichversion"]      = "Welke versie wil je gebruiken?";
$arsc_lang["version_dontknow"]  = "Kies deze versie als je niet weet wat voor browser je hebt.";
$arsc_lang["version_sockets"]   = "Aanbevolen versie.";
// If you installed the socket server, version_push_js will not be shown, and vice versa, this is why they are same.
$arsc_lang["version_push_js"]   = "Aanbevolen versie.";
$arsc_lang["version_header_js"] = "Alternatieve versie.";
$arsc_lang["version_header"]    = "Een versie die alleen frames gebruikt.";
$arsc_lang["version_box"]       = "Een andere versie.";
$arsc_lang["version_text"]      = "Nog een andere versie.";
$arsc_lang["yes"]               = "Ja";
$arsc_lang["no"]                = "Nee";
$arsc_lang["selectroom"]        = "Kies een chatroom:";
$arsc_lang["startbutton"]       = "Start de chat!";
$arsc_lang["usersinchat"]       = "Deze gebruikers zijn op dit moment online:";
$arsc_lang["usersinchat_room"]  = "Room";
$arsc_lang["usersinchat_name"]  = "Gebruiker";
$arsc_lang["clicktoregister"]   = "Registreer jezelf!";


// Register page and email

$arsc_lang["register_intro"]                 = "Vul alle velden in om jezelf te registreren.";
$arsc_lang["register_intro_force"]           = "Je wachtwoord wordt verzonden naar je email adres.";
$arsc_lang["register_entername"]             = "Gebruikersnaam:";
$arsc_lang["register_enteremail"]            = "Email adres:";
$arsc_lang["register_enterpassword"]         = "Wachtwoord:";
$arsc_lang["register_send"]                  = "Registreer!";
$arsc_lang["register_yougetmail"]            = "Je krijgt nu een mailtje met je wachtwoord.";
$arsc_lang["register_emailtemplate_subject"] = "Je registratie voor het chatgedeelte.";

$arsc_lang["register_emailtemplate"]         = "
Hoi,

Je hebt je geregistreerd voor het chatgedeelte van
YOUR WEBSITE.

Je gekozen gebruikersnaam is '{username}'.
Met het volgende wachtwoord:

            '{password}'

Je kunt nu inloggen op:
{homepage}


Veel plezier!

--
Webmaster YOUR WEBSITE.

";


// Chat interface

$arsc_lang["usersinroom"]     = "Gebruikers in chatroom";
$arsc_lang["sendmessage"]     = "Verstuur!";
$arsc_lang["refreshmessages"] = "Vernieuw berichten";
$arsc_lang["leave"]           = "Ga weg hier";
$arsc_lang["roomlist"]        = "Roomlist";
$arsc_lang["refresh"]         = "Vernieuwen";
$arsc_lang["otherfunctions"]  = "Andere functies";
$arsc_lang["smilielist"]      = "Lijst met smiley's";
$arsc_lang["scroll_active"]   = "Autoscroll";
$arsc_lang["drawboard"]       = "Tekenbord";


// Errors

$arsc_lang["error_register_double_user"] = "Deze gebruikernaam is al in gebruik. Kies een andere.";
$arsc_lang["error_waitformail"]          = "Je kunt nu inloggen in het chatgedeelte.";
$arsc_lang["error_double_user"]          = "Je gebruikersnaam is al in gebruik!";
$arsc_lang["error_no_name"]              = "Je moet een gebruikersnaam invoeren!";
$arsc_lang["error_bad_name"]             = "Deze naam is niet toegestaan!";
$arsc_lang["error_wrong_credentials"]    = "Fout!<br>Zijn al je gegevens correct?";
$arsc_lang["error_banned"]               = "Toegang tijdelijk geweigerd.";


// Chat System Messages

$arsc_lang["enter"]         = "{user} is de chatroom {room} binnengekomen.";
$arsc_lang["welcome"]       = "Welkom! type /? in het textveld om hulp te krijgen.";
$arsc_lang["quit"]          = "Gebruiker {user} verlaat de chatroom {room}.";
$arsc_lang["roomchange"]    = "Gebruiker {user} verlaat de chatroom {room1} en komt de chatroom {room2} binnen.";
$arsc_lang["kicked"]        = "Gebruiker {userpassive} is uit de chat geschopt door {useractive}.";
$arsc_lang["youwerekicked"] = "Je bent uit de chat gezet!";
$arsc_lang["op"]            = "Gebruiker {userpassive} heeft de operator status van {useractive}.";
$arsc_lang["deop"]          = "Gebruiker {useractive} heeft de operator status van {userpassive} verwijderd.";
$arsc_lang["whispers"]      = "fluistert";
$arsc_lang["whispersops"]   = "fluistert naar alle operators";
$arsc_lang["gotmsg"]        = "Je fluistert naar </i>{user}<i>: {message}";

$arsc_lang["help"]          = "
</i><br><br>&nbsp;<b>Algemene hulp:</b>
<br>&nbsp;&nbsp;&nbsp;Rechts zie je alle gebruikers
<br>&nbsp;&nbsp;&nbsp;Die op dit moment in de chatroom zijn.
<br>
<br>&nbsp;&nbsp;&nbsp;Gebruikers met een @ voor hun naam
<br>&nbsp;&nbsp;&nbsp;en kunnen gebruikers uit de chatroom
<br>&nbsp;&nbsp;&nbsp;zetten, geef andere gebruikers de operator
<br>&nbsp;&nbsp;&nbsp;status, en ontneem anderen hun operator status.
<br>
<br>&nbsp;&nbsp;&nbsp;Als je rechts op een naam klikt word er een 
<br>&nbsp;&nbsp;&nbsp;commando naar het textveld gestuurd dat dit bericht
<br>&nbsp;&nbsp;&nbsp;prive moet zijn.
<br>&nbsp;&nbsp;&nbsp;Je moet je text alleen achter het commando zetten!
<br>
<br>&nbsp;<b>Algemene commando's:</b>
<br>&nbsp;&nbsp;&nbsp;/me <i>message</i> -- Symboliseert een actie zoals. <i>/me voel me goed</i> Het komt in de chat te staan als <i>* Gebruiker voelt zich goed</i>
<br>&nbsp;&nbsp;&nbsp;/msg <i>user</i> <i>message</i> -- Vertuurt een prive <i>bericht</i> naar een <i>gebruiker</i>
<br>&nbsp;&nbsp;&nbsp;/j <i>room</i> -- Verlaat de chatroom en gaat de andere <i>Chatroom</i> binnen
<br>&nbsp;&nbsp;&nbsp;/room <i>room</i> -- Een alias naar /j
<br><br><i>";

$arsc_lang["helpop"]        = "
</i>&nbsp;<b>Operator commands:</b>
<br>&nbsp;&nbsp;&nbsp;/msgops <i>message</i> -- Whispers a <i>message</i> to all operators
<br>&nbsp;&nbsp;&nbsp;/whois <i>user</i> -- Shows information about <i>user</i>
<br>&nbsp;&nbsp;&nbsp;/op <i>user</i> -- Gives operator status to <i>user</i>
<br>&nbsp;&nbsp;&nbsp;/deop <i>user</i> -- Takes operator status from <i>user</i>
<br>&nbsp;&nbsp;&nbsp;/kick <i>user</i> -- Kicks <i>user</i> out of the chat
<br>&nbsp;&nbsp;&nbsp;/bann <i>user X</i> -- Blocks IP of <i>user</i> for <i>X</i> seconds
<br>&nbsp;&nbsp;&nbsp;/lock <i>user</i> -- Lock account of (registered!) <i>user</i> permanently
<br>&nbsp;&nbsp;&nbsp;/rip <i>user</i> -- What <i>user</i> says is not shown
<br>&nbsp;&nbsp;&nbsp;/unrip <i>user</i> -- What <i>user</i> says is shown again
<br>&nbsp;&nbsp;&nbsp;/move <i>user room</i> -- &acute;Moves&acute; <i>user</i> into <i>room</i>
<br><br><i>";
?>