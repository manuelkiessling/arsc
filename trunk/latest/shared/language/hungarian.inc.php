<?php

/*
  This is an ARSC language file. If you translate it, please send me
  a copy to <manuel@kiessling.net>, I will add it to ARSC then. Thanks.

  This file is for versions: 1.0, 1.0.1, 1.0.1p1, 1.0.2
*/


// Homepage

$arsc_lang["entername"]         = "Kérlek írd be a beceneved:";
$arsc_lang["enterpassword"]     = "Kérlek írd be a jelszavad:";
$arsc_lang["whichversion"]      = "Melyik változatot szeretnéd használni?";
$arsc_lang["version_dontknow"]  = "Ezt a változatot válaszd, ha nem tudod, milyen böngészõt használsz.";
$arsc_lang["version_sockets"]   = "A modernebb böngészõkhöz javasolt változat. Javascript-et és kereteket használ.";
// If you installed the socket server, version_push_js will not be shown, and vice versa, this is why they are same.
$arsc_lang["version_push_js"]   = "A modernebb böngészõkhöz javasolt változat. Javascript-et és kereteket használ.";
$arsc_lang["version_header_js"] = "Egy másik lehetõség modern böngészõkhöz, ha a fenti nem mûködne. Javascript-et és kereteket használ.";
$arsc_lang["version_header"]    = "Egy változat, ami csak kereteket használ, javascript-et nem.";
$arsc_lang["version_box"]       = "Zuum WebTV-hez használható változat.";
$arsc_lang["version_text"]      = "Szöveges képernyõt használó böngészõkhöz készült változat.";
$arsc_lang["yes"]               = "Igen";
$arsc_lang["no"]                = "Nem";
$arsc_lang["selectroom"]        = "Válassz szobát:";
$arsc_lang["startbutton"]       = "Induljon a chat!";
$arsc_lang["usersinchat"]       = "A következõ felhasználók vannak belépve:";
$arsc_lang["usersinchat_room"]  = "Szoba";
$arsc_lang["usersinchat_name"]  = "Felhasználó";
$arsc_lang["clicktoregister"]   = "Regisztráld a beceneved!";


// Register page and eMail

$arsc_lang["register_intro"]                 = "Beceneved regisztrációjához kérjük töltsd ki az alábbi mezõket:";
$arsc_lang["register_intro_force"]           = "Egy jelszó lesz elküldve a megadott e-mail címedre.";
$arsc_lang["register_entername"]             = "Beceneved:";
$arsc_lang["register_enteremail"]            = "E-mail címed:";
$arsc_lang["register_enterpassword"]         = "Jelszavad:";
$arsc_lang["register_send"]                  = "Regisztráció elküldése";
$arsc_lang["register_yougetmail"]            = "Köszönöm! Hamarosan kapsz egy e-mailt a jelszavaddal.";
$arsc_lang["register_emailtemplate_subject"] = "Az ARSC regisztrációd";

$arsc_lang["register_emailtemplate"]         = "
Hello,

ARSC Chat regisztrációt kértél.

A '{username}' becenevet választottad.
A '{password}' jelszóval tudsz majd ezentúl
belépni.

Ezen az oldalon tudsz belépni:
{homepage}


Kellemes szórakozást!

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

$arsc_lang["usersinroom"]     = "A szobában levõ felhasználók";
$arsc_lang["sendmessage"]     = "Elküldés";
$arsc_lang["refreshmessages"] = "Üzenetek frissítése";
$arsc_lang["leave"]           = "Kilépés";
$arsc_lang["roomlist"]        = "Szobalistája";
$arsc_lang["refresh"]         = "Frissítés";
$arsc_lang["otherfunctions"]  = "További lehetõségek";
$arsc_lang["smilielist"]      = "Smiley-k listája";
$arsc_lang["scroll_active"]   = "Autoscroll";
$arsc_lang["drawboard"]       = "Rajztábla";


// Errors

$arsc_lang["error_register_double_user"] = "Ezt a becenevet már használják. Kérlek válassz másikat!";
$arsc_lang["error_waitformail"]          = "Mikor az e-mail az adataiddal megérkezik, be fogsz tudni lépni.";
$arsc_lang["error_double_user"]          = "Ezzel a névvel már belépett egy felhasználó!";
$arsc_lang["error_no_name"]              = "Felhasználónevet mindenképpen meg kell adni!";
$arsc_lang["error_bad_name"]             = "Ez a név tiltott!";
$arsc_lang["error_wrong_credentials"]    = "Hozzáférés megtagadva!<br>Jól adtad meg az adataid?";
$arsc_lang["error_banned"]               = "A hozzáférés átmenetileg letiltva.";


// Chat System Messages

