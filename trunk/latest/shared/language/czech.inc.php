<?php

/*
  Toto je jazykov� soubor pro ARSC chat. Pokud ho p�elo��te do jin�ho jazyka
  po�lete pros�m kopii na <manuel@kiessling.net> a oni ji nab�dnou jin�m u�ivatel�m. D�kujeme.

  This file is for versions: 1.0, 1.0.1, 1.0.1p1, 1.0.2

  P�elo�il:  Mario Hro� <megasoft.trinec@seznam.cz>
  Translate: Mario Hro� <megasoft.trinec@seznam.cz>
*/


// Homepage

$arsc_lang["entername"]         = "U�ivatelsk� jm�no:";
$arsc_lang["enterpassword"]     = "Heslo:";
$arsc_lang["whichversion"]      = "Kterou verzi chcete pou��t?";
$arsc_lang["version_dontknow"]  = "Pokud nev�te jak� prohl�e� pou��v�te zvolte tuto verzi.";
$arsc_lang["version_sockets"]   = "Doporu�en� verze pro nov�j�� prohl�e�e (Internet Explorer (5.0 (4.0) - 6.0, ...). S pou�it�m r�m� a JavaScript�.";
// If you installed the socket server, version_push_js will not be shown, and vice versa, this is why they are same.
$arsc_lang["version_push_js"]   = "Doporu�en� verze pro nov�j�� prohl�e�e (Internet Explorer (5.0 (4.0) - 6.0, ...). S pou�it�m r�m� a JavaScript�.";
$arsc_lang["version_header_js"] = "Alternetiva pro prohl�e�e u kter�ch nefungujou n�kter� funkce. S pou�it�m r�m� a JavaScript�.";
$arsc_lang["version_header"]    = "Verze s pou�it�m r�m�, ale bez pou�it� JavaScript�.";
$arsc_lang["version_box"]       = "Verze pro Zuum WebTV box.";
$arsc_lang["version_text"]      = "Jednoduch� verze pro prohl�e�e zalo�en� na textu.";
$arsc_lang["yes"]               = "Ano";
$arsc_lang["no"]                = "Ne";
$arsc_lang["selectroom"]        = "Zvolte m�stnost:";
$arsc_lang["startbutton"]       = "Start!";
$arsc_lang["usersinchat"]       = "On-line u�ivatel�:";
$arsc_lang["usersinchat_room"]  = "M�stnost";
$arsc_lang["usersinchat_name"]  = "U�ivatel";
$arsc_lang["clicktoregister"]   = "Registrovat nov�ho u�ivatele!";


// Register page and eMail

$arsc_lang["register_intro"]                 = "Pro registraci nov�ho u�ivatele vypl�te tento formul��.";
$arsc_lang["register_intro_force"]           = "Va�e p��stupov� informace budou pozd�ji posl�ny i na zadan� E-mail.";
$arsc_lang["register_entername"]             = "U�ivatelsk� jm�no:";
$arsc_lang["register_enteremail"]            = "E-mail:";
$arsc_lang["register_enterpassword"]         = "Heslo:";
$arsc_lang["register_send"]                  = "Registrovat";
$arsc_lang["register_yougetmail"]            = "Registrace prob�hla �sp�n�, va�e heslo bylo posl�no na zadan� E-mail.";
$arsc_lang["register_emailtemplate_subject"] = "Registrace v chatu na Super m�stu.";

$arsc_lang["register_emailtemplate"]         = "
Dobr� den,

Zde jsou Va�e p�ihla�ovac� informace do chatu na Super m�stu.

Va�e u�ivatelsk� jm�no: '{username}'
Va�e heslo:                      '{password}'

Nyn� se m��ete p�ihl�sit na str�nce:
{homepage}


P�ejeme hodn� z�bavy!

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

$arsc_lang["usersinroom"]     = "U�ivatel� v m�stnosti";
$arsc_lang["sendmessage"]     = "Odeslat";
$arsc_lang["refreshmessages"] = "Aktualizovat zpr�vy";
$arsc_lang["leave"]           = "Opustit m�stnost";
$arsc_lang["roomlist"]        = "Seznam m�stnost�";
$arsc_lang["refresh"]         = "Aktualizovat";
$arsc_lang["otherfunctions"]  = "Dal�� funkce";
$arsc_lang["smilielist"]      = "Seznam smajl�k�";
$arsc_lang["scroll_active"]   = "Automatick� rolov�n�";
$arsc_lang["drawboard"]       = "Drawboard";


// Errors

$arsc_lang["error_register_double_user"] = "Toto u�ivatelsk� jm�no ji� existuje. Pros�m zvolte si jin�.";
$arsc_lang["error_waitformail"]          = "Jestli�e V�m p�i�el E-mail s p�ihla�ovac�mi informacemi, m��ete se p�ihl�sit.";
$arsc_lang["error_double_user"]          = "U�ivatel s t�mto nickem je pr�v� p�ihl�en!";
$arsc_lang["error_no_name"]              = "Mus�te zadat u�ivatelsk� jm�no!";
$arsc_lang["error_bad_name"]             = "Toto u�ivatelsk� jm�no nen� povoleno!";
$arsc_lang["error_wrong_credentials"]    = "P��stup zak�z�n!<br>Jsou va�e p�ihla�ovac� informace spr�vn�?";
$arsc_lang["error_banned"]               = "P��stup je do�asn� zak�z�n.";


