<?php

/*
  This is an ARSC language file. If you translate it, please send me
  a copy to <arsc-help@lists.sourceforge.net>, I will add it to ARSC then. Thanks.

  This file is for versions: 1.0, 1.0.1, 1.0.1p1, 1.0.2

  Translated to Finnish by Harri Suutari <harri@suutari.baana.suomi.net>

*/


// Homepage

$arsc_lang["entername"]         = "Anna nimimerkkisi:";
$arsc_lang["enterpassword"]     = "Anna salasanasi:";
$arsc_lang["whichversion"]      = "Mit� versiota haluat k�ytt��?";
$arsc_lang["version_dontknow"]  = "Valitse t�m� versio, jos et tied� mit� selainta k�yt�t.";
$arsc_lang["version_sockets"]   = "Suositeltava versio uusille selaimille. K�ytt�� JavaScripti� ja kehyksi�.";
// If you installed the socket server, version_push_js will not be shown, and vice versa, this is why they are same.
$arsc_lang["version_push_js"]   = "Suositeltava versio uusille selaimille. K�ytt�� JavaScripti� ja kehyksi�.";
$arsc_lang["version_header_js"] = "Vaihtoehtoinen versio, jos yll�oleva ei toiminut. K�ytt�� JavaScripti� ja kehyksi�.";
$arsc_lang["version_header"]    = "T�m� versio k�ytt�� kehyksi�, mutta ei JavaScripti�.";
$arsc_lang["version_box"]       = "Versio Zuum WebTV boxille.";
$arsc_lang["version_text"]      = "Yksinkertainen versio tekstipohjaisille selaimille.";
$arsc_lang["yes"]               = "Kyll�";
$arsc_lang["no"]                = "Ei";
$arsc_lang["selectroom"]        = "Valitse huone:";
$arsc_lang["startbutton"]       = "Aloita chatti!";
$arsc_lang["usersinchat"]       = "T�m�nhetkiset k�ytt�j�t:";
$arsc_lang["usersinchat_room"]  = "Huone";
$arsc_lang["usersinchat_name"]  = "K�ytt�j�";
$arsc_lang["clicktoregister"]   = "Rekister�i nimimerkkisi!";


// Register page and eMail

$arsc_lang["register_intro"]                 = "T�yt� allaolevat kent�t rekister�id�ksesi nimimerkkisi.";
$arsc_lang["register_intro_force"]           = "Salasana l�hetet��n annettuun s�hk�postiosoitteeseen.";
$arsc_lang["register_entername"]             = "Nimimerkki:";
$arsc_lang["register_enteremail"]            = "S�hk�postiosoite:";
$arsc_lang["register_enterpassword"]         = "Salasana:";
$arsc_lang["register_send"]                  = "L�het� rekister�inti";
$arsc_lang["register_yougetmail"]            = "Kiitoksia, tulet saamaan s�hk�postiviestin, joka sis�lt�� salasanasi.";
$arsc_lang["register_emailtemplate_subject"] = "ARSC-rekister�itymisesi.";

$arsc_lang["register_emailtemplate"]         = "
Terve,

Rekister�itymisesi ARSC Chattiin.

Valitsit nimimerkin '{username}'.
Se on nyt suojattu t�ll� salasanalla:

            '{password}'

Voit kirjautua chattiin t�ll� sivulla:
{homepage}


Have a lot of fun!

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

$arsc_lang["usersinroom"]     = "K�ytt�j�t huoneessa";
$arsc_lang["sendmessage"]     = "L�het�";
$arsc_lang["refreshmessages"] = "P�ivit� viestit";
$arsc_lang["leave"]           = "Poistu";
$arsc_lang["roomlist"]        = "Huonelista";
$arsc_lang["refresh"]         = "P�ivit�";
$arsc_lang["otherfunctions"]  = "Lis�toiminnot";
$arsc_lang["smilielist"]      = "Kaikki logot";
$arsc_lang["scroll_active"]   = "Automaattinen vieritys";
$arsc_lang["drawboard"]       = "Piirustusp�yt�";


// Errors

$arsc_lang["error_register_double_user"] = "Nimimerkki on jo k�yt�ss�. Ole hyv� ja valitse joku toinen.";
$arsc_lang["error_waitformail"]          = "Voit kirjautua chattiin, kunhan s�hk�posti tunnuksineen saapuu.";
$arsc_lang["error_double_user"]          = "T�m�n niminen k�ytt�j� on jo kirjautunut sis��n!";
$arsc_lang["error_no_name"]              = "Sinun pit�� kirjoittaa k�ytt�j�nimi!";
$arsc_lang["error_bad_name"]             = "Nimi ei ole sallittu!";
$arsc_lang["error_wrong_credentials"]    = "P��sy kielletty!<br>Ovatko tunnuksesi oikein?";
$arsc_lang["error_banned"]               = "P��sy v�liaikaisesti kielletty.";


// Chat System Messages

