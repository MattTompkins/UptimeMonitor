<?php

namespace UptimeMonitor\Controllers;

use Exception;
use UptimeMonitor\Core\View;
use UptimeMonitor\Core\DB;
use UptimeMonitor\Core\Helpers;

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
        View::load( 'create-website', [ 'page_title' => 'Create a new site' ] );
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
                'page_title' => 'Create a new site',
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
                'page_title' => 'Create a new site',
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
     * Delete a site from the DB
     *
     * @return void
     */
    public function deleteSite() {

    }
}