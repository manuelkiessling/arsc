<?php

include("config.inc.php");

if ($result = mysql_query("CREATE TABLE arsc_room_lounge (
                            id int(11) NOT NULL auto_increment,
                            message text NOT NULL,
                            user varchar(64) NOT NULL,
                            sendtime time DEFAULT '00:00:00' NOT NULL,
                            timeid bigint(20) NOT NULL,
                            PRIMARY KEY (id),
                            KEY timeid (timeid)
                           )")
              &&
              mysql_query("CREATE TABLE arsc_users (
                            id int(11) NOT NULL auto_increment,
                            user varchar(10) NOT NULL,
                            lastping int(11) NOT NULL,
                            ip varchar(15) NOT NULL,
                            room varchar(32) NOT NULL,
                            language varchar(32) NOT NULL,
                            version varchar(16) NOT NULL,
                            level int(11) NOT NULL,
                            sid varchar(32) NOT NULL,
                            lastmessageping bigint(20) NOT NULL,
                            PRIMARY KEY (id),
                            KEY lastping (lastping),
                            KEY user (user)
                           )"))
{
 echo "ARSC is installed. Please delete this file (install.php) from your webserver now!";
}
else
{
 echo "Something went wrong. You can mail me, maybe I can help you: <a href=\"mailto:manuel@kiessling.net\">manuel@kiessling.net</a>.";
}

?>
