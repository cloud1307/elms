<?php
//mysql_select_db('hrmo_db',mysql_connect('localhost','root',''))or die(mysql_error());

$databaseHost = 'localhost';
$databaseName = 'db_elms';
$databaseUsername = 'root';
$databasePassword = '';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}


// $conn = new mysqli('localhost', 'root', '', 'leave_db');

// 	if ($conn->connect_error) {
// 	    die("Connection failed: " . $conn->connect_error);
// 	}
 
?>