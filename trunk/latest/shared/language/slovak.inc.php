<?php

/*
  This is an ARSC language file. If you translate it, please send me
  a copy to <manuel@kiessling.net>, I will add it to ARSC then. Thanks.		
  This file is for version: 1.0 and 1.0.1
 Slovak version, translated by Radovan Dacej radek@luca.sk	

*/


// Homepage

$arsc_lang["entername"]         = "Pros�m zadaj svoju prez�vku:";
$arsc_lang["enterpassword"]     = "Pros�m zadaj svoje heslo:";
$arsc_lang["whichversion"]      = "Ktor� verziu chce� pu�i�?";
$arsc_lang["version_dontknow"]  = "Zvo� si t�to verziu, ak m� pochybnosti a nevie� ak� prehliad�va� pou��va�.";
$arsc_lang["version_sockets"]   = "Odpor��an� verzia pre modern� preh�ad�va�e. Pou��va JavaScript a R�mce.";
// If you installed the socket server, version_push_js will not be shown, and vice versa, this is why they are same.
$arsc_lang["version_push_js"]   = "Odpor��an� verzia pre modern� preh�ad�va�e. Pou��va JavaScript a R�mce.";
$arsc_lang["version_header_js"] = "Alternat�va pre modern� preh�ad�va�e ak hore uveden� verzia nefunguje dobre. Pou��va JavaScript a R�mce.";
$arsc_lang["version_header"]    = "Verzia, ktor� pou��va iba r�mce, nie Javascript.";
$arsc_lang["version_box"]       = "Verzia pre Zuum WebTV box.";
$arsc_lang["version_text"]      = "Jednoduch� textov� verzia pre star� preh�ad�va�e.";
$arsc_lang["yes"]               = "�no.";
$arsc_lang["no"]                = "Nie";
$arsc_lang["selectroom"]        = "Zvo� si izbu:";
$arsc_lang["startbutton"]       = "Na�tartuj chat :)!";
$arsc_lang["usersinchat"]       = "Tak�to u��vate� sa u� prihl�sil:";
$arsc_lang["usersinchat_room"]  = "Izba";
$arsc_lang["usersinchat_name"]  = "U��vate�:";
$arsc_lang["clicktoregister"]   = "Registruj tvoje u��vate�sk� meno!";


// Register page and eMail

$arsc_lang["register_intro"]                 = "Pre registr�ciu vypl� nasleduj�ce polia.";
$arsc_lang["register_intro_force"]           = "Heslo V�m za�leme na uveden� email.";
$arsc_lang["register_entername"]             = "Prez�vka:";
$arsc_lang["register_enteremail"]            = "emailov� adresa:";
$arsc_lang["register_enterpassword"]         = "Heslo:";
$arsc_lang["register_send"]                  = "Potvr� registr�ciu";
$arsc_lang["register_yougetmail"]            = "V�aka, v najbli���ch chv�ach dostanete email s Va��m heslom.";
$arsc_lang["register_emailtemplate_subject"] = "Va�a registr�cia do chatu na str�nkach Vyxodniari o.z.";

$arsc_lang["register_emailtemplate"]         = "
Ahoj,

pr�ve ste sa zaregistrovali do chatu na str�nkach V�chodniari o.z.

Zvolili ste si prez�vku '{username}',
ktor� je teraz chr�nen� heslom:

            '{password}'

Na str�nky n�ho (V�ho) chatu sa dostanete kliknut�m na:
{homepage}


Ve�a z�abavy!

--
 {chatowner}

";


// Chat interface

$arsc_lang["usersinroom"]     = "U��vatelia";
$arsc_lang["sendmessage"]     = "Po�li";
$arsc_lang["refreshmessages"] = "Obnov spr�vy";
$arsc_lang["leave"]           = "Od�s�";
$arsc_lang["roomlist"]        = "Izby";
$arsc_lang["refresh"]         = "Obnov";
$arsc_lang["otherfunctions"]  = "Pr�davn� funkcie";
$arsc_lang["smilielist"]      = "Zoznam �smevov";
$arsc_lang["scroll_active"]   = "Autoscroll";
$arsc_lang["drawboard"]       = "Drawboard";


// Errors

$arsc_lang["error_register_double_user"] = "T�to prez�vka sa u� pou��va. Pros�m, pou�ite in�.";
$arsc_lang["error_waitformail"]          = "Koan�hle dostanete amail s Va�im heslom, m��ete sa zalogova� na chat.";
$arsc_lang["error_double_user"]          = "U��vate� s tak�mto menom sa u� zalogoval do chatu!";
$arsc_lang["error_no_name"]              = "Mus�te zada� va�u prez�vku!";
$arsc_lang["error_bad_name"]             = "Toto meno nie je dovolen� pou�i�!";
$arsc_lang["error_wrong_credentials"]    = "Pr�stup odmietnut�!<br>Pou�ili ste spr�vne �daje pre autoriz�ciu?";
$arsc_lang["error_banned"]               = "Pr�stup je do�asne odmietnut�.";


// Chat System Messages

