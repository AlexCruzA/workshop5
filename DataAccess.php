<?php

/**
 * Conexion a DB
 */
class DataAccess{
	
	public $servername;
	public $username;
	public $password;
	public $dbname;

	 function __construct(){
	 	$this->servername = "localhost";
	 	$this->username = "root";
		$this->password = "";
		$this->dbname = "wshop5";
	 }

	function connect(){
		// Create connection.
		$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		// Check connection
		if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
		}
		return $conn;
	}
}