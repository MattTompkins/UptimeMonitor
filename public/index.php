<?php

define( 'ROOT', dirname( __DIR__ ) );
define( 'ASSET', dirname( __DIR__ ) . '/public/assets/' );
define( 'VIEWS', dirname( __DIR__ ) . '/public/views/' );

// Autoload the application classes
require_once ROOT . '/config/config.php';
require_once ROOT . '/vendor/autoload.php';

// Load the application main file
require_once ROOT . '/app/app.php';

runApp();