<?php

/*

  This is the main configuration file of ARSC. To get ARSC running
  and customize it to your needs, you will have to change some
  parameters here. Every parameter is explained with a comment,
  and you must ONLY change the values between the two " in every line!

  The first part are the parameters you definitely have to change to
  get things running so you can at least use the 'install.php' script
  (you already read the README file, right?). A seconds part allows
  fine tuning of your installation.

*/


//  REQUIRED PARAMETERS ////////////////////////////////////////////////

//  What is the DNS or IP adress of your MySQL server?

    $arsc_param["db_host"] = "localhost";

//  IMPORTANT: If you don't know what MySQL is or wether you have a
//  MySQL server or not, then you have a problem - contact you server
//  administrator.


//  What is the name of the user who has access to the ARSC database?

    $arsc_param["db_user"] = "user";


//  And what is his password?

    $arsc_param["db_passwd"] = "password";


//  Finally, in which database will you store the ARSC tables?
//  This database must exist before you use the 'install.php' script,
//  but of course you know this because you read the README file...

    $arsc_param["db_db"] = "arsc";


//  Are you able to start a socket server on your Linux or Unix server
//  (and do you want that)?
//  If you don't know what's this, then answer "no" (or talk with your
//  server administrator).

    $arsc_param["socketserver_use"] = "yes";


//  What is the DNS or IP adress of the machine running this socket
//  server as seen from 'outside', from the real, big, bad internet?

    $arsc_param["socketserver_adress"] = "195.261.40.144";


//  Which port do you want that socket server listen at?
//  Remember that this must be > 1024 if not root starts the server.

    $arsc_param["socketserver_port"] = 8080;


//  This value _should_ tell the server how many connections he handles

    $arsc_param["socketserver_maximumusers"] = 200;


//  This is the password that you need if you want to give yourself
//  operator status. This means that when you enter the chat and post
//  '/selfop password', you will be the superuser who has control about
//  every other user in the chat! As you can imagine, it is very easy to
//  cause some serious chaos in the chat with this password, so it
//  is HARDLY recommended to change this dummy password to something
//  VERY VERY secure.
//  Not your dogs name, not your girlfriends name, not your birthdate,
//  ok?

    $arsc_param["selfop_password"] = "password";


//  Do you want to use the Drawboard? Please refer to the README file
//  for details. This option only specifies wether to show the
//  Drawboard link in the roomlist frame or not - you still have to
//  install Drawboard on your own! Say no if you don't know what
//  Drawboard is.

    $arsc_param["drawboard"] = "no";
    $arsc_param["drawboard_width"] = "400";
    $arsc_param["drawboard_height"] = "350";
    $arsc_param["drawboard_port"] = "8081";



//  FINETUNING PARAMETERS /////////////////////////////////////////////

//  What is the name of your chat? This appears in the document title.

    $arsc_param["title"] = "ARSC - Really Simple Chat";


//  If no language is choosen, which language should be standard?

    $arsc_param["standard_language"] = "english";


//  If you allow it, a posting starting with an * will be italic, and
//  a posting starting with an _ will be bold.

    $arsc_param["allow_textformatting"] = "yes";


//  What is the name of your logo file? The easiest way would be to
//  save the image as pic/logo.gif (or .jpg or .png) and then enter
//  'logo.gif (or .jpg or .png)' here

    $arsc_param["logo_path"] = "logo.png";


//  Colors - choose your flavor

    $arsc_color["standard_window_background"] = "#FAE6A6";

    $arsc_color["msg_window_background"]      = "#FFFFFF";
    $arsc_color["msg_window_text"]            = "#000000";
    $arsc_color["msg_window_system_text"]     = "#999999";
    $arsc_color["msg_window_me_text"]         = "#9B368A";
    $arsc_color["msg_window_msg_text"]        = "#000099";
    $arsc_color["msg_window_msgops_text"]     = "#FF6C00";

    $arsc_color["userlist_window_background"] = "#FAE6A6";
    $arsc_color["userlist_window_text"]       = "#000000";
    $arsc_color["userlist_window_link"]       = "#000000";
    $arsc_color["userlist_window_level0"]     = "#000099";
    $arsc_color["userlist_window_level1"]     = "#000000";
    $arsc_color["userlist_window_level2"]     = "#000000";

    $arsc_color["msginput_window_background"] = "#FAE6A6";
    $arsc_color["msginput_window_link"]       = "#000000";

    $arsc_color["roomlist_window_background"] = "#FAE6A6";
    $arsc_color["roomlist_window_foreground"] = "#FDF0C6";


//  Replace smilies (e.g. ':-)') and shortcuts (e.g. '/sleep/')
//  with an image?

    $arsc_param["smilies"] = "yes";


//  Where are your smilie images located? Full path please.

    $arsc_param["smilies_path"] = "http://manuel.kiessling.net/arscdev/pic/smilies/";


