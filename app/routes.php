<?php
/**
 * Routes for the application.
 */

use UptimeMonitor\Core\Helpers;
use UptimeMonitor\Core\Install;
use UptimeMonitor\Core\Router;
use UptimeMonitor\Core\View;

use UptimeMonitor\Controllers\SiteController;

$router = new Router;

$router->get('/', function() {
    View::load( 'dashboard',  [ 'page_title' => 'Dashboard' ] );
});

$router->get( '/create-website', SiteController::class . '::createSite' );
$router->post( '/create-website', SiteController::class . '::storeSite' );

$router->get('/create-monitor', function() {
    View::load( 'dashboard' );
});


$router->get('/install', function(){
    Install::install();
});

$router->handlerNotFound( function() {
    View::load( 'error', [ 'error' => '<b class="text-lg">Error 404 - Sorry, this page could not be found!</b>'] );
});

$router->run();
