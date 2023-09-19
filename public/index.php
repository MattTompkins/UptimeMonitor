<?php

define('ROOT', dirname( __DIR__ ) );

// Autoload the application classes
require_once ROOT . '/config/config.php';
require_once ROOT . '/vendor/autoload.php';


use UptimeMonitor\Classes\DB;
use UptimeMonitor\Classes\Router;

$test = new DB; 

print_r( $test->execute( 'SELECT * FROM users' ) );

// Run the application
$router = new Router;