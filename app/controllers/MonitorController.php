<?php

namespace UptimeMonitor\Controllers;

use Exception;
use UptimeMonitor\Core\View;
use UptimeMonitor\Core\DB;
use UptimeMonitor\Core\Helpers;

/**
 * Controller for managing monitors
 */
class MonitorController {
    
    public static function createMonitor( $siteID ) {
        $db = new DB;
        $siteInfo = $db->execute( "SELECT * FROM `sites` WHERE `id` = ?", [$siteID] )[0];
        $db->close();

        View::load( 'create-monitor', [
            'pageTitle' => 'Create a new monitor for ' . $siteInfo['name'],
            'siteInfo'  => $siteInfo,
        ]);
    }

    public static function storeMonitor( $siteID ) {
        
        $monitorTypes = [ 'ping', 'http' ];
        
        // Check monitor is valid type
        if ( ! in_array( $_POST['type'], $monitorTypes ) ) {
            $db = new DB;
            $siteInfo = $db->execute( "SELECT * FROM `sites` WHERE `id` = ?", [$siteID] )[0];
            $db->close();
            View::load( 'create-monitor', [
                'pageTitle' => 'Create a new monitor for ' . $siteInfo['name'],
                'siteInfo'  => $siteInfo,
                'message'   => 'This type of monitor does not exist.',
            ]);
        }

        // Store data in DB
        $db = new DB;
        $db->execute( "INSERT INTO `monitors` (site_id`, `monitor_type`, `cron_interval`) VALUES (?, ?, ?)", [ $siteID, $_POST['type'], $_POST['interval'] ] );
        $db->close();

        // Return back to correct page
        header( 'Location: ' . APP_URL . '/site/' . $siteID);
        return;
    }

}