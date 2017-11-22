<?php

include "dbconnect.php";

$q = $_REQUEST["q"];

$hint = "";
$sql = "select Phone_number from Owner_details";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
  if($q == $row['Phone_number']){
    $hint = "The Number already registered";
  }
}
// lookup all hints from array if $q is different from ""

// Output "no suggestion" if no hint was found or output correct values
echo $hint;
?>
