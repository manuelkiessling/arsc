<?php

/*
  This is an ARSC language file. If you translate it, please send me
  a copy to <manuel@kiessling.net>, I will add it to ARSC then. Thanks.

  This file is for versions: 1.0, 1.0.1, 1.0.1p1, 1.0.2
*/


// Homepage

$arsc_lang["entername"]         = "Please enter your nickname:";
$arsc_lang["enterpassword"]     = "Please enter your password:";
$arsc_lang["whichversion"]      = "Which version do you want to use?";
$arsc_lang["version_dontknow"]  = "Choose this version if you don't know which browser you use.";
$arsc_lang["version_sockets"]   = "Recommended version for modern browsers. Uses JavaScript and Frames.";
// If you installed the socket server, version_push_js will not be shown, and vice versa, this is why they are same.
$arsc_lang["version_push_js"]   = "Recommended version for modern browsers. Uses JavaScript and Frames.";
$arsc_lang["version_header_js"] = "An alternative version for modern browsers if the one above did not work. Uses JavaScript and Frames.";
$arsc_lang["version_header"]    = "A version that only uses Frames, but no JavaScript.";
$arsc_lang["version_box"]       = "A version for the Zuum WebTV box.";
$arsc_lang["version_text"]      = "Simple version for text based browsers.";
$arsc_lang["yes"]               = "Yes";
$arsc_lang["no"]                = "No";
$arsc_lang["selectroom"]        = "Choose a room:";
$arsc_lang["startbutton"]       = "Start the chat!";
$arsc_lang["usersinchat"]       = "These users are currently logged in:";
$arsc_lang["usersinchat_room"]  = "Room";
$arsc_lang["usersinchat_name"]  = "User";
$arsc_lang["clicktoregister"]   = "Register your nickname!";


// Register page and eMail

$arsc_lang["register_intro"]                 = "To register your nickname fill in the fields below.";
$arsc_lang["register_intro_force"]           = "A password will then be sended to the given eMail adress.";
$arsc_lang["register_entername"]             = "Nickname:";
$arsc_lang["register_enteremail"]            = "eMail adress:";
$arsc_lang["register_enterpassword"]         = "Password:";
$arsc_lang["register_send"]                  = "Submit registration";
$arsc_lang["register_yougetmail"]            = "Thanks, you will now get an eMail with your password.";
$arsc_lang["register_emailtemplate_subject"] = "Your ARSC registration.";

$arsc_lang["register_emailtemplate"]         = "
Hello,

You registered for ARSC Chat.

You chose the nickname '{username}'.
It is now protected with this password:

            '{password}'

You can now log into the chat on this page:
{homepage}


Have a lot of fun!

--
 {chatowner}

";


// Chat interface

$arsc_lang["usersinroom"]     = "Users in room";
$arsc_lang["sendmessage"]     = "Send";
$arsc_lang["refreshmessages"] = "Refresh Messages";
$arsc_lang["leave"]           = "Leave";
$arsc_lang["roomlist"]        = "Roomlist";
$arsc_lang["refresh"]         = "Refresh";
$arsc_lang["otherfunctions"]  = "Additional functions";
$arsc_lang["smilielist"]      = "List of all smilies";
$arsc_lang["scroll_active"]   = "Autoscroll";
$arsc_lang["drawboard"]       = "Drawboard";


// Errors

$arsc_lang["error_register_double_user"] = "This nickname is already in use. Please choose another one.";
$arsc_lang["error_waitformail"]          = "When the eMail with your credentials arrived, you can log in the chat.";
$arsc_lang["error_double_user"]          = "A user with this name is already logged in!";
$arsc_lang["error_no_name"]              = "You must enter an username!";
$arsc_lang["error_bad_name"]             = "This name is not allowed!";
$arsc_lang["error_wrong_credentials"]    = "Access denies!<br>Are your credentials correct?";
$arsc_lang["error_banned"]               = "Access is temporarily denied.";


// Chat System Messages

