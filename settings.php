<?php 

$current_limit  = @ini_get( 'memory_limit' );

if( !defined ('UPLOAD_LIMIT') )
    define('UPLOAD_LIMIT', $current_limit);
    