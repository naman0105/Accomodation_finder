
<html lang="en">
  <head>
    <title>Accomodation Finder</title>    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <style>
    body{
      background-image: url("assets/images/4.jpg");
    }
    </style>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  </head>
  <body class="text-white">

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
          <li class="nav-item">
            <a class="nav-link" href="search.php"><h4>Search</h4><span class="sr-only">(current)</span></a>
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
  include 'dbconnect.php';

  $sql = "select Room_capacity,Fees,H_name,Type,Curfew,Owner_name,Phone_number,Email_ID,Capacity,Total_no_of_rooms,no_of_meals,Mess_fees,Mess_capacity
          from Hostel natural join Room_types natural join mess natural join Owner_details
          where H_name ='".$_POST['hostel']."';";

  $result =  $conn->query($sql);

?>
<table class="table table-inverse">
  <thead>
    <tr>
      <th>#</th>
      <th>Hostel Name</th>
      <th>Type</th>
      <th>Fees</th>
      <th>Curfew</th>
      <th>Capacity</th>
      <th>Room Capacity</th>
      <th>Number of Meals</th>
      <th>Mess Fees</th>
      <th>Mess Capacity</th>
      <th>Owner Name</th>
      <th>Phone Number</th>
      <th>Email</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $count = 1;
  while($row = $result->fetch_assoc()){
    echo "<tr>";
    echo "<th>".$count."</th>";
    echo "<td>".$row['H_name']."</td>";
    echo "<td>".$row['Type']."</td>";
    echo "<td>".$row['Fees']."</td>";
    echo "<td>".$row['Curfew']."</td>";
    echo "<td>".$row['Capacity']."</td>";
    echo "<td>".$row['Room_capacity']."</td>";
    echo "<td>".$row['no_of_meals']."</td>";
    echo "<td>".$row['Mess_fees']."</td>";
    echo "<td>".$row['Mess_capacity']."</td>";
    echo "<td>".$row['Owner_name']."</td>";
    echo "<td>".$row['Phone_number']."</td>";
    echo "<td>".$row['Email_ID']."</td>";
    echo "</tr>";
    $count++;
  }

 ?>
   </tbody>
 </table>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
