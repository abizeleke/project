<?php
    session_start();

    $oldPassword = filter_input(INPUT_POST , "oldPassword");
    $password1 = filter_input(INPUT_POST , "password1");
    $password2 = filter_input(INPUT_POST , "password2");
    
    $host = "localhost";
    $name = "root";
    $password = "";
    $database = "csec";

    $con = new mysqli($host, $name, $password, $database);
    echo $_SESSION['userId'];

    $query1 = "SELECT * FROM `admin` "; 
    $result1= mysqli_query($con ,$query1);
    $row1=mysqli_fetch_assoc($result1);

    if($oldPassword === $row1['password'] &&  $password1 === $password2 ){
        $query1 = "UPDATE `admin` SET `password`= '$password2' ";
        $result1= mysqli_query($con ,$query1);
        header("location:admin.php?info=changed");
    }else{
        header("location:admin.php?info2=notChanged");
    }

    



    
    
    
    
  ?> 