$arsc_lang["enter"]         = "{user} belépett a(z) {room} szobába.";
$arsc_lang["welcome"]       = "Köszöntlek! Írj be '/?'-t a parancsok listájához!";
$arsc_lang["quit"]          = "{user} elhagyta a(z) {room} szobát.";
$arsc_lang["roomchange"]    = "{user} elhagyta a(z) {room1} szobát, és belépett a(z) {room2} szobába.";
$arsc_lang["kicked"]        = "{useractive} kirúgta {userpassive}-t.";
$arsc_lang["youwerekicked"] = "Ki lettél rúgva!";
$arsc_lang["op"]            = "{userpassive} operátori jogosultságot kapott {useractive}-tól.";
$arsc_lang["deop"]          = "{useractive} operátori jogosultságát {userpassive} megvonta.";
$arsc_lang["whispers"]      = "súgás";
$arsc_lang["whispersops"]   = "súgás az összes operátornak";
$arsc_lang["gotmsg"]        = "Súgtál </i>{user}<i> felhasználónak: {message}";

$arsc_lang["help"]          = "
</i><br><br>&nbsp;<b>Általános segítség:</b>
<br>&nbsp;&nbsp;&nbsp;A jobb oldali mezõben a felhasználókat
<br>&nbsp;&nbsp;&nbsp;látod, akik ebben a szobában vannak.
<br>
<br>&nbsp;&nbsp;&nbsp;A felhasználók, akiknek @-al kezdõdik a
<br>&nbsp;&nbsp;&nbsp;nevük, operátori jogosultsággal rendelkeznek,
<br>&nbsp;&nbsp;&nbsp;és kirúghatnak felhasználókat a szobából,
<br>&nbsp;&nbsp;&nbsp;operátori jogosultságot adhatnak, vagy vehetnek
<br>&nbsp;&nbsp;&nbsp;el másoktól.
<br>
<br>&nbsp;&nbsp;&nbsp;Ha a nevére kattintasz valakinek jobb oldalt,
<br>&nbsp;&nbsp;&nbsp;a beviteli mezõ ki lesz töltve azzal a paranccsal,
<br>&nbsp;&nbsp;&nbsp;amivel privát üzenetet tudsz küldeni neki, csak
<br>&nbsp;&nbsp;&nbsp;az üzeneted kell beírni a sor végére.
<br>
<br>&nbsp;<b>Általános parancsok:</b>
<br>&nbsp;&nbsp;&nbsp;/me <i>üzenet</i> -- Egy cselekedeted tudod vele jelezni, pl. <i>/me jól érzi magát</i> a következõképpen jelenik meg: <i>* <Felhasználóneved> jól érzi magát</i>
<br>&nbsp;&nbsp;&nbsp;/msg <i>felhasználó</i> <i>üzenet</i> -- Egy privát üzenetet (<i>üzenet</i>) tudsz küldeni egy <i>felhasználó</i>nak.
<br>&nbsp;&nbsp;&nbsp;/j <i>szoba</i> -- Szobaváltás, a célszoba <i>szoba</i> lesz.
<br>&nbsp;&nbsp;&nbsp;/room <i>szoba</i> -- Ugyanaz, mint a /j
<br><br><i>";

$arsc_lang["helpop"]        = "
</i>&nbsp;<b>Operátor parancsok:</b>
<br>&nbsp;&nbsp;&nbsp;/msgops <i>üzenet</i> -- Egy <i>üzenetet</i> súg az operátoroknak
<br>&nbsp;&nbsp;&nbsp;/whois <i>felhasználó</i> -- A <i>felhasználó</i>ról mutat információkat
<br>&nbsp;&nbsp;&nbsp;/op <i>felhasználó</i> -- Operátor felhasználói jogot ad a <i>felhasználó</i>nak
<br>&nbsp;&nbsp;&nbsp;/deop <i>felhasználó</i> -- Operátor jogokat ad a <i>felhasználó</i>nak
<br>&nbsp;&nbsp;&nbsp;/kick <i>felhasználó</i> -- Kirúgja a <i>felhasználó</i>t a chat-bõl.
<br>&nbsp;&nbsp;&nbsp;/bann <i>felhasználó X</i> -- A <i>felhasználó</i> IP címét blokkolja <i>X</i> másodpercig
<br>&nbsp;&nbsp;&nbsp;/lock <i>felhasználó</i> -- Véglegesen letiltja a (regisztrált!) <i>felhasználó</i>t
<br>&nbsp;&nbsp;&nbsp;/rip <i>felhasználó</i> -- Amit a <i>felhasználó</i> mond, nem jelenik meg
<br>&nbsp;&nbsp;&nbsp;/unrip <i>felhasználó</i> -- Visszaállítja a <i>felhasználó</i> beszélgetési lehetõségét
<br>&nbsp;&nbsp;&nbsp;/move <i>felhasználó szoba</i> -- &acute;Átmozgatja&acute; a <i>felhasználó</i>t egy másik <i>szobá</i>ba
<br><br><i>";
?>