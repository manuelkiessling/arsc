<?php

/*
  This is an ARSC language file. If you translate it, please send me
  a copy to <manuel@kiessling.net>, I will add it to ARSC then. Thanks.
  
  This file is for versions: 1.0, 1.0.1, 1.0.1p1, 1.0.2
  
  Poland language - Mariusz Jurczyk
  admin@cafe.netinfo.pl

  Prosz� o ewentualn� korekt� :)  gdybym sie pomyli� w t�umaczeniu
  i przes�anie wiadomo�ci na moj e-mail, dzi�kuje.

*/


// Homepage

$arsc_lang["entername"]         = "Podaj Tw�j nick:";
$arsc_lang["enterpassword"]     = "Podaj Twoje has�o:";
$arsc_lang["whichversion"]      = "Kt�rej wersji czata chcesz u�y� ?";
$arsc_lang["version_dontknow"]  = "To jest wersja domy�lna dla Twojej przegl�darki.";
$arsc_lang["version_sockets"]   = "Rekomendowana wersja czata. obs�uga JavaScript i ramek.";
// If you installed the socket server, version_push_js will not be shown, and vice versa, this is why they are same.
$arsc_lang["version_push_js"]   = "Rekomendowana wersja czata. obs�uga JavaScript i ramek.";
$arsc_lang["version_header_js"] = "Alternatywna wersja czata. obs�uga JavaScript i ramek.";
$arsc_lang["version_header"]    = "Wersja z ramkami, bez obs�ugi JavaScript.";
$arsc_lang["version_box"]       = "Wersja dla WebTV konwerter�w.";
$arsc_lang["version_text"]      = "Wersja dla przegl�darek tekstowych.";
$arsc_lang["yes"]               = "Tak";
$arsc_lang["no"]                = "Nie";
$arsc_lang["selectroom"]        = "Wybierz pok�j rozm�w:";
$arsc_lang["startbutton"]       = "Start czata !";
$arsc_lang["usersinchat"]       = "Aktualnie zalogowani u�ytkownicy:";
$arsc_lang["usersinchat_room"]  = "Pokoje rozm�w";
$arsc_lang["usersinchat_name"]  = "U�ytkownik";
$arsc_lang["clicktoregister"]   = "Rejestruj swojego nicka!";


// Register page and eMail

$arsc_lang["register_intro"]                 = "Zarejestruj swojego sta�ego nicka.";
$arsc_lang["register_intro_force"]           = "Twoje has�o zosta�o wys�ane na Tw�j e-mail.";
$arsc_lang["register_entername"]             = "Tw�j nick:";
$arsc_lang["register_enteremail"]            = "e-mail adres:";
$arsc_lang["register_enterpassword"]         = "has�o:";
$arsc_lang["register_send"]                  = "rejestruj";
$arsc_lang["register_yougetmail"]            = "Dzi�kuj�, wys�any zosta� do Ciebie e-mail.";
$arsc_lang["register_emailtemplate_subject"] = "Twoja rejestracja na czata.";

$arsc_lang["register_emailtemplate"]         = "
Hello,

W�a�nie zarejestrowa�e� si� na czata.

Tw�j nick '{username}'.
zapami�taj i zachowaj swoje has�o:

            '{password}'

Je�li chcesz wej�� teraz na czata kliknij poni�ej:
{homepage}


Weso�ej zabawy!

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
$arsc_lang["sendmessage"]     = "Wy�lij";
$arsc_lang["refreshmessages"] = "Od�wie� wiadomo��";
$arsc_lang["leave"]           = "Wyj�cie z czata";
$arsc_lang["roomlist"]        = "Lista pokoji";
$arsc_lang["refresh"]         = "Od�wie�";
$arsc_lang["otherfunctions"]  = "Dodatkowe funkcje";
$arsc_lang["smilielist"]      = "Lista smilies (bu�ki)";
$arsc_lang["scroll_active"]   = "Autoprzewijanie";
$arsc_lang["drawboard"]       = "Drawboard";


// Errors

$arsc_lang["error_register_double_user"] = "Ten nick ju� istnieje, wybierz inny.";
$arsc_lang["error_waitformail"]          = "Kiedy dostaniesz e-mail z potwierdzeniem mo�esz si� logowa� na czata.";
$arsc_lang["error_double_user"]          = "Taki u�ytkownik jest ju� zalogowany!";
$arsc_lang["error_no_name"]              = "Nie ma takiego imienia!";
$arsc_lang["error_bad_name"]             = "B��dne imi�!";
$arsc_lang["error_wrong_credentials"]    = "Dost�p zabroniony!<br>Czy napewno to Tw�j nick ?";
$arsc_lang["error_banned"]               = "Dost�p czasowo zabroniony.";


// Chat System Messages

