<?php

/**
 * Conexion a DB
 */
class DataAccess{
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "wshop5";
}

function connect(){
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
}