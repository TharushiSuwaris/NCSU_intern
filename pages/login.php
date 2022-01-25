<?php 
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      //echo $_POST['username'];;
      //echo $_POST['password'];
      $sql = "SELECT uname FROM user WHERE uname = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: dashboard.php");
      }else {
         echo '<script>alert("Your Login Name or Password is invalid")</script>';
      }
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <title>Document</title>
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" media="screen,projection" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
  <!-- Nav bar section -->
  <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo"><img src="../img/logo.png" alt=""></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="../index.html">Home</a></li>
        <li><a href="form.php">Forum</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
      <ul class="sidenav" id="mobile-demo">
        <li><a href="../index.html">Home</a></li>
        <li><a href="form.php">Forum</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>

  </nav>

  <!-- Login form section -->
  <div class="container">
      <div class="row">
          <div class="col l4"></div>
          <div class="col l4">
              <div class="">
                  <h3 class="center">Login</h3>
                  <form class="col s12" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                      <div class="row">
                        <div class="input-field col s12">
                          <input placeholder="Username" id="username" name="username" type="text" class="validate">
                          <label for="first_name">Username</label>
                        </div>
                        <div class="input-field col s12">
                          <input id="password" name="password" type="password" class="validate" placeholder="Password">
                          <label for="last_name">Password</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12 center">
                          <input  value="Submit" class="btn" type="submit" class="validate">
                        </div>
                      </div>
                    </form>
              </div>
          </div>
          <div class="col l4"></div>
      </div>
  </div>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>
</body>
</html>