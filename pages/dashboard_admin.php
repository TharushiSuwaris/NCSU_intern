<?php
   include('session.php');

   if($_SERVER["REQUEST_METHOD"] == "POST") {
        $myusername = mysqli_real_escape_string($db,$_POST['username']);
        $mypassword = mysqli_real_escape_string($db,$_POST['password']);
        $myremarks = mysqli_real_escape_string($db,$_POST['remarks']); 
        $myfno = mysqli_real_escape_string($db,$_POST['facultynumber']);
        $active = mysqli_real_escape_string($db,$_POST['active']);
        $utype = mysqli_real_escape_string($db,$_POST['usertype']);

        // echo $_POST['username'];
        // echo $_POST['password'];
        // echo $_POST['facultynumber'];
        // echo $_POST['remarks'];

        $sql = "INSERT INTO `user` (`uname`, `password`, `fno`, `remarks`, `active`, `utype`) VALUES ('$myusername', '$mypassword', '$myfno', '$myremarks', '$active', '$utype');";

        if(mysqli_query($db,$sql)){
            echo '<script>alert("New record created successfully")</script>';
        }
        else{
            echo '<script>alert("Error occured while entering data")</script>';
        }
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Document</title>
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
    <nav class="blue"> <!-- navbar content here  -->
        <a href="#" data-target="slide-out" class="sidenav-trigger " style="display: block;"><i class="material-icons">menu</i></a>
        <a href="logout.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
        <a href="#addUser" class="btn btn-info btn-lg modal-trigger">
          <span class="glyphicon glyphicon-log-out"></span> Add User
        </a>
    </nav>
    <!-- <nav>
        <div class="nav-wrapper">
        <form>
            <div class="input-field">
            <input id="search" type="search" required>
            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
            </div>
        </form>
        </div>
    </nav> -->

    <ul id="slide-out" class="sidenav">
        <li><div class="user-view">
        <div class="background">
            <img src="https://www.citizencider.com/wp-content/uploads/2019/01/placeholder.jpg">
        </div>
        <a href="#user"><img class="circle" src="https://montgomeryii.com/wp-content/uploads/2019/01/Employee-Placeholder-Image.jpg"></a>
        <a href="#name"><span class="white-text name">John Doe</span></a>
        <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
        </div></li>
        <li><a href="form.php"><i class="material-icons">cloud</i>First Link With Icon</a></li>
        <li><a href="#!">Second Link</a></li>
        <li><div class="divider"></div></li>
        <li><a class="subheader">Subheader</a></li>
        <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    </ul>

    <table class="centered highlight responsive-table">
        <thead>
            <tr>
                <th>User name</th>
                <th>Password</th>
                <th>Faculty number</th>
                <th>Remarks</th>
                <th>Active</th>
                <th>User type</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $sql = "SELECT * from user";
                $result = mysqli_query($db,$sql);
                $count = mysqli_num_rows($result);

                if($count>0){
                    while ($row = $result->fetch_assoc()){
                        $userid = $row['uno'];
                        $uname = $row['uname'];
                        $password = $row['password'];
                        $fno = $row['fno'];
                        $remarks = $row['remarks'];
                        $active = $row['active'];
                        $utype = $row['utype'];
            ?>
                        <tr>
                            <td> <?php echo "$uname" ?> </td>
                            <td> <?php echo "$password" ?> </td>
                            <td> <?php echo "$fno" ?> </td>
                            <td> <?php echo "$remarks" ?> </td>
                            <td> <?php echo "$active" ?> </td>
                            <td> <?php echo "$utype" ?> </td>
                            <td><a href="delete-process.php?userid=<?php echo $userid; ?>" class="waves-effect waves-light btn">Delete</a></td>
                        </tr>
            <?php            
                    }
                    $result->free();
                }
            ?>
        </tbody>
    </table>
    <div class="modal" id="addUser">
        <div class="modal-content">
            <h4> Add User</h4>
            <form class="col s12" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                
                <div class="input-field inline">
                    <input placeholder="Jonathan12" id="username" name="username" type="text" class="validate" required>
                    <label for="username">Username</label>
                </div>

                <div class="input-field inline">
                    <input id="password" name="password" type="password" class="validate" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>

                <div class="input-field inline">
                    <input id="fno" name="facultynumber" type="number" class="validate" placeholder="1 - 11" min=1 max=11 required>
                    <label for="fno">Fac. No</label>
                </div>

                <div class="input-field inline">
                    <input id="active" name="active" type="number" class="validate" placeholder="0 or 1" min=0 max=1 required>
                    <label for="active">Active</label>
                </div>

                <div class="input-field inline">
                    <input id="usertype" name="usertype" type="text" class="validate" placeholder="">
                    <label for="usertype">User Type</label>
                </div>
                
                <div class="row">
                    <div class="input-field col s6">
                        <input id="remarks" name="remarks" type="text" class="validate">
                        <label for="remarks">Remarks</label>
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

    <!-- <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a> -->
    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
            $('.modal').modal();
    });
    </script>

<!-- Hello Super Admin -->
</body>
</html>