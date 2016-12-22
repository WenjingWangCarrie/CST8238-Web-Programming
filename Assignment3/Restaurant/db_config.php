<?php
$host = "localhost";
$username = "wenjingw_eatery";
$password = "cst@8238";
$database = "wenjingw_eatery";

// Create connection
$connection = new mysqli ( $host, $username, $password, $database );

// Check connection
if ($connection->connect_errno) {
	die ( "Connection failed: " . $connection->connect_error );
} else {
	echo "Connected successfully";
}

?>