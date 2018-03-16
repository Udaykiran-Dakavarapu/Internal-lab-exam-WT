<!DOCTYPE html>
<?php
include "connect.php";
session_start();
if(isset($_POST['sub'])) {
        $title=$_POST['title'];
        $desc=$_POST['desc'];
        $comment=$_POST['comment'];
        $photo=$_POST['file'];
        $qry = "INSERT INTO `table2` ( `title`, `description`,`photo`,`comment`) VALUES ('$title', '$desc','$photo','$comment')";
        mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
    }
?>
<html>
    <head>
            <title>News</title>
            <link rel="stylesheet" href="home.css">
    </head>   
    <body>
        
        <div class="content">
            <div class="disp">
                <form class="form" method="post" action="">
                Title:<input type="text" name="title">
                <br><br>
                Description:<textarea type="text" name="desc"></textarea>
                <br><br>
                Photo:<input type="file" name="file">
                <br><br>
                comment:<input type"text" name="comment">
                <br><br>
                <input type="submit" name="sub" value="submit">
            </form>
            </div> 
        </div>
    </body>  
</html>