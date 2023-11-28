<?php
    session_start();
    $fullName = filter_input(INPUT_POST , "fullName");
    $phoneNo = filter_input(INPUT_POST , "phoneNo");
    $email = filter_input(INPUT_POST, "email");
    $department = filter_input(INPUT_POST , "department");
    $year = filter_input(INPUT_POST , "year");
    
    $host = "localhost";
    $name = "root";
    $password = "";
    $database = "csec";

    $con = new mysqli($host, $name, $password, $database);
    echo $_SESSION['userId'];
    $query1 = "UPDATE `users` SET `fullName`='$fullName',`department`='$department',`year`='$year',`phoneNo`='$phoneNo',`email`='$email' WHERE id = '".$_SESSION['userId']."'";

    $result1= mysqli_query($con ,$query1);

    if($result1){
        header("location:user.php?inff=edited");
    }
    else{
        header("location:user.php");
    }



    
    
    
    
  ?> 
  
