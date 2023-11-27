<?php
 $host = "localhost";
 $name = "root";
 $password = "";
 $database = "csec";

 $con = new mysqli($host, $name, $password, $database);

 $id = $_GET['id'];

$query1= "SELECT * FROM `unapproved` where id = " . "'$id'" ;


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

?> 