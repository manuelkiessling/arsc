<?php

/*
  This is an ARSC language file. If you translate it, please send me
  a copy to <arsc-help@lists.sourceforge.net>, I will add it to ARSC then. Thanks.

  This file is for versions: 1.0, 1.0.1, 1.0.1p1, 1.0.2

Translated by Demosthenes Koptsis <dkoptsis@otenet.gr>
*/


// Homepage

$arsc_lang["entername"]         = "Παρακαλώ ορίστε όνομα (nickname) :";
$arsc_lang["enterpassword"]     = "Παρακαλώ ορίστε κωδικό (password) :";
$arsc_lang["whichversion"]      = "Ποιά έκδοση επιθυμήτε να χρησιμοποιήσετε?";
$arsc_lang["version_dontknow"]  = "Επιλέξτε αυτήν την έκδοση εάν δεν γνωρίζετε ποιον browser χρησιμοποιήτε.";
$arsc_lang["version_sockets"]   = "Συνιστόμενη έκδοση για μοντέρνους browsers. Χρησιμοποιεί JavaScript και Frames.";
// If you installed the socket server, version_push_js will not be shown, and vice versa, this is why they are same.
$arsc_lang["version_push_js"]   = "Συνιστόμενη έκδοση για μοντέρνους browsers. Χρησιμοποιεί JavaScript και Frames.";
$arsc_lang["version_header_js"] = "Μια εναλακτική έκδοση για μοντέρνους browsers εάν οι παραπάνω δεν δουλέψουν. Χρησιμοποιεί JavaScript και Frames.";
$arsc_lang["version_header"]    = "Μια έκδοση που χρησιμοποιεί JavaScript και Frames.";
$arsc_lang["version_box"]       = "Μια έκδοση για Zuum WebTV.";
$arsc_lang["version_text"]      = "Μια απλή έκδοση για browsers κειμένου.";
$arsc_lang["yes"]               = "Ναι";
$arsc_lang["no"]                = "Όχι";
$arsc_lang["selectroom"]        = "Επιλέξτε ένα δωμάτιο:";
$arsc_lang["startbutton"]       = "Ξεκινήστε το chat!";
$arsc_lang["usersinchat"]       = "Αυτοί οι χρήστες είναι συνδεμένοι ήδη:";
$arsc_lang["usersinchat_room"]  = "Δωμάτιο";
$arsc_lang["usersinchat_name"]  = "Χρήστης";
$arsc_lang["clicktoregister"]   = "Κατοχυρώστε το nickname σας!";


// Register page and eMail

$arsc_lang["register_intro"]                 = "Για να κατοχυρώσετε το nickname σας συμπληρώστε τα παρακάτω πεδία.";
$arsc_lang["register_intro_force"]           = "Ένας κωδικός θα σταλεί στην eMail διεύθυνση.";
$arsc_lang["register_entername"]             = "Όνομα Nickname:";
$arsc_lang["register_enteremail"]            = "eMail διεύθυνση:";
$arsc_lang["register_enterpassword"]         = "Κωδικός:";
$arsc_lang["register_send"]                  = "Αποστολή κατοχύρωσης";
$arsc_lang["register_yougetmail"]            = "Ευχαριστούμε, τώρα θα λάβετε ένα email με τον κωδικό σας.";
$arsc_lang["register_emailtemplate_subject"] = "Η κατοχύρωση του nickname σας.";

$arsc_lang["register_emailtemplate"]         = "
Γεια σας,

Το όνομα σας έχει κατοχυρωθεί από το ARSC chat.

Επιλέξατε το όνομα (nickname) '{username}'.
Το όνομα αυτό πρωστατεύετε από τον κωδικό:

            '{password}'

Μπορείτε τώρα να συνδεθήτε με το όνομα και τον κωδικό αυτό στην παρακάτω διεύθυνση:
{homepage}


Καλή σας διασκέδαση!

--
 {chatowner}

";


// Password Change Page

$arsc_lang["changepassword"]                 = "Αλλαγή κωδικού";
$arsc_lang["changepassword_intro"]           = "Για να αλλάξετε τον κωδικό σας, εισάγετε το όνομα χρήστη, τον ισχύοντα κωδικό, και τον νέο κωδικό παρακάτω.";
$arsc_lang["changepassword_entername"]       = "Όνομα Χρήστη: (Nickname)";
$arsc_lang["changepassword_entercurrent"]    = "Ισχύων κωδικός:";
$arsc_lang["changepassword_enternew"]        = "Νέος κωδικός:";
$arsc_lang["error_password_changed"]         = "Ο κωδικός σας άλλαξε επιτυχώς!";
$arsc_lang["changepassword_submit"]          = "Αλλαγή";


