<?php
 session_start();
 $host = "localhost";
 $name = "root";
 $password = "";
 $database = "csec";

 $con = new mysqli($host, $name, $password, $database);

 $userId = filter_input(INPUT_POST , "userId");
 $password1 = filter_input(INPUT_POST , "password");

 if($userId === "admin" || $userId === "Admin"){
    $query1 = "SELECT * FROM `admin` "; 
    $result1= mysqli_query($con ,$query1);
    $row1=mysqli_fetch_assoc($result1); 

    if($password1 === $row1['password']){

        $_SESSION['admin'] ="admin";
        header("location:admin.php");
    }
    
 }else{

    $query = "SELECT `no`, `fullName`, `id`, `department`, `year`, `phoneNo`, `email`, `password`, `secQstn`, `secAns` FROM `users` WHERE id = " ."'$userId'" . "and password = " . "'$password1'" ;
    $result= mysqli_query($con ,$query);
    $row=mysqli_fetch_assoc($result);

    $query3 = "SELECT * FROM unapproved WHERE id = '".$userId."' ";
    $result3= mysqli_query($con ,$query3);

    if($row3=mysqli_fetch_assoc($result3)){
        $id3 = $row3['id'];
        if($row3['id'] === $userId && $password1 === $row3['password'] ){
            header("location:index.php?inf3=pendding");
        }
    }
    else if($row){
        $_SESSION['userId']=$userId;
        header("location:user.php");
    }
    else{
        header("location:index.php?msg=invalid");
    }
    
 }

 


?> 
<!--$
else if($row){
        $_SESSION['userId']=$userId;
        header("location:user.php");
    }
    else{
        header("location:index.php?msg=invalid");
    }

query1= "SELECT * FROM `unapproved` where id = " . "'$id'" ;


$result= mysqli_query($con ,$query1);
$row=mysqli_fetch_assoc($result);

    $fullName = $row['fullName'];
    $id = $row['id'];
    $phoneNo = $row['phoneNo'];
    $email = $row['email'];
    $userPassword = $row['password'];
    $department = $row['department'];
    $year = $row['year'];
    $secQstn = $row['secQstn'];
    $secAns =$row['secAns'];


    $query2="INSERT INTO `users`(`fullName`, `id`, `department`, `year`, `phoneNo`, `email`, `password`, `secQstn`, `secAns`) VALUES ('$fullName','$id','$department','$year','$phoneNo','$email','$userPassword',' $secQstn','$secAns') ";

    $result= mysqli_query($con ,$query2);

    $query3 = "DELETE FROM `unapproved`where id = " . "'$id'";
    $result= mysqli_query($con ,$query3);


    header("location:admin.php?msg=approved")
-->

