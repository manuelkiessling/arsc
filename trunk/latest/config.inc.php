<?php

/*

  This is the main configuration file of ARSC. To get ARSC running
  and customize it to your needs, you will have to change some
  parameters here. Every parameter is explained with a comment,
  and you must ONLY change the values between the two " in every line!

  Here are stored the parameters you definitely have to change to
  get things running so you can at least use the 'install.php' script
  (you already read the README file, right?). A second part allows
  fine tuning of your installation, this is done with a web interface.

*/


//  PARAMETERS ////////////////////////////////////////////////

//  What is the DNS or IP adress of your MySQL server?

    $arsc_parameters["db_host"] = "localhost";

//  IMPORTANT: If you don't know what MySQL is or wether you have a
//  MySQL server or not, then you have a problem - contact you server
//  administrator.


//  What is the name of the user who has access to the ARSC database?

    $arsc_parameters["db_user"] = "user";


//  And what is his password?

    $arsc_parameters["db_passwd"] = "password";


//  Finally, in which database will you store the ARSC tables?
//  This database must exist before you use the 'install.php' script,
//  but of course you know this because you read the README file...

    $arsc_parameters["db_db"] = "arscdev";


//  END OF CONFIGURATION
//////////////////////////////////////////////


/*

  Refer to the README file to see what to do next.

*/

?>