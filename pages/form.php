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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
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

  <!-- forum section -->
    <div class="container" style="padding: 5% 0;">
        <div class="row">
            <div class="col l12">
              <form class="col s12" action="upload.php" method="post" enctype="multipart/form-data">
              <div class="row">
                  <div class="input-field col s6">
                    <input id="firstname" type="text" class="validate" name="firstname" required>
                    <label for="firstname">First Name</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="lastname" type="text" class="validate" name="lastname" required>
                    <label for="lastname">Last Name</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="regno" type="text" class="validate" name="regno" required>
                    <label for="regno">Registration Number</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="faculty" type="text" class="validate" name="faculty" required>
                    <label for="faculty">Faculty</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="jobtitle" type="text" class="validate" name="jobtitle" required>
                    <label for="jobtitle">Job Title</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="department" type="text" class="validate" name="department" required>
                    <label for="department">Department</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="email" type="email" class="validate" name="email" required>
                    <label for="email">Email</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <p class="profpic">Profile Picture</p> 
                    <input type="file" name="file" id="file" required>
                    </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input type="submit" name="submit" id="submit" value="Upload">
                    </div>
                </div>
              </div>
            </form>
          </div>
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