<?php

// This is an ARSC language file. If you translate it, please send me a copy to <manuel@kiessling.net>, I will add it to ARSC then. Thanks.

$arsc_lang_entername = "Anna nimimerkkisi";
$arsc_lang_namelength = "Nimimerkki saa olla max. 10 merkki‰ pitk‰";
$arsc_lang_whichversion = "Valitse haluamasi chat versio?";
$arsc_lang_version_dontknow = "Valitse t‰m‰ jos sinulla ei ole aavistustakaan  mit‰ selainta k‰yt‰t.";
$arsc_lang_version_sockets = "Suositeltava versio uusille selaimille. K‰ytt‰‰ JavaScripti‰, Frameja sek‰ valinnaista porttia.";
$arsc_lang_version_sockets_browsers = array("Microsoft Internet Explorer 4.x - 6.x", "Netscape Navigator 3.x - 6.x", "Mozilla 0.9.x", "Opera 5.x");
$arsc_lang_version_push_js = "Vaihtoehtoinen valinta uusille selaimille. K‰ytt‰‰ JavaScripti‰, Frameja sek‰ server push tekniikkaa.";
$arsc_lang_version_push_js_browsers = array("Microsoft Internet Explorer 4.x - 6.x", "Netscape Navigator 3.x - 6.x", "Mozilla 0.9.x", "Opera 5.x");
$arsc_lang_version_header_js = "Uusille selaimille, valitse t‰m‰ jos muut vaihtoehdot yll‰ eiv‰t toimi. K‰ytt‰‰ JavaScripti‰ ja Frameja.";
$arsc_lang_version_header_js_browsers = array("All of the above except Opera 5.x");
$arsc_lang_version_header = "Yksinkertainen versio. K‰ytt‰‰ frameja.";
$arsc_lang_version_header_browsers = array("All of the above", "Konqueror");
$arsc_lang_version_box = "T‰m‰ vaihtoehto on tarkoitettu the Zuum WebTV box:ille.";
$arsc_lang_version_box_browsers = array("All of the above", "Zuum Browser");
$arsc_lang_version_text = "Textiselaimille.";
$arsc_lang_version_text_browsers = array("All of the above", "Konqueror", "Lynx", "w3b");
$arsc_lang_yes = "Kyll‰";
$arsc_lang_no = "Ei";
$arsc_lang_browser_identify = "Tunnistin selaimesi {browser}, sinun pit‰‰ valita versio {version}.";
$arsc_lang_browser_identify_js = "Varmista ett‰ selaimesi tukee JavaScripti‰ jos valitset t‰m‰n vaihtoehdon.";
$arsc_lang_selectroom = "Valitse huone";
$arsc_lang_startbutton = "Aloita chatti!";
$arsc_lang_usersinchat = "T‰ll‰ hetkell‰ chatti‰ k‰yt‰‰:";
$arsc_lang_usersinroom = "Olet huoneessa";
$arsc_lang_sendmessage = "L‰het‰";
$arsc_lang_refreshmessages = "P‰ivit‰ viestit";
$arsc_lang_leave = "Poistu";

$arsc_lang_error_double_user = "Saman niminen k‰tt‰j‰ jo chatissa, valitse toinen nimimerkki!";
$arsc_lang_error_no_name = "Sinun pit‰‰ antaa nimimerkki!";

// Chat System Messages
$arsc_lang_enter = "K‰ytt‰j‰ {user} saapuu huoneeseen {room}.";
$arsc_lang_welcome = "Tervetuloa! Kirjoita </i>/?<i> tekstikentt‰‰n saadaksesi apua.";
$arsc_lang_quit = "Kƒytt‰j‰ {user} j‰tt‰‰ huoneen... {room}.";
$arsc_lang_roomchange = "K‰ytt‰j‰ </i>{user}<i> j‰tt‰‰ huoneen </i>{room1}<i> ja astuu huoneeseen {room2}.";

