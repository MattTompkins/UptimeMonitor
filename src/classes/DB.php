<?php

/**
 * DB class for interacting with the database. DB credentials found in config/config.php
 */
class DB extends mysqli {
    
    private static $instance = null;

    private $host = DBHOST;
    private $user = DBUSER;
    private $password = DBPASSWORD;
    private $dbName = DBNAME;

    /**
     * getInstance - returns an instance of the object if it does not exist
     *
     * @return void
     */
    public static function getInstance() {
        if ( ! self::$instance instanceof self ) {
            self::$instance = new self;
        }
        return self::$instance;
    }

}


