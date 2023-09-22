<?php

use UptimeMonitor\Core\Helpers;
use UptimeMonitor\Core\DB;

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
        echo 'error';
    }

    // Load router
    require_once('routes.php');

}
