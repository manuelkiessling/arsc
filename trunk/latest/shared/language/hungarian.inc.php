<?php

// This is an ARSC language file. If you translate it, please send me a copy to <manuel@kiessling.net>, I will add it to ARSC then. Thanks.

$arsc_lang_entername = "Becenév";
$arsc_lang_namelength = "Maximum 10 jel";
$arsc_lang_whichversion = "Melyik változatot szeretnéd használni?";
$arsc_lang_version_dontknow = "Válaszd ezt a változatot ha fogalmad sincs  mi az a browser, vagy ha nem tudod milyen browser-t használsz.";
$arsc_lang_version_push_js = "A legkényelmesebb változat a JavaScript és server push technológiával dolgozik. Ennek a változatnak müködnie kell minden modern browser-el ami JavaScript-et aktivált.";
$arsc_lang_version_push_js_browsers = array("Microsoft Internet Explorer 4.x - 6.x", "Netscape Navigator 2.x - 6.x", "Mozilla 0.9.x", "Opera 5.x");
$arsc_lang_version_header_js = "Ha a te browser-ed server push-al nem müköddik, de JavaScript technológiával rendelkezik, akkor válaszd ezt a változatot. Eszel chat-elhetsz kényelmesen server push nélkül is.";
$arsc_lang_version_header_js_browsers = array("Ugyanazok amelyek a fenti listában szesepelnek, kivétel Opera 5.x");
$arsc_lang_version_header = "The standard frame version without JavaScript and without server push should really work with every browser on the surface of this planet that understands at least framesets. Choose this version only if none of the other versions worked - it might be quite uncomfortable.";.0
$arsc_lang_version_header_browsers = array("All of the above", "Konqueror");
$arsc_lang_version_text = "This last version is for those of you who are still into \"the real experience\" and sit in front of a text based user interface surfing with Lynx or something comparable. This is for sure not comfortable, but it works.";
$arsc_lang_version_text_browsers = array("All of the above", "Konqueror", "Lynx", "w3");
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
$arsc_lang_enter = "User {user} enters the room {room}";
$arsc_lang_welcome = "Welcome! Type </i>/?<i> into the textfield to see the available functions.";
$arsc_lang_quit = "User {user} leaves the room {room}";

$arsc_lang_kicked = "User {userpassive} was kicked by {useractive}";
$arsc_lang_youwerekicked = "You were kicked from the chat!";

$arsc_lang_op = "User {userpassive} got operator status from {useractive}";
$arsc_lang_deop = "User {useractive} took the operator status from {userpassive}";

$arsc_lang_whispers = "whispers";

$arsc_lang_help = "</i><br><br>&nbsp;<b>General help:</b><br>&nbsp;&nbsp;&nbsp;In the right frame you see all users that<br>&nbsp;&nbsp;&nbsp;are currently in the room.<br><br>&nbsp;&nbsp;&nbsp;Users with the symbol @ in front of their<br>&nbsp;&nbsp;&nbsp;name are operators and can kick users out<br>&nbsp;&nbsp;&nbsp;of the chat and can give and take operator<br>&nbsp;&nbsp;&nbsp;status to and from users.<br><br>&nbsp;&nbsp;&nbsp;By clicking on one of these names, your<br>&nbsp;&nbsp;&nbsp;message field will be filled with the command<br>&nbsp;&nbsp;&nbsp;that is necessary to send a private message to<br>&nbsp;&nbsp;&nbsp;this user - just add your message at the end.<br><br>&nbsp;<b>General commands:</b><br>&nbsp;&nbsp;&nbsp;/me <i>message</i> -- Symbolize an action, e.g. <i>/me feels fine</i> will print <i>* username feels fine</i><br>&nbsp;&nbsp;&nbsp;/msg <i>user</i> <i>message</i> -- Send a private <i>message</i> to <i>user</i><br><br>&nbsp;<b>Operator commands:</b><br>&nbsp;&nbsp;&nbsp;/op <i>user</i> -- Give operator status to <i>user</i><br>&nbsp;&nbsp;&nbsp;/deop <i>user</i> -- Take operator status from <i>user</i><br>&nbsp;&nbsp;&nbsp;/kick <i>user</i> -- Kick <i>user</i> out of the current room<br><br><i>";
?>
