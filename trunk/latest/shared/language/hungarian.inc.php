<?php

/*
  This is an ARSC language file. If you translate it, please send me
  a copy to <manuel@kiessling.net>, I will add it to ARSC then. Thanks.

  This file is for versions: 1.0, 1.0.1, 1.0.1p1, 1.0.2
*/


// Homepage

$arsc_lang["entername"]         = "K�rlek �rd be a beceneved:";
$arsc_lang["enterpassword"]     = "K�rlek �rd be a jelszavad:";
$arsc_lang["whichversion"]      = "Melyik v�ltozatot szeretn�d haszn�lni?";
$arsc_lang["version_dontknow"]  = "Ezt a v�ltozatot v�laszd, ha nem tudod, milyen b�ng�sz�t haszn�lsz.";
$arsc_lang["version_sockets"]   = "A modernebb b�ng�sz�kh�z javasolt v�ltozat. Javascript-et �s kereteket haszn�l.";
// If you installed the socket server, version_push_js will not be shown, and vice versa, this is why they are same.
$arsc_lang["version_push_js"]   = "A modernebb b�ng�sz�kh�z javasolt v�ltozat. Javascript-et �s kereteket haszn�l.";
$arsc_lang["version_header_js"] = "Egy m�sik lehet�s�g modern b�ng�sz�kh�z, ha a fenti nem m�k�dne. Javascript-et �s kereteket haszn�l.";
$arsc_lang["version_header"]    = "Egy v�ltozat, ami csak kereteket haszn�l, javascript-et nem.";
$arsc_lang["version_box"]       = "Zuum WebTV-hez haszn�lhat� v�ltozat.";
$arsc_lang["version_text"]      = "Sz�veges k�perny�t haszn�l� b�ng�sz�kh�z k�sz�lt v�ltozat.";
$arsc_lang["yes"]               = "Igen";
$arsc_lang["no"]                = "Nem";
$arsc_lang["selectroom"]        = "V�lassz szob�t:";
$arsc_lang["startbutton"]       = "Induljon a chat!";
$arsc_lang["usersinchat"]       = "A k�vetkez� felhaszn�l�k vannak bel�pve:";
$arsc_lang["usersinchat_room"]  = "Szoba";
$arsc_lang["usersinchat_name"]  = "Felhaszn�l�";
$arsc_lang["clicktoregister"]   = "Regisztr�ld a beceneved!";


// Register page and eMail

$arsc_lang["register_intro"]                 = "Beceneved regisztr�ci�j�hoz k�rj�k t�ltsd ki az al�bbi mez�ket:";
$arsc_lang["register_intro_force"]           = "Egy jelsz� lesz elk�ldve a megadott e-mail c�medre.";
$arsc_lang["register_entername"]             = "Beceneved:";
$arsc_lang["register_enteremail"]            = "E-mail c�med:";
$arsc_lang["register_enterpassword"]         = "Jelszavad:";
$arsc_lang["register_send"]                  = "Regisztr�ci� elk�ld�se";
$arsc_lang["register_yougetmail"]            = "K�sz�n�m! Hamarosan kapsz egy e-mailt a jelszavaddal.";
$arsc_lang["register_emailtemplate_subject"] = "Az ARSC regisztr�ci�d";

$arsc_lang["register_emailtemplate"]         = "
Hello,

ARSC Chat regisztr�ci�t k�rt�l.

A '{username}' becenevet v�lasztottad.
A '{password}' jelsz�val tudsz majd ezent�l
bel�pni.

Ezen az oldalon tudsz bel�pni:
{homepage}


Kellemes sz�rakoz�st!

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

$arsc_lang["usersinroom"]     = "A szob�ban lev� felhaszn�l�k";
$arsc_lang["sendmessage"]     = "Elk�ld�s";
$arsc_lang["refreshmessages"] = "�zenetek friss�t�se";
$arsc_lang["leave"]           = "Kil�p�s";
$arsc_lang["roomlist"]        = "Szobalist�ja";
$arsc_lang["refresh"]         = "Friss�t�s";
$arsc_lang["otherfunctions"]  = "Tov�bbi lehet�s�gek";
$arsc_lang["smilielist"]      = "Smiley-k list�ja";
$arsc_lang["scroll_active"]   = "Autoscroll";
$arsc_lang["drawboard"]       = "Rajzt�bla";


// Errors

$arsc_lang["error_register_double_user"] = "Ezt a becenevet m�r haszn�lj�k. K�rlek v�lassz m�sikat!";
$arsc_lang["error_waitformail"]          = "Mikor az e-mail az adataiddal meg�rkezik, be fogsz tudni l�pni.";
$arsc_lang["error_double_user"]          = "Ezzel a n�vvel m�r bel�pett egy felhaszn�l�!";
$arsc_lang["error_no_name"]              = "Felhaszn�l�nevet mindenk�ppen meg kell adni!";
$arsc_lang["error_bad_name"]             = "Ez a n�v tiltott!";
$arsc_lang["error_wrong_credentials"]    = "Hozz�f�r�s megtagadva!<br>J�l adtad meg az adataid?";
$arsc_lang["error_banned"]               = "A hozz�f�r�s �tmenetileg letiltva.";


// Chat System Messages

