<?php

/*
  Toto je jazykovı soubor pro ARSC chat. Pokud ho pøeloíte do jiného jazyka
  pošlete prosím kopii na <manuel@kiessling.net> a oni ji nabídnou jinım uivatelùm. Dìkujeme.

  This file is for versions: 1.0, 1.0.1, 1.0.1p1, 1.0.2

  Pøeloil:  Mario Hroš <megasoft.trinec@seznam.cz>
  Translate: Mario Hroš <megasoft.trinec@seznam.cz>
*/


// Homepage

$arsc_lang["entername"]         = "Uivatelské jméno:";
$arsc_lang["enterpassword"]     = "Heslo:";
$arsc_lang["whichversion"]      = "Kterou verzi chcete pouít?";
$arsc_lang["version_dontknow"]  = "Pokud nevíte jakı prohlíeè pouíváte zvolte tuto verzi.";
$arsc_lang["version_sockets"]   = "Doporuèená verze pro novìjší prohlíeèe (Internet Explorer (5.0 (4.0) - 6.0, ...). S pouitím rámù a JavaScriptù.";
// If you installed the socket server, version_push_js will not be shown, and vice versa, this is why they are same.
$arsc_lang["version_push_js"]   = "Doporuèená verze pro novìjší prohlíeèe (Internet Explorer (5.0 (4.0) - 6.0, ...). S pouitím rámù a JavaScriptù.";
$arsc_lang["version_header_js"] = "Alternetiva pro prohlíeèe u kterıch nefungujou nìkteré funkce. S pouitím rámù a JavaScriptù.";
$arsc_lang["version_header"]    = "Verze s pouitím rámù, ale bez pouití JavaScriptù.";
$arsc_lang["version_box"]       = "Verze pro Zuum WebTV box.";
$arsc_lang["version_text"]      = "Jednoduchá verze pro prohlíeèe zaloené na textu.";
$arsc_lang["yes"]               = "Ano";
$arsc_lang["no"]                = "Ne";
$arsc_lang["selectroom"]        = "Zvolte místnost:";
$arsc_lang["startbutton"]       = "Start!";
$arsc_lang["usersinchat"]       = "On-line uivatelé:";
$arsc_lang["usersinchat_room"]  = "Místnost";
$arsc_lang["usersinchat_name"]  = "Uivatel";
$arsc_lang["clicktoregister"]   = "Registrovat nového uivatele!";


// Register page and eMail

$arsc_lang["register_intro"]                 = "Pro registraci nového uivatele vyplòte tento formuláø.";
$arsc_lang["register_intro_force"]           = "Vaše pøístupové informace budou pozdìji poslány i na zadanı E-mail.";
$arsc_lang["register_entername"]             = "Uivatelské jméno:";
$arsc_lang["register_enteremail"]            = "E-mail:";
$arsc_lang["register_enterpassword"]         = "Heslo:";
$arsc_lang["register_send"]                  = "Registrovat";
$arsc_lang["register_yougetmail"]            = "Registrace probìhla úspìšnì, vaše heslo bylo posláno na zadanı E-mail.";
$arsc_lang["register_emailtemplate_subject"] = "Registrace v chatu na Super místu.";

$arsc_lang["register_emailtemplate"]         = "
Dobrı den,

Zde jsou Vaše pøihlašovací informace do chatu na Super místu.

Vaše uivatelské jméno: '{username}'
Vaše heslo:                      '{password}'

Nyní se mùete pøihlásit na stránce:
{homepage}


Pøejeme hodnì zábavy!

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

$arsc_lang["usersinroom"]     = "Uivatelé v místnosti";
$arsc_lang["sendmessage"]     = "Odeslat";
$arsc_lang["refreshmessages"] = "Aktualizovat zprávy";
$arsc_lang["leave"]           = "Opustit místnost";
$arsc_lang["roomlist"]        = "Seznam místností";
$arsc_lang["refresh"]         = "Aktualizovat";
$arsc_lang["otherfunctions"]  = "Další funkce";
$arsc_lang["smilielist"]      = "Seznam smajlíkù";
$arsc_lang["scroll_active"]   = "Automatické rolování";
$arsc_lang["drawboard"]       = "Drawboard";


// Errors

$arsc_lang["error_register_double_user"] = "Toto uivatelské jméno ji existuje. Prosím zvolte si jiné.";
$arsc_lang["error_waitformail"]          = "Jestlie Vám pøišel E-mail s pøihlašovacími informacemi, mùete se pøihlásit.";
$arsc_lang["error_double_user"]          = "Uivatel s tímto nickem je právì pøihlášen!";
$arsc_lang["error_no_name"]              = "Musíte zadat uivatelské jméno!";
$arsc_lang["error_bad_name"]             = "Toto uivatelské jméno není povoleno!";
$arsc_lang["error_wrong_credentials"]    = "Pøístup zakázán!<br>Jsou vaše pøihlašovací informace správné?";
$arsc_lang["error_banned"]               = "Pøístup je doèasnì zakázán.";


