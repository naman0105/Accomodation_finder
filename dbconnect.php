<?php

$dbname = "hostels";
$username = "root";
$password = "";
$servername ="localhost";





$conn = new mysqli($servername,$username,$password,$dbname);

if( $conn->connect_error){
	die("connection failier". $conn->connect_error);
}

?>
