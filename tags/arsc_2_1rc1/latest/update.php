<?php

include("config.inc.php");
include("functions.inc.php");

if (mysql_query("DROP TABLE arsc_parameters")
    &&
    mysql_query("CREATE TABLE arsc_parameters
                 (
                  name varchar(255) NOT NULL default '',
                  value text NOT NULL,
                  choices varchar(255) NOT NULL default 'free',
                  description text NOT NULL,
                  UNIQUE KEY name (name),
                  KEY name_2 (name)
                 ) TYPE=MyISAM")

    && mysql_query("INSERT INTO arsc_parameters VALUES ('locked','no','no|yes','Do you want to lock the chat? Nobody will be able to chat then, until you set it back to \'no\' here.')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('socketserver_use','yes','no|yes','Do you want to make use of ARSCs socket server? If you don\'t know what\'s this, then answer \"no\". (Note: If set to \"yes\", the socket server has to run, or else users will see an error when logging into the chat!)')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('socketserver_adress','".getenv("SERVER_NAME")."','','What is the DNS or IP adress of the machine running this socket server as seen from \'outside\', from the real, big, bad Internet?')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('socketserver_port','8080','','Which port do you want that socket server listen at? Remember that this must be > 1024 if not root starts the server.')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('socketserver_maximumusers','200','','This value tells the server how many connections he is allowed to handle.')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('selfop_password','password','','This is the password that you need if you want to give yourself <b>operator status in the chat</b>, and <b>the same password is used to access this page</b>! This means that when you enter the chat and post \'/selfop password\', you will be the superuser who has control about every other user in the chat! As you can imagine, it is very easy to cause some serious chaos in the chat with this password, so it is HARDLY recommended to change this dummy password to something VERY VERY secure. Not your dogs name, not your girlfriends name, not your birthdate, ok?')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('title','ARSC - Really Simple Chat','','What is the name of your chat? This appears in the document title of all pages.')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('standard_language','english','','If no language is choosen, which language should be standard?')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('allow_textformatting','yes','yes|no','If you say yes here, a posting starting with an * will be italic, and a posting starting with an _ will be bold.')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('logo_path','logo.jpg','','What is the name of your logo file? The easiest way would be to save the image as arsc_root/pic/logo.gif (or .jpg or .png) and then enter \'logo.gif\' (or .jpg or .png) here. Just leave the default to get the default ARSC logo.')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('smilies','yes','yes|no','Replace smilies (e.g. \':-)\') and shortcuts (e.g. \'/sleep/\') with an image?')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('smilies_path','http://".getenv("SERVER_NAME").dirname($PHP_SELF)."/pic/smilies/','','Where are your smilie images located? Full URL please.')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('socketserver_refresh','400000','','This value tells the socket server how many milliseconds to wait until he fetches new messages. 300000 is a good value to start with, if you find your server\'s load is too high then try to set this higher (400000), if you find that messages are not showing up \'fluid\', try 300000 - 200000 (but this will result in higher server load). This parameter is also used for the refresh cycle of the push version.')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('register_force','no','no|yes','Do you want to force your users to register, or do you want to offer registration as an option to save the username?')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('show_version_selection','yes','yes|no','Do you want to show your visitors the chatversion selection field? Which version to use for the chat is automatically detected by ARSC, but if you show the selection field, this detection can be overwritten by your visitors. It is maybe not wise to say \"no\" here, because if ARSC detects a modern browser like IE, it will send him to a chat version that uses JavaScript, but we don\'t know if the user deactivated JavaScript - you see the problem?')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('flood_max','4','','ARSC has some kind of flood protection which detects if the same phrase is posted again and again by the same user. Please enter how many of this same phrases by a user you want to allow before he gets kicked.')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('first_user_gets_op','no','no|yes','Say \'yes\' here if you want that the first user who enters a room becomes operator. If you don\'t trust your visitors, better say \'no\'.')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('keep_sended_message','yes','yes|no','Do you want that after you entered a message, this message does not disappear from the input box but instead remains? This is quite comfortable, but it is a big \'Welcome\' to flooders (but ARSC has a flood protection) - just try this feature to find out if you need it.')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('input_maxsize','400','','How many characters should be the maximum an user can enter in the input box?')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('register_owner','Your Name','','These appear in the eMail send for registration.<br>Your name:')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('register_owner_email','you@yourdomain.com','','Your eMail adress:')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('register_homepage','http://".getenv("SERVER_NAME").dirname($PHP_SELF)."/','','Adress of your ARSC installation:')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('ping','10','','How long should the system wait for a users \'ping\', before he gets logged out? (Under normal circumstances this one does not need to be altered!)')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('userlist_refresh','8','','After howmany seconds do you want the userlist window to refresh? This MUST be smaller than the ping value above! (Under normal circumstances this one does not need to be altered!)')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('ping_text','600','','How long do we wait for the \'ping\' of a lynxuser (textbrowser)? Not too small, because they must reload \'by hand\'. (Under normal circumstances this one does not need to be altered!)')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('roomlist_refresh','240','','After how many seconds do you want the roomlist to be refreshed?\r\n(Under normal circumstances this one does not need to be altered!)')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('rowlimit','100','','Maximum rows allowed in the room tables? If your chat is visited VERY well and you find messages missing, set this higher.')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('template_normal','<font face=\"Arial\" size=\"2\" color=\"{color}\"><font color=\"#999999\" size=\"1\">[{sendtime}]</font> &lt;{user}&gt; {message}</font><br>','','[TEMPLATE] A normal posting:')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('template_msg','<font face=\"Arial\" size=\"2\" color=\"#000099\"><font color=\"#999999\" size=\"1\">[{sendtime}]</font> &lt;{user}&gt; {whispers}: <i>{message}</i></font><br>','','[TEMPLATE] A whispered message:')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('template_msgops','<font face=\"Arial\" size=\"2\" color=\"#990099\"><font color=\"#999999\" size=\"1\">[{sendtime}]</font> &lt;{user}&gt; {whispers}: <i>{message}</i></font><br>','','[TEMPLATE] A message that is whispered to all operators:')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('template_me','<font face=\"Arial\" size=\"2\" color=\"#9B368A\"><font color=\"#999999\" size=\"1\">[{sendtime}]</font>  * {user} {message}</font><br>','','[TEMPLATE] A /me posting:')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('template_system','<font face=\"Arial\" size=\"2\" color=\"#999999\"><font size=\"1\">[{sendtime}]</font> <i>{message}</i></font><br>','','[TEMPLATE] A system message:')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('color_standard_window_background','#FAE6A6','','[COLOR] Standard window background: ')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('color_msg_window_background','#FFFFFF','','[COLOR] Message window background:')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('color_userlist_window_background','#FAE6A6','','[COLOR] Userlist window background:')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('color_userlist_window_text','#000000','','[COLOR] Userlist window text:')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('color_userlist_window_link','#000000','','[COLOR] Userlist window link:')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('color_userlist_window_level0','#000099','','[COLOR] Userlist window level 0 users:')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('color_userlist_window_level1','#000044','','[COLOR] Userlist window level 1 users:')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('color_userlist_window_level2','#000000','','[COLOR] Userlist window level 2 users:')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('color_msginput_window_background','#FAE6A6','','[COLOR] Message input window background')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('color_msginput_window_link','#000000','','[COLOR] Message input window link')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('color_roomlist_window_background','#FAE6A6','','[COLOR] Roomlist window background')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('color_roomlist_window_foreground','#FDF0C6','','[COLOR] Roomlist window foreground')")
   )
{
 while(list($arsc_key, $arsc_value) = each($arsc_parameters))
 {
  mysql_query("UPDATE arsc_parameters SET value = '$arsc_value' WHERE name = '$arsc_name'");
 }
 ?>
 <font face="Arial" size="2">
  <b>ARSC was successfully updated from version 2.0 to 2.1.</b> Please delete this file (update.php) and install.php from your webserver!
  <br>
  <br>
  To try your updated installation, go to the <a href="index.php"><b>index page</b></a>.
 </font>
 <?php
}
else
{
 echo "<font face=\"Arial\" size=\"2\">\nSomething went wrong. Please check if MySQL is running and if the database '{$arsc_parameters["db_db"]}' exists!<br>To get help, <a href=\"http://sourceforge.net/forum/forum.php?forum_id=102858\">visit our forum</a>.</font>";
}

?>