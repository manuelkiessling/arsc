<?php

// This is an ARSC language file. If you translate it, please send me a copy to <manuel@kiessling.net>, I will add it to ARSC then. Thanks.

$arsc_lang_entername = "Skriv ditt namn här";
$arsc_lang_namelength = "Du kan använda maximalt 10 tecken";
$arsc_lang_whichversion = "Vilken version vill du använda?";
$arsc_lang_version_dontknow = "Välj denna om du inte har en aning om vad en webläsare är eller vilken webläsare du använder för tillfället.";
$arsc_lang_version_sockets = "<b>Ny funktion:</b> Koppla upp mot en egen ARSC Perl Server. <b>Ge det ett försök, men det kan uppstå problem.</b>";
$arsc_lang_version_push_js = "Den rekommenderade versionen använder server push teknologi och JavaScript, och är överlägset den mest bekväma versionen. Den borde fungera med varje modern webläsare som har JavaScript aktiverat.";
$arsc_lang_version_push_js_browsers = array("Microsoft Internet Explorer 4.x - 6.x", "Netscape Navigator 2.x - 6.x", "Mozilla 0.9.x", "Opera 5.x");
$arsc_lang_version_header_js = "Om din webläsare inte fungerar med server push, men klarar använda JavaScript, så borde du välja den här versionen, eftersom den tillåter en hyfsat bekväm chat utan att behöva använda server push.";
$arsc_lang_version_header_js_browsers = array("Samtliga av ovanstående");
$arsc_lang_version_header = "Standard frame versionen utan JavaScript och utan server push borde verkligen fungera med varje webläsare på den här planetens yta som förstår åtminstone framesets. Välj denna version enbart om ingen av de andra versionerna fungerade - den kan vara rätt så obekväm.";
$arsc_lang_version_header_browsers = array("Samtliga av ovanstående", "Konqueror");
$arsc_lang_version_text = "Den här sista versionen är för de av er som fortfarande är inne på \"den riktiga känslan\" och sitter framför ett textbaserat användargränssnitt och surfar med Lynx eller något liknande. Detta är verkligen inte bekvämt, men det fungerar.";
$arsc_lang_version_text_browsers = array("Samtliga av ovanstående", "Konqueror", "Lynx", "w3");
$arsc_lang_yes = "Ja";
$arsc_lang_no = "Nej";
$arsc_lang_browser_identify = "Din webläsare identifierades som {browser}, så du borde välja {version} versionen.";
$arsc_lang_browser_identify_js = "Men var säker på att du aktiverat JavaScript support i din webläsare om du väljer denna version.";
$arsc_lang_selectroom = "Välj ett rum";
$arsc_lang_startbutton = "Starta Chatten!";
$arsc_lang_usersinchat = "Dessa användare är för närvarande i chatten";
$arsc_lang_usersinroom = "Användare i rummet";
$arsc_lang_sendmessage = "Skicka";
$arsc_lang_refreshmessages = "Uppdatera meddelanden";
$arsc_lang_leave = "Avsluta";

$arsc_lang_error_double_user = "En användare med detta namn finns redan!";
$arsc_lang_error_no_name = "Du måste skriva in ett användarnamn!";

// Chat System Messages
$arsc_lang_enter = "Användare {user} kommer in i {room} rummet.";
$arsc_lang_welcome = "Välkommen! Skriv </i>/?<i> i textfältet för att se tillgängliga funktioner.";
$arsc_lang_quit = "Användare {user} lämnar {room} rummet.";
$arsc_lang_roomchange = "Användare {user} lämnar {room1} rummet och går in i {room2} rummet.";

$arsc_lang_kicked = "Användare {userpassive} sparkades ut av {useractive}.";
$arsc_lang_youwerekicked = "Du sparkades ut från chatten!";

$arsc_lang_op = "Användare {userpassive} fick operatörstatus från {useractive}.";
$arsc_lang_deop = "Användare {useractive} tog operatörstatus från {userpassive}.";

$arsc_lang_whispers = "viskar";
$arsc_lang_whispersops = "viskar till alla operatörer";

$arsc_lang_help = "</i><br><br>&nbsp;<b>Allmän hjälp:</b><br>&nbsp;&nbsp;&nbsp;I den högra framen ser du alla användare<br>&nbsp;&nbsp;&nbsp;som för närvarande är inloggade.<br><br>&nbsp;&nbsp;&nbsp;Användare med @ symbolen framför deras<br>&nbsp;&nbsp;&nbsp;namn är operatörer och kan sparka ut<br>&nbsp;&nbsp;&nbsp;användare från chatten och kan ge och ta<br>&nbsp;&nbsp;&nbsp;operatörstatus till och från användare.<br><br>&nbsp;&nbsp;&nbsp;Genom att klicka på något av dessa namn, kommer<br>&nbsp;&nbsp;&nbsp;ditt meddelandefält fyllas med det kommando<br>&nbsp;&nbsp;&nbsp;som tillåter att man skickar privata meddelanden till vald<br>&nbsp;&nbsp;&nbsp;användare - skriv bara in ditt meddelande direkt efter.<br><br>&nbsp;<b>Allmäna kommandon:</b><br>&nbsp;&nbsp;&nbsp;/me <i>meddelande</i> -- Symbolisera en handling, t.ex. <i>/me mår bra</i> kommer skriva ut <i>* användarnamn mår bra</i><br>&nbsp;&nbsp;&nbsp;/msg <i>användare</i> <i>meddelande</i> -- Skicka ett privat <i>meddelande</i> til
l <i>användare</i><br><br>&nbsp;<b>Operatör kommandon:</b><br>&nbsp;&nbsp;&nbsp;/op <i>användare</i> -- Ge operatörstatus till <i>användare</i><br>&nbsp;&nbsp;&nbsp;/deop <i>användare</i> -- Ta operatörstatus från <i>användare</i><br>&nbsp;&nbsp;&nbsp;/kick <i>användare</i> -- Sparka <i>användare</i> från aktuellt rum<br><br><i>";
?>
