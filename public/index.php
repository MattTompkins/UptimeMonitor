<?php

define( 'ROOT', dirname( __DIR__ ) );

// Autoload the application classes
require_once ROOT . '/config/config.php';
require_once ROOT . '/vendor/autoload.php';


use UptimeMonitor\Classes\DB;
use UptimeMonitor\Classes\Router;

// Run the application
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

