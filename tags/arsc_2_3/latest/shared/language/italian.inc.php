<?php

/*
  This is an ARSC language file. If you translate it, please send me
  a copy to <arsc-help@lists.sourceforge.net>, I will add it to ARSC then. Thanks.

  This file is for versions: 1.0, 1.0.1, 1.0.1p1, 1.0.2, 2.0, 2.1, 2.2
  Traduzione iniziale di De Luca Claudio: dlc2000@libero.it
  Aggiornamento alla versione 2.1 di StarKnight: starknight@libero.it

*/


// Homepage

$arsc_lang["entername"]         = "Inserisci il tuo nickname:";
$arsc_lang["enterpassword"]     = "Inserisci la tua password:";
$arsc_lang["whichversion"]      = "Quale versione vuoi usare?";
$arsc_lang["version_dontknow"]  = "Scegli questa versione se non sai quale browser stai usando.";
$arsc_lang["version_sockets"]   = "Versione raccomandata per browsers recenti. Usa JavaScript e Frames.";
// If you installed the socket server, version_push_js will not be shown, and vice versa, this is why they are same.
$arsc_lang["version_push_js"]   = "Versione raccomandata per browsers recenti. Usa JavaScript e Frames.";
$arsc_lang["version_header_js"] = "Una versione alternativa per browsers recenti, se quelle di sopra non funzionano. Usa JavaScript e Frames.";
$arsc_lang["version_header"]    = "Una versione che usa solo Frames, ma non JavaScript.";
$arsc_lang["version_box"]       = "Una versione per la Zuum WebTV.";
$arsc_lang["version_text"]      = "Versione semplice che utilizza solo testo.";
$arsc_lang["yes"]               = "Si";
$arsc_lang["no"]                = "No";
$arsc_lang["selectroom"]        = "Scegli una stanza:";
$arsc_lang["startbutton"]       = "Inizia a chattare!";
$arsc_lang["usersinchat"]       = "Questi sono gli utenti collegati:";
$arsc_lang["usersinchat_room"]  = "Stanza";
$arsc_lang["usersinchat_name"]  = "Utente";
$arsc_lang["clicktoregister"]   = "Registra il tuo nickname!";


// Register page and eMail

$arsc_lang["register_intro"]                 = "Per registrare il tuo nickname compila i campi qui sotto.";
$arsc_lang["register_intro_force"]           = "Una password verrà inviata all´indirizzo eMail inserito.";
$arsc_lang["register_entername"]             = "Nickname:";
$arsc_lang["register_enteremail"]            = "Indirizzo eMail:";
$arsc_lang["register_enterpassword"]         = "Password:";
$arsc_lang["register_send"]                  = "Invia Registrazione";
$arsc_lang["register_yougetmail"]            = "Grazie, a breve riceverai una email con la tua password.";
$arsc_lang["register_emailtemplate_subject"] = "La tua registrazione su ARSC.";

$arsc_lang["register_emailtemplate"]         = "
Ciao,

Ti sei registrato su ARSC Chat.

Hai scelto il nickname '{username}'.
Attualmente è protetto con questa password:

            '{password}'

Puoi collegarti alla chat da questa pagina:
{homepage}


Buon divertimento!

--
 {chatowner}

";


// Password Change Page

$arsc_lang["changepassword"]                 = "Cambia password";
$arsc_lang["changepassword_intro"]           = "Per cambiare la tua password, inserisci il tuo username, la tua password corrente, e la tua nuova password qui sotto.";
$arsc_lang["changepassword_entername"]       = "Nickname:";
$arsc_lang["changepassword_entercurrent"]    = "Password corrente:";
$arsc_lang["changepassword_enternew"]        = "Nuova password:";
$arsc_lang["error_password_changed"]         = "La tua password è stata cambiata con successo!";
$arsc_lang["changepassword_submit"]          = "Cambia";

// Chat interface

$arsc_lang["usersinroom"]     = "Utenti nella stanza";
$arsc_lang["sendmessage"]     = "Invia";
$arsc_lang["refreshmessages"] = "Aggiorna Messaggi";
$arsc_lang["leave"]           = "Esci";
$arsc_lang["roomlist"]        = "Lista stanze";
$arsc_lang["refresh"]         = "Aggiorna";
$arsc_lang["otherfunctions"]  = "Funzioni aggiuntive";
$arsc_lang["smilielist"]      = "Lista delle faccine";
$arsc_lang["scroll_active"]   = "Autoscroll";
$arsc_lang["drawboard"]       = "Lavagna";


// Errors

$arsc_lang["error_register_double_user"] = "Questo nickname è già in uso. Per favore scegline un altro.";
$arsc_lang["error_waitformail"]          = "Quando riceverai la email con i tuoi dati, potrai collegarti alla chat.";
$arsc_lang["error_double_user"]          = "Un utente con questo nome è già presente!";
$arsc_lang["error_no_name"]              = "Devi inserire un username!";
$arsc_lang["error_bad_name"]             = "Questo nome non è consentito!";
$arsc_lang["error_wrong_credentials"]    = "Accesso negato!<br>I tuoi dati sono corretti?";
$arsc_lang["error_banned"]               = "Accesso temporaneamente negato.";


