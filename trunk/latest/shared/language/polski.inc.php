<?php

/*
  This is an ARSC language file. If you translate it, please send me
  a copy to <manuel@kiessling.net>, I will add it to ARSC then. Thanks.
  
  This file is for versions: 1.0, 1.0.1, 1.0.1p1, 1.0.2
  
  Poland language - Mariusz Jurczyk
  admin@cafe.netinfo.pl

  Proszê o ewentualn¹ korektê :)  gdybym sie pomyli³ w t³umaczeniu
  i przes³anie wiadomoœci na moj e-mail, dziêkuje.

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


// Password Change Page

$arsc_lang["changepassword"]                 = "Change password";
$arsc_lang["changepassword_intro"]           = "To change your password, enter your username, your current password, and your new password below.";
$arsc_lang["changepassword_entername"]       = "Nickname:";
$arsc_lang["changepassword_entercurrent"]    = "Current password:";
$arsc_lang["changepassword_enternew"]        = "New password:";
$arsc_lang["error_password_changed"]         = "Your password was successfully changed!";
$arsc_lang["changepassword_submit"]          = "Change";


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
<br>&nbsp;&nbsp;&nbsp;Klikaj¹c po prawej stronie na imieniu u¿ytkownika, 
<br>&nbsp;&nbsp;&nbsp;w lini komend pojawi siê polecenie,
<br>&nbsp;&nbsp;&nbsp;bedziesz móg³ teraz wys³ac prywatn¹ wiadomoœæ.
<br>&nbsp;&nbsp;&nbsp;Musisz teraz tylko zacz¹æ wpisywaæ tekst po poleceniu.<br>
<br>&nbsp;<b>G³ówne komendy czata:</b>
<br>&nbsp;&nbsp;&nbsp;/me <i>wiadomoœæ</i> -- Symbolizes an action, e.g. <i>/me feels fine</i> writes <i>* User feels fine</i>
<br>&nbsp;&nbsp;&nbsp;/msg <i>imiê</i> <i>wiadomoœæ</i> -- Wyœlij prywatn¹ <i>wiadomoœæ</i> do <i>imiê</i>
<br>&nbsp;&nbsp;&nbsp;/j <i>pokój</i> -- przejœcie do innego pokoju <i>pokój</i>
<br>&nbsp;&nbsp;&nbsp;/room <i>pokój</i> -- An alias to /j
<br><br><i>";

$arsc_lang["helpop"]        = "
</i>&nbsp;<b>komendy operatora:</b>
<br>&nbsp;&nbsp;&nbsp;/msgops <i>wiadomoœæ</i> -- Przeka¿ <i>wiadomoœæ</i> do wszystkich operatorów
<br>&nbsp;&nbsp;&nbsp;/whois <i>imiê</i> -- Wiêcej informacji o <i>imiê</i>
<br>&nbsp;&nbsp;&nbsp;/op <i>imiê</i> -- Nadaj status operatora dla <i>imiê</i>
<br>&nbsp;&nbsp;&nbsp;/deop <i>imiê</i> -- Odbierz status operatora dla <i>imiê</i>
<br>&nbsp;&nbsp;&nbsp;/kick <i>imiê</i> -- Wywal <i>imiê</i> go z chata
<br>&nbsp;&nbsp;&nbsp;/bann <i>imiê X</i> -- Blokuj IP od <i>imiê</i> na <i>X</i> sekund
<br>&nbsp;&nbsp;&nbsp;/lock <i>imiê</i> -- Lock account of (registered!) <i>imiê</i> permanently
<br>&nbsp;&nbsp;&nbsp;/rip <i>imiê</i> -- Co <i>imiê</i> mówi jest nie pokazywane
<br>&nbsp;&nbsp;&nbsp;/unrip <i>imiê</i> -- Co <i>imiê</i> mówi jest pokazywane ponownie
<br>&nbsp;&nbsp;&nbsp;/move <i>imiê pokój</i> -- &acute;Moves&acute; <i>imiê</i> into <i>pokój</i>
<br><br><i>";
?>
