<?php
  include('session.php');
  //  $query1 = mysql_query("select * from employee where employee_id=$id", $connection);

  $sql = "SELECT * FROM unverifiedinfo";
  $result = mysqli_query($db,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <nav class="navbar"> <!-- navbar content here  -->
      <a class="navbar-brand" href="#"><img src="../img/logo.png" alt=""></a>
        <a href="logout.php" class="right btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out</a>
    </nav>

<h1 class="h3 center mb-0 text-gray-800">Dashboard</h1>
<div class="row">
    <div class="col s6 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Pending Verifications</span>
          <?php echo $count; ?>
        </div>
        <div class="card-action">
          <a href="#">Verify More</a>
        </div>
      </div>
    </div>

    <div class="col s6 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Verified</span>
          <p>3</p>
        </div>
        <div class="card-action">
          <a href="#">see details</a>
        </div>
      </div>
    </div>
  </div>

  <footer class="page-footer" color1=#350202>
          <div class="footer-copyright">
            <div class="center container">
            © 2022 University of Peradeniya
            </div>
          </div>
        </footer>
</body>
</html>