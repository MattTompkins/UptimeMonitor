<?php

namespace UptimeMonitor\Core;

use PDO;
use PDOException;
use Exception;

/**
 * DB class for interacting with the database. DB credentials found in config/config.php
 */

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
            $this->connection = new PDO( $dataSourceName, $this->user, $this->password, $this->dbOptions );
        } catch ( PDOException $e ) {
            die( throw new Exception( "Database connection failed: " . $e->getMessage() ) );
        }
    }

    /**
     * Execute an SQL command on the database and fetch the results as an associative array.
     *
     * @param string $sql The SQL command to execute.
     * @param array $params An optional array of parameters for prepared statements.
     * @return array|false Returns an associative array of results on success or false on failure.
     */
    public function execute( string $sql, array $params = [] )
    {
        try {
            $statement = $this->connection->prepare( $sql );
            $result = $statement->execute( $params );

            if ($result ) {
                // Fetch the results as an associative array
                $data = $statement->fetchAll( PDO::FETCH_ASSOC );
                return $data;
            } else {
                return false;
            }
        } catch ( PDOException $e ) {
            // Handle any exceptions or errors here (e.g., log the error)
            return false;
        }
    }

     /**
     * Close the database connection.
     *
     * @return void
     */
    public function close()
    {
        $this->connection = null;
    }
}
