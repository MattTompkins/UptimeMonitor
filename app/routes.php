<?php
/**
 * Routes for the application.
 */

use UptimeMonitor\Core\Router;
use UptimeMonitor\Core\View;

$router = new Router;

$router->get('/', function() {
    View::load( 'dashboard' );
});

$router->get('/create-monitor', function() {
    View::load( 'dashboard' );
});


$router->get('/about', function() {
    echo "abt";
});

$router->handlerNotFound( function() {
    View::load( 'error', [ 'error' => '<b class="text-lg">Error 404 - Sorry, this page could not be found!</b>'] );
});

$router->run();
