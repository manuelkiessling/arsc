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
$arsc_lang["whichversion"]      = "Mitä versiota haluat käyttää?";
$arsc_lang["version_dontknow"]  = "Valitse tämä versio, jos et tiedä mitä selainta käytät.";
$arsc_lang["version_sockets"]   = "Suositeltava versio uusille selaimille. Käyttää JavaScriptiä ja kehyksiä.";
// If you installed the socket server, version_push_js will not be shown, and vice versa, this is why they are same.
$arsc_lang["version_push_js"]   = "Suositeltava versio uusille selaimille. Käyttää JavaScriptiä ja kehyksiä.";
$arsc_lang["version_header_js"] = "Vaihtoehtoinen versio, jos ylläoleva ei toiminut. Käyttää JavaScriptiä ja kehyksiä.";
$arsc_lang["version_header"]    = "Tämä versio käyttää kehyksiä, mutta ei JavaScriptiä.";
$arsc_lang["version_box"]       = "Versio Zuum WebTV boxille.";
$arsc_lang["version_text"]      = "Yksinkertainen versio tekstipohjaisille selaimille.";
$arsc_lang["yes"]               = "Kyllä";
$arsc_lang["no"]                = "Ei";
$arsc_lang["selectroom"]        = "Valitse huone:";
$arsc_lang["startbutton"]       = "Aloita chatti!";
$arsc_lang["usersinchat"]       = "Tämänhetkiset käyttäjät:";
$arsc_lang["usersinchat_room"]  = "Huone";
$arsc_lang["usersinchat_name"]  = "Käyttäjä";
$arsc_lang["clicktoregister"]   = "Rekisteröi nimimerkkisi!";


// Register page and eMail

$arsc_lang["register_intro"]                 = "Täytä allaolevat kentät rekisteröidäksesi nimimerkkisi.";
$arsc_lang["register_intro_force"]           = "Salasana lähetetään annettuun sähköpostiosoitteeseen.";
$arsc_lang["register_entername"]             = "Nimimerkki:";
$arsc_lang["register_enteremail"]            = "Sähköpostiosoite:";
$arsc_lang["register_enterpassword"]         = "Salasana:";
$arsc_lang["register_send"]                  = "Lähetä rekisteröinti";
$arsc_lang["register_yougetmail"]            = "Kiitoksia, tulet saamaan sähköpostiviestin, joka sisältää salasanasi.";
$arsc_lang["register_emailtemplate_subject"] = "ARSC-rekisteröitymisesi.";

$arsc_lang["register_emailtemplate"]         = "
Terve,

Rekisteröitymisesi ARSC Chattiin.

Valitsit nimimerkin '{username}'.
Se on nyt suojattu tällä salasanalla:

            '{password}'

Voit kirjautua chattiin tällä sivulla:
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

$arsc_lang["usersinroom"]     = "Käyttäjät huoneessa";
$arsc_lang["sendmessage"]     = "Lähetä";
$arsc_lang["refreshmessages"] = "Päivitä viestit";
$arsc_lang["leave"]           = "Poistu";
$arsc_lang["roomlist"]        = "Huonelista";
$arsc_lang["refresh"]         = "Päivitä";
$arsc_lang["otherfunctions"]  = "Lisätoiminnot";
$arsc_lang["smilielist"]      = "Kaikki logot";
$arsc_lang["scroll_active"]   = "Automaattinen vieritys";
$arsc_lang["drawboard"]       = "Piirustuspöytä";


// Errors

$arsc_lang["error_register_double_user"] = "Nimimerkki on jo käytössä. Ole hyvä ja valitse joku toinen.";
$arsc_lang["error_waitformail"]          = "Voit kirjautua chattiin, kunhan sähköposti tunnuksineen saapuu.";
$arsc_lang["error_double_user"]          = "Tämän niminen käyttäjä on jo kirjautunut sisään!";
$arsc_lang["error_no_name"]              = "Sinun pitää kirjoittaa käyttäjänimi!";
$arsc_lang["error_bad_name"]             = "Nimi ei ole sallittu!";
$arsc_lang["error_wrong_credentials"]    = "Pääsy kielletty!<br>Ovatko tunnuksesi oikein?";
$arsc_lang["error_banned"]               = "Pääsy väliaikaisesti kielletty.";


// Chat System Messages