$arsc_lang["enter"]         = "K�ytt�j� {user} saapuu huoneeseen {room}.";
$arsc_lang["welcome"]       = "Tervetuloa! Kirjoita /? tekstikentt��n n�hd�ksesi k�ytett�v�t komennot.";
$arsc_lang["quit"]          = "K�ytt�j� {user} j�tt�� huoneen {room}.";
$arsc_lang["roomchange"]    = "K�ytt�j� {user} j�tt�� huoneen {room1} ja astuu huoneeseen {room2}.";
$arsc_lang["kicked"]        = "K�ytt�j�n {userpassive} potkaisti ulos {useractive}.";
$arsc_lang["youwerekicked"] = "Sinut poitkaistiin ulos chatista!";
$arsc_lang["op"]            = "K�ytt�j� {userpassive} sai operaattorin oikeudet k�ytt�j�lt� {useractive}.";
$arsc_lang["deop"]          = "K�ytt�j� {useractive} otti operaattorin oikeudet pois k�ytt�j�lt� {userpassive}.";
$arsc_lang["whispers"]      = "kuiskaa";
$arsc_lang["whispersops"]   = "kuiskaa kaikille operaattoreille";
$arsc_lang["gotmsg"]        = "Kuiskaat k�ytt�j�lle </i>{user}<i>: {message}";

$arsc_lang["help"]          = "
</i><br><br>&nbsp;<b>Yleinen apu:</b>
<br>&nbsp;&nbsp;&nbsp;Oikeassa laidassa n�et k�ytt�j�t,
<br>&nbsp;&nbsp;&nbsp;jotka ovat t�ll� hetkell� huoneessa.
<br>
<br>&nbsp;&nbsp;&nbsp;K�ytt�j�t, joilla on symboli @ nimimerkin
<br>&nbsp;&nbsp;&nbsp;edess�, ovat operaattoreita, jotka voivat
<br>&nbsp;&nbsp;&nbsp;potkaista k�ytt�ji� pois chatista.
<br>&nbsp;&nbsp;&nbsp;Operaatorit voivat my�s antaa tai ottaa
<br>&nbsp;&nbsp;&nbsp;pois operaattorin oikeudet.
<br>
<br>&nbsp;&nbsp;&nbsp;Voit l�hett�� yksityisen viestin klikkaamalla
<br>&nbsp;&nbsp;&nbsp;haluamaasi nimimerkki� ja kirjoittamalla viestin
<br>&nbsp;&nbsp;&nbsp;sen j�lkeen. Viestin eteen ilmestyy koodi, joka 
<br>&nbsp;&nbsp;&nbsp;tarkoittaa, ett� viesti on yksityisviesti, 
<br>&nbsp;&nbsp;&nbsp;eiv�tk� muut n�e sit�.
<br>
<br>&nbsp;<b>Yleiset komennot:</b>
<br>&nbsp;&nbsp;&nbsp;/me <i>viesti</i> -- Symboloi toimintaa, esim.. <i>/me nukkuu</i> tulostuu: <i>* k�ytt�j� nukkuu</i>
<br>&nbsp;&nbsp;&nbsp;/msg <i>k�ytt�j�</i> <i>viesti</i> -- Yksityinen <i>viesti</i> <i>k�ytt�j�</i>lle
<br>&nbsp;&nbsp;&nbsp;/j <i>huone</i> -- Poistuu nykyisest� huoneesta ja astuu <i>huone</i>eseen
<br>&nbsp;&nbsp;&nbsp;/room <i>huone</i> -- Sama kuin /j
<br><br><i>";

$arsc_lang["helpop"]        = "
</i>&nbsp;<b>Operaattorin komennot:</b>
<br>&nbsp;&nbsp;&nbsp;/msgops <i>viesti</i> -- Kuiskaa <i>viesti</i> kaikille operaattoreille
<br>&nbsp;&nbsp;&nbsp;/whois <i>k�ytt�j�</i> -- N�ytt�� tietoja <i>k�ytt�j�</i>st�
<br>&nbsp;&nbsp;&nbsp;/op <i>k�ytt�j�</i> -- Antaa operaattorin oikeudet <i>k�ytt�j�</i>lle
<br>&nbsp;&nbsp;&nbsp;/deop <i>k�ytt�j�</i> -- Postaa operaattorin oikeudet <i>k�ytt�j�</i>lle
<br>&nbsp;&nbsp;&nbsp;/kick <i>k�ytt�j�</i> -- Potkaisee <i>k�ytt�j�</i>n pois chatista
<br>&nbsp;&nbsp;&nbsp;/bann <i>k�ytt�j� X</i> -- Est�� <i>k�ytt�j�</i>n IP:n <i>X</i>:ksi sekunniksi
<br>&nbsp;&nbsp;&nbsp;/lock <i>k�ytt�j�</i> -- Lukitsee rekister�ityneen <i>k�ytt�j�</i>n tilin pysyv�sti
<br>&nbsp;&nbsp;&nbsp;/rip <i>k�ytt�j�</i> -- <i>k�ytt�j�</i>n viestej� ei n�ytet�
<br>&nbsp;&nbsp;&nbsp;/unrip <i>k�ytt�j�</i> -- <i>k�ytt�j�</i>n viestit n�ytet��n taas
<br>&nbsp;&nbsp;&nbsp;/move <i>k�ytt�j� huone</i> -- &acute;Siirt��&acute; <i>k�ytt�j�</i>n <i>huone</i>eseen
<br><br><i>";
?>
