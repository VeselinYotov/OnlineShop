<?php

/**
 * Class DBConnection
 * 
 * Create a database connection using PDO
 * 
 */
Class DatabaseConnection {

    /** 
     *  Database Connection Configuration Parameters
     *  array('driver' => 'mysql','host' => '','dbname' => '','username' => '','password' => '')
     */
    protected $connectionParameters;

    // Database Connection
    public $DatabaseConnection;

    /**
     * Constructor
     * 
     * @param array $paramaters is an array of database connection parameters
     */
    public function __construct( $parameters ) 
    {
        $this->connectionParameters = $parameters;
        $this->getPDOConnection();
    }

    /**
     * Desctructor
     */
    public function __destruct() 
    {
		$this->DatabaseConnection = NULL;
	}

    /** 
     * function getPDOConnection
     * 
     * Get a connection to the database using PDO.
     */
    private function getPDOConnection() 
    {
        // Check if the connection is already established
        if ($this->DatabaseConnection == NULL) 
        {
            $DSN =  $this->connectionParameters['driver'] .
                    ":host=" . $this->connectionParameters['host'] .
                    ";dbname=" . $this->connectionParameters['dbname'];
            // Create the connection
            try 
            {
                $this->DatabaseConnection = new PDO( $DSN, $this->connectionParameters[ 'username' ], $this->connectionParameters[ 'password' ] );
            } 
            catch( PDOException $e ) 
            {
                echo __LINE__.$e->getMessage();
            }
        }
    }

    /**
     * function runQuery
     * 
     * Runs a insert, update or delete query
     * 
     * @param string sql insert update or delete statement
     * @return int count of records affected by running the sql statement.
     */
    public function runQuery( $sql ) 
    {
        try 
        {
        	$count = $this->DatabaseConnection->exec($sql) or print_r($this->DatabaseConnection->errorInfo());
        } 
        catch(PDOException $e) 
        {
        	echo __LINE__.$e->getMessage();
        }
        return $count;
    }

    /** 
     * function getQuery
     * 
     * Runs a select query
     * 
     * @param string sql insert update or delete statement
     * @return associative array
     */
    public function getQuery( $sql ) 
    {
		$stmt = $this->DatabaseConnection->query( $sql );

		return $stmt;
	}


}