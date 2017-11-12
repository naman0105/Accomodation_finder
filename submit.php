<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->


    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  </head>
  <body>

    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#"><h1>Accomodation Finder</h1></a>
      <div class="collapse navbar-collapse" id="navbarCollapse">

        <form class="form-inline mt-2 mt-md-0 mr-auto">

        </form>
        <ul class="navbar-nav " style="margin-right:10%">
          <li class="nav-item">
            <a class="nav-link" href="index.html"><h4>Home</h4><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#"><h4>Search</h4><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="form.html"><h4>Registration</h4><span class="sr-only">(current)</span></a>
          </li>
        </ul>

      </div>
    </nav>

<br /><br /><br/>

</br/>



<?php
// echo "the first name  :: ". $_POST["name"] . $_POST["capacity1"];

$dbname = "hostels";
$username = "root";
$password = "";
$servername ="localhost";


// $val = NULL;
// if (isset($_POST['no'])) {
//     $val = $_POST['no'];
// }
// echo "variable is : .$val";


$conn = new mysqli($servername,$username,$password,$dbname);

if( $conn->connect_error){
	die("connection failier". $conn->connect_error);
}
$nullvalue = 1;

$sql = "insert into Owner_details values('".$_POST["owner_name"]."','".$_POST["owner_phone"]."','".$_POST["owner_email"]."');";

$sql1 = "select pincode from area";
$sql2 = "insert into area values('".$_POST["pincode"]."','".$nullvalue."','".$_POST["city"]."','".$nullvalue."','".$_POST["locality"]."');";
$sql3 = "insert into Hostel(H_name,
Pincode,
Type,
Hostel,
Curfew,
Phone_number,
Capacity) values('".$_POST["name"]."','".$_POST["pincode"]."','".$_POST["type"]."','".$_POST["hostel_pg"]."','".$_POST["curfew"]."','".$_POST["owner_phone"]."','".$_POST["capacity"]."');";


if($conn->query($sql)){
	echo "inserted";
}
else{
	echo "error " . $conn->error;
}
$result = $conn->query($sql1);
$flag = 0;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if($row['pincode'] == $_POST['pincode']){
          $flag =1;
        }
    }
} else {
    $flag = 0;
}

if( $flag == 0){
  if($conn->query($sql2)){
  	echo "inserted";
  }
  else{
  	echo "error " . $conn->error;
  }
}

// if($conn->query($sql3)){
//   echo "inserted";
// }
// else{
//   echo "error " . $conn->error;
// }

$last_id = NULL;

if ($conn->query($sql3) === TRUE) {
    $last_id = $conn->insert_id;
    echo "the last is ". $last_id;
}

$sql4 = "insert into mess(no_of_meals,Mess_fees,Mess_capacity,Veg,ID) values('".$_POST["no_of_meals"]."','".$_POST["mess_fees"]."','".$_POST["mess_capacity"]."','".$_POST["veg_nonveg"]."','".$last_id."');";

if($conn->query($sql4)){
  echo "inserted";
}
else{
  echo "error".$conn->error;
}


for($x = 1; $x <= $_POST["nos"];$x++){
// $val = NULL;
// 	if($_POST["ac".(string)$x] == 'yes' ){
// 		$val = true;
// 	}
$checkbox = isset($_POST["ac".(string)$x]) ? $_POST["ac".(string)$x] : '0' ;
$checkbox1 = isset($_POST["bathroom".(string)$x]) ? $_POST["bathroom".(string)$x] : '0' ;
$checkbox2 = isset($_POST["wifi".(string)$x]) ? $_POST["wifi".(string)$x] : '0' ;


$sql5 = "insert into Room_types
values('".$checkbox1."'
,'".$checkbox."','".$_POST["capacity".(string)$x]."','".$_POST["fees".(string)$x]."','".$checkbox2."','".$_POST["no_of_rooms".(string)$x]."','".$last_id."');";

if($conn->query($sql5)){
  echo "inserted";
}
else{
  echo "error".$conn->error;
}

}


$conn->close();
?>

</body>
</html>
