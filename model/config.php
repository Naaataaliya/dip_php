<?php
    ini_set( "display_errors", true );
    define( "DB_USERNAME", "nmasalykina" );
    define( "DB_PASSWORD", "neto1828" );
    define( "DB_NAME", "nmasalykins" );
    define( "CHARSET", "utf8" );
    define( "DB_DSN", "mysql:host=localhost;dbname=" . DB_NAME . ";charset=" . CHARSET );

    function handleException( $exception ) {
        echo "Error";
        error_log($exception->getMessage(), 3, 'log.txt');
    }

    set_exception_handler( 'handleException' );