// Chat interface

$arsc_lang["usersinroom"]     = "Χρήστες στο δωμάτιο";
$arsc_lang["sendmessage"]     = "Αποστολή";
$arsc_lang["refreshmessages"] = "Ανανέωση μυνημάτων";
$arsc_lang["leave"]           = "Έξοδος";
$arsc_lang["roomlist"]        = "Λίστα δωματίων";
$arsc_lang["refresh"]         = "Ανανέωση";
$arsc_lang["otherfunctions"]  = "Επιπρόσθετες λειτουργίες";
$arsc_lang["smilielist"]      = "Χαμόγελα :-)";
$arsc_lang["scroll_active"]   = "Αυτόματη μετακίνηση";
$arsc_lang["drawboard"]       = "Drawboard";


// Errors

$arsc_lang["error_register_double_user"] = "Αυτό το nickname χρησιμοποιήτε ήδη. Παρακαλούμε επιλέξτε ένα άλλο.";
$arsc_lang["error_waitformail"]          = "Όταν το eMail με τα στοιχεία σας φτάσει, θα μπορείτε να συνδεθήτε και να κάνετε chat.";
$arsc_lang["error_double_user"]          = "Ένας χρήστης με το όνομα αυτό ήδη υπάρχει!";
$arsc_lang["error_no_name"]              = "Πρέπει να ορίσετε όνομα nickname!";
$arsc_lang["error_bad_name"]             = "Δεν επιτρέπετε να χρησιμοποιήσετε το όνομα αυτό!";
$arsc_lang["error_wrong_credentials"]    = "Η πρόσβαση ΑΠΑΓΟΡΕΥΕΤΑΙ!<br>Είναι τα στοιχεία σας σωστά?";
$arsc_lang["error_banned"]               = "Η πρόσβαση προσωρινά ΔΕΝ ΕΠΙΤΡΕΠΕΤΑΙ.";


// Chat System Messages

$arsc_lang["enter"]         = "Ο χρήστης {user} μπαίνει στο δωμάτιο {room}.";
$arsc_lang["welcome"]       = "Καλωσήρθατε! Εισάγετε /? στο πεδίο κειμένου για να δείτε το σχετικό μύνημα ΒΟΗΘΕΙΑΣ.";
$arsc_lang["quit"]          = "Ο χρήστης {user} εγκαταλείπει το δωμάτιο {room}.";
$arsc_lang["roomchange"]    = "Ο χρήστης {user} εγκαταλείπει το δωμάτιο {room1} και μπαίνει στο {room2}.";
$arsc_lang["kicked"]        = "Ο χρήστης {userpassive} εκδιώχτηκε από την συνομιλία από τον χρήστη {useractive}.";
$arsc_lang["youwerekicked"] = "Εκδιωχτήκατε από την συνομιλία!";
$arsc_lang["op"]            = "Ο χρήστης {userpassive} ορίζετε ΔΙΑΧΕΙΡΙΣΤΗΣ από τον χρήστη {useractive}.";
$arsc_lang["deop"]          = "Ο χρήστης {useractive} αφαιρεί το δικαίωμα ΔΙΑΧΕΙΡΙΣΗΣ από τον χρήστη {userpassive}.";
$arsc_lang["whispers"]      = "ενημερώνει";
$arsc_lang["whispersops"]   = "ενημερώνει όλους τους ΔΙΑΧΕΙΡΙΣΤΕΣ";
$arsc_lang["gotmsg"]        = "Ενημερώνετε τον χρήστη </i>{user}<i>: {message}";