// Chat System Messages

$arsc_lang["enter"]         = "L'utente {user} è entrato nella stanza {room}.";
$arsc_lang["welcome"]       = "Benvenuto! Digita /? nel campo testo per vedere i comandi disponibili.";
$arsc_lang["quit"]          = "L'utente {user} ha lasciato la stanza {room}.";
$arsc_lang["roomchange"]    = "L'utente {user} ha lasciato la stanza {room1} ed è entrato nella stanza {room2}.";
$arsc_lang["kicked"]        = "L'utente {userpassive} è stato cacciato dalla stanza da {useractive}.";
$arsc_lang["youwerekicked"] = "Sei stato cacciato dalla chat!";
$arsc_lang["op"]            = "L'utente {userpassive} ha ricevuto lo stato di operatore da {useractive}.";
$arsc_lang["deop"]          = "L'utente {useractive} ha rimosso lo stato di operatore a {userpassive}.";
$arsc_lang["whispers"]      = "Bisbiglia";
$arsc_lang["whispersops"]   = "Bisbiglia a tutti gli operatori";
$arsc_lang["gotmsg"]        = "Stai bisbigliando a </i>{user}<i>: {message}";

$arsc_lang["help"]          = "
</i><br><br>&nbsp;<b>Aiuto Generale:</b>
<br>&nbsp;&nbsp;&nbsp;Nel frame di destra puoi vedere tutti gli utenti
<br>&nbsp;&nbsp;&nbsp;che sono presenti nella stanza.
<br>
<br>&nbsp;&nbsp;&nbsp;Gli utenti con la @ prima del loro nome
<br>&nbsp;&nbsp;&nbsp;sono operatori e possono cacciare gli utenti fuori
<br>&nbsp;&nbsp;&nbsp;dalla stanza, assegnare lo stato di operatore ad altri
<br>&nbsp;&nbsp;&nbsp;utenti, e togliere il loro stato di operatore.
<br>
<br>&nbsp;&nbsp;&nbsp;Se clicchi sul nome presente a destra, il campo input
<br>&nbsp;&nbsp;&nbsp;sarà riempito con il comando che viene utilizzato
<br>&nbsp;&nbsp;&nbsp;per mandare un messaggio privato a questo utente.
<br>&nbsp;&nbsp;&nbsp;Devi solamente inserire solo il tuo messaggio alla fine
<br>&nbsp;&nbsp;&nbsp;del comando.
<br>
<br>&nbsp;<b>Comandi generali:</b>
<br>&nbsp;&nbsp;&nbsp;/me <i>messaggio</i> -- Simboleggia un\'azione, esempio <i>/me si sente bene</i> visualizza <i>* Utente si sente bene</i>
<br>&nbsp;&nbsp;&nbsp;/msg <i>utente</i> <i>messaggio</i> -- Invia un <i>messaggio</i> privato a un altro <i>utente</i>
<br>&nbsp;&nbsp;&nbsp;/j <i>stanza</i> -- Lascia la stanza e entra in <i>stanza</i>
<br>&nbsp;&nbsp;&nbsp;/room <i>stanza</i> -- Un alias di /j
<br><br><i>";

$arsc_lang["helpop"]        = "
</i>&nbsp;<b>Comandi operatore:</b>
<br>&nbsp;&nbsp;&nbsp;/msgops <i>messaggio</i> -- Bisbiglia un <i>messaggio</i> a tutti gli operatori
<br>&nbsp;&nbsp;&nbsp;/whois <i>utente</i> -- Visualizza informazioni su <i>utente</i>
<br>&nbsp;&nbsp;&nbsp;/op <i>utente</i> -- Assegna lo stato operatore a <i>utente</i>
<br>&nbsp;&nbsp;&nbsp;/deop <i>utente</i> -- Rimuovi lo stato operatore a <i>utente</i>
<br>&nbsp;&nbsp;&nbsp;/kick <i>utente</i> -- Caccia <i>utente</i> fuori dalla chat
<br>&nbsp;&nbsp;&nbsp;/bann <i>utente X</i> -- Blocca l\'IP di <i>utente</i> per <i>X</i> secondi
<br>&nbsp;&nbsp;&nbsp;/lock <i>utente</i> -- Blocca l\'account (registrato!) di <i>utente</i> permanentemente
<br>&nbsp;&nbsp;&nbsp;/rip <i>utente</i> -- Quello che <i>utente</i> dice non viene visualizzato
<br>&nbsp;&nbsp;&nbsp;/unrip <i>utente</i> -- Quello che <i>utente</i> dice viene nuovamente visualizzato
<br>&nbsp;&nbsp;&nbsp;/move <i>stanza utente</i> -- &acute;Muove&acute; <i>utente</i> nella <i>stanza</i>
<br><br><i>";
?>
