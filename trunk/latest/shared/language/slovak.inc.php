<?php

/*
  This is an ARSC language file. If you translate it, please send me
  a copy to <manuel@kiessling.net>, I will add it to ARSC then. Thanks.		
  This file is for version: 1.0 and 1.0.1
 Slovak version, translated by Radovan Dacej radek@luca.sk	

*/


// Homepage

$arsc_lang["entername"]         = "Prosím zadaj svoju prezıvku:";
$arsc_lang["enterpassword"]     = "Prosím zadaj svoje heslo:";
$arsc_lang["whichversion"]      = "Ktorú verziu chceš pui?";
$arsc_lang["version_dontknow"]  = "Zvo¾ si túto verziu, ak máš pochybnosti a nevieš akı prehliadávaè pouívaš.";
$arsc_lang["version_sockets"]   = "Odporúèaná verzia pre moderné preh¾adávaèe. Pouíva JavaScript a Rámce.";
// If you installed the socket server, version_push_js will not be shown, and vice versa, this is why they are same.
$arsc_lang["version_push_js"]   = "Odporúèaná verzia pre moderné preh¾adávaèe. Pouíva JavaScript a Rámce.";
$arsc_lang["version_header_js"] = "Alternatíva pre moderné preh¾adávaèe ak hore uvedená verzia nefunguje dobre. Pouíva JavaScript a Rámce.";
$arsc_lang["version_header"]    = "Verzia, ktorá pouíva iba rámce, nie Javascript.";
$arsc_lang["version_box"]       = "Verzia pre Zuum WebTV box.";
$arsc_lang["version_text"]      = "Jednoduchá textová verzia pre staré preh¾adávaèe.";
$arsc_lang["yes"]               = "Áno.";
$arsc_lang["no"]                = "Nie";
$arsc_lang["selectroom"]        = "Zvo¾ si izbu:";
$arsc_lang["startbutton"]       = "Naštartuj chat :)!";
$arsc_lang["usersinchat"]       = "Takıto uívate¾ sa u prihlásil:";
$arsc_lang["usersinchat_room"]  = "Izba";
$arsc_lang["usersinchat_name"]  = "Uívate¾:";
$arsc_lang["clicktoregister"]   = "Registruj tvoje uívate¾ské meno!";


// Register page and eMail

$arsc_lang["register_intro"]                 = "Pre registráciu vyplò nasledujúce polia.";
$arsc_lang["register_intro_force"]           = "Heslo Vám zašleme na uvedenı email.";
$arsc_lang["register_entername"]             = "Prezıvka:";
$arsc_lang["register_enteremail"]            = "emailová adresa:";
$arsc_lang["register_enterpassword"]         = "Heslo:";
$arsc_lang["register_send"]                  = "Potvrï registráciu";
$arsc_lang["register_yougetmail"]            = "Vïaka, v najbliších chví¾ach dostanete email s Vaším heslom.";
$arsc_lang["register_emailtemplate_subject"] = "Vaša registrácia do chatu na stránkach Vyxodniari o.z.";

$arsc_lang["register_emailtemplate"]         = "
Ahoj,

práve ste sa zaregistrovali do chatu na stránkach Vıchodniari o.z.

Zvolili ste si prezıvku '{username}',
ktorá je teraz chránená heslom:

            '{password}'

Na stránky nášho (Vášho) chatu sa dostanete kliknutím na:
{homepage}


Ve¾a záabavy!

--
 {chatowner}

";


// Chat interface

$arsc_lang["usersinroom"]     = "Uívatelia";
$arsc_lang["sendmessage"]     = "Pošli";
$arsc_lang["refreshmessages"] = "Obnov správy";
$arsc_lang["leave"]           = "Odís";
$arsc_lang["roomlist"]        = "Izby";
$arsc_lang["refresh"]         = "Obnov";
$arsc_lang["otherfunctions"]  = "Prídavné funkcie";
$arsc_lang["smilielist"]      = "Zoznam úsmevov";
$arsc_lang["scroll_active"]   = "Autoscroll";
$arsc_lang["drawboard"]       = "Drawboard";


// Errors

$arsc_lang["error_register_double_user"] = "Táto prezıvka sa u pouíva. Prosím, pouite inú.";
$arsc_lang["error_waitformail"]          = "Koanáhle dostanete amail s Vašim heslom, môete sa zalogova na chat.";
$arsc_lang["error_double_user"]          = "Uívate¾ s takımto menom sa u zalogoval do chatu!";
$arsc_lang["error_no_name"]              = "Musíte zada vašu prezıvku!";
$arsc_lang["error_bad_name"]             = "Toto meno nie je dovolené poui!";
$arsc_lang["error_wrong_credentials"]    = "Prístup odmietnutı!<br>Pouili ste správne údaje pre autorizáciu?";
$arsc_lang["error_banned"]               = "Prístup je doèasne odmietnutı.";


// Chat System Messages

