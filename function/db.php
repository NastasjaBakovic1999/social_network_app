//ostvarujemo konekciju sa bazom

<?php

$hostname="localhost";
$username="root";
$password="";
$database="social_network";

$conn=mysqli_connect(hostname:$localhost, username:$username, password:$password, database:$database);

function escape($string){
	global $conn;
	return mysqli_real_escape_string($conn, $string);
}

function query($query){
	global $conn;
	return mysqli_query($conn, $query);
}

function confirm($result){
	global $conn;
	if(!$result){
		die("QUERY FAILED" . mysqli_error($conn));
	}
}

?>