<?php

namespace UptimeMonitor\Core;

/**
 * View class for loading views
 */

class View {


    /**
     * Load a specified view based upon filename
     *
     * @param string $name
     * @return void
     */
    public static function load( string $name, array $data = []) {
        $file_path = VIEWS . $name . '.php';
        extract($data); // Extract data into variables
        include( VIEWS . 'header.php');
        include( $file_path );
        include( VIEWS . 'footer.php' );
    }
}
