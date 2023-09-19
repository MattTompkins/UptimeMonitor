<?php

/**
 * DB class for interacting with the database. DB credentials found in config/config.php
 */

use \PDO; 

class DB {
    
    private $host = DBHOST;
    private $user = DBUSER;
    private $port = DBPORT;
    private $password = DBPASSWORD;
    private $dbName = DBNAME;
    private $dbOptions = 
        [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];
    private $connection;

    public function __construct()
    {
        $dataSourceName = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName . ';port=' . $this->port . ';charset=utf8mb4';
        
        try {
            $this->connection = new PDO($dataSourceName, $this->user, $this->password, $this->dbOptions);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }
   
    public function execute( string $sql, array $params = [] ) {
        try {
            $statement = $this->connection->prepare( $sql );
            $result = $statement->execute( $params );
            
            if ( $result ) {
                return $result;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return false;
        }
    }

}
