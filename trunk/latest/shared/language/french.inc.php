<?php

/*
  This is an ARSC language file. If you translate it, please send me
  a copy to <manuel@kiessling.net>, I will add it to ARSC then. Thanks.

  This file is for version: 1.0 and 1.0.1
  
  Translated by Emmanuel Faivre <manu@manucorp.com>
*/


// Homepage

$arsc_lang["entername"]         = "Veuillez entrer votre pseudo:";
$arsc_lang["enterpassword"]     = "Veuillez entre votre mot de passe:";
$arsc_lang["whichversion"]      = "Quelle version voulez-vous utilisez?";
$arsc_lang["version_dontknow"]  = "Choisissez cette version si vous ne connaissez le nom de votre navigateur.";
$arsc_lang["version_sockets"]   = "Version recommand�e pour les navigateurs modernes. Elle n�cessite le support des Frames et du Javascript.";
// If you installed the socket server, version_push_js will not be shown, and vice versa, this is why they are same.
$arsc_lang["version_push_js"]   = "Version recommand�e pour les navigateurs modernes. Elle n�cessite le support des Frames et du Javascript.";
$arsc_lang["version_header_js"] = "Utilisez cette version si la version pr�c�dente ne fonctionne pas. Elle n�cessite le support des Frames et du Javascript.";
$arsc_lang["version_header"]    = "Version avec Frames mais sans Javascript.";
$arsc_lang["version_box"]       = "Version pour les WebTV.";
$arsc_lang["version_text"]      = "Version pour les navigateurs texte.";
$arsc_lang["yes"]               = "Oui";
$arsc_lang["no"]                = "No";
$arsc_lang["selectroom"]        = "Choisissez un salon de discussion:";
$arsc_lang["startbutton"]       = "D�mmarez le chat!";
$arsc_lang["usersinchat"]       = "Ces utilisateurs sont actuellement connect�s:";
$arsc_lang["usersinchat_room"]  = "Salon de discussion";
$arsc_lang["usersinchat_name"]  = "Utilisateur";
$arsc_lang["clicktoregister"]   = "Enregistrer votre pseudo!";


// Register page and eMail

$arsc_lang["register_intro"]                 = "Pour enregistrer votre pseudo, veuillez remplir le formulaire suivant.";
$arsc_lang["register_intro_force"]           = "Un mot de passe vous sera ensuite envoyer par email.";
$arsc_lang["register_entername"]             = "Pseudo:";
$arsc_lang["register_enteremail"]            = "Adresse Email:";
$arsc_lang["register_enterpassword"]         = "Mot de passe:";
$arsc_lang["register_send"]                  = "Valider l�enregistrement";
$arsc_lang["register_yougetmail"]            = "Merci, vous allez recevoir un Email avec votre mot de passe.";
$arsc_lang["register_emailtemplate_subject"] = "Votre enregistrement ARSC.";

$arsc_lang["register_emailtemplate"]         = "
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
$arsc_lang["refresh"]         = "Rafraichir";
$arsc_lang["otherfunctions"]  = "Fonctions suppl�mentaires";
$arsc_lang["smilielist"]      = "Listes des smileys";
$arsc_lang["scroll_active"]   = "Ascenseur Automatique";
$arsc_lang["drawboard"]       = "Planche � Dessin";


// Errors

$arsc_lang["error_register_double_user"] = "Ce pseudo est d�j� utilis�. Merci d�en choisir un autre.";
$arsc_lang["error_waitformail"]          = "Quand vous aurez recu le mail, vous pourrez vous connecter.";
$arsc_lang["error_double_user"]          = "Ce pseudo est d�ja utilis�!";
$arsc_lang["error_no_name"]              = "Vous devez donner votre pseudo!";
$arsc_lang["error_bad_name"]             = "Ce pseudo n�est pas autoris�!";
$arsc_lang["error_wrong_credentials"]    = "Acc�s non autoris�!<br>Vos inforamtions sont elles correctes?";
$arsc_lang["error_banned"]               = "l�acc�s est temporairement interdit.";


// Chat System Messages

