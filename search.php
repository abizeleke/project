<?php
    $host = "localhost";
    $name = "root";
    $password = "";
    $database = "csec";

    $con = new mysqli($host, $name, $password, $database);

    $id = filter_input(INPUT_POST , "search");
    $qu= "SELECT * FROM `users` where `id` = " ."'$id'" ;
    $result= mysqli_query($con ,$qu);
    $row=mysqli_fetch_assoc($result);
    if($row){
        header("location:admin.php?msg4=$id");
    }
    else{
        header("location:admin.php?msg5=notexist"); 
    }
   
   
    
?>
