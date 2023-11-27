<?php
 $host = "localhost";
 $name = "root";
 $password = "";
 $database = "csec";

 $con = new mysqli($host, $name, $password, $database);

 $id = $_GET['id'];

    $query3 = "DELETE FROM `unapproved` where id = " . "'$id'";
    $result= mysqli_query($con ,$query3);

    header("location:admin.php?msg1=unapproved
    ")
   
?> 