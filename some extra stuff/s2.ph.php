<?php



$dbname = "hostels";
$username = "root";
$password = "";
$servername ="localhost";

$conn = new mysqli($servername,$username,$password,$dbname);

if( $conn->connect_error){
	die("connection failier". $conn->connect_error);
}

$sql = "insert into room (H_name,
	Pincode,
	Type,
	Hostel,
	Curfew,
	Total_no_of_rooms,
	Capacity)values('dfsd','560054','girls',true,'11:05:05',56,34)";




if($conn->query($sql)){
	echo "inserted ";
}
else{
	echo "error creating table" . $conn->error;
}

$conn->close();

  ?>