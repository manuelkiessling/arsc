<?php

/*
  This is an ARSC language file. If you translate it, please send me
  a copy to <manuel@kiessling.net>, I will add it to ARSC then. Thanks.
  This file is for version: 1.0 and 1.0.1 
  
  Poland language - Mariusz Jurczyk
  admin@cafe.netinfo.pl

*/


// Homepage

$arsc_lang["entername"]         = "Podaj Twój nick:";
$arsc_lang["enterpassword"]     = "Podaj Twoje has³o:";
$arsc_lang["whichversion"]      = "Której wersji czata chcesz u¿yæ ?";
$arsc_lang["version_dontknow"]  = "To jest wersja domyœlna dla Twojej przegl¹darki.";
$arsc_lang["version_sockets"]   = "Rekomendowana wersja czata. obs³uga JavaScript i ramek.";
// If you installed the socket server, version_push_js will not be shown, and vice versa, this is why they are same.
$arsc_lang["version_push_js"]   = "Rekomendowana wersja czata. obs³uga JavaScript i ramek.";
$arsc_lang["version_header_js"] = "Alternatywna wersja czata. obs³uga JavaScript i ramek.";
$arsc_lang["version_header"]    = "Wersja z ramkami, bez obs³ugi JavaScript.";
$arsc_lang["version_box"]       = "Wersja dla WebTV konwerterów.";
$arsc_lang["version_text"]      = "Wersja dla przegl¹darek tekstowych.";
$arsc_lang["yes"]               = "Tak";
$arsc_lang["no"]                = "Nie";
$arsc_lang["selectroom"]        = "Wybierz pokój rozmów:";
$arsc_lang["startbutton"]       = "Start czata !";
$arsc_lang["usersinchat"]       = "Aktualnie zalogowani u¿ytkownicy:";
$arsc_lang["usersinchat_room"]  = "Pokoje rozmów";
$arsc_lang["usersinchat_name"]  = "U¿ytkownik";
$arsc_lang["clicktoregister"]   = "Rejestruj swojego nicka!";


// Register page and eMail

$arsc_lang["register_intro"]                 = "Zarejestruj swojego sta³ego nicka.";
$arsc_lang["register_intro_force"]           = "Twoje has³o zosta³o wys³ane na Twój e-mail.";
$arsc_lang["register_entername"]             = "Twój nick:";
$arsc_lang["register_enteremail"]            = "e-mail adres:";
$arsc_lang["register_enterpassword"]         = "has³o:";
$arsc_lang["register_send"]                  = "rejestruj";
$arsc_lang["register_yougetmail"]            = "Dziêkujê, wys³any zosta³ do Ciebie e-mail.";
$arsc_lang["register_emailtemplate_subject"] = "Twoja rejestracja na czata.";

$arsc_lang["register_emailtemplate"]         = "
Hello,

W³aœnie zarejestrowa³eœ siê na czata.

Twój nick '{username}'.
zapamiêtaj i zachowaj swoje has³o:

            '{password}'

Jeœli chcesz wejœæ teraz na czata kliknij poni¿ej:
{homepage}


Weso³ej zabawy!

--
administrator systemu
 {chatowner}

";


// Chat interface

$arsc_lang["usersinroom"]     = "Osoby w pokoju";
$arsc_lang["sendmessage"]     = "Wyœlij";
$arsc_lang["refreshmessages"] = "Odœwie¿ wiadomoœæ";
$arsc_lang["leave"]           = "Wyjœcie z czata";
$arsc_lang["roomlist"]        = "Lista pokoji";
$arsc_lang["refresh"]         = "Odœwie¿";
$arsc_lang["otherfunctions"]  = "Dodatkowe funkcje";
$arsc_lang["smilielist"]      = "Lista smilies (buŸki)";
$arsc_lang["scroll_active"]   = "Autoprzewijanie";
$arsc_lang["drawboard"]       = "Drawboard";


// Errors

$arsc_lang["error_register_double_user"] = "Ten nick ju¿ istnieje, wybierz inny.";
$arsc_lang["error_waitformail"]          = "Kiedy dostaniesz e-mail z potwierdzeniem mo¿esz siê logowaæ na czata.";
$arsc_lang["error_double_user"]          = "Taki u¿ytkownik jest ju¿ zalogowany!";
$arsc_lang["error_no_name"]              = "Nie ma takiego imienia!";
$arsc_lang["error_bad_name"]             = "B³êdne imiê!";
$arsc_lang["error_wrong_credentials"]    = "Dostêp zabroniony!<br>Czy napewno to Twój nick ?";
$arsc_lang["error_banned"]               = "Dostêp czasowo zabroniony.";


