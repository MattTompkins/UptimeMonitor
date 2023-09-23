<?php

namespace UptimeMonitor\Controllers;

use UptimeMonitor\Core\View;
use UptimeMonitor\Core\DB;
use UptimeMonitor\Core\Helpers;

/**
 * Controller for managing websites
 */
class DashboardController {
    
    /**
     * Show the form to create a site
     *
     * @return void
     */
    public static function index() {

        $db = new DB;
        $sites = $db->execute( "SELECT * FROM `sites`" );
        $db->close();
        
        View::load( 'dashboard', [ 'pageTitle' => 'Uptime Monitor', 'sites' => $sites ] );
    }
}