$arsc_lang_kicked = "K‰ytt‰j‰n {userpassive} potkaisi ulos {useractive}.";
$arsc_lang_youwerekicked = "Sinut poitkaistiin ulos chatista!";

$arsc_lang_op = "K‰ytt‰j‰ {userpassive} sai operaattori oikeudet k‰ytt‰j‰lt‰ {useractive}.";
$arsc_lang_deop = "K‰ytt‰j‰ {useractive} otti operaattori oikeudet pois k‰ytt‰j‰lt‰ {userpassive}.";

$arsc_lang_whispers = "kuiskaa";
$arsc_lang_whispersops = "kuiskaa kaikille operaattoreille";
$arsc_lang_gotmsg = "K‰ytt‰j‰ </i>{user}<i> sai viestisi.";

$arsc_lang_help = "</i><br><br>&nbsp;<b>Yleinen apu:</b>
                   <br>&nbsp;&nbsp;&nbsp;Oikeassa laidassa n‰et k‰ytt‰j‰t
		   <br>&nbsp;&nbsp;&nbsp;jotka ovat t‰ll‰ hetkell‰ huoneessa.
		   <br>
		   <br>&nbsp;&nbsp;&nbsp;K‰ytt‰j‰t joilla on symboli @ nimimerkin
		   <br>&nbsp;&nbsp;&nbsp;edess‰ ovat operaattoreita, jotka voivat potkaista
		   <br>&nbsp;&nbsp;&nbsp;k‰ytt‰ji‰ pois chatista. Operaatorit voivat myˆs antaa tai
		   <br>&nbsp;&nbsp;&nbsp;ottaa pois operaattori oikeudet..
		   <br>
		   <br>&nbsp;&nbsp;&nbsp;Voit l‰hett‰‰ yksityisen viestin klikkaamalla
		   <br>&nbsp;&nbsp;&nbsp;haluamaasi nimimerkki‰ ja kirjoittamalla viestin sen j‰lkeen.
		   <br>&nbsp;&nbsp;&nbsp;Viestin eteen ilmestyy koodi joka tarkoittaa ett‰ viesti on 
		   <br>&nbsp;&nbsp;&nbsp;yksityisviesti eik‰ muut n‰e sit‰. 
		   <br>
		   <br>&nbsp;<b>Yleiset komennot:</b>
		   <br>&nbsp;&nbsp;&nbsp;/me <i>viesti</i> -- Symboloi toimintaa esim. <i>* k‰ytt‰j‰nimi kaikki OK</i>
		   <br>&nbsp;&nbsp;&nbsp;/msg <i>k‰ytt‰j‰</i> <i>viesti</i> -- yksityinen <i>viesti</i>
                   <br>&nbsp;&nbsp;&nbsp;/j <i>Huoneen nimi</i> -- Poistuu nykyisest‰ huoneesta ja astuu <i>huoneen nimi</i>
                   <br>&nbsp;&nbsp;&nbsp;/room <i>huone</i> -- Sama kuin /j
		   <br>
		   <br>&nbsp;<b>Operaattorin komennot:</b>
		   <br>&nbsp;&nbsp;&nbsp;/msgops <i>viesti</i> -- Kuiskaa <i>viesti</i> kaikille operaattoreille
		   <br>&nbsp;&nbsp;&nbsp;/op <i>k‰ytt‰j‰</i> -- Antaa operaattori oikeudet <i>k‰ytt‰j‰lle</i>
		   <br>&nbsp;&nbsp;&nbsp;/deop <i>K‰ytt‰j‰</i> -- Ottaa operaattori oikeudet pois <i>k‰ytt‰j‰lt‰</i>
		   <br>&nbsp;&nbsp;&nbsp;/kick <i>K‰ytt‰j‰</i> -- Potkaisee <i>k‰ytt‰j‰n</i> pois huoneesta<br><br><i>";
?>
