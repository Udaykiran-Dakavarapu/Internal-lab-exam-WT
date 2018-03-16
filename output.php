<?php 
include "connect.php";
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
            <title>My News</title>
            <link rel="stylesheet" href="home4.css">
    </head>   
    <body>
        <div class="content">
            <div class="disp">
                    <h2>News</h2>
                    <ul class="news-ul">
                    <?php 
                    $qry = "select * from table2";
                    $sql = mysqli_query($conn,$qry) or die("error: ".$qry); 
                    if(mysqli_num_rows($sql)>0) { 
                        while($row=mysqli_fetch_assoc($sql)) { 
                           $imagepath = "uploads/".$row['photo'];
                           $title = $row['title'];
                           $description =  $row['description'];
                           $comment =  $row['comment'];
                           echo "<li>";
                           echo "<img src='uploads/".$row['photo']."'>";
                           echo "<br><br>";
                          echo "<h4>TitleOFNews:</h4>"."<p>$title</p>";
                          echo "<br><br>";
                          echo "<h4>Description:</h4>"."<p>$description</p>";
                          echo "<br>";
                          echo "<h4>Comment:</h4>"."<p>$comment</p>";
                           echo "</li>";
                           echo "<a href='register.php'><button>ADD Comment</button></a>";
                           echo "<br><br>";
                           $qry1 = "select comment from table4";
                           $sql1 = mysqli_query($conn,$qry1);
                           if(mysqli_num_rows($sql)>0){
                           while($row=mysqli_fetch_assoc($sql1)){
                                echo $row['comment']." "."<a href='delete.php'><button>Delete</button></a>";
                                echo "<br>";
                           }
                        } 
                        echo "<br><br>";
                        }
                
                    } else { 
                        echo "<li>No news</li>";
                    }
                    ?>
                    </ul>
            </div>
        </div>
    </body>  
</html>