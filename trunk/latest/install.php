<?php

include("config.inc.php");
include("functions.inc.php");

if (mysql_query("CREATE TABLE arsc_bannlist
                 (
                  id int(11) NOT NULL auto_increment,
                  ip varchar(15) NOT NULL default '',
                  until int(11) NOT NULL default '0',
                  PRIMARY KEY  (id),
                  KEY ip (ip)
                 )
                 TYPE=MyISAM")
    &&
    mysql_query("CREATE TABLE arsc_room_lounge
                 (
                  id int(11) NOT NULL auto_increment,
                  message text NOT NULL,
                  user varchar(64) NOT NULL default '',
                  flag_ripped tinyint(4) NOT NULL default '0',
                  sendtime time NOT NULL default '00:00:00',
                  timeid bigint(20) NOT NULL default '0',
                  PRIMARY KEY  (id),
                  KEY timeid (timeid)
                 )
                 TYPE=MyISAM")
    &&
    mysql_query("CREATE TABLE arsc_registered_users
                 (
                  id int(11) NOT NULL auto_increment,
                  user varchar(10) NOT NULL default '',
                  password varchar(64) NOT NULL default '',
                  email text NOT NULL,
                  flag_locked tinyint(4) NOT NULL default '0',
                  PRIMARY KEY  (id),
                  KEY user (user)
                 )
                 TYPE=MyISAM")
    &&
    mysql_query("CREATE TABLE arsc_users
                 (
                  id int(11) NOT NULL auto_increment,
                  user varchar(10) NOT NULL default '',
                  lastping int(11) NOT NULL default '0',
                  ip varchar(15) NOT NULL default '',
                  room varchar(32) NOT NULL default '',
                  language varchar(32) NOT NULL default '',
                  version varchar(16) NOT NULL default '',
                  level int(11) NOT NULL default '0',
                  flag_ripped tinyint(4) NOT NULL default '0',
                  sid varchar(32) NOT NULL default '',
                  lastmessageping bigint(20) NOT NULL default '0',
                  flood_count tinyint(4) NOT NULL default '0',
                  flood_lastmessage text NOT NULL,
                  PRIMARY KEY  (id),
                  KEY lastping (lastping),
                  KEY user (user)
                 )
                 TYPE=MyISAM")
    &&
    mysql_query("CREATE TABLE arsc_parameters
                 (
                  name varchar(255) NOT NULL default '',
                  value text NOT NULL,
                  UNIQUE KEY name (name),
                  KEY name_2 (name)
                 )
                 TYPE=MyISAM")
    &&
    mysql_query("INSERT INTO arsc_parameters VALUES ('socketserver_use','no');
                 INSERT INTO arsc_parameters VALUES ('socketserver_adress','195.261.40.144');
                 INSERT INTO arsc_parameters VALUES ('socketserver_port','8080');
                 INSERT INTO arsc_parameters VALUES ('socketserver_maximumusers','200');
                 INSERT INTO arsc_parameters VALUES ('selfop_password','password');
                 INSERT INTO arsc_parameters VALUES ('activate_counter_pic','yes');
                 INSERT INTO arsc_parameters VALUES ('drawboard','no');
                 INSERT INTO arsc_parameters VALUES ('drawboard_width','400');
                 INSERT INTO arsc_parameters VALUES ('drawboard_height','350');
                 INSERT INTO arsc_parameters VALUES ('drawboard_port','8081');
                 INSERT INTO arsc_parameters VALUES ('title','ARSC - Really Simple Chat');
                 INSERT INTO arsc_parameters VALUES ('standard_language','english');
                 INSERT INTO arsc_parameters VALUES ('allow_textformatting','yes');
                 INSERT INTO arsc_parameters VALUES ('logo_path','logo.png');
                 INSERT INTO arsc_parameters VALUES ('smilies','yes');
                 INSERT INTO arsc_parameters VALUES ('smilies_path','http://your.server.com/arsc_root/pic/smilies/');
                 INSERT INTO arsc_parameters VALUES ('socketserver_refresh','400000');
                 INSERT INTO arsc_parameters VALUES ('register_force','no');
                 INSERT INTO arsc_parameters VALUES ('show_version_selection','yes');
                 INSERT INTO arsc_parameters VALUES ('flood_max','4');
                 INSERT INTO arsc_parameters VALUES ('first_user_gets_op','no');
                 INSERT INTO arsc_parameters VALUES ('keep_sended_message','yes');
                 INSERT INTO arsc_parameters VALUES ('input_maxsize','400');
                 INSERT INTO arsc_parameters VALUES ('register_owner','Your Name');
                 INSERT INTO arsc_parameters VALUES ('register_owner_email','your@email.dom');
                 INSERT INTO arsc_parameters VALUES ('register_homepage','http://www.mydomain.com/arsc/');
                 INSERT INTO arsc_parameters VALUES ('ping','10');
                 INSERT INTO arsc_parameters VALUES ('userlist_refresh','8');
                 INSERT INTO arsc_parameters VALUES ('ping_text','600');
                 INSERT INTO arsc_parameters VALUES ('roomlist_refresh','240');
                 INSERT INTO arsc_parameters VALUES ('rowlimit','100');
                 INSERT INTO arsc_parameters VALUES ('template_normal','<font face="Arial" size="2" color="#000000"><font color="#999999" size="1">[{sendtime}]</font> &lt;{user}&gt; {message}</font><br>');
                 INSERT INTO arsc_parameters VALUES ('template_msg','<font face="Arial" size="2" color="#000099"><font color="#999999" size="1">[{sendtime}]</font> &lt;{user}&gt; {whispers}: <i>{message}</i></font><br>');
                 INSERT INTO arsc_parameters VALUES ('template_msgops','<font face="Arial" size="2" color="#FF6C00"><font color="#999999" size="1">[{sendtime}]</font> &lt;{user}&gt; {whispersops}: <i>{message}</i></font><br>');
                 INSERT INTO arsc_parameters VALUES ('template_me','<font face="Arial" size="2" color="#9B368A"><font color="#999999" size="1">[{sendtime}]</font> * {user} {message}</font><br>');
                 INSERT INTO arsc_parameters VALUES ('template_system','<font face="Arial" size="2" color="#999999"><font size="1">[{sendtime}]</font> <i>{message}</i></font><br>');")
   )
{
 echo "ARSC is installed. Please delete this file (install.php) from your webserver now!";
}
else
{
 echo "Something went wrong. Please check if MySQL is running and if the database '{$arsc_parameters["db_db"]}' exists!<br>You can mail me, maybe I can help you: <a href=\"mailto:manuel@kiessling.net\">manuel@kiessling.net</a>.";
}

?>