// Chat System Messages

$arsc_lang["enter"]         = "U¿ytkownik {user} wszed³ do pokoju {room}.";
$arsc_lang["welcome"]       = "Witamy! wpisz /? aby uzyskaæ pomoc tekstow¹.";
$arsc_lang["quit"]          = "U¿ytkownik {user} opuœci³ pokój {room}.";
$arsc_lang["roomchange"]    = "U¿ytkownik {user} opuœci³ pokój {room1} i wszed³ do pokoju {room2}.";
$arsc_lang["kicked"]        = "U¿ytkownik {userpassive} zosta³ wykopany z czata {useractive}.";
$arsc_lang["youwerekicked"] = "Zosta³eœ wykopany z czata!";
$arsc_lang["op"]            = "U¿ytkownik {userpassive} ma status operatora {useractive}.";
$arsc_lang["deop"]          = "U¿ytkownik {useractive} usun¹³ status operatora {userpassive}.";
$arsc_lang["whispers"]      = "mówi";
$arsc_lang["whispersops"]   = "operator mówi do wszystkich";
$arsc_lang["gotmsg"]        = "mówisz prywatnie z </i>{user}<i>: {message}";

$arsc_lang["help"]          = "
</i><br><br>&nbsp;<b>G³ówna pomoc czata:</b>
<br>&nbsp;&nbsp;&nbsp;Po prawej strone zobaczysz u¿ytkowników
<br>&nbsp;&nbsp;&nbsp;którzy s¹ w pokoju.
<br>
<br>&nbsp;&nbsp;&nbsp;U¿ytkownik z @ przed imieniem ma prawa
<br>&nbsp;&nbsp;&nbsp;operatora i mo¿e wyrzuciæ u¿tkowników 
<br>&nbsp;&nbsp;&nbsp;z pokoju, operator mo¿e nadaæ innemu 
<br>&nbsp;&nbsp;&nbsp;u¿ytkownikowi status operatora.
<br>
<br>&nbsp;&nbsp;&nbsp;If you click on a name on the right, the input
<br>&nbsp;&nbsp;&nbsp;field will be filled with the command that is
<br>&nbsp;&nbsp;&nbsp;neccessary to send a private message to this user.
<br>&nbsp;&nbsp;&nbsp;You must only append your message to the end
<br>&nbsp;&nbsp;&nbsp;of the command line.
<br>
<br>&nbsp;<b>G³ówne komendy czata:</b>
<br>&nbsp;&nbsp;&nbsp;/me <i>message</i> -- Symbolizes an action, e.g. <i>/me feels fine</i> writes <i>* User feels fine</i>
<br>&nbsp;&nbsp;&nbsp;/msg <i>user</i> <i>message</i> -- Sends a private <i>message</i> to an <i>user</i>
<br>&nbsp;&nbsp;&nbsp;/j <i>room</i> -- Leaves the room and enters <i>room</i>
<br>&nbsp;&nbsp;&nbsp;/room <i>room</i> -- An alias to /j
<br><br><i>";

$arsc_lang["helpop"]        = "
</i>&nbsp;<b>komendy operatora:</b>
<br>&nbsp;&nbsp;&nbsp;/msgops <i>message</i> -- Whispers a <i>message</i> to all operators
<br>&nbsp;&nbsp;&nbsp;/whois <i>user</i> -- Shows information about <i>user</i>
<br>&nbsp;&nbsp;&nbsp;/op <i>user</i> -- Gives operator status to <i>user</i>
<br>&nbsp;&nbsp;&nbsp;/deop <i>user</i> -- Takes operator status from <i>user</i>
<br>&nbsp;&nbsp;&nbsp;/kick <i>user</i> -- Kicks <i>user</i> out of the chat
<br>&nbsp;&nbsp;&nbsp;/bann <i>user X</i> -- Blocks IP of <i>user</i> for <i>X</i> seconds
<br>&nbsp;&nbsp;&nbsp;/lock <i>user</i> -- Lock account of (registered!) <i>user</i> permanently
<br>&nbsp;&nbsp;&nbsp;/rip <i>user</i> -- Co <i>user</i> mówi jest nie pokazywane
<br>&nbsp;&nbsp;&nbsp;/unrip <i>user</i> -- Co <i>user</i> mówi jest pokazywane ponownie
<br>&nbsp;&nbsp;&nbsp;/move <i>user room</i> -- &acute;Moves&acute; <i>user</i> into <i>room</i>
<br><br><i>";
?>
