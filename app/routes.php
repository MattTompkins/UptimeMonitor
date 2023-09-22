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

$router->get('/about', function() {
    echo "abt";
});

$router->handlerNotFound( function() {
    throw new Exception("Error 404 - This page does not exist: ");
});

$router->run();
