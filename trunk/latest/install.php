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
   )
{
 echo "ARSC is installed. Please delete this file (install.php) from your webserver now!";
}
else
{
 echo "Something went wrong. Please check if MySQL is running and if the database '{$arsc_param["db_db"]}' exists!<br>You can mail me, maybe I can help you: <a href=\"mailto:manuel@kiessling.net\">manuel@kiessling.net</a>.";
}

?>