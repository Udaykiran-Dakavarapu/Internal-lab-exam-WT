<?php 
include "connect.php";
session_start();

if(isset($_POST['sub'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $qry = "INSERT INTO `table1` ( `user_name`, `user_email`, `password`) VALUES ('$name', '$email', '$password')";
        mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
            <title>News</title>
            <link rel="stylesheet" href="home.css">
    </head>   
    <body>
        <div class="content">
            <div class="disp">
            <h3>Register</h3>
                <form class="form" method="post" action="">
                Name:<input type="text" name="name">
                <br><br>
                Email:<input type="text" name="email">
                <br><br>
                Password:<input type="password" name="password">
                <br><br>
                Retype Password:<input type="text" name="repass">
                <br><br>
                <input type="submit" name="sub" value="Click to Submit">
            </form>
            </div> 
        </div>
    </body>  
</html>