<?php

define( 'ROOT', dirname( __DIR__ ) );

// Autoload the application classes
require_once ROOT . '/config/config.php';
require_once ROOT . '/vendor/autoload.php';

// Load the application main file
require_once ROOT . '/app/app.php';

runApp();