<?php 
include "connect.php";
session_start();
if(isset($_SESSION['email'])) 
    #header('location:login.php');

    if(isset($_POST['sub'])) {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $qry = "SELECT * FROM `table1` WHERE  `user_email`='$email' AND `password`='$password';";
        $sql = mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
        if(mysqli_num_rows($sql)>0) {
            $row=mysqli_fetch_assoc($sql);
            $_SESSION['user_id']=$row['user_id'];
            $_SESSION["user"] = $row['user_name'];
            $_SESSION["email"] = $row['user_email'];
            header('location:comment.php');
        } else {
            $warning = "Invalid login";
        }
    
    }
?>
<!DOCTYPE html>
<html>
    <head>
            <title>My News</title>
            <link rel="stylesheet" href="home1.css">
    </head>   
    <body>
       <h3>Login</h3>
        <div class="content">
            <div class="disp">
                <h2>Login</h2>
                <form class="form" method="post" action="">
                Email:<input type="text" name="email">
                <br><br>
                Password:<input type="password" name="password">
                <input type="submit" name="sub" value="Click to Submit">
            </form>
            </div> 
        </div>
    </body>  
</html>