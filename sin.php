<?php
  
    $fullName = filter_input(INPUT_POST , "fullName");
    $id = filter_input(INPUT_POST, "id");
    $phoneNo = filter_input(INPUT_POST , "phoneNo");
    $email = filter_input(INPUT_POST, "email");
    $userPassword = filter_input(INPUT_POST , "password");
    $department = filter_input(INPUT_POST , "department");
    $year = filter_input(INPUT_POST , "year");
    $secQstn = filter_input(INPUT_POST, "secQstn");
    $secAns = filter_input(INPUT_POST, "secAns");
    
    $host = "localhost";
    $name = "root";
    $password = "";
    $database = "csec";

    $con = new mysqli($host, $name, $password, $database);

    $query1 = "SELECT `no`, `fullName`, `id`, `department`, `year`, `phoneNo`, `email`, `password`, `secQstn`, `secAns` FROM `users` WHERE id = " ."'$id'" ;
    $result1= mysqli_query($con ,$query1);
    $row1=mysqli_fetch_assoc($result1);
    $id1 = $row1['id'];

    $query2 = "SELECT `no`, `fullName`, `id`, `department`, `year`, `phoneNo`, `email`, `password`, `secQstn`, `secAns` FROM `users` WHERE id = " ."'$email'" ;
    $result2= mysqli_query($con ,$query2);
    $row2=mysqli_fetch_assoc($result2);
    $email1 = $row2['email'];

    
    
    
    
  ?> 