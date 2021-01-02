<?php 

	$dbhost = 'localhost' ;
	$username = 'barry';
	$password = '852258';
	$DB_Name = 'meetyou';
	$DB_Port = '3306';
	
//	$conn = mysqli_connect('localhost','root','sd','meetyou') or die (mysqli_error());
	$conn = new mysqli($dbhost, $username, $password, $DB_Name);
	
	if($conn === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);}
?>
