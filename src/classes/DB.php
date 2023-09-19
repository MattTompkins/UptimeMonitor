<?php

/**
 * DB class for interacting with the database. DB credentials found in config/db.php
 */
class DB extends mysqli {
    
    private static $instance = null;

    private $host = DBHOST;
    private $user = DBUSER;
    private $password = DBPASSWORD;
    private $dbName = DBNAME;

    

}


