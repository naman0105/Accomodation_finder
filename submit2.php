<?php
  include 'dbconnect.php';

$ac = isset($_POST['ac']) ? $_POST['ac'] : '0' ;
$bathroom = isset($_POST['bathroom']) ? $_POST['bathroom'] : '0' ;
$wifi = isset($_POST['wifi']) ? $_POST['wifi'] : '0' ;

  $sql = "select Room_capacity,Fees,H_name,Type,Curfew
          from Hostel natural join Room_types natural join mess
          where AC =".$ac." and Wifi =".$wifi." and Attached_Bathroom =".$bathroom." and Fees <=".$_POST['lessfees']."
          and Hostel =".$_POST['hostel']." and Veg = ".$_POST['veg']." and Type = '".$_POST['type']."';";

  $result =  $conn->query($sql);
  // echo $_POST['type'];

  while($row = $result->fetch_assoc()){
    echo $row['Room_capacity']. $row['Fees'] . $row['H_name'];
    echo "<hr  />";
  }

 ?>