$arsc_lang["enter"]         = "U��vate� {user} vst�pil do izby {room}.";
$arsc_lang["welcome"]       = "Vitaj! Zadaj /? pre zobrazenie platn�ch pr�kazov.";
$arsc_lang["quit"]          = "U��vate� {user} opustil izbu {room}.";
$arsc_lang["roomchange"]    = "U��vate� {user} op�stil izbu {room1} a vst�pil do izby {room2}.";
$arsc_lang["kicked"]        = "U��vate� {userpassive} dostal kopa�ky od {useractive}.";
$arsc_lang["youwerekicked"] = "Dostal si kopa�ky! Nabud�ce sa spr�vaj slu�ne!";
$arsc_lang["op"]            = "U��vate� {userpassive} z�skal status oper�tora od  {useractive}.";
$arsc_lang["deop"]          = "U��vate� {useractive} odobral status oper�tora z {userpassive}.";
$arsc_lang["whispers"]      = "�epce";
$arsc_lang["whispersops"]   = "�epot pre v�etk�ch u��vate�ov";
$arsc_lang["gotmsg"]        = "Za�epkal si u��vate�ovi <i>{user}</i> do u�ka: {message}";

$arsc_lang["help"]          = "
</i><br><br>&nbsp;<b>Pomoc:</b>
<br>&nbsp;&nbsp;&nbsp;V pravom r�mci vid�te v�etk�ch u��vate�ov,
<br>&nbsp;&nbsp;&nbsp;ktor� s� moment�lne prihl�sen� v tejto izbe
<br>
<br>&nbsp;&nbsp;&nbsp;U��vatelia so znakom @ pred ich menom
<br>&nbsp;&nbsp;&nbsp;maju status oper�tora a m��u vykopn�� nespratn�ka
<br>&nbsp;&nbsp;&nbsp;z izby, preda� status oper�tora in�mu u��vate�ovi,
<br>&nbsp;&nbsp;&nbsp; pr�padne sa vzda� statusu oper�tor.
<br>
<br>&nbsp;&nbsp;&nbsp;Ak kliknete na niektor� meno napravo, vstupn� pole
<br>&nbsp;&nbsp;&nbsp;sa vypln� pr�kazom, ktor� umo�n� zasla� s�kromn� 
<br>&nbsp;&nbsp;&nbsp;spr�vu tom�to u��vate�ovi.
<br>&nbsp;&nbsp;&nbsp;Len nezabudnite prida� V� odkaz na koniec
<br>&nbsp;&nbsp;&nbsp;pr�kazov�ho riadku.
<br>
<br>&nbsp;<b>Pr�kazy:</b>
<br>&nbsp;&nbsp;&nbsp;/me <i>spr�va</i> -- Symbolizuje akciu, napr. <i>/me c�tim sa dobre</i> nap�e <i>* U��vate� sa c�ti dobre</i>
<br>&nbsp;&nbsp;&nbsp;/msg <i>u��vate�</i> <i>spr�va</i> -- Po�le priv�tnu (skryt�) <i>spr�vu</i> <i>u��vate�ovi</i>
<br>&nbsp;&nbsp;&nbsp;/j <i>izba</i> -- Opusti� aktu�lnu izbu a vst�pi� do <i>izby</i>
<br>&nbsp;&nbsp;&nbsp;/room <i>izba</i> -- alias k /j
<br><br><i>";

$arsc_lang["helpop"]        = "
</i>&nbsp;<b>Pr�kazy oper�tora:</b>
<br>&nbsp;&nbsp;&nbsp;/msgops <i>spr�va</i> -- Vy�le skryt� <i>spr�vu</i> v�etk�m oper�torom
<br>&nbsp;&nbsp;&nbsp;/whois <i>u��vate�</i> -- Uk�e inform�cie o <i>u��vate�ovi</i>
<br>&nbsp;&nbsp;&nbsp;/op <i>u��vate�</i> -- D� status oper�tora <i>u��vate�ovi</i>
<br>&nbsp;&nbsp;&nbsp;/deop <i>u��vate�</i> -- Preberie status oper�tor od <i>u��vate�</i>
<br>&nbsp;&nbsp;&nbsp;/kick <i>u��vate�</i> -- Vykopni <i>u��vate�a</i> z chatu
<br>&nbsp;&nbsp;&nbsp;/bann <i>u��vate� X</i> -- Blokuj IP <i>u��vate�a</i> na <i>X</i> sek�nd
<br>&nbsp;&nbsp;&nbsp;/lock <i>u��vate�</i> -- Zamkni konto (registrovan�!) <i>u��vate�a</i> permanentne
<br>&nbsp;&nbsp;&nbsp;/rip <i>u��vate�</i> -- �o <i>u��vate�</i> hovor� sa nezobrazuje
<br>&nbsp;&nbsp;&nbsp;/unrip <i>u��vate�</i> -- �o <i>u��vate�</i> hovor� sa znovu zobrazuje
<br>&nbsp;&nbsp;&nbsp;/move <i>u��vate� izba</i> -- &acute;Moves&acute; <i>u��vate�a</i> do <i>izby</i>
<br><br><i>";
?>