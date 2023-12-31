<?php

namespace UptimeMonitor\Controllers;

use Exception;
use UptimeMonitor\Core\View;
use UptimeMonitor\Core\DB;
use UptimeMonitor\Core\Helpers;


use GuzzleHttp\Psr7\Request;

/**
 * Controller for managing websites
 */
class SiteController {
    
    /**
     * Show the form to create a site
     *
     * @return void
     */
    public static function createSite() {
        View::load( 'create-website', [ 'pageTitle' => 'Create a new site' ] );
    }

    /**
     * Validate request and store in DB
     *
     * @return void
     */
    public static function storeSite() {

        $name = $_POST['name'];
        $url  = $_POST['url'];
        
       // Validate URL is correct
        if ( !filter_var( $url, FILTER_VALIDATE_URL ) ) {
            $errorMessage = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' ) . ' is not a valid URL! Please try again.';
            View::load('create-website', [
                'pageTitle' => 'Create a new site',
                'message'    => $errorMessage,
            ]);
            return;
        }

        // Attempt to contact site via Guzzle
        try {
            $client = new \GuzzleHttp\Client();
            $client->request( 'GET', $url );
        }
        catch( Exception $e ) {
            $errorMessage = 'There was an issue connecting to the specified URL. Please try again.';
            View::load('create-website', [
                'pageTitle' => 'Create a new site',
                'message'    => $errorMessage,
            ]);
            return;
        }

        // Insert website into the DB
        $db = new DB;
        $db->execute( "INSERT INTO `sites` (`name`, `URL`) VALUES (?, ?)", [ $name, $url ] );
        $db->close();
        
        header( 'Location: ' . APP_URL );
        return;
    }

    /**
     * Show a single site & its monitors
     *
     * @return void
     */
    public static function showSite( $id ) {
        // Get basic site info
        $db = new DB;
        $siteInfo = $db->execute( "SELECT * FROM `sites` WHERE `id` = ?", [$id] )[0];
        $db->close();

        // Test the connection to provide initial data
        $testRequest = [];
        try {
            $client = new \GuzzleHttp\Client();
            $client->request( 'GET', $siteInfo['URL'], [
                'on_stats' => function ( \GuzzleHttp\TransferStats $stats ) use ( &$testRequest ) {
                    $testRequest = $stats->getHandlerStats();
                },
                'timeout' => 5, 
            ]);
        } catch ( Exception $e ) {
            if ( $e->getCode() === 0 && strpos( $e->getMessage(), 'cURL error' ) !== false ) {
                $testRequest['http_code'] = '408 (5s+ timeout)';
            }
        }

        View::load( 'single-website', [ 
            'pageTitle'   => $siteInfo['name'],
            'siteInfo'    => $siteInfo,
            'testRequest' => $testRequest,
        ]);
    }

    /**
     * Delete a site from the DB
     *
     * @return void
     */
    public function deleteSite() {

    }
}