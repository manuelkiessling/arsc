<?php

include("init.inc.php");
include("../inc/config.inc.php");
include("../inc/init.inc.php");
include("../inc/functions.inc.php");
include("header.inc.php");

set_magic_quotes_runtime(1);

?>
<font face="Arial" color="#FF0000">
 <b>
  <?php echo $arsc_message; ?>
 </b>
</font>
<div align="right">
 <font face="Arial" size="2">
  <a href="parameters_showall.php">DEBUG: Show all Parameters</a>
 </font>
</div>
<form action="save_parameters.php" method="POST">
 <h2>
  <font face="Arial">
   Required parameters
  </font>
 </h2>
 <font face="Arial" size="2">
  Are you able to start a socket server on your Linux or Unix server
  (and do you want that)?
  If you don't know what's this, then answer "no" (or talk with your
  server administrator).
 </font>
 <br>
 <input type="text" name="arsc_save_parameters[socketserver_use]" value="<?php echo ARSC_PARAMETER_SOCKETSERVER_USE; ?>">
 <br>
 <br>
 
 <font face="Arial" size="2">
  What is the DNS or IP adress of the machine running this socket
  server as seen from 'outside'?
 </font>
 <br>
 <input type="text" name="arsc_save_parameters[socketserver_adress]" value="<?php echo ARSC_PARAMETER_SOCKETSERVER_ADRESS; ?>">
 <br>
 <br>

 <font face="Arial" size="2">
  Which port do you want that socket server listen at?
  Remember that this must be > 1024 if not root starts the server.
 </font>
 <br>
 <input type="text" name="arsc_save_parameters[socketserver_port]" value="<?php echo ARSC_PARAMETER_SOCKETSERVER_PORT; ?>">
 <br>
 <br>

 <font face="Arial" size="2">
  This value tells the server how many connections he handles
 </font>
 <br>
 <input type="text" name="arsc_save_parameters[socketserver_maximumusers]" value="<?php echo ARSC_PARAMETER_SOCKETSERVER_MAXIMUMUSERS; ?>">
 <br>
 <br>

 <font face="Arial" size="2">
  Do you want to use the Drawboard? Please refer to the README file
  for details. This option only specifies wether to show the
  Drawboard link in the roomlist frame or not - you still have to
  install Drawboard on your own! Say no if you don't know what
  Drawboard is.
 </font>
 <br>
 <input type="text" name="arsc_save_parameters[drawboard]" value="<?php echo ARSC_PARAMETER_DRAWBOARD; ?>">
 <br>
 <br>
 
 <font face="Arial" size="2">
  Width of the Drawboard applet
 </font>
 <br>
 <input type="text" name="arsc_save_parameters[drawboard_width]" value="<?php echo ARSC_PARAMETER_DRAWBOARD_WIDTH; ?>">
 <br>
 <br>
 
 <font face="Arial" size="2">
  Height of the Drawboard applet
 </font>
 <br>
 <input type="text" name="arsc_save_parameters[drawboard_height]" value="<?php echo ARSC_PARAMETER_DRAWBOARD_HEIGHT; ?>">
 <br>
 <br>
 
 <font face="Arial" size="2">
  Port of the Drawboard server
 </font>
 <br>
 <input type="text" name="arsc_save_parameters[drawboard_port]" value="<?php echo ARSC_PARAMETER_DRAWBOARD_PORT; ?>">
 <br>
 <br>

 <font face="Arial" size="2">
  What is the name of your chat? This appears in the document title of all pages.
 </font>
 <br>
 <input type="text" name="arsc_save_parameters[title]" value="<?php echo ARSC_PARAMETER_TITLE; ?>">
 <br>
 <br>

 <font face="Arial" size="2">
  If no language is choosen, which language should be standard?
 </font>
 <br>
 <input type="text" name="arsc_save_parameters[standard_language]" value="<?php echo ARSC_PARAMETER_STANDARD_LANGUAGE; ?>">
 <br>
 <br>

 <h2>
  <font face="Arial">
   Finetuning parameters
  </font>
 </h2>

 <font face="Arial" size="2">
  What is the name of your logo file? The easiest way would be to
  save the image as pic/logo.gif (or .jpg or .png) and then enter
  'logo.gif' (or .jpg or .png) here
 </font>
 <br>
 <input type="text" name="arsc_save_parameters[logo_path]" value="<?php echo ARSC_PARAMETER_LOGO_PATH; ?>">
 <br>
 <br>
 
 <font face="Arial" size="2">
  What is the filename of your userlist background image? The easiest way would be to
  save the image as pic/userlist_background.gif (or .jpg or .png) and then enter
  'userlist_background.gif' (or .jpg or .png) here
 </font>
 <br>
 <input type="text" name="arsc_save_parameters[userlist_background_path]" value="<?php echo ARSC_PARAMETER_USERLIST_BACKGROUND_PATH; ?>">
 <br>
 <br>

 <font face="Arial" size="2">
  <b>
   Colors - choose your flavor
  </b>
  <br>
  <br>
  Standard window background
 </font>
 <input type="text" name="arsc_save_parameters[color_standard_window_background]" value="<?php echo ARSC_PARAMETER_COLOR_STANDARD_WINDOW_BACKGROUND; ?>">
 <br>
 <br>
 <font face="Arial" size="2">
  Message window background
 </font>
 <input type="text" name="arsc_save_parameters[color_msg_window_background]" value="<?php echo ARSC_PARAMETER_COLOR_MSG_WINDOW_BACKGROUND; ?>">
 <br>
 <br>
 <font face="Arial" size="2">
  Userlist window background
 </font>
 <input type="text" name="arsc_save_parameters[color_userlist_window_background]" value="<?php echo ARSC_PARAMETER_COLOR_USERLIST_WINDOW_BACKGROUND; ?>">
 <br>
 <br>
 <font face="Arial" size="2">
  Userlist window text
 </font>
 <input type="text" name="arsc_save_parameters[color_userlist_window_text]" value="<?php echo ARSC_PARAMETER_COLOR_USERLIST_WINDOW_TEXT; ?>">
 <br>
 <br>
 <font face="Arial" size="2">
  Userlist window link
 </font>
 <input type="text" name="arsc_save_parameters[color_userlist_window_link]" value="<?php echo ARSC_PARAMETER_COLOR_USERLIST_WINDOW_LINK; ?>">
 <br>
 <br>
 <font face="Arial" size="2">
  Userlist window level 0 users
 </font>
 <input type="text" name="arsc_save_parameters[color_userlist_window_level0]" value="<?php echo ARSC_PARAMETER_COLOR_USERLIST_WINDOW_LEVEL0; ?>">
 <br>
 <br>
 <font face="Arial" size="2">
  Userlist window level 1 users
 </font>
 <input type="text" name="arsc_save_parameters[color_userlist_window_level1]" value="<?php echo ARSC_PARAMETER_COLOR_USERLIST_WINDOW_LEVEL1; ?>">
 <br>
 <br>
 <font face="Arial" size="2">
  Userlist window level 2 users
 </font>
 <input type="text" name="arsc_save_parameters[color_userlist_window_level2]" value="<?php echo ARSC_PARAMETER_COLOR_USERLIST_WINDOW_LEVEL2; ?>">
 <br>
 <br>
 <font face="Arial" size="2">
  Message input window background
 </font>
 <input type="text" name="arsc_save_parameters[color_msginput_window_background]" value="<?php echo ARSC_PARAMETER_COLOR_MSGINPUT_WINDOW_BACKGROUND; ?>">
 <br>
 <br>
 <font face="Arial" size="2">
  Message input window link
 </font>
 <input type="text" name="arsc_save_parameters[color_msginput_window_link]" value="<?php echo ARSC_PARAMETER_COLOR_MSGINPUT_WINDOW_LINK; ?>">
 <br>
 <br>
 <font face="Arial" size="2">
  Roomlist window background
 </font>
 <input type="text" name="arsc_save_parameters[color_roomlist_window_background]" value="<?php echo ARSC_PARAMETER_COLOR_ROOMLIST_WINDOW_BACKGROUND; ?>">
 <br>
 <br>
 <font face="Arial" size="2">
  Roomlist window foreground
 </font>
 <input type="text" name="arsc_save_parameters[color_roomlist_window_foreground]" value="<?php echo ARSC_PARAMETER_COLOR_ROOMLIST_WINDOW_FOREGROUND; ?>">
 <br>
 <br>
 <br>
 <font face="Arial" size="2">
  This value tells the socket server how many milliseconds to wait
  until he fetches new messages. 300000 is a good value to start with,
  if you find your server's load is too high then try to set this
  higher (400000), if you find that messages are not showing up
  'fluid', try 200000 - 100000 (but this will result in higher load).
  (This parameter will also be used for the refresh cycle of the
  push version)
 </font>
 <br>
 <input type="text" name="arsc_save_parameters[socketserver_refresh]" value="<?php echo ARSC_PARAMETER_SOCKETSERVER_REFRESH; ?>">
 <br>
 <br>
 <font face="Arial" size="2">
  Do you want to force your users to register, or do you want to offer
  registration as an option to save the username?
 </font>
 <br>
 <input type="text" name="arsc_save_parameters[register_force]" value="<?php echo ARSC_PARAMETER_REGISTER_FORCE; ?>">
 <br>
 <br>
 <font face="Arial" size="2">
  Do you want to show your visitors the chatversion selection field?
  Which version to use for the chat is automatically detected by ARSC,
  but if you show the selection field, this detection can be
  overwritten by your visitors. It is maybe not wise to say "no" here,
  because if ARSC detects a modern browser like IE, it will send
  him to a chat version that uses JavaScript, but we don't know if
  the user deactivated JavaScript - you see the problem?
 </font>
 <br>
 <input type="text" name="arsc_save_parameters[show_version_selection]" value="<?php echo ARSC_PARAMETER_SHOW_VERSION_SELECTION; ?>">
 <br>
 <br>
 <font face="Arial" size="2">
  ARSC has some kind of flood protection which detects if the same phrase is posted again and again by the same user.
  Please enter how many of this same phrases by a user you want to allow before he gets kicked.
 </font>
 <br>
 <input type="text" name="arsc_save_parameters[flood_max]" value="<?php echo ARSC_PARAMETER_FLOOD_MAX; ?>">
 <br>
 <br>
 <font face="Arial" size="2">
  Say 'yes' here if you want that the first user who enters a room becomes operator. If you don't trust your visitors, better say 'no'.
 </font>
 <br>
 <input type="text" name="arsc_save_parameters[first_user_gets_op]" value="<?php echo ARSC_PARAMETER_FIRST_USER_GETS_OP; ?>">
 <br>
 <br>
 <font face="Arial" size="2">
  Do you want that after you entered a message, this message does not
  disappear from the input box but instead remains? This is
  quite comfortable, but it is a big 'Welcome' to flooders (but ARSC has a flood protection) - just try
  this feature to find out if you need it.
 </font>
 <br>
 <input type="text" name="arsc_save_parameters[keep_sended_message]" value="<?php echo ARSC_PARAMETER_KEEP_SENDED_MESSAGE; ?>">
 <br>
 <br>
 <font face="Arial" size="2">
  How many characters should be the maximum an user can enter in the input box?
 </font>
 <br>
 <input type="text" name="arsc_save_parameters[input_maxsize]" value="<?php echo ARSC_PARAMETER_INPUT_MAXSIZE; ?>">
 <br>
 <br>
 <font face="Arial" size="2">
  These appear in the eMail send for registration
 </font>
 <br>
 <font face="Arial" size="2">
  Your name:
 </font>
 <input type="text" name="arsc_save_parameters[register_owner]" value="<?php echo ARSC_PARAMETER_REGISTER_OWNER; ?>">
 <br>
 <font face="Arial" size="2">
  Your eMail adress:
 </font>
 <input type="text" name="arsc_save_parameters[register_owner_email]" value="<?php echo ARSC_PARAMETER_REGISTER_OWNER_EMAIL; ?>">
 <br>
 <font face="Arial" size="2">
  Adress of your ARSC installation:
 </font>
 <input type="text" name="arsc_save_parameters[register_homepage]" value="<?php echo ARSC_PARAMETER_REGISTER_HOMEPAGE; ?>">
 <br>
 <br>
 <font face="Arial" size="2">
  How long should the system wait for a users 'ping', before he gets logged out?
 </font>
 <br>
 <input type="text" name="arsc_save_parameters[ping]" value="<?php echo ARSC_PARAMETER_PING; ?>">
 <br>
 <br>
 <font face="Arial" size="2">
  After howmany seconds do you want the userlist window to refresh?
  This MUST be smaller than the ping value above!
 </font>
 <br>
 <input type="text" name="arsc_save_parameters[userlist_refresh]" value="<?php echo ARSC_PARAMETER_USERLIST_REFRESH; ?>">
 <br>
 <br>
 <font face="Arial" size="2">
  How long do we wait for the 'ping' of a lynxuser (textbrowser)?
  Not too small, because they must reload 'by hand'
 </font>
 <br>
 <input type="text" name="arsc_save_parameters[ping_text]" value="<?php echo ARSC_PARAMETER_PING_TEXT; ?>">
 <br>
 <br>
 <font face="Arial" size="2">
  After how many seconds do you want the roomlist to be refreshed?
 </font>
 <br>
 <input type="text" name="arsc_save_parameters[roomlist_refresh]" value="<?php echo ARSC_PARAMETER_ROOMLIST_REFRESH; ?>">
 <br>
 <br>
 <font face="Arial" size="2">
  Maximum rows allowed in the room tables? If your chat is visited well
  and you find messages missing, set this higher.
 </font>
 <br>
 <input type="text" name="arsc_save_parameters[rowlimit]" value="<?php echo ARSC_PARAMETER_ROWLIMIT; ?>">
 <br>
 <br>
 <input type="submit" value="Save parameters">
</form>
<?php include("footer.inc.php"); ?>