// Chat System Messages

$arsc_lang["enter"]         = "U�ivatel(ka) {user} vstoupil(a) do m�stnosti.";
$arsc_lang["welcome"]       = "V�tej u�ivateli {user}!  M��ete zadat /? pro n�pov�du.";
$arsc_lang["quit"]          = "U�ivatel(ka) {user} opustil(a) m�stnost.";
$arsc_lang["roomchange"]    = "U�ivatel(ka) {user} opustil(a) m�stnost {room1} a vstoupil(a) do m�stnosti {room2}.";
$arsc_lang["kicked"]        = "U�ivatel(ka) {userpassive} byl(a) vyhozen(a) u�ivatelem(kou) {useractive}.";
$arsc_lang["youwerekicked"] = "Byl(a) jste vyhozen(a) z m�stnosti!";
$arsc_lang["op"]            = "U�ivatel(ka) {useractive} p�edal(a) spr�vcovstv� {userpassive}.";
$arsc_lang["deop"]          = "U�ivatel(ka) {useractive} odebral(a) spr�vcovstv� {userpassive}.";
$arsc_lang["whispers"]      = "�eptem";
$arsc_lang["whispersops"]   = "�eptem pro v�echny";
$arsc_lang["gotmsg"]        = "�ept�te u�ivateli </i>{user}<i>: {message}";

$arsc_lang["help"]          = "
</i><br><br>&nbsp;<b>Help:</b>
<br>&nbsp;&nbsp;&nbsp;V prav�m r�mu jsou v�ichni u�ivatel�
<br>&nbsp;&nbsp;&nbsp;kte�� jsou pr�v� v m�stnosti.
<br>
<br>&nbsp;&nbsp;&nbsp;U�ivatel� s @ p�ed jm�nem
<br>&nbsp;&nbsp;&nbsp;jsou spr�vci m�stnosti a mohou
<br>&nbsp;&nbsp;&nbsp;vyhazovat z m�stnosti, p�edat
<br>&nbsp;&nbsp;&nbsp;spr�vcovstv� jin�mu u�ivateli a vz�t ho zp�t.
<br>
<br>&nbsp;&nbsp;&nbsp;Pokud kliknete na jm�no vpravo, m��ete
<br>&nbsp;&nbsp;&nbsp;chatovat jen s t�mto u�ivatelem
<br>&nbsp;&nbsp;&nbsp;a niko jin� zpr�vu neuvid�.
<br>&nbsp;&nbsp;&nbsp;Mus�te jen napsat zpr�vu do konce
<br>&nbsp;&nbsp;&nbsp;p��kazov� ��dky.
<br>
<br>&nbsp;<b>Hlavn� p��kazy chatu:</b>
<!-- <br>&nbsp;&nbsp;&nbsp;/me <i>zpr�va</i> -- Symbolizes an action, e.g. <i>/me feels fine</i> writes <i>* User feels fine</i> -->
<br>&nbsp;&nbsp;&nbsp;/msg <i>u�ivatel</i> <i>zpr�va</i> -- Posl�n� soukrom� <i>zpr�vy</i> u�ivateli <i>u�ivatel</i>
<br>&nbsp;&nbsp;&nbsp;/j <i>m�stnost</i> -- Opustit m�stnost a vstoupit do m�stnosti <i>m�stnost</i>
<br>&nbsp;&nbsp;&nbsp;/room <i>m�stnost</i> -- P�ezd�vka do /j
<br><br><i>";

$arsc_lang["helpop"]        = "
</i>&nbsp;<b>P��kazy zpr�vce:</b>
<br>&nbsp;&nbsp;&nbsp;/msgops <i>zpr�va</i> -- �epot <i>zpr�vy</i> pro v�echny zpr�vce
<br>&nbsp;&nbsp;&nbsp;/whois <i>u�ivatel</i> -- Zobrazit informace o <i>u�ivateli</i>
<br>&nbsp;&nbsp;&nbsp;/op <i>u�ivatel</i> -- P�edat spr�vcovstv� u�ivateli <i>u�ivatel</i>
<br>&nbsp;&nbsp;&nbsp;/deop <i>u�ivatel</i> -- Vz�t zpr�vcovstv� u�ivateli <i>u�ivatel</i>
<br>&nbsp;&nbsp;&nbsp;/kick <i>u�ivatel</i> -- Vyhodit <i>u�ivatele</i> z m�stnosti
<br>&nbsp;&nbsp;&nbsp;/bann <i>u�ivatel X</i> -- Blokovat IP od <i>u�ivatele</i> po dobu <i>X</i> sekund
<br>&nbsp;&nbsp;&nbsp;/lock <i>u�ivatel</i> -- Permanentn� zak�zet p��stup (registrovan�mu!) <i>u�ivateli</i>
<br>&nbsp;&nbsp;&nbsp;/rip <i>u�ivatel</i> -- Skr�t co �ekl u�ivatel <i>user</i>
<br>&nbsp;&nbsp;&nbsp;/unrip <i>u�ivatel</i> -- Skr�t co �ekl u�ivatel <i>user</i>
<br>&nbsp;&nbsp;&nbsp;/move <i>u�ivatel m�stnost</i> -- &acute;P�em�s�it&acute; <i>u�ivatele</i> do <i>m�stnosti</i>
<br><br><i>";
?>