<?php
/*
 * Class DBConnection
 * Create a database connection using PDO
 * @author jonahlyn@unm.edu
 *
 * Instructions for use:
 *
 * require_once('settings.config.php');          // Define db configuration arrays here
 * require_once('DBConnection.php');             // Include this file
 *
 * $database = new DBConnection($dbconfig);      // Create new connection by passing in your configuration array
 *
 * $sqlSelect = "select * from .....";           // Select Statements:
 * $rows = $database->getQuery($sqlSelect);      // Use this method to run select statements
 *
 * foreach($rows as $row){
 * 		echo $row["column"] . "<br/>";
 * }
 *
 * $sqlInsert = "insert into ....";              // Insert/Update/Delete Statements:
 * $count = $database->runQuery($sqlInsert);     // Use this method to run inserts/updates/deletes
 * echo "number of records inserted: " . $count;
 *
 * $name = "jonahlyn";                          // Prepared Statements:
 * $stmt = $database->dbc->prepare("insert into test (name) values (?)");
 * $stmt->execute(array($name));
 *
 */

Class DatabaseConnection {

    // Database Connection Configuration Parameters
    // array('driver' => 'mysql','host' => '','dbname' => '','username' => '','password' => '')
    protected $connectionParameters;

    // Database Connection
    public $DatabaseConnection;

    /* function __construct
     * Opens the database connection
     * @param $paramaters is an array of database connection parameters
     */
    public function __construct( array $parameters ) {
        $this->connectionParameters = $parameters;
        $this->getPDOConnection();
    }

    /* Function __destruct
     * Closes the database connection
     */
    public function __destruct() {
		$this->DatabaseConnection = NULL;
	}

    /* Function getPDOConnection
     * Get a connection to the database using PDO.
     */
    private function getPDOConnection() {
        // Check if the connection is already established
        if ($this->DatabaseConnection == NULL) {
            $DSN = $this->parameters['driver'] .
                ":host=" . $this->parameters['host'] .
                ";dbname=" . $this->parameters['dbname'];
            // Create the connection
            try {
                $this->DatabaseConnection = new PDO( $DSN, $this->parameters[ 'username' ], $this->parameters[ 'password' ] );
            } catch( PDOException $e ) {
                echo __LINE__.$e->getMessage();
            }
        }
    }

    /* Function runQuery
     * Runs a insert, update or delete query
     * @param string sql insert update or delete statement
     * @return int count of records affected by running the sql statement.
     */
    public function runQuery( $sql ) {
        try {
        	$count = $this->dbc->exec($sql) or print_r($this->dbc->errorInfo());
        } catch(PDOException $e) {
        	echo __LINE__.$e->getMessage();
        }
        return $count;
    }

    /* Function getQuery
     * Runs a select query
     * @param string sql insert update or delete statement
     * @returns associative array
     */
	public function getQuery( $sql ) {
		$stmt = $this->dbc->query( $sql );
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

		return $stmt;
	}


}