$arsc_lang["enter"]         = "User {user} enters the room {room}.";
$arsc_lang["welcome"]       = "Welcome! Enter /? into the textfield to see the available commands.";
$arsc_lang["quit"]          = "User {user} leaves the room {room}.";
$arsc_lang["roomchange"]    = "User {user} leaves the room {room1} and enters room {room2}.";
$arsc_lang["kicked"]        = "User {userpassive} was kicked out of the chat by {useractive}.";
$arsc_lang["youwerekicked"] = "You were kicked out of the chat!";
$arsc_lang["op"]            = "User {userpassive} got operator status from {useractive}.";
$arsc_lang["deop"]          = "User {useractive} removed the operator status of {userpassive}.";
$arsc_lang["whispers"]      = "whispers";
$arsc_lang["whispersops"]   = "whispers to all operators";
$arsc_lang["gotmsg"]        = "You whisper to </i>{user}<i>: {message}";

$arsc_lang["help"]          = "
</i><br><br>&nbsp;<b>General Help:</b>
<br>&nbsp;&nbsp;&nbsp;In the right frame you see all users
<br>&nbsp;&nbsp;&nbsp;who are currently in the room.
<br>
<br>&nbsp;&nbsp;&nbsp;Users with an @ in front of their name
<br>&nbsp;&nbsp;&nbsp;are operators and can kick users out of
<br>&nbsp;&nbsp;&nbsp;the room, give operator status to other
<br>&nbsp;&nbsp;&nbsp;users, and take away their operator status.
<br>
<br>&nbsp;&nbsp;&nbsp;If you click on a name on the right, the input
<br>&nbsp;&nbsp;&nbsp;field will be filled with the command that is
<br>&nbsp;&nbsp;&nbsp;neccessary to send a private message to this user.
<br>&nbsp;&nbsp;&nbsp;You must only append your message to the end
<br>&nbsp;&nbsp;&nbsp;of the command line.
<br>
<br>&nbsp;<b>General Commands:</b>
<br>&nbsp;&nbsp;&nbsp;/me <i>message</i> -- Symbolizes an action, e.g. <i>/me feels fine</i> writes <i>* User feels fine</i>
<br>&nbsp;&nbsp;&nbsp;/msg <i>user</i> <i>message</i> -- Sends a private <i>message</i> to an <i>user</i>
<br>&nbsp;&nbsp;&nbsp;/j <i>room</i> -- Leaves the room and enters <i>room</i>
<br>&nbsp;&nbsp;&nbsp;/room <i>room</i> -- An alias to /j
<br><br><i>";

$arsc_lang["helpop"]        = "
</i>&nbsp;<b>Operator Commands:</b>
<br>&nbsp;&nbsp;&nbsp;/msgops <i>message</i> -- Whispers a <i>message</i> to all operators
<br>&nbsp;&nbsp;&nbsp;/whois <i>user</i> -- Shows information about <i>user</i>
<br>&nbsp;&nbsp;&nbsp;/op <i>user</i> -- Gives operator status to <i>user</i>
<br>&nbsp;&nbsp;&nbsp;/deop <i>user</i> -- Takes operator status from <i>user</i>
<br>&nbsp;&nbsp;&nbsp;/kick <i>user</i> -- Kicks <i>user</i> out of the chat
<br>&nbsp;&nbsp;&nbsp;/bann <i>user X</i> -- Blocks IP of <i>user</i> for <i>X</i> seconds
<br>&nbsp;&nbsp;&nbsp;/lock <i>user</i> -- Lock account of (registered!) <i>user</i> permanently
<br>&nbsp;&nbsp;&nbsp;/rip <i>user</i> -- What <i>user</i> says is not shown
<br>&nbsp;&nbsp;&nbsp;/unrip <i>user</i> -- What <i>user</i> says is shown again
<br>&nbsp;&nbsp;&nbsp;/move <i>user room</i> -- &acute;Moves&acute; <i>user</i> into <i>room</i>
<br><br><i>";
?>