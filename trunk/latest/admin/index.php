<?php

include("../config.inc.php");
include("../functions.inc.php");

set_magic_quotes_runtime(1);

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html>
 <head>
  <title>
   <?php echo $arsc_parameters["title"]; ?>
  </title>
 </head>
 <body bgcolor="#FFFFFF">
  <font face="Arial" color="#FF0000">
   <b>
    <?php echo $arsc_message; ?>
   </b>
  </font>
  <form action="save.php" method="POST">
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
   <input type="text" name="arsc_save_parameters[socketserver_use]" value="<?php echo $arsc_parameters["socketserver_use"]; ?>">
   <br>
   <br>
   
   <font face="Arial" size="2">
    What is the DNS or IP adress of the machine running this socket
    server as seen from 'outside', from the real, big, bad internet?
   </font>
   <br>
   <input type="text" name="arsc_save_parameters[socketserver_address]" value="<?php echo $arsc_parameters["socketserver_adress"]; ?>">
   <br>
   <br>
  
   <font face="Arial" size="2">
    Which port do you want that socket server listen at?
    Remember that this must be > 1024 if not root starts the server.
   </font>
   <br>
   <input type="text" name="arsc_save_parameters[socketserver_port]" value="<?php echo $arsc_parameters["socketserver_port"]; ?>">
   <br>
   <br>
  
   <font face="Arial" size="2">
    This value tells the server how many connections he handles
   </font>
   <br>
   <input type="text" name="arsc_save_parameters[socketserver_maximumusers]" value="<?php echo $arsc_parameters["socketserver_maximumusers"]; ?>">
   <br>
   <br>
  
   <font face="Arial" size="2">
    This is the password that you need if you want to give yourself
    operator status. This means that when you enter the chat and post
    '/selfop password', you will be the superuser who has control about
    every other user in the chat! As you can imagine, it is very easy to
    cause some serious chaos in the chat with this password, so it
    is HARDLY recommended to change this dummy password to something
    VERY VERY secure.
    Not your dogs name, not your girlfriends name, not your birthdate, ok?
   </font>
   <br>
   <input type="text" name="arsc_save_parameters[selfop_password]" value="<?php echo $arsc_parameters["selfop_password"]; ?>">
   <br>
   <br>
  
   <font face="Arial" size="2">
    If you say "yes" here, a small invisible image on the home page
    is activated that allows us (the authors of ARSC) to see on which site ARSC is installed.
   </font>
   <br>
   <input type="text" name="arsc_save_parameters[activate_counter_pic]" value="<?php echo $arsc_parameters["activate_counter_pic"]; ?>">
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
   <input type="text" name="arsc_save_parameters[drawboard]" value="<?php echo $arsc_parameters["drawboard"]; ?>">
   <br>
   <br>
   
   <font face="Arial" size="2">
    Width of the Drawboard applet
   </font>
   <br>
   <input type="text" name="arsc_save_parameters[drawboard_width]" value="<?php echo $arsc_parameters["drawboard_width"]; ?>">
   <br>
   <br>
   
   <font face="Arial" size="2">
    Height of the Drawboard applet
   </font>
   <br>
   <input type="text" name="arsc_save_parameters[drawboard_height]" value="<?php echo $arsc_parameters["drawboard_height"]; ?>">
   <br>
   <br>
   
   <font face="Arial" size="2">
    Port of the Drawboard server
   </font>
   <br>
   <input type="text" name="arsc_save_parameters[drawboard_port]" value="<?php echo $arsc_parameters["drawboard_port"]; ?>">
   <br>
   <br>
  
   <font face="Arial" size="2">
    What is the name of your chat? This appears in the document title of all pages.
   </font>
   <br>
   <input type="text" name="arsc_save_parameters[title]" value="<?php echo $arsc_parameters["title"]; ?>">
   <br>
   <br>
  
   <font face="Arial" size="2">
    If no language is choosen, which language should be standard?
   </font>
   <br>
   <input type="text" name="arsc_save_parameters[standard_language]" value="<?php echo $arsc_parameters["standard_language"]; ?>">
   <br>
   <br>
  
   <h2>
    <font face="Arial">
     Finetuning parameters
    </font>
   </h2>
  
   <font face="Arial" size="2">
    If you allow it, a posting starting with an * will be italic, and
    a posting starting with an _ will be bold.
   </font>
   <br>
   <input type="text" name="arsc_save_parameters[allow_textformatting]" value="<?php echo $arsc_parameters["allow_textformatting"]; ?>">
   <br>
   <br>
  
   <font face="Arial" size="2">
    What is the name of your logo file? The easiest way would be to
    save the image as pic/logo.gif (or .jpg or .png) and then enter
    'logo.gif' (or .jpg or .png) here
   </font>
   <br>
   <input type="text" name="arsc_save_parameters[logo_path]" value="<?php echo $arsc_parameters["logo_path"]; ?>">
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
   <input type="text" name="arsc_save_parameters[color_standard_window_background]" value="<?php echo $arsc_parameters["color_standard_window_background"]; ?>">
   <br>
   <br>
   <font face="Arial" size="2">
    Message window background
   </font>
   <input type="text" name="arsc_save_parameters[color_msg_window_background]" value="<?php echo $arsc_parameters["color_msg_window_background"]; ?>">
   <br>
   <br>
   <font face="Arial" size="2">
    Userlist window background
   </font>
   <input type="text" name="arsc_save_parameters[color_userlist_window_background]" value="<?php echo $arsc_parameters["color_userlist_window_background"]; ?>">
   <br>
   <br>
   <font face="Arial" size="2">
    Userlist window text
   </font>
   <input type="text" name="arsc_save_parameters[color_userlist_window_text]" value="<?php echo $arsc_parameters["color_userlist_window_text"]; ?>">
   <br>
   <br>
   <font face="Arial" size="2">
    Userlist window link
   </font>
   <input type="text" name="arsc_save_parameters[color_userlist_window_link]" value="<?php echo $arsc_parameters["color_userlist_window_link"]; ?>">
   <br>
   <br>
   <font face="Arial" size="2">
    Userlist window level 0 users
   </font>
   <input type="text" name="arsc_save_parameters[color_userlist_window_level0]" value="<?php echo $arsc_parameters["color_userlist_window_level0"]; ?>">
   <br>
   <br>
   <font face="Arial" size="2">
    Userlist window level 1 users
   </font>
   <input type="text" name="arsc_save_parameters[color_userlist_window_level1]" value="<?php echo $arsc_parameters["color_userlist_window_level1"]; ?>">
   <br>
   <br>
   <font face="Arial" size="2">
    Userlist window level 2 users
   </font>
   <input type="text" name="arsc_save_parameters[color_userlist_window_level2]" value="<?php echo $arsc_parameters["color_userlist_window_level2"]; ?>">
   <br>
   <br>
   <font face="Arial" size="2">
    Message input window background
   </font>
   <input type="text" name="arsc_save_parameters[color_msginput_window_background]" value="<?php echo $arsc_parameters["color_msginput_window_background"]; ?>">
   <br>
   <br>
   <font face="Arial" size="2">
    Message input window link
   </font>
   <input type="text" name="arsc_save_parameters[color_msginput_window_link]" value="<?php echo $arsc_parameters["color_msginput_window_link"]; ?>">
   <br>
   <br>
   <font face="Arial" size="2">
    Roomlist window background
   </font>
   <input type="text" name="arsc_save_parameters[color_roomlist_window_background]" value="<?php echo $arsc_parameters["color_roomlist_window_background"]; ?>">
   <br>
   <br>
   <font face="Arial" size="2">
    Roomlist window foreground
   </font>
   <input type="text" name="arsc_save_parameters[color_roomlist_window_foreground]" value="<?php echo $arsc_parameters["color_roomlist_window_foreground"]; ?>">
   <br>
   <br>
   <br>
   <font face="Arial" size="2">
    Replace smilies (e.g. ':-)') and shortcuts (e.g. '/sleep/') with an image?
   </font>
   <br>
   <input type="text" name="arsc_save_parameters[smilies]" value="<?php echo $arsc_parameters["smilies"]; ?>">
   <br>
   <br>
   <font face="Arial" size="2">
    Where are your smilie images located? Full path please.
   </font>
   <br>
   <input type="text" name="arsc_save_parameters[smilies_path]" value="<?php echo $arsc_parameters["smilies_path"]; ?>">
   <br>
   <br>
   <font face="Arial" size="2">
    The smilie images are named by numbers (e.g. 0.gif, 1.gif etc.).
    <br>
    Here you can define which image is shown by which smilie or shortcut.
   </font>
   <br>
   <?php
   $arsc_i = 0;
   for($arsc_i; $arsc_i < 32; $arsc_i++)
   {
    ?>
    <img src="<?php echo $arsc_parameters["smilies_path"].$arsc_i.".gif"; ?>">
    <input type="text" name="arsc_save_parameters_smilies[<?php echo $arsc_i; ?>]" value="<?php echo $arsc_parameters_smilies[$arsc_i]; ?>">
    <br>
    <?php
   }
   ?>
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
   <input type="text" name="arsc_save_parameters[socketserver_refresh]" value="<?php echo $arsc_parameters["socketserver_refresh"]; ?>">
   <br>
   <br>
   <font face="Arial" size="2">
    Do you want to force your users to register, or do you want to offer
    registration as an option to save the username?
   </font>
   <br>
   <input type="text" name="arsc_save_parameters[register_force]" value="<?php echo $arsc_parameters["register_force"]; ?>">
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
   <input type="text" name="arsc_save_parameters[show_version_selection]" value="<?php echo $arsc_parameters["show_version_selection"]; ?>">
   <br>
   <br>
   <font face="Arial" size="2">
    ARSC has some kind of flood protection which detects if the same phrase is posted again and again by the same user.
    Please enter how many of this same phrases by a user you want to allow before he gets kicked.
   </font>
   <br>
   <input type="text" name="arsc_save_parameters[flood_max]" value="<?php echo $arsc_parameters["flood_max"]; ?>">
   <br>
   <br>
   <font face="Arial" size="2">
    Say 'yes' here if you want that the first user who enters a room becomes operator. If you son't trust your visitors, better say 'no'.
   </font>
   <br>
   <input type="text" name="arsc_save_parameters[first_user_gets_op]" value="<?php echo $arsc_parameters["first_user_gets_op"]; ?>">
   <br>
   <br>
   <font face="Arial" size="2">
    Do you want that after you entered a message, this message does not
    disappear from the input box but instead remains? This is
    quite comfortable, but it is a big 'Welcome' to flooders (but ARSC has a flood protection) - just try
    this feature to find out if you need it.
   </font>
   <br>
   <input type="text" name="arsc_save_parameters[keep_sended_message]" value="<?php echo $arsc_parameters["keep_sended_message"]; ?>">
   <br>
   <br>
   <font face="Arial" size="2">
    How many characters should be the maximum an user can enter in the input box?
   </font>
   <br>
   <input type="text" name="arsc_save_parameters[input_maxsize]" value="<?php echo $arsc_parameters["input_maxsize"]; ?>">
   <br>
   <br>
   <font face="Arial" size="2">
    These appear in the eMail send for registration
   </font>
   <br>
   <font face="Arial" size="2">
    Your name:
   </font>
   <input type="text" name="arsc_save_parameters[register_owner]" value="<?php echo $arsc_parameters["register_owner"]; ?>">
   <br>
   <font face="Arial" size="2">
    Your eMail adress:
   </font>
   <input type="text" name="arsc_save_parameters[register_owner_email]" value="<?php echo $arsc_parameters["register_owner_email"]; ?>">
   <br>
   <font face="Arial" size="2">
    Adress of your ARSC installation:
   </font>
   <input type="text" name="arsc_save_parameters[register_homepage]" value="<?php echo $arsc_parameters["register_homepage"]; ?>">
   <br>
   <br>
   <font face="Arial" size="2">
    How long should the system wait for a users 'ping', before he gets logged out?
   </font>
   <br>
   <input type="text" name="arsc_save_parameters[ping]" value="<?php echo $arsc_parameters["ping"]; ?>">
   <br>
   <br>
   <font face="Arial" size="2">
    After howmany seconds do you want the userlist window to refresh?
    This MUST be smaller than the ping value above!
   </font>
   <br>
   <input type="text" name="arsc_save_parameters[userlist_refresh]" value="<?php echo $arsc_parameters["userlist_refresh"]; ?>">
   <br>
   <br>
   <font face="Arial" size="2">
    How long do we wait for the 'ping' of a lynxuser (textbrowser)?
    Not too small, because they must reload 'by hand'
   </font>
   <br>
   <input type="text" name="arsc_save_parameters[ping_text]" value="<?php echo $arsc_parameters["ping_text"]; ?>">
   <br>
   <br>
   <font face="Arial" size="2">
    After how many seconds do you want the roomlist to be refreshed?
   </font>
   <br>
   <input type="text" name="arsc_save_parameters[roomlist_refresh]" value="<?php echo $arsc_parameters["roomlist_refresh"]; ?>">
   <br>
   <br>
   <font face="Arial" size="2">
    Maximum rows allowed in the room tables? If your chat is visited well
    and you find messages missing, set this higher.
   </font>
   <br>
   <input type="text" name="arsc_save_parameters[rowlimit]" value="<?php echo $arsc_parameters["rowlimit"]; ?>">
   <br>
   <br>
   <font face="Arial" size="2">
    Templates for the messages (fields like {message} are placeholders that should speak for themselves)
   </font>
   <br>
   <font face="Arial" size="2">
    A normal posting:
   </font>
   <input type="text" name="arsc_save_parameters[template_normal]" value="<?php echo stripslashes(htmlspecialchars($arsc_parameters["template_normal"])); ?>">
   <br>
   <font face="Arial" size="2">
    A whispered message:
   </font>
   <input type="text" name="arsc_save_parameters[template_msg]" value="<?php echo stripslashes(htmlspecialchars($arsc_parameters["template_msg"])); ?>">
   <br>
   <font face="Arial" size="2">
    A message that is whispered to all operators:
   </font>
   <input type="text" name="arsc_save_parameters[template_msgops]" value="<?php echo stripslashes(htmlspecialchars($arsc_parameters["template_msgops"])); ?>">
   <br>
   <font face="Arial" size="2">
    A /me posting:
   </font>
   <input type="text" name="arsc_save_parameters[template_me]" value="<?php echo stripslashes(htmlspecialchars($arsc_parameters["template_me"])); ?>">
   <br>
   <font face="Arial" size="2">
    A system posting:
   </font> 
   <input type="text" name="arsc_save_parameters[template_system]" value="<?php echo stripslashes(htmlspecialchars($arsc_parameters["template_system"])); ?>">
   <br>
   <br>
   <input type="submit" value="Save parameters">
  </form>
 </body>
</html>