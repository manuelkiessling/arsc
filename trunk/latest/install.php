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
                  KEY timeid (timeid),
                  KEY flag_ripped (flag_ripped),
                  KEY user (user)
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
                  color char(7) NOT NULL default '#000000',
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
    mysql_query("CREATE TABLE arsc_parameters_smilies
                 (
                  id int(11) NOT NULL default '0',
                  value char(32) NOT NULL default '',
                  UNIQUE KEY id (id),
                  KEY id_2 (id)
                 )
                 TYPE=MyISAM")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('locked','no')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('socketserver_use','no')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('socketserver_adress','".getenv("SERVER_NAME")."')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('socketserver_port','8080')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('socketserver_maximumusers','200')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('selfop_password','password')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('drawboard','no')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('drawboard_width','400')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('drawboard_height','350')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('drawboard_port','8081')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('title','ARSC - Really Simple Chat')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('standard_language','english')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('allow_textformatting','yes')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('logo_path','logo.jpg')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('smilies','yes')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('smilies_path','http://".getenv("SERVER_NAME").dirname($PHP_SELF)."/pic/smilies/')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('socketserver_refresh','400000')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('register_force','no')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('show_version_selection','yes')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('flood_max','4')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('first_user_gets_op','no')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('keep_sended_message','yes')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('input_maxsize','400')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('register_owner','Your Name')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('register_owner_email','you@yourdomain.com')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('register_homepage','http://".getenv("SERVER_NAME").dirname($PHP_SELF)."/')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('ping','10')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('userlist_refresh','8')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('ping_text','600')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('roomlist_refresh','240')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('rowlimit','100')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('template_normal','<font face=\"Arial\" size=\"2\" color=\"\{color\}\"><font color=\"#999999\" size=\"1\">[\{sendtime\}]</font> &lt;\{user\}&gt; \{message\}</font><br>')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('template_msg','<font face=\"Arial\" size=\"2\" color=\"#000099\"><font color=\"#999999\" size=\"1\">[\{sendtime\}]</font> &lt;\{user\}&gt; \{whispers\}: <i>\{message\}</i></font><br>')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('template_msgops','<font face=\"Arial\" size=\"2\" color=\"#FF6C00\"><font color=\"#999999\" size=\"1\">[\{sendtime\}]</font> &lt;\{user\}&gt; \{whispersops\}: <i>\{message\}</i></font><br>')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('template_me','<font face=\"Arial\" size=\"2\" color=\"#9B368A\"><font color=\"#999999\" size=\"1\">[\{sendtime\}]</font> * \{user\} \{message\}</font><br>')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('template_system','<font face=\"Arial\" size=\"2\" color=\"#999999\"><font size=\"1\">[\{sendtime\}]</font> <i>\{message\}</i></font><br>')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('color_standard_window_background','#FAE6A6')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('color_msg_window_background','#FFFFFF')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('color_msg_window_text','#000000')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('color_msg_window_system_text','#999999')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('color_msg_window_me_text','#9B368A')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('color_msg_window_msg_text','#000099')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('color_msg_window_msgops_text','#FF6C00')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('color_userlist_window_background','#FAE6A6')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('color_userlist_window_text','#000000')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('color_userlist_window_link','#000000')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('color_userlist_window_level0','#000099')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('color_userlist_window_level1','#000044')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('color_userlist_window_level2','#000000')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('color_msginput_window_background','#FAE6A6')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('color_msginput_window_link','#000000')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('color_roomlist_window_background','#FAE6A6')")
    && mysql_query("INSERT INTO arsc_parameters VALUES ('color_roomlist_window_foreground','#FDF0C6')")
    && mysql_query("INSERT INTO arsc_parameters_smilies VALUES ('0',':-)')")
    && mysql_query("INSERT INTO arsc_parameters_smilies VALUES ('1',';-)')")
    && mysql_query("INSERT INTO arsc_parameters_smilies VALUES ('2',':-(')")
    && mysql_query("INSERT INTO arsc_parameters_smilies VALUES ('3',':-s')")
    && mysql_query("INSERT INTO arsc_parameters_smilies VALUES ('4',':-]')")
    && mysql_query("INSERT INTO arsc_parameters_smilies VALUES ('5',':-[')")
    && mysql_query("INSERT INTO arsc_parameters_smilies VALUES ('6','/love/')")
    && mysql_query("INSERT INTO arsc_parameters_smilies VALUES ('7','/smoke/')")
    && mysql_query("INSERT INTO arsc_parameters_smilies VALUES ('8','/greet/')")
    && mysql_query("INSERT INTO arsc_parameters_smilies VALUES ('9','/sleep/')")
    && mysql_query("INSERT INTO arsc_parameters_smilies VALUES ('10','/shy/')")
    && mysql_query("INSERT INTO arsc_parameters_smilies VALUES ('11','/tree/')")
    && mysql_query("INSERT INTO arsc_parameters_smilies VALUES ('12','/candle/')")
    && mysql_query("INSERT INTO arsc_parameters_smilies VALUES ('13','/rudolph/')")
    && mysql_query("INSERT INTO arsc_parameters_smilies VALUES ('14','/santa/')")
    && mysql_query("INSERT INTO arsc_parameters_smilies VALUES ('15','/snowman/')")
    && mysql_query("INSERT INTO arsc_parameters_smilies VALUES ('16','/gift/')")
   )
{
 ?>
 ARSC is installed. Please delete this file (install.php) from your webserver!
 <br>
 <br>
 The ARSC team would like to ask you if you want to get this installation of ARSC counted on the ARSC homepage.
 If you want to, then please <a href="counter.php"><b>click here</b></a>, your installation will then be counted and
 listed on our <a href="http://manuel.kiessling.net/projects/software/arsc/refererlist.php">Where is ARSC used?</a> page.
 Only your URL will be submitted.
 <?php
}
else
{
 echo "Something went wrong. Please check if MySQL is running and if the database '{$arsc_parameters["db_db"]}' exists!<br>You can mail me, maybe I can help you: <a href=\"mailto:manuel@kiessling.net\">manuel@kiessling.net</a>.";
}

?>