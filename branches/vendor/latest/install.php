<?php

include("config.inc.php");

if ($result = mysql_query("CREATE TABLE arsc_room_standard (
                            id int(11) DEFAULT '0' NOT NULL auto_increment,
                            message text NOT NULL,
                            user varchar(64) NOT NULL,
                            sendtime time DEFAULT '00:00:00' NOT NULL,
                            timeid bigint(20) DEFAULT '0' NOT NULL,
                            PRIMARY KEY (id),
                            KEY timeid (timeid)
                           )")
              &&
	             mysql_query("CREATE TABLE arsc_users (
                            id int(11) DEFAULT '0' NOT NULL auto_increment,
                            user varchar(64) NOT NULL,
                            lastping int(11) DEFAULT '0' NOT NULL,
                            ip varchar(15) NOT NULL,
                            room varchar(32) NOT NULL,
                            language varchar(32) NOT NULL,
                            version varchar(16) NOT NULL,
                            level int(11) DEFAULT '0' NOT NULL,
                            sid varchar(32) NOT NULL,
                            PRIMARY KEY (id),
                            KEY lastping (lastping),
                            KEY user (user)
                           )"))
{
 echo "ARSC is installed.";
}
else
{
 echo "Something went wrong. You can mail me, maybe I can help you: <a href=\"mailto:manuel@kiessling.net\">manuel@kiessling.net</a>.";
}

?>
