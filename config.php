<?php 

/**
 * Mude as configurações para o seu ambiente de desnvolvimento
 */

/** Developer Enviroment */
define("HOST_DB", '127.0.0.1');
define("NAME_DB", 'modelo');
define("PASS_DB", '1234');
define("USER_DB", 'root');
define("PORT_DB", 3306);

/** Test Enviroment */
define("HOST_DB_PROD", 'o61qijqeuqnj9chh.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');
define("NAME_DB_PROD", 'b6iz2x0zr2ifimgs');
define("PASS_DB_PROD", 'r6ad0shgyh1bj2go');
define("USER_DB_PROD", 'h42mjnd0srmuj4oh');
define("PORT_DB_PROD", 3306);

/** Project VARS */
define("PROJECT_NAME", "Base Admin");
define("PROJECT_FOTO", "assets/img/logo/logo.jpg");


if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');


