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
    require_once( '../templates/404.php' );
});

$router->run();
