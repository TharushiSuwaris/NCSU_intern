<?php
   include('session.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <nav class="blue"> <!-- navbar content here  -->
        <a href="#" data-target="slide-out" class="sidenav-trigger " style="display: block;"><i class="material-icons">menu</i></a>
        <a href="logout.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
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
                        $uname = $row['uname'];
                        $password = $row['password'];
                        $fno = $row['fno'];
                        $remarks = $row['remarks'];
                        $active = $row['active'];
                        $utype = $row['utype'];

                        echo "<tr>
                                <td> $uname </td>
                                <td> $password </td>
                                <td> $fno </td>
                                <td> $remarks </td>
                                <td> $active </td>
                                <td> $utype </td>
                                <td> <a class=\"waves-effect waves-light btn\">Edit</a> </td>
                            </tr>";
                    }
                    $result->free();
                }
            ?>
        </tbody>
    </table>


  <!-- <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>

<!-- Hello Super Admin -->
</body>
</html>