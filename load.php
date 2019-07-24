<?php

if( ! defined( 'ENV' ) ) {
    /** define o tipo de ambiente [ DEV => display all erros || PROD => display non errors ] */
    define( ENV, 'PROD' );
}

if ( ! defined( 'ABSPATH' ) ) {
	define( ABSPATH, dirname( __FILE__ ) . '/' );
}

if(ENV == 'PROD'){
    ini_set('display_errors', 0);
    error_reporting( E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING | E_RECOVERABLE_ERROR );
}else{
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

require_once( ABSPATH . 'config.php' );
require_once( ABSPATH . 'settings.php' );

