<?php

/*
 This is an ARSC language file. If you translate it, please send me
 a copy to <manuel@kiessling.net>, I will add it to ARSC then.
 Thanks.

 This file is for versions 3.0-beta1, 3.0-beta2, 3.0-rc1, 3.0, 3.0.1, 3.0.2, 3.0.2-rc1, 3.0.2-rc2
  
 
*/

// Include the english file, in order to provide english text if the current file has some sentences missing.
include("english.inc.php");

// Define some settings for this language
$arsc_lang_regions["french"] = array("fr", "fr-fr", "fr-ca");
$arsc_lang_name["french"] = "Francais";
$arsc_lang["charset"] = "iso-8859-1";


// Language selection

$arsc_lang["chooseyourlanguage"] = "Choisissez votre langue:";
$arsc_lang["next"] = "Suivant";

// Login Page

$arsc_lang["entername"]         = "Veuillez entrer votre pseudo:";
$arsc_lang["enterpassword"]     = "Veuillez entre votre mot de passe:";
$arsc_lang["selectchatversion"]      = "Quelle version voulez-vous utilisez?";
$arsc_lang["version_browser_socket"]    = "Optimis�e";
$arsc_lang["version_browser_push"]      = "Optimis�e (compatible avec les pares-feu)";
$arsc_lang["version_browser_text"]      = "Version pour les navigateurs texte";
$arsc_lang["yes"]                       = "Oui";
$arsc_lang["no"]                        = "Non";
$arsc_lang["selectroom"]        = "Choisissez un salon de discussion:";
$arsc_lang["createdby"]                 = "Cr�� par";
$arsc_lang["startbutton"]       = "D�marrez le chat!";
$arsc_lang["usersinchat"]       = "Ces utilisateurs sont actuellement connect�s:";
$arsc_lang["usersinchat_room"]  = "Salon de discussion";
$arsc_lang["usersinchat_name"]  = "Utilisateur";
$arsc_lang["clicktoregister"]   = "Enregistrer votre pseudo!";

// Why kicked page
$arsc_lang["returntologinpage"] = "Retournez � la page d'identification";

// Register page and eMail

$arsc_lang["register_intro"]                 = "Pour enregistrer votre pseudo, veuillez remplir le formulaire suivant.";
$arsc_lang["register_intro_force"]           = "Un mot de passe vous sera ensuite envoyer par email.";
$arsc_lang["register_entername"]             = "Pseudo:";
$arsc_lang["register_enteremail"]            = "Adresse Email:";
$arsc_lang["register_enterpassword"]         = "Mot de passe:";
$arsc_lang["register_send"]                  = "Valider l�enregistrement";
$arsc_lang["register_yougetmail"]            = "Merci, vous allez recevoir un Email avec votre mot de passe.";
$arsc_lang["register_emailtemplate_subject"] = "Votre enregistrement ARSC.";

$arsc_lang["register_emailtemplate_body"]         = "
Bonjour,

Vous avez fait un enregistrement pour le chat ARSC.

Vous avez choisi le pseudo �{username}�.
il est maintenant prot�g� par le mot de passe:

            �{password}�

Vous pouvez maintenant vous connecter sur le chat en cliquant ici:
{homepage}


Amusez-vous bien!

--
 {chatowner}

";

// Chat interface

$arsc_lang["usersinroom"]     = "Utilisateurs dans ce salon";
$arsc_lang["sendmessage"]     = "Envoyer";
$arsc_lang["refreshmessages"] = "Rafraichir les Messages";
$arsc_lang["leave"]           = "Quitter";
$arsc_lang["roomlist"]        = "Listes des salons";
$arsc_lang["go_room"]         = "Entrer";
$arsc_lang["refresh"]         = "Rafraichir";
$arsc_lang["otherfunctions"]  = "Fonctions suppl�mentaires";
$arsc_lang["smilielist"]      = "Listes des smileys";
$arsc_lang["scroll_active"]   = "Ascenseur Automatique";
$arsc_lang["drawboard"]       = "Planche � Dessin";
$arsc_lang["select_color"]    = "Selectionnez votre couleur";
$arsc_lang["moderatorqueue_title"]      = "Question non-r�pondue";
$arsc_lang["moderatorqueue_delete"]     = "Effacer";
$arsc_lang["moderatorqueue_youranswer"] = "Votre r�ponse";
$arsc_lang["moderatorqueue_cancel"]     = "Annuler";

