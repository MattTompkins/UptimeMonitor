<?php
/**
 * Routes for the application.
 */

use UptimeMonitor\Core\Router;

$router = new Router;

$router->get('/', function() {
    echo "homepage";
});

$router->get('/about', function() {
    echo "abt";
});

$router->handlerNotFound( function() {
    throw new Exception("Error 404 - This page does not exist.");
});

$router->run();