$arsc_lang["enter"]         = "L�utilisateur {user} vient d�entrer dans le salon {room}.";
$arsc_lang["welcome"]       = "Bienvenue ! Tapez /? dans le champ texte pour voir les commands disponible.";
$arsc_lang["quit"]          = "L�utilisateur {user} quitte le salon {room}.";
$arsc_lang["roomchange"]    = "L�utilisateur {user} qui le salon {room1} et entre dnas le salon {room2}.";
$arsc_lang["kicked"]        = "L�utilisateur {userpassive} a �t� vir� du chat par {useractive}.";
$arsc_lang["youwerekicked"] = "vous avez �t� vir� du chat!";
$arsc_lang["op"]            = "L�utilisateur {userpassive} est maintenant op�rateur grace � {useractive}.";
$arsc_lang["deop"]          = "L�utilisateur {useractive} a supprim� le status op�rateur de {userpassive}.";
$arsc_lang["whispers"]      = "chuchotement";
$arsc_lang["whispersops"]   = "chuchotement � tous les op�rateurs";
$arsc_lang["gotmsg"]        = "Vous chuchotez � </i>{user}<i>: {message}";

$arsc_lang["help"]          = "
</i><br><br>&nbsp;<b>Aide:</b>
<br>&nbsp;&nbsp;&nbsp;Dans la partie de droite vous voyez tous les utilisateurs
<br>&nbsp;&nbsp;&nbsp;qui sont actuellement dans le salon.
<br>
<br>&nbsp;&nbsp;&nbsp;Les utilisateurs avec un @ devant leur nom
<br>&nbsp;&nbsp;&nbsp;sont des op�rateurs et ils peuvent virer les utilisateurs
<br>&nbsp;&nbsp;&nbsp;du salon, donner le status d�op�rateur aux utilisateurs
<br>&nbsp;&nbsp;&nbsp;et annuler leur status d�op�rateur.
<br>
<br>&nbsp;&nbsp;&nbsp;Si vous clickez sur un nom dans la partie de droite,
<br>&nbsp;&nbsp;&nbsp;le champ d�envoi de message sera rempli avec les commandes
<br>&nbsp;&nbsp;&nbsp;n�cessaire pour envoyer une message priv� � cette utilisateur.
<br>&nbsp;&nbsp;&nbsp;Il vous suffira de compl�ter le champ avec votre message.
<br>
<br>&nbsp;<b>Commande:</b>
<br>&nbsp;&nbsp;&nbsp;/me <i>message</i> -- Symbolise une action <i>/me est content</i> donne <i>* User est content</i>
<br>&nbsp;&nbsp;&nbsp;/msg <i>user</i> <i>message</i> -- Envoie un message priv�e <i>message</i> � un <i>user</i>
<br>&nbsp;&nbsp;&nbsp;/j <i>room</i> -- Quitte le salon courant et entre  dans <i>room</i>
<br>&nbsp;&nbsp;&nbsp;/room <i>room</i> -- Un �quivalent de /j
<br><br><i>";

$arsc_lang["helpop"]        = "
</i>&nbsp;<b>Commande pour les op�rateurs:</b>
<br>&nbsp;&nbsp;&nbsp;/msgops <i>message</i> -- Chuchote un <i>message</i> � tous les op�rateurs
<br>&nbsp;&nbsp;&nbsp;/whois <i>user</i> -- Montre les informations a propos de l�utilisateur <i>user</i>
<br>&nbsp;&nbsp;&nbsp;/op <i>user</i> -- Donne le statut d�op�rateur � l�utilisateur <i>user</i>
<br>&nbsp;&nbsp;&nbsp;/deop <i>user</i> -- Enl�ve le statut d�op�rateur � l�utilisateur <i>user</i>
<br>&nbsp;&nbsp;&nbsp;/kick <i>user</i> -- Vire <i>user</i> du chat
<br>&nbsp;&nbsp;&nbsp;/bann <i>user X</i> -- Bloque l�IP de l�utilisateur <i>user</i> pour <i>X</i> secondes
<br>&nbsp;&nbsp;&nbsp;/lock <i>user</i> -- Bloque d�finitivement le compte de l�utilisateur enregistr� <i>user</i>
<br>&nbsp;&nbsp;&nbsp;/rip <i>user</i> -- Ce que l�utilisateur <i>user</i> dit n�est pas montr�
<br>&nbsp;&nbsp;&nbsp;/unrip <i>user</i> -- Annulation de la commande rip sur l�utilisateur <i>user</i>
<br>&nbsp;&nbsp;&nbsp;/move <i>user room</i> -- Bouge l�utilisateur <i>user</i> dans un autre salon <i>room</i>
<br><br><i>";
?>