$arsc_lang["cmd_m"]           = "Cliquez pour envoyer un message � cet usager";
$arsc_lang["opcmd_w"]         = "Montrer des informations d�taill�es � propos de cet usager";
$arsc_lang["opcmd_k"]         = "Virer cet usager hors de ce salon";
$arsc_lang["opcmd_b"]         = "Ban this users IP adress for some time";
$arsc_lang["opcmd_l"]         = "Lock this user permanently (if he is registered)";
$arsc_lang["opcmd_r"]         = "RIP this user (so he cannot talk)";
$arsc_lang["opcmd_u"]         = "UnRIP this user (so he can talk again)";
$arsc_lang["opcmd_o"]         = "Give this user operator status";
$arsc_lang["opcmd_d"]         = "Take operator status from this user";
$arsc_lang["opcmd_m"]         = "Move user from this room into another";
$arsc_lang["opcmd_id"]        = "Show the ID card of this user";

// Errors

$arsc_lang["error_register_double_user"] = "Ce pseudo est d�j� utilis�. Merci d�en choisir un autre.";
$arsc_lang["error_double_user"]          = "Ce pseudo est d�ja utilis�!";
$arsc_lang["error_no_name"]              = "Vous devez donner votre pseudo!";
$arsc_lang["error_bad_name"]             = "Ce pseudo n�est pas autoris�!";
$arsc_lang["error_wrong_credentials"]    = "Acc�s non autoris�!<br>Vos inforamtions sont elles correctes?";
$arsc_lang["error_banned"]               = "L�acc�s est temporairement interdit.";

// IDCard

$arsc_lang["idcard_title"]               = "Carte d'identit� de";
$arsc_lang["idcard_sex"]                 = "Sexe:";
$arsc_lang["idcard_male"]                = "homme";
$arsc_lang["idcard_female"]              = "femme";
$arsc_lang["idcard_location"]            = "Localit�/Pays:";
$arsc_lang["idcard_color"]               = "Couleur par d�faut:";
$arsc_lang["idcard_hobbies"]             = "Passe-temps:";
$arsc_lang["idcard_save"]                = "Enregistrer";
$arsc_lang["idcard_save_ok"]             = "Les modifications sont enregistr�es";
$arsc_lang["idcard_save_no"]             = "Les modifications n'ont pu �tre enregistr�es";
$arsc_lang["idcard_guestbook"]           = "Livre d'or:";
$arsc_lang["idcard_guestbook_active"]    = "Montrer le livre d'or?";
$arsc_lang["idcard_guestbook_delete"]    = "Effacer";
$arsc_lang["idcard_guestbook_delete_ok"] = "Le message a �t� effac�";
$arsc_lang["idcard_guestbook_delete_no"] = "Le message n'a pu �tre effac�!";
$arsc_lang["idcard_guestbook_add"]       = "Rajouter un message";
$arsc_lang["idcard_guestbook_add_ok"]    = "Votre message a �t� ajout�";
$arsc_lang["idcard_guestbook_add_no"]    = "Votre message n'a pu �tre ajout�!";
$arsc_lang["idcard_guestbook_next"]      = "Messages suivants";
$arsc_lang["idcard_guestbook_prev"]      = "Messages pr�c�dents";
$arsc_lang["idcard_close"]               = "Fermer";


// Chat System Messages

