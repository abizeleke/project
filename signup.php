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

    $query1 = "SELECT * FROM users WHERE id = '".$id."' ";
    $query2 = "SELECT * FROM users WHERE email = '".$email."' ";
    $query3 = "SELECT * FROM unapproved WHERE id = '".$id."' ";
    $result1= mysqli_query($con ,$query1);
    $result2= mysqli_query($con ,$query2);
    $result3= mysqli_query($con ,$query3);

if($row1=mysqli_fetch_assoc($result1)){
    $id2 = $row1['id'];
    if($id2 === $id){
        header("location:register.php?inf=invalidId");
    }
}
else if($row2=mysqli_fetch_assoc($result2)){
    $email2 = $row2['email'];
    if($email2 === $email){
        header("location:register.php?inf2=invalidEmail");
    }
}
else if($row3=mysqli_fetch_assoc($result3)){
    $id3 = $row3['id'];
    if($id3 === $id){
        header("location:register.php?inf3=pendding");
    }
}
else{
        
    $qq="INSERT INTO `unapproved`(`fullName`, `id`, `department`, `year`, `phoneNo`, `email`, `password`, `secQstn`, `secAns`) VALUES ('$fullName','$id','$department','$year','$phoneNo','$email','$userPassword','$secQstn','$secAns')";

    $result = mysqli_query($con, $qq);
    if($result){
        header("location:index.php?msg1=registerd");
    }
    else{

        header("location:register.php");
    }  
}

    

    
    
    
    
  ?> 
  <!--
    $query2 = "SELECT `no`, `fullName`, `id`, `department`, `year`, `phoneNo`, `email`, `password`, `secQstn`, `secAns` FROM `users` WHERE id = '".$email."'" ;
    $result2= mysqli_query($con ,$query2);
    $row2=mysqli_fetch_assoc($result2);
    $email1 = $row2['email'];
    if($id1===$id){
        header("location:register.php?inf=invalidId");
    }
    else if($email1===$email){
        header("location:register.php?inf=invalidEmail");
    }


    $query = "SELECT width FROM modules WHERE code = '".$module."'";
  -->