// Chat System Messages

$arsc_lang["enter"]         = "Uivatel(ka) {user} vstoupil(a) do místnosti.";
$arsc_lang["welcome"]       = "Vítej uivateli {user}!  Mùete zadat /? pro nápovìdu.";
$arsc_lang["quit"]          = "Uivatel(ka) {user} opustil(a) místnost.";
$arsc_lang["roomchange"]    = "Uivatel(ka) {user} opustil(a) místnost {room1} a vstoupil(a) do místnosti {room2}.";
$arsc_lang["kicked"]        = "Uivatel(ka) {userpassive} byl(a) vyhozen(a) uivatelem(kou) {useractive}.";
$arsc_lang["youwerekicked"] = "Byl(a) jste vyhozen(a) z místnosti!";
$arsc_lang["op"]            = "Uivatel(ka) {useractive} pøedal(a) správcovství {userpassive}.";
$arsc_lang["deop"]          = "Uivatel(ka) {useractive} odebral(a) správcovství {userpassive}.";
$arsc_lang["whispers"]      = "šeptem";
$arsc_lang["whispersops"]   = "šeptem pro všechny";
$arsc_lang["gotmsg"]        = "Šeptáte uivateli </i>{user}<i>: {message}";

$arsc_lang["help"]          = "
</i><br><br>&nbsp;<b>Help:</b>
<br>&nbsp;&nbsp;&nbsp;V pravém rámu jsou všichni uivatelé
<br>&nbsp;&nbsp;&nbsp;kteøí jsou právì v místnosti.
<br>
<br>&nbsp;&nbsp;&nbsp;Uivatelé s @ pøed jménem
<br>&nbsp;&nbsp;&nbsp;jsou správci místnosti a mohou
<br>&nbsp;&nbsp;&nbsp;vyhazovat z místnosti, pøedat
<br>&nbsp;&nbsp;&nbsp;správcovství jinému uivateli a vzít ho zpìt.
<br>
<br>&nbsp;&nbsp;&nbsp;Pokud kliknete na jméno vpravo, mùete
<br>&nbsp;&nbsp;&nbsp;chatovat jen s tímto uivatelem
<br>&nbsp;&nbsp;&nbsp;a niko jinı zprávu neuvidí.
<br>&nbsp;&nbsp;&nbsp;Musíte jen napsat zprávu do konce
<br>&nbsp;&nbsp;&nbsp;pøíkazové øádky.
<br>
<br>&nbsp;<b>Hlavní pøíkazy chatu:</b>
<!-- <br>&nbsp;&nbsp;&nbsp;/me <i>zpráva</i> -- Symbolizes an action, e.g. <i>/me feels fine</i> writes <i>* User feels fine</i> -->
<br>&nbsp;&nbsp;&nbsp;/msg <i>uivatel</i> <i>zpráva</i> -- Poslání soukromé <i>zprávy</i> uivateli <i>uivatel</i>
<br>&nbsp;&nbsp;&nbsp;/j <i>místnost</i> -- Opustit místnost a vstoupit do místnosti <i>místnost</i>
<br>&nbsp;&nbsp;&nbsp;/room <i>místnost</i> -- Pøezdívka do /j
<br><br><i>";

$arsc_lang["helpop"]        = "
</i>&nbsp;<b>Pøíkazy zprávce:</b>
<br>&nbsp;&nbsp;&nbsp;/msgops <i>zpráva</i> -- Šepot <i>zprávy</i> pro všechny zprávce
<br>&nbsp;&nbsp;&nbsp;/whois <i>uivatel</i> -- Zobrazit informace o <i>uivateli</i>
<br>&nbsp;&nbsp;&nbsp;/op <i>uivatel</i> -- Pøedat správcovství uivateli <i>uivatel</i>
<br>&nbsp;&nbsp;&nbsp;/deop <i>uivatel</i> -- Vzít zprávcovství uivateli <i>uivatel</i>
<br>&nbsp;&nbsp;&nbsp;/kick <i>uivatel</i> -- Vyhodit <i>uivatele</i> z místnosti
<br>&nbsp;&nbsp;&nbsp;/bann <i>uivatel X</i> -- Blokovat IP od <i>uivatele</i> po dobu <i>X</i> sekund
<br>&nbsp;&nbsp;&nbsp;/lock <i>uivatel</i> -- Permanentnì zakázet pøístup (registrovanému!) <i>uivateli</i>
<br>&nbsp;&nbsp;&nbsp;/rip <i>uivatel</i> -- Skrıt co øekl uivatel <i>user</i>
<br>&nbsp;&nbsp;&nbsp;/unrip <i>uivatel</i> -- Skrıt co øekl uivatel <i>user</i>
<br>&nbsp;&nbsp;&nbsp;/move <i>uivatel místnost</i> -- &acute;Pøemísit&acute; <i>uivatele</i> do <i>místnosti</i>
<br><br><i>";
?>