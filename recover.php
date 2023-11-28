<?php
    session_start();
    $userId = filter_input(INPUT_POST , "id");
    $email = filter_input(INPUT_POST , "email");
    $secQstn = filter_input(INPUT_POST , "secQstn");
    $secAns = filter_input(INPUT_POST, "secAns");
    $password1 = filter_input(INPUT_POST , "password1");
    $password2 = filter_input(INPUT_POST , "password2");
    
    $host = "localhost";
    $name = "root";
    $password = "";
    $database = "csec";

    $con = new mysqli($host, $name, $password, $database);

    $query1 = "SELECT * FROM `users` WHERE id = '".$userId."'";
    
    $result1= mysqli_query($con ,$query1);
    $row1=mysqli_fetch_assoc($result1);

echo $row1['id'];
echo $row1['email'];
echo $row1['password'];
echo $row1['secQstn'];
echo $row1['secAns'];

if($userId === $row1['id'] && $email === $row1['email'] &&  $secAns === $row1['secAns'] && $password1 === $password2 && $secQstn = $row1['secQstn']){
    $query1 = "UPDATE `users` SET `password`='$password2' WHERE id = '".$userId."'";
    $result1= mysqli_query($con ,$query1);
    header("location:index.php?infoo=changed");
}else{
    header("location:reset.php?info2=notChanged");
}



    
    
    
    
  ?> 
