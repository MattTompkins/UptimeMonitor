<?php

// Define ROOT variable
define( 'ROOT', dirname( __DIR__ ) );

// Load the config file
require_once ROOT . '/config/config.php';

// Set other key variables
define( 'ASSET_DIR', APP_URL . 'public/assets/' );
define( 'VIEWS', dirname( __DIR__ ) . '/public/views/' );

// Autoload the application classes
require_once ROOT . '/vendor/autoload.php';


// Load the application main file
require_once ROOT . '/app/app.php';

runApp();