$arsc_lang["enter"]         = "{user} bel�pett a(z) {room} szob�ba.";
$arsc_lang["welcome"]       = "K�sz�ntlek! �rj be '/?'-t a parancsok list�j�hoz!";
$arsc_lang["quit"]          = "{user} elhagyta a(z) {room} szob�t.";
$arsc_lang["roomchange"]    = "{user} elhagyta a(z) {room1} szob�t, �s bel�pett a(z) {room2} szob�ba.";
$arsc_lang["kicked"]        = "{useractive} kir�gta {userpassive}-t.";
$arsc_lang["youwerekicked"] = "Ki lett�l r�gva!";
$arsc_lang["op"]            = "{userpassive} oper�tori jogosults�got kapott {useractive}-t�l.";
$arsc_lang["deop"]          = "{useractive} oper�tori jogosults�g�t {userpassive} megvonta.";
$arsc_lang["whispers"]      = "s�g�s";
$arsc_lang["whispersops"]   = "s�g�s az �sszes oper�tornak";
$arsc_lang["gotmsg"]        = "S�gt�l </i>{user}<i> felhaszn�l�nak: {message}";

$arsc_lang["help"]          = "
</i><br><br>&nbsp;<b>�ltal�nos seg�ts�g:</b>
<br>&nbsp;&nbsp;&nbsp;A jobb oldali mez�ben a felhaszn�l�kat
<br>&nbsp;&nbsp;&nbsp;l�tod, akik ebben a szob�ban vannak.
<br>
<br>&nbsp;&nbsp;&nbsp;A felhaszn�l�k, akiknek @-al kezd�dik a
<br>&nbsp;&nbsp;&nbsp;nev�k, oper�tori jogosults�ggal rendelkeznek,
<br>&nbsp;&nbsp;&nbsp;�s kir�ghatnak felhaszn�l�kat a szob�b�l,
<br>&nbsp;&nbsp;&nbsp;oper�tori jogosults�got adhatnak, vagy vehetnek
<br>&nbsp;&nbsp;&nbsp;el m�sokt�l.
<br>
<br>&nbsp;&nbsp;&nbsp;Ha a nev�re kattintasz valakinek jobb oldalt,
<br>&nbsp;&nbsp;&nbsp;a beviteli mez� ki lesz t�ltve azzal a paranccsal,
<br>&nbsp;&nbsp;&nbsp;amivel priv�t �zenetet tudsz k�ldeni neki, csak
<br>&nbsp;&nbsp;&nbsp;az �zeneted kell be�rni a sor v�g�re.
<br>
<br>&nbsp;<b>�ltal�nos parancsok:</b>
<br>&nbsp;&nbsp;&nbsp;/me <i>�zenet</i> -- Egy cselekedeted tudod vele jelezni, pl. <i>/me j�l �rzi mag�t</i> a k�vetkez�k�ppen jelenik meg: <i>* <Felhaszn�l�neved> j�l �rzi mag�t</i>
<br>&nbsp;&nbsp;&nbsp;/msg <i>felhaszn�l�</i> <i>�zenet</i> -- Egy priv�t �zenetet (<i>�zenet</i>) tudsz k�ldeni egy <i>felhaszn�l�</i>nak.
<br>&nbsp;&nbsp;&nbsp;/j <i>szoba</i> -- Szobav�lt�s, a c�lszoba <i>szoba</i> lesz.
<br>&nbsp;&nbsp;&nbsp;/room <i>szoba</i> -- Ugyanaz, mint a /j
<br><br><i>";

$arsc_lang["helpop"]        = "
</i>&nbsp;<b>Oper�tor parancsok:</b>
<br>&nbsp;&nbsp;&nbsp;/msgops <i>�zenet</i> -- Egy <i>�zenetet</i> s�g az oper�toroknak
<br>&nbsp;&nbsp;&nbsp;/whois <i>felhaszn�l�</i> -- A <i>felhaszn�l�</i>r�l mutat inform�ci�kat
<br>&nbsp;&nbsp;&nbsp;/op <i>felhaszn�l�</i> -- Oper�tor felhaszn�l�i jogot ad a <i>felhaszn�l�</i>nak
<br>&nbsp;&nbsp;&nbsp;/deop <i>felhaszn�l�</i> -- Oper�tor jogokat ad a <i>felhaszn�l�</i>nak
<br>&nbsp;&nbsp;&nbsp;/kick <i>felhaszn�l�</i> -- Kir�gja a <i>felhaszn�l�</i>t a chat-b�l.
<br>&nbsp;&nbsp;&nbsp;/bann <i>felhaszn�l� X</i> -- A <i>felhaszn�l�</i> IP c�m�t blokkolja <i>X</i> m�sodpercig
<br>&nbsp;&nbsp;&nbsp;/lock <i>felhaszn�l�</i> -- V�glegesen letiltja a (regisztr�lt!) <i>felhaszn�l�</i>t
<br>&nbsp;&nbsp;&nbsp;/rip <i>felhaszn�l�</i> -- Amit a <i>felhaszn�l�</i> mond, nem jelenik meg
<br>&nbsp;&nbsp;&nbsp;/unrip <i>felhaszn�l�</i> -- Vissza�ll�tja a <i>felhaszn�l�</i> besz�lget�si lehet�s�g�t
<br>&nbsp;&nbsp;&nbsp;/move <i>felhaszn�l� szoba</i> -- &acute;�tmozgatja&acute; a <i>felhaszn�l�</i>t egy m�sik <i>szob�</i>ba
<br><br><i>";
?>