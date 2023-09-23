<?php
/**
 * Routes for the application.
 */

use UptimeMonitor\Core\Helpers;
use UptimeMonitor\Core\Install;
use UptimeMonitor\Core\Router;
use UptimeMonitor\Core\View;

use UptimeMonitor\Controllers\SiteController;
use UptimeMonitor\Controllers\DashboardController;

$router = new Router;

$router->get( '/', DashboardController::class . '::index' );
$router->get( '/dashboard', DashboardController::class . '::index' );

$router->get( '/create-website', SiteController::class . '::createSite' );
$router->post( '/create-website', SiteController::class . '::storeSite' );

$router->get('/site/(\d+)', function ($queryParams, $routeParams) { SiteController::showSite( $routeParams[0] );});

/** Utilities */
$router->get( '/install', function() { Install::install(); } );
$router->handlerNotFound( function() { View::load( 'error', [ 'error' => '<b class="text-lg">Error 404 - Sorry, this page could not be found!</b>'] ); });

$router->run();