$arsc_lang["enter"]         = "Käyttäjä {user} saapuu huoneeseen {room}.";
$arsc_lang["welcome"]       = "Tervetuloa! Kirjoita /? tekstikenttään nähdäksesi käytettävät komennot.";
$arsc_lang["quit"]          = "Käyttäjä {user} jättää huoneen {room}.";
$arsc_lang["roomchange"]    = "Käyttäjä {user} jättää huoneen {room1} ja astuu huoneeseen {room2}.";
$arsc_lang["kicked"]        = "Käyttäjän {userpassive} potkaisti ulos {useractive}.";
$arsc_lang["youwerekicked"] = "Sinut poitkaistiin ulos chatista!";
$arsc_lang["op"]            = "Käyttäjä {userpassive} sai operaattorin oikeudet käyttäjältä {useractive}.";
$arsc_lang["deop"]          = "Käyttäjä {useractive} otti operaattorin oikeudet pois käyttäjältä {userpassive}.";
$arsc_lang["whispers"]      = "kuiskaa";
$arsc_lang["whispersops"]   = "kuiskaa kaikille operaattoreille";
$arsc_lang["gotmsg"]        = "Kuiskaat käyttäjälle </i>{user}<i>: {message}";

$arsc_lang["help"]          = "
</i><br><br>&nbsp;<b>Yleinen apu:</b>
<br>&nbsp;&nbsp;&nbsp;Oikeassa laidassa näet käyttäjät,
<br>&nbsp;&nbsp;&nbsp;jotka ovat tällä hetkellä huoneessa.
<br>
<br>&nbsp;&nbsp;&nbsp;Käyttäjät, joilla on symboli @ nimimerkin
<br>&nbsp;&nbsp;&nbsp;edessä, ovat operaattoreita, jotka voivat
<br>&nbsp;&nbsp;&nbsp;potkaista käyttäjiä pois chatista.
<br>&nbsp;&nbsp;&nbsp;Operaatorit voivat myös antaa tai ottaa
<br>&nbsp;&nbsp;&nbsp;pois operaattorin oikeudet.
<br>
<br>&nbsp;&nbsp;&nbsp;Voit lähettää yksityisen viestin klikkaamalla
<br>&nbsp;&nbsp;&nbsp;haluamaasi nimimerkkiä ja kirjoittamalla viestin
<br>&nbsp;&nbsp;&nbsp;sen jälkeen. Viestin eteen ilmestyy koodi, joka 
<br>&nbsp;&nbsp;&nbsp;tarkoittaa, että viesti on yksityisviesti, 
<br>&nbsp;&nbsp;&nbsp;eivätkä muut näe sitä.
<br>
<br>&nbsp;<b>Yleiset komennot:</b>
<br>&nbsp;&nbsp;&nbsp;/me <i>viesti</i> -- Symboloi toimintaa, esim.. <i>/me nukkuu</i> tulostuu: <i>* kÄyttäjä nukkuu</i>
<br>&nbsp;&nbsp;&nbsp;/msg <i>käyttäjä</i> <i>viesti</i> -- Yksityinen <i>viesti</i> <i>käyttäjä</i>lle
<br>&nbsp;&nbsp;&nbsp;/j <i>huone</i> -- Poistuu nykyisestä huoneesta ja astuu <i>huone</i>eseen
<br>&nbsp;&nbsp;&nbsp;/room <i>huone</i> -- Sama kuin /j
<br><br><i>";

$arsc_lang["helpop"]        = "
</i>&nbsp;<b>Operaattorin komennot:</b>
<br>&nbsp;&nbsp;&nbsp;/msgops <i>viesti</i> -- Kuiskaa <i>viesti</i> kaikille operaattoreille
<br>&nbsp;&nbsp;&nbsp;/whois <i>käyttäjä</i> -- Näyttää tietoja <i>käyttäjä</i>stä
<br>&nbsp;&nbsp;&nbsp;/op <i>käyttäjä</i> -- Antaa operaattorin oikeudet <i>käyttäjä</i>lle
<br>&nbsp;&nbsp;&nbsp;/deop <i>käyttäjä</i> -- Postaa operaattorin oikeudet <i>käyttäjä</i>lle
<br>&nbsp;&nbsp;&nbsp;/kick <i>käyttäjä</i> -- Potkaisee <i>käyttäjä</i>n pois chatista
<br>&nbsp;&nbsp;&nbsp;/bann <i>käyttäjä X</i> -- Estää <i>käyttäjä</i>n IP:n <i>X</i>:ksi sekunniksi
<br>&nbsp;&nbsp;&nbsp;/lock <i>käyttäjä</i> -- Lukitsee rekisteröityneen <i>käyttäjä</i>n tilin pysyvästi
<br>&nbsp;&nbsp;&nbsp;/rip <i>käyttäjä</i> -- <i>käyttäjä</i>n viestejä ei näytetä
<br>&nbsp;&nbsp;&nbsp;/unrip <i>käyttäjä</i> -- <i>käyttäjä</i>n viestit näytetään taas
<br>&nbsp;&nbsp;&nbsp;/move <i>käyttäjä huone</i> -- &acute;Siirtää&acute; <i>käyttäjä</i>n <i>huone</i>eseen
<br><br><i>";
?>