$arsc_lang["enter"]         = "L�utilisateur {user} vient d�entrer dans le salon {room}.";
$arsc_lang["welcome"]       = "Bienvenue ! Tapez /? dans le champ texte pour voir les commands disponible.";
$arsc_lang["quit"]          = "L�utilisateur {user} quitte le salon {room}.";
$arsc_lang["roomchange"]    = "L�utilisateur {user} qui le salon {room1} et entre dans le salon {room2}.";
$arsc_lang["kicked"]        = "L�utilisateur {userpassive} a �t� vir� du chat par {useractive}.";
$arsc_lang["youwerekicked"] = "vous avez �t� vir� du chat!";
$arsc_lang["floodwarn"]           = "ARRETER DE FLOODER MAINTENANT ou vous devrez quitter!";
$arsc_lang["op"]            = "L�utilisateur {userpassive} est maintenant op�rateur grace � {useractive}.";
$arsc_lang["deop"]          = "L�utilisateur {useractive} a supprim� le status op�rateur de {userpassive}.";
$arsc_lang["whispers"]      = "chuchotement";
$arsc_lang["whispersops"]   = "chuchotement � tous les op�rateurs";
$arsc_lang["gotmsg"]        = "Vous chuchotez � </i>{user}<i>: {message}";
$arsc_lang["croom"]               = "L�utilisateur {user} a d�cid� de quitter dans son salon priv� {room}.";
$arsc_lang["room_exists"]         = "D�sol�, le nom de ce salon {room} existe encore.";
$arsc_lang["room_badname"]        = "D�sol�, ce nom de salon n'est pas possible.";
$arsc_lang["room_created"]        = "Votre salon priv� {room} a �t� cr��!! Vous pouvez maintenant inviter quelqu'un en utilisant la commande /invite.";
$arsc_lang["invite"]              = "Vous avez �t� invit� par l�utilisateur {user} dans son salon priv� {room}. Taper \"/room {room} {password}\" pour entrer dans son salon.";
$arsc_lang["invite_notexist"]     = "D�sol�, l'utilisateur {user} n'existe pas.";
$arsc_lang["invite_notownroom"]   = "D�sol�, Svous devez �tre dans votre propre salon pour inviter d'autres usagers.";
$arsc_lang["room_not_exist"]      = "D�sol�, le salon {room} n'existe pas";
$arsc_lang["room_wrong_password"] = "D�sol�, vous devez entrer le bon mot de passe pour entrer dans le salon {room}";
$arsc_lang["moderate_message"]    = "Votre message `{message}` a �t� correctement envoy� au mod�rateur.";
$arsc_lang["opcall"]              = "[OPCALL] J'ai besoin d'aide!";

$arsc_lang["helplink"]      = "Aide";
$arsc_lang["help"]          = "
Aide g�n�rale:
Dans la partie de droite vous voyez tous les utilisateurs
qui sont actuellement dans le salon.

Les utilisateurs avec un @ devant leur nom
sont des op�rateurs et ils peuvent virer les utilisateurs
du salon, donner le status d�op�rateur aux utilisateurs
et annuler leur status d�op�rateur.

Si vous cliquez sur un nom dans la partie de droite,
le champ d�envoi de message sera rempli avec les commandes
n�cessaire pour envoyer une message priv� � cette utilisateur.
Il vous suffira de compl�ter le champ avec votre message.

Commandes g�n�rales:
/me message -- Symbolise une action, e.g. /me est content donne * User est content
/msg user message -- Envoie un message priv� � un user
/j Autresalon -- Quitte le salon courant et entre dans Autresalon
/room room -- Un �quivalent � /j";

$arsc_lang["helpop"]        = "
Operator Commands:
/msgops message -- Whispers a message to all operators
/whois user -- Shows information about user
/op user -- Gives operator status to user
/deop user -- Takes operator status from user
/kick user -- Kicks user out of the chat
/bann user X -- Blocks IP of user for X seconds
/lock user -- Lock account of (registered!) user permanently
/rip user -- What user says is not shown
/unrip user -- What user says is shown again
/move user room -- Moves user into room";

?>