$arsc_lang["enter"]         = "U�ytkownik {user} wszed� do pokoju {room}.";
$arsc_lang["welcome"]       = "Witamy! wpisz /? aby uzyska� pomoc tekstow�.";
$arsc_lang["quit"]          = "U�ytkownik {user} opu�ci� pok�j {room}.";
$arsc_lang["roomchange"]    = "U�ytkownik {user} opu�ci� pok�j {room1} i wszed� do pokoju {room2}.";
$arsc_lang["kicked"]        = "U�ytkownik {userpassive} zosta� wykopany z czata {useractive}.";
$arsc_lang["youwerekicked"] = "Zosta�e� wykopany z czata!";
$arsc_lang["op"]            = "U�ytkownik {userpassive} ma status operatora {useractive}.";
$arsc_lang["deop"]          = "U�ytkownik {useractive} usun�� status operatora {userpassive}.";
$arsc_lang["whispers"]      = "m�wi";
$arsc_lang["whispersops"]   = "operator m�wi do wszystkich";
$arsc_lang["gotmsg"]        = "m�wisz prywatnie z </i>{user}<i>: {message}";

$arsc_lang["help"]          = "
</i><br><br>&nbsp;<b>G��wna pomoc czata:</b>
<br>&nbsp;&nbsp;&nbsp;Po prawej strone zobaczysz u�ytkownik�w
<br>&nbsp;&nbsp;&nbsp;kt�rzy s� w pokoju.
<br>
<br>&nbsp;&nbsp;&nbsp;U�ytkownik z @ przed imieniem ma prawa
<br>&nbsp;&nbsp;&nbsp;operatora i mo�e wyrzuci� u�tkownik�w 
<br>&nbsp;&nbsp;&nbsp;z pokoju, operator mo�e nada� innemu 
<br>&nbsp;&nbsp;&nbsp;u�ytkownikowi status operatora.
<br>
<br>&nbsp;&nbsp;&nbsp;Klikaj�c po prawej stronie na imieniu u�ytkownika, 
<br>&nbsp;&nbsp;&nbsp;w lini komend pojawi si� polecenie,
<br>&nbsp;&nbsp;&nbsp;bedziesz m�g� teraz wys�ac prywatn� wiadomo��.
<br>&nbsp;&nbsp;&nbsp;Musisz teraz tylko zacz�� wpisywa� tekst po poleceniu.<br>
<br>&nbsp;<b>G��wne komendy czata:</b>
<br>&nbsp;&nbsp;&nbsp;/me <i>wiadomo��</i> -- Symbolizes an action, e.g. <i>/me feels fine</i> writes <i>* User feels fine</i>
<br>&nbsp;&nbsp;&nbsp;/msg <i>imi�</i> <i>wiadomo��</i> -- Wy�lij prywatn� <i>wiadomo��</i> do <i>imi�</i>
<br>&nbsp;&nbsp;&nbsp;/j <i>pok�j</i> -- przej�cie do innego pokoju <i>pok�j</i>
<br>&nbsp;&nbsp;&nbsp;/room <i>pok�j</i> -- An alias to /j
<br><br><i>";

$arsc_lang["helpop"]        = "
</i>&nbsp;<b>komendy operatora:</b>
<br>&nbsp;&nbsp;&nbsp;/msgops <i>wiadomo��</i> -- Przeka� <i>wiadomo��</i> do wszystkich operator�w
<br>&nbsp;&nbsp;&nbsp;/whois <i>imi�</i> -- Wi�cej informacji o <i>imi�</i>
<br>&nbsp;&nbsp;&nbsp;/op <i>imi�</i> -- Nadaj status operatora dla <i>imi�</i>
<br>&nbsp;&nbsp;&nbsp;/deop <i>imi�</i> -- Odbierz status operatora dla <i>imi�</i>
<br>&nbsp;&nbsp;&nbsp;/kick <i>imi�</i> -- Wywal <i>imi�</i> go z chata
<br>&nbsp;&nbsp;&nbsp;/bann <i>imi� X</i> -- Blokuj IP od <i>imi�</i> na <i>X</i> sekund
<br>&nbsp;&nbsp;&nbsp;/lock <i>imi�</i> -- Lock account of (registered!) <i>imi�</i> permanently
<br>&nbsp;&nbsp;&nbsp;/rip <i>imi�</i> -- Co <i>imi�</i> m�wi jest nie pokazywane
<br>&nbsp;&nbsp;&nbsp;/unrip <i>imi�</i> -- Co <i>imi�</i> m�wi jest pokazywane ponownie
<br>&nbsp;&nbsp;&nbsp;/move <i>imi� pok�j</i> -- &acute;Moves&acute; <i>imi�</i> into <i>pok�j</i>
<br><br><i>";
?>
