<!DOCTYPE html>
<?php
include "connect.php";
session_start();

if(isset($_POST['submit'])) {
        $name=$_POST['comment'];
        $qry = "INSERT INTO `table4` ( `comment`) VALUES ('$name')";
        mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
        header('location:output.php');
    }
?>
<html>
    <head>
            <title>My News</title>
            <link rel="stylesheet" href="home.css">
    </head>   
    <body>
       
        <div class="content">
            <div class="disp">
                <h2>Login</h2>
                <form class="form" method="post" action="">
                Comment:<input type="text" name="comment">
                <br><br>
                <input type="submit" name="submit" value="Click to Submit">
            </form>
            </div> 
        </div>
    </body>  
</html>