<?php

/**
 * Application autoloader - loads application classes from classes directory
 *
 * @param string $className
 * @return void
 */
function applicationClassAutoloader($className) {

    $className = str_replace('\\', '/', $className);
    $classFile = __DIR__ . '/classes/' . $className . '.php';

    if ( file_exists( $classFile ) ) {
        require_once $classFile;
    }
}

spl_autoload_register('applicationClassAutoloader');

?>
