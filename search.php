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


    <div class="container">
      <form action = "submit2.php" method = "post">
        <div class="row">
          <h3>Fill this form according to your requirements :</h3>
        </div>
        <hr />
        <div class="row">
          <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-xs-10 offset-xs-1">
              <div class="form-group">
                  <span for="name">Select locality :</span>
                  <select name="locality" onchange="getValue(this.value)" class="form-control">
                    <option value="">choose</option>

                    <?php
                        include 'dbconnect.php';
                        $q = "SELECT * FROM area";
                        $results=$conn -> query($q);
                        //loop
                        while($row = mysqli_fetch_array($results))
                        {
                         ?><option value="<?php echo $row['locality']; ?>"> <?php echo $row['locality'];?></option>
                     <?php }?>

                    ?>
                  </select>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-6">
                    <label class="radio-inline">
                      PG      :      <input type="radio" name="hostel" value = '0'/>
                    </label>
                  </div>
                  <div class="col-sm-6">
                    <label class="radio-inline">
                      Hostel     :      <input type="radio" name="hostel" value = '1'/>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <span for="type">Hostel/PG Type :</span>
                <br />
                <select name = "type" class="form-control">
                  <option value="Girls">Only Girls</option>
                  <option value="Boys">Only Boys</option>
                  <option value="Both">No Constraints</option>
                </select>
              </div>
              <div class="form-group">
                <label>Mess :</label>
                <div class="row">
                  <div class="col-sm-6">
                    <label class="radio-inline">
                      veg      :      <input type="radio" name="veg" value= '1'/>
                    </label>
                  </div>
                  <div class="col-sm-6">
                    <label class="radio-inline">
                      non-veg     :      <input type="radio" name="veg" value = '0'/>
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Fees less than :</label>
                <input type="number" name="lessfees" class="form-control"/>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" name="ac" type="checkbox" value="1"> : AC
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" name="bathroom" type="checkbox" value="1"> : Attached Bathroom
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" name="wifi" type="checkbox" value="1"> : wifi
                </label>
              </div>
            </div>
          </div>




        <hr />
        <hr />
        <div class="row">
          <div class="col-xs-12 offset-lg-6 offset-md-6 offset-sm-6 offset-xs-6">
            <div >
              <button type="submit" class="btn btn-primary" id="sub">Submit</button>
            </div>
          </div>
        </div>
      </form>
    </div>

      <hr />
      <br />
      <br />
      <hr />
      <div class="container">
        <form method="post" action="submit3.php">
          <div class="row">
            <h3>Get details About :</h3>
          </div>
          <hr />
          <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-xs-10 offset-xs-1">
              <div class="form-group">
                <span for="hostel">Get details of a particular Hostel :</span>
                <select name="hostel" class="form-control">
                  <option value="">choose</option>
                  <?php
                      include 'dbconnect.php';
                      $q = "SELECT * FROM Hostel";
                      $results=$conn -> query($q);
                      //loop
                      while($row = mysqli_fetch_array($results))
                      {
                       ?><option value="<?php echo $row['H_name']; ?>"> <?php echo $row['H_name'];?></option>
                   <?php }?>
                  ?>
                </select>
              </div>
              <hr />
              <hr />
              <div class="row">
                <div class="col-xs-12 offset-lg-6 offset-md-6 offset-sm-6 offset-xs-6">
                  <div >
                    <button type="submit" class="btn btn-primary" id="sub">Submit</button>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </form>


        <form method="post" action="submit4.php">
          <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-xs-10 offset-xs-1">
              <div class="form-group">
                <span for="locality">Get details of all the hostels in a particular area :</span>
                <select name="locality" class="form-control">
                  <option value="">choose</option>
                  <?php
                      include 'dbconnect.php';
                      $q = "SELECT * FROM area";
                      $results=$conn -> query($q);
                      //loop
                      while($row = mysqli_fetch_array($results))
                      {
                       ?><option value="<?php echo $row['locality']; ?>"> <?php echo $row['locality'];?></option>
                   <?php }?>
                  ?>
                </select>
              </div>
              <hr />
              <hr />
              <div class="row">
                <div class="col-xs-12 offset-lg-6 offset-md-6 offset-sm-6 offset-xs-6">
                  <div >
                    <button type="submit" class="btn btn-primary" id="sub">Submit</button>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </form>
        <hr />
        <hr />

        <form method="post" action="submit5.php">
          <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-xs-10 offset-xs-1">
              <div class="form-group">
                <span >Details of number of hostels and pgs in different areas :</span>

              </div>

              <div class="row">
                <div class="col-xs-12 offset-lg-6 offset-md-6 offset-sm-6 offset-xs-6">
                  <div >
                    <button type="submit" class="btn btn-primary" id="sub">Click here</button>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </form>
      </div>



    <script>
      function getValue(sel){
        console.log(sel);
      }
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
