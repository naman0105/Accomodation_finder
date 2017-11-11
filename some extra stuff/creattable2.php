<?php



$dbname = "hostels";
$username = "root";
$password = "";
$servername ="localhost";

$conn = new mysqli($servername,$username,$password,$dbname);

if( $conn->connect_error){
	die("connection failier". $conn->connect_error);
}

$sql1 = "

create table Owner_details(
	Owner_name varchar(20),
	Phone_number varchar(10),
	Email_ID varchar(30),
	primary key(Phone_number)
);
";

$sql2= "
create table area(
	pincode varchar(6),
	No_of_pgs int,
	city varchar(20),
	no_of_hostels int,
	locality varchar(20),
	primary key(pincode)
);
";
$sql3= "
create table Hostel(
	ID int not null auto_increment primary key,
	H_name varchar(20),
	Pincode char(6),
	Type varchar(10),
	Hostel boolean,
	Curfew time,
	Phone_number varchar(10),
	Total_no_of_rooms int,
	Capacity int



);
";
$sql4= "
create table mess(
	no_of_meals int,
	Mess_fees int,
	Mess_capacity int,
	Veg boolean,
	Schedule blob,
	ID int
);";
$sql5= "
create table Room_types(
	Attached_Bathroom Boolean,
	AC boolean,
	Room_capacity int,
	Fees int,
	Wifi boolean,
	No_of_rooms int,
	ID int
);";

// $result = mysql_query($sql1,$sql2,$sql3);

if($conn->query($sql1)){
	echo "Table created";
}
else{
	echo "error creating table" . $conn->error;
}
if($conn->query($sql2)){
	echo "Table created";
}
else{
	echo "error creating table" . $conn->error;
}
if($conn->query($sql3)){
	echo "Table created";
}
else{
	echo "error creating table" . $conn->error;
}
if($conn->query($sql4)){
	echo "Table created";
}
else{
	echo "error creating table" . $conn->error;
}
if($conn->query($sql5)){
	echo "Table created";
}
else{
	echo "error creating table" . $conn->error;
}
// $conn->query($sql3);
// $conn->query($sql4);
// $conn->query($sql5);


$conn->close();

  ?>