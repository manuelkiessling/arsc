<?php

// This is an ARSC language file. If you translate it, please send me a copy to <manuel@kiessling.net>, I will add it to ARSC then. Thanks.

$arsc_lang_entername = "Enter your name here";
$arsc_lang_namelength = "You can use a maximum of 10 characters";
$arsc_lang_whichversion = "Which version do you want to use?";
$arsc_lang_version_dontknow = "Select this if you have absolutely no idea what a browser is or which browser you are currently using.";
$arsc_lang_version_sockets = "Recommended version for modern browsers. Uses JavaScript, Frames and an additional port.";
$arsc_lang_version_sockets_browsers = array("Microsoft Internet Explorer 4.x - 6.x", "Netscape Navigator 3.x - 6.x", "Mozilla 0.9.x", "Opera 5.x");
$arsc_lang_version_push_js = "Alternative version for modern browsers. Uses JavaScript, Frames and server push.";
$arsc_lang_version_push_js_browsers = array("Microsoft Internet Explorer 4.x - 6.x", "Netscape Navigator 3.x - 6.x", "Mozilla 0.9.x", "Opera 5.x");
$arsc_lang_version_header_js = "Another version for modern browsers, if those above did not work. Uses JavaScript and Frames.";
$arsc_lang_version_header_js_browsers = array("All of the above except Opera 5.x");
$arsc_lang_version_header = "Basic version. Uses Frames.";
$arsc_lang_version_header_browsers = array("All of the above", "Konqueror");
$arsc_lang_version_box = "A version for the Zuum WebTV box.";
$arsc_lang_version_box_browsers = array("All of the above", "Zuum Browser");
$arsc_lang_version_text = "Plain version for text browsers.";
$arsc_lang_version_text_browsers = array("All of the above", "Konqueror", "Lynx", "w3b");
$arsc_lang_yes = "Yes";
$arsc_lang_no = "No";
$arsc_lang_browser_identify = "I identified your Browser as {browser}, so you should select version {version}.";
$arsc_lang_browser_identify_js = "But be sure that you enable the JavaScript support in your browser if you choose this version.";
$arsc_lang_selectroom = "Select a room";
$arsc_lang_startbutton = "Start the Chat!";
$arsc_lang_usersinchat = "These users are currently in the chat";
$arsc_lang_usersinroom = "Users in room";
$arsc_lang_sendmessage = "Send";
$arsc_lang_refreshmessages = "Refresh messages";
$arsc_lang_leave = "Leave";

$arsc_lang_error_double_user = "A user with this name already exists!";
$arsc_lang_error_no_name = "You must enter a username!";

// Chat System Messages
$arsc_lang_enter = "User {user} enters the room {room}.";
$arsc_lang_welcome = "Welcome! Type </i>/?<i> into the textfield to see the available functions.";
$arsc_lang_quit = "User {user} leaves the room {room}.";
$arsc_lang_roomchange = "User </i>{user}<i> leaves room </i>{room1}<i> and enters room {room2}.";

$arsc_lang_kicked = "User {userpassive} was kicked by {useractive}.";
$arsc_lang_youwerekicked = "You were kicked from the chat!";

$arsc_lang_op = "User {userpassive} got operator status from {useractive}.";
$arsc_lang_deop = "User {useractive} took the operator status from {userpassive}.";

$arsc_lang_whispers = "whispers";
$arsc_lang_whispersops = "whispers to all operators";
$arsc_lang_gotmsg = "User </i>{user}<i> got your message.";

$arsc_lang_help = "</i><br><br>&nbsp;<b>General help:</b>
                   <br>&nbsp;&nbsp;&nbsp;In the right frame you see all users that
		   <br>&nbsp;&nbsp;&nbsp;are currently in the room.
		   <br>
		   <br>&nbsp;&nbsp;&nbsp;Users with the symbol @ in front of their
		   <br>&nbsp;&nbsp;&nbsp;name are operators and can kick users out
		   <br>&nbsp;&nbsp;&nbsp;of the chat and can give and take operator
		   <br>&nbsp;&nbsp;&nbsp;status to and from users.
		   <br>
		   <br>&nbsp;&nbsp;&nbsp;By clicking on one of these names, your
		   <br>&nbsp;&nbsp;&nbsp;message field will be filled with the command
		   <br>&nbsp;&nbsp;&nbsp;that is necessary to send a private message to
		   <br>&nbsp;&nbsp;&nbsp;this user - just add your message at the end.
		   <br>
		   <br>&nbsp;<b>General commands:</b>
		   <br>&nbsp;&nbsp;&nbsp;/me <i>message</i> -- Symbolize an action, e.g. <i>/me feels fine</i> will print <i>* username feels fine</i>
		   <br>&nbsp;&nbsp;&nbsp;/msg <i>user</i> <i>message</i> -- Send a private <i>message</i> to <i>user</i>
                   <br>&nbsp;&nbsp;&nbsp;/j <i>roomname</i> -- Leave the current room and enter <i>roomname</i>
                   <br>&nbsp;&nbsp;&nbsp;/room <i>room</i> -- Same like /j
		   <br>
		   <br>&nbsp;<b>Operator commands:</b>
		   <br>&nbsp;&nbsp;&nbsp;/msgops <i>message</i> -- Whisper a <i>message</i> to all operators
		   <br>&nbsp;&nbsp;&nbsp;/op <i>user</i> -- Give operator status to <i>user</i>
		   <br>&nbsp;&nbsp;&nbsp;/deop <i>user</i> -- Take operator status from <i>user</i>
		   <br>&nbsp;&nbsp;&nbsp;/kick <i>user</i> -- Kick <i>user</i> out of the current room<br><br><i>";
?>