$arsc_lang["enter"]         = "Uívate¾ {user} vstúpil do izby {room}.";
$arsc_lang["welcome"]       = "Vitaj! Zadaj /? pre zobrazenie platnıch príkazov.";
$arsc_lang["quit"]          = "Uívate¾ {user} opustil izbu {room}.";
$arsc_lang["roomchange"]    = "Uívate¾ {user} opústil izbu {room1} a vstúpil do izby {room2}.";
$arsc_lang["kicked"]        = "Uívate¾ {userpassive} dostal kopaèky od {useractive}.";
$arsc_lang["youwerekicked"] = "Dostal si kopaèky! Nabudúce sa správaj slušne!";
$arsc_lang["op"]            = "Uívate¾ {userpassive} získal status operátora od  {useractive}.";
$arsc_lang["deop"]          = "Uívate¾ {useractive} odobral status operátora z {userpassive}.";
$arsc_lang["whispers"]      = "šepce";
$arsc_lang["whispersops"]   = "šepot pre všetkıch uívate¾ov";
$arsc_lang["gotmsg"]        = "Zašepkal si uívate¾ovi <i>{user}</i> do uška: {message}";

$arsc_lang["help"]          = "
</i><br><br>&nbsp;<b>Pomoc:</b>
<br>&nbsp;&nbsp;&nbsp;V pravom rámci vidíte všetkıch uívate¾ov,
<br>&nbsp;&nbsp;&nbsp;ktorí sú momentálne prihlásení v tejto izbe
<br>
<br>&nbsp;&nbsp;&nbsp;Uívatelia so znakom @ pred ich menom
<br>&nbsp;&nbsp;&nbsp;maju status operátora a môu vykopnú nespratníka
<br>&nbsp;&nbsp;&nbsp;z izby, preda status operátora inému uívate¾ovi,
<br>&nbsp;&nbsp;&nbsp; prípadne sa vzda statusu operátor.
<br>
<br>&nbsp;&nbsp;&nbsp;Ak kliknete na niektoré meno napravo, vstupné pole
<br>&nbsp;&nbsp;&nbsp;sa vyplní príkazom, ktorı umoní zasla súkromnú 
<br>&nbsp;&nbsp;&nbsp;správu tomúto uívate¾ovi.
<br>&nbsp;&nbsp;&nbsp;Len nezabudnite prida Váš odkaz na koniec
<br>&nbsp;&nbsp;&nbsp;príkazového riadku.
<br>
<br>&nbsp;<b>Príkazy:</b>
<br>&nbsp;&nbsp;&nbsp;/me <i>správa</i> -- Symbolizuje akciu, napr. <i>/me cítim sa dobre</i> napíše <i>* Uívate¾ sa cíti dobre</i>
<br>&nbsp;&nbsp;&nbsp;/msg <i>uívate¾</i> <i>správa</i> -- Pošle privátnu (skrytú) <i>správu</i> <i>uívate¾ovi</i>
<br>&nbsp;&nbsp;&nbsp;/j <i>izba</i> -- Opustiš aktuálnu izbu a vstúpiš do <i>izby</i>
<br>&nbsp;&nbsp;&nbsp;/room <i>izba</i> -- alias k /j
<br><br><i>";

$arsc_lang["helpop"]        = "
</i>&nbsp;<b>Príkazy operátora:</b>
<br>&nbsp;&nbsp;&nbsp;/msgops <i>správa</i> -- Vyšle skrytú <i>správu</i> všetkım operátorom
<br>&nbsp;&nbsp;&nbsp;/whois <i>uívate¾</i> -- Ukáe informácie o <i>uívate¾ovi</i>
<br>&nbsp;&nbsp;&nbsp;/op <i>uívate¾</i> -- Dá status operátora <i>uívate¾ovi</i>
<br>&nbsp;&nbsp;&nbsp;/deop <i>uívate¾</i> -- Preberie status operátor od <i>uívate¾</i>
<br>&nbsp;&nbsp;&nbsp;/kick <i>uívate¾</i> -- Vykopni <i>uívate¾a</i> z chatu
<br>&nbsp;&nbsp;&nbsp;/bann <i>uívate¾ X</i> -- Blokuj IP <i>uívate¾a</i> na <i>X</i> sekúnd
<br>&nbsp;&nbsp;&nbsp;/lock <i>uívate¾</i> -- Zamkni konto (registrované!) <i>uívate¾a</i> permanentne
<br>&nbsp;&nbsp;&nbsp;/rip <i>uívate¾</i> -- Èo <i>uívate¾</i> hovorí sa nezobrazuje
<br>&nbsp;&nbsp;&nbsp;/unrip <i>uívate¾</i> -- Èo <i>uívate¾</i> hovorí sa znovu zobrazuje
<br>&nbsp;&nbsp;&nbsp;/move <i>uívate¾ izba</i> -- &acute;Moves&acute; <i>uívate¾a</i> do <i>izby</i>
<br><br><i>";
?>