<?php

error_reporting (E_ALL);


// +++ BEGIN USER PARAMETERS ++++++++++++++++++++++++++++++++++++++++++++++++++++++

//                        ! Change these only !
//                                 ||
//                                _||_
//                                \  /
//                                 \/

$arsc_params['dbHost'] =        'localhost'       ; //  MySQL server location; most people will use the default here

$arsc_params['dbUser'] =        'username'        ; //  MySQL username -- must have the following permissions:
                                                    //                    CREATE TABLE, SELECT, INSERT, UPDATE, DELETE
                                  
$arsc_params['dbPass'] =        'password'        ; //  MySQL password    

$arsc_params['dbName'] =        'arsc'            ; //  MySQL database name -- must exist prior to installation


// +++ END USER PARAMETERS ++++++++++++++++++++++++++++++++++++++++++++++++++++++++

?>