//  The smilie images must be named after numbers
//  (e.g. 0.gif, 1.gif etc.). Here you can define which number is
//  which smilie.

    $arsc_smilie = array(
                         0 => ":-)",
                         1 => ";-)",
                         2 => ":-(",
                         3 => ":-s",
                         4 => ":-]",
                         5 => ":-[",
                         6 => "/love/",
                         7 => "/smoke/",
                         8 => "/greet/",
                         9 => "/sleep/",
                        10 => "/shy/",
                        11 => "/tree/",
                        12 => "/candle/",
                        13 => "/rudolph/",
                        14 => "/santa/",
                        15 => "/snowman/",
                        16 => "/gift/"
                       );


//  This value tells the socket server how many milliseconds to wait
//  until he fetches new messages. 300000 is a good value to start with,
//  if you find your server's load is too high then try to set this
//  higher (400000), if you find that messages are not showing up
//  'fluid', try 200000 - 100000 (but this will result in higher load).
//  (This parameter will also be used for the refresh cycle of the
//  push_js version)

    $arsc_param["socketserver_refresh"] = 400000;


//  Do you want to force your users to register, or do you want to offer
//  registration as an option to save the username?

    $arsc_param["register_force"] = "no";

//  Do you want to show your visitors the chatversion selection field?
//  Which version to use for the chat is automatically detected by ARSC,
//  but if you show the selection field, this detection can be
//  overwritten by your visitors. It is maybe not wise to say "no" here,
//  because even if ARSC detects a modern browser like IE, it will send
//  him to a chat version that uses JavaScript, but we don't know if
//  the user deactivated JavaScript - you see the problem?

    $arsc_param["show_version_selection"] = "yes";


//  Do you want to force your users to register, or do you want to offer
//  registration as an option to save the username?

    $arsc_param["flood_max"] = 4;


//  Normally, if a chatroom is empty, the first user who enters that
//  room will get operator status(!) Change to "no" if you do not want
//  this.

    $arsc_param["first_user_gets_op"] = "no";


//  Do you want that after you entered a message, this message does not
//  disappear from the input box but instead gets selected? This is
//  quite comfortable, but it is a big 'Welcome' to flooders - just try
//  this feature to find out if you need it.

    $arsc_param["keep_sended_message"] = "yes";


//  How many characters should be the maximum an user can enter in the
//  input box?

    $arsc_param["input_maxsize"] = "400";


//  This appears in the eMail send for registration

    $arsc_param["register_owner"]       = "Your Name";
    $arsc_param["register_owner_email"] = "your@email.dom";
    $arsc_param["register_homepage"]    = "http://www.mydomain.com/arsc/";


//  How long do we wait for a users 'ping'?

    $arsc_param["ping"] = 10;


//  After howmany seconds do you want the userlist window to refresh?
//  This MUST be smaller than the ping value above!

    $arsc_param["userlist_refresh"] = 8;


//  How long do we wait for the 'ping' of a lynxuser?
//  Not too small, because they must reload 'by hand'

    $arsc_param["ping_text"] = 600;


//  After how many seconds do you want the roomlist to be refreshed?
//  Can be quite high...

    $arsc_param["roomlist_refresh"] = 240;


//  Maximum rows allowed in the room tables? If your chat is visited well
//  and you find messages missing, set this higher.

    $arsc_param["rowlimit"] = 100;


//  Templates for the messages

    $arsc_param["template_normal"] = "<font face=\"Arial\" size=\"2\" color=\"".$arsc_color["msg_window_text"]."\"><font color=\"".$arsc_color["msg_window_system_text"]."\" size=\"1\">[{sendtime}]</font> &lt;{user}&gt; {message}</font><br>";
    $arsc_param["template_msg"]    = "<font face=\"Arial\" size=\"2\" color=\"".$arsc_color["msg_window_msg_text"]."\"><font color=\"".$arsc_color["msg_window_system_text"]."\" size=\"1\">[{sendtime}]</font> &lt;{user}&gt; {whispers}: <i>{message}</i></font><br>";
    $arsc_param["template_msgops"] = "<font face=\"Arial\" size=\"2\" color=\"".$arsc_color["msg_window_msgops_text"]."\"><font color=\"".$arsc_color["msg_window_system_text"]."\" size=\"1\">[{sendtime}]</font> &lt;{user}&gt; {whispersops}: <i>{message}</i></font><br>";
    $arsc_param["template_me"]     = "<font face=\"Arial\" size=\"2\" color=\"".$arsc_color["msg_window_me_text"]."\"><font color=\"".$arsc_color["msg_window_system_text"]."\" size=\"1\">[{sendtime}]</font> * {user} {message}</font><br>";
    $arsc_param["template_system"] = "<font face=\"Arial\" size=\"2\" color=\"".$arsc_color["msg_window_system_text"]."\"><font size=\"1\">[{sendtime}]</font> <i>{message}</i></font><br>";


//  END OF CONFIGURATION
//////////////////////////////////////////////

?>