
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
  $sql = "select no_of_hostels,No_of_pgs,city,locality,pincode from area";

  $result =  $conn->query($sql);
  // echo $_POST['type'];
?>
<table class="table table-inverse">
  <thead>
    <tr>
      <th>#</th>
      <th>City</th>
      <th>Locality</th>
      <th>Pincode</th>
      <th>Number of PGs</th>
      <th>Number of Hostels</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $count = 1;
  while($row = $result->fetch_assoc()){
    echo "<tr>";
    echo "<th>".$count."</th>";
    echo "<td>".$row['city']."</td>";
    echo "<td>".$row['locality']."</td>";
    echo "<td>".$row['pincode']."</td>";
    echo "<td>".$row['No_of_pgs']."</td>";
    echo "<td>".$row['no_of_hostels']."</td>";
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
