<?php

include("../inc/config.inc.php");
include("../inc/init.inc.php");

if (mysql_query("CREATE TABLE arsc_bannlist
                 (
                  id int(11) NOT NULL auto_increment,
                  ip char(15) NOT NULL default '',
                  until int(11) NOT NULL default '0',
                  PRIMARY KEY  (id),
                  KEY ip (ip)
                 )
                 TYPE=MyISAM", ARSC_PARAMETER_DB_LINK)
    &&
    mysql_query("CREATE TABLE arsc_room_lounge
                 (
                  id int(11) NOT NULL auto_increment,
                  message text NOT NULL,
                  user char(64) NOT NULL default '',
                  flag_ripped tinyint(4) NOT NULL default '0',
                  sendtime time NOT NULL default '00:00:00',
                  timeid bigint(20) NOT NULL default '0',
                  PRIMARY KEY  (id),
                  KEY timeid (timeid)
                 )
                 TYPE=MyISAM", ARSC_PARAMETER_DB_LINK)
    &&
    mysql_query("CREATE TABLE arsc_registered_users
                 (
                  id int(11) NOT NULL auto_increment,
                  user char(64) NOT NULL default '',
                  password char(64) NOT NULL default '',
                  email text NOT NULL,
                  flag_locked tinyint(4) NOT NULL default '0',
                  PRIMARY KEY  (id),
                  KEY user (user)
                 )
                 TYPE=MyISAM", ARSC_PARAMETER_DB_LINK)
    &&
    mysql_query("CREATE TABLE arsc_users
                 (
                  id int(11) NOT NULL auto_increment,
                  user char(64) NOT NULL default '',
                  lastping int(11) NOT NULL default '0',
                  ip char(15) NOT NULL default '',
                  room char(32) NOT NULL default '',
                  language char(32) NOT NULL default '',
                  version char(16) NOT NULL default '',
                  template char(32) NOT NULL default '',
                  level int(11) NOT NULL default '0',
                  flag_ripped tinyint(4) NOT NULL default '0',
                  sid char(32) NOT NULL default '',
                  lastmessageping bigint(20) NOT NULL default '0',
                  flood_count tinyint(4) NOT NULL default '0',
                  flood_lastmessage text NOT NULL,
                  PRIMARY KEY  (id),
                  KEY lastping (lastping),
                  KEY user (user)
                 )
                 TYPE=MyISAM", ARSC_PARAMETER_DB_LINK)
    &&
    mysql_query("CREATE TABLE arsc_parameters
                 (
                  name char(255) NOT NULL default '',
                  value text NOT NULL,
                  UNIQUE KEY name (name),
                  KEY name_2 (name)
                 )
                 TYPE=MyISAM", ARSC_PARAMETER_DB_LINK)
    &&
    mysql_query("CREATE TABLE arsc_templates
                 (
                  template char(32) NOT NULL default '',
                  name char(32) NOT NULL default '',
                  value text NOT NULL,
                  UNIQUE KEY name (name),
                  KEY name_2 (name)
                 )
                 TYPE=MyISAM", ARSC_PARAMETER_DB_LINK)
    &&
    mysql_query("CREATE TABLE arsc_smilies
                 (
                  id int(11) NOT NULL default '0',
                  value char(32) NOT NULL default '',
                  UNIQUE KEY id (id),
                  KEY id_2 (id)
                 )
                 TYPE=MyISAM", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('socketserver_use','no')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('socketserver_adress','localhost')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('socketserver_port','8080')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('socketserver_maximumusers','200')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('selfop_password','password')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('activate_counter_pic','yes')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('drawboard','no')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('drawboard_width','400')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('drawboard_height','350')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('drawboard_port','8081')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('title','ARSC - Really Simple Chat')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('standard_language','english')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('allow_textformatting','yes')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('logo_path','logo.png')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('smilies','yes')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('smilies_path','http://www.example.com/arsc/pic/smilies/')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('socketserver_refresh','400000')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('register_force','no')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('show_version_selection','yes')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('flood_max','4')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('first_user_gets_op','no')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('keep_sended_message','yes')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('input_maxsize','400')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('register_owner','Your Name')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('register_owner_email','your@email.dom')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('register_homepage','http://www.example.com/arsc/')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('ping','10')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('userlist_refresh','8')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('ping_text','600')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('roomlist_refresh','240')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('rowlimit','100')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('template_normal','<font face=\"Arial\" size=\"2\" color=\"#000000\"><font color=\"#999999\" size=\"1\">[\{sendtime\}]</font> &lt;\{user\}&gt; \{message\}</font><br>')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('template_msg','<font face=\"Arial\" size=\"2\" color=\"#000099\"><font color=\"#999999\" size=\"1\">[\{sendtime\}]</font> &lt;\{user\}&gt; \{whispers\}: <i>\{message\}</i></font><br>')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('template_msgops','<font face=\"Arial\" size=\"2\" color=\"#FF6C00\"><font color=\"#999999\" size=\"1\">[\{sendtime\}]</font> &lt;\{user\}&gt; \{whispersops\}: <i>\{message\}</i></font><br>')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('template_me','<font face=\"Arial\" size=\"2\" color=\"#9B368A\"><font color=\"#999999\" size=\"1\">[\{sendtime\}]</font> * \{user\} \{message\}</font><br>')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_parameters VALUES ('template_system','<font face=\"Arial\" size=\"2\" color=\"#999999\"><font size=\"1\">[\{sendtime\}]</font> <i>\{message\}</i></font><br>')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_smilies VALUES ('0',':-)')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_smilies VALUES ('1',';-)')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_smilies VALUES ('2',':-(')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_smilies VALUES ('3',':-s')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_smilies VALUES ('4',':-]')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_smilies VALUES ('5',':-[')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_smilies VALUES ('6','/love/')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_smilies VALUES ('7','/smoke/')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_smilies VALUES ('8','/greet/')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_smilies VALUES ('9','/sleep/')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_smilies VALUES ('10','/shy/')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_smilies VALUES ('11','/tree/')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_smilies VALUES ('12','/candle/')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_smilies VALUES ('13','/rudolph/')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_smilies VALUES ('14','/santa/')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_smilies VALUES ('15','/snowman/')", ARSC_PARAMETER_DB_LINK)
    && mysql_query("INSERT INTO arsc_smilies VALUES ('16','/gift/')", ARSC_PARAMETER_DB_LINK)
   )
{
 echo "ARSC is installed. Please delete this file (install.php) from your webserver now!";
}
else
{
 echo "Something went wrong. Please check if MySQL is running and if the database ".ARSC_PARAMETER_DB_DATABASE." exists!<br>You can mail me, maybe I can help you: <a href=\"mailto:manuel@kiessling.net\">manuel@kiessling.net</a>.";
}

?>