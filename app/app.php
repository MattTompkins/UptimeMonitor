<?php

use UptimeMonitor\Core\DB;
use UptimeMonitor\Core\View;

/**
 * Run the application
 *
 * @return void
 */
function runApp() {
    
    // Test database connection
    try {
        new DB; 
    } catch( Exception $e ) {
        View::load( 'error', [ 'error' => $e ] );
        die();
    }

    try {
        // Load router
        require_once( 'routes.php' );
    } catch( Exception $e ) {
        View::load( 'error', [ 'error' => $e ] );
        die();
    }

}