$arsc_lang["help"]          = "
</i><br><br>&nbsp;<b>Γενική βοήθεια:</b>
<br>&nbsp;&nbsp;&nbsp;Στο δεξιό μέρος βλέπετε όλους τους χρήστες
<br>&nbsp;&nbsp;&nbsp;οι οποίοι είναι τώρα στο δωμάτιο.
<br>
<br>&nbsp;&nbsp;&nbsp;Χρήστες με @ μπροστά από το όνομα τους
<br>&nbsp;&nbsp;&nbsp;είναι ΔΙΑΧΕΙΡΙΣΤΕΣ (operators) και μπορούν να διώχνουν χρήστες από
<br>&nbsp;&nbsp;&nbsp;το δωμάτιο, να ορίζουν ΔΙΑΧΕΙΡΙΣΤΕΣ άλλους
<br>&nbsp;&nbsp;&nbsp;χρήστες, και να αφαιρούν το δικαίωμα ΔΙΑΧΕΙΡΙΣΗΣ από άλλους χρήστες.
<br>
<br>&nbsp;&nbsp;&nbsp;Εάν κάνετε κλικ σε ένα όνομα στα δεξιά, το πεδίο
<br>&nbsp;&nbsp;&nbsp;εισαγωγής κειμένου θα συμπληρωθεί με την εντολή
<br>&nbsp;&nbsp;&nbsp;η οποία είναι απαραίτητη για να στήλετε ένα προσωπικό μύνημα στον χρήστη αυτό.
<br>&nbsp;&nbsp;&nbsp;Απλά πρέπει να προσθέσετε το κείμενο σας
<br>&nbsp;&nbsp;&nbsp;στο τέλος της εντολής.
<br>
<br>&nbsp;<b>Γενικές εντολές:</b>
<br>&nbsp;&nbsp;&nbsp;/me <i>κείμενο</i> -- Συμβολίζει μια ενέργεια, π.χ. <i>/me αισθάνετε υπεροχα</i> αποδίδει <i>*Ο χρήστης αισθάνετε υπέροχα</i>
<br>&nbsp;&nbsp;&nbsp;/msg <i>χρήστης</i> <i>κείμενο</i> -- Στέλνει ένα προσωπικό<i>μύνημα</i> σε ένα <i>χρήστη</i>
<br>&nbsp;&nbsp;&nbsp;/j <i>δωμάτιο</i> -- Εγκαταλείπετε ένα δωμάτιο και πηγένετε σε άλλο <i>δωμάτιο</i>
<br>&nbsp;&nbsp;&nbsp;/room <i>δωμάτιο</i> -- Συνόνημο της εντολής /j
<br><br><i>";

$arsc_lang["helpop"]        = "
</i>&nbsp;<b>Εντολές ΔΙΑΧΕΙΡΙΣΤΩΝ:</b>
<br>&nbsp;&nbsp;&nbsp;/msgops <i>κείμενο</i> -- Ενημερώνει όλους τους ΔΙΑΧΕΙΡΙΣΤΕΣ με το <i>κείμενο</i>
<br>&nbsp;&nbsp;&nbsp;/whois <i>χρήστης</i> -- Δείχνει πληροφορίεςγια τον <i>χρήστη</i>
<br>&nbsp;&nbsp;&nbsp;/op <i>χρήστη</i> -- Ορίζει ως ΔΙΑΧΕΙΡΙΣΤΗ τον <i>χρήστη</i>
<br>&nbsp;&nbsp;&nbsp;/deop <i>χρήστη</i> -- Αφαιρεί το δικαίωμα ΔΙΑΧΕΙΡΙΣΗΣ από τον <i>χρήστη</i>
<br>&nbsp;&nbsp;&nbsp;/kick <i>χρήστη</i> -- Διώχνει τον <i>χρήστη</i> από το δωμάτιο
<br>&nbsp;&nbsp;&nbsp;/bann <i>χρήστη X</i> -- Διακόπει την σύνδεση με την IP του <i>χρήστη</i> για <i>X</i> δευτερόλεπτα
<br>&nbsp;&nbsp;&nbsp;/lock <i>χρήστη</i> -- Κλειδώνει τον λογαριασμό ενός (κατωχυρομένου!) <i>χρήστη</i> οριστικά
<br>&nbsp;&nbsp;&nbsp;/rip <i>χρήστη</i> -- Αφαιρεί την ικανότητα εμφάνισης κειμένου από ένα <i>χρήστη</i>
<br>&nbsp;&nbsp;&nbsp;/unrip <i>χρήστη</i> -- Επιτρέπει τον <i>χρήστη</i> να εμφανίζει κείμενο σε διάλογο
<br>&nbsp;&nbsp;&nbsp;/move <i>χρήστη δωμάτιο</i> -- &acute;Μετακινεί τον&acute; <i>χρήστη</i> στο <i>room</i>
<br><br><i>";
?>