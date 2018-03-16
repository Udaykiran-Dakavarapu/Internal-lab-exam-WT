<?php
include "connect.php";
session_start();
    $qry1 = "select comment from table2";   
    $sql1 = mysqli_query($conn,$qry1);
    $qry = "DELETE FROM `table4` WHERE comment='$qry1';";
    mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
    header('location:output.php');
?>

