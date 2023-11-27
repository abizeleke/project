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
  <!--
$query1 = "UPDATE `users` SET `password`='$password2' WHERE id = '".$_SESSION['userId']."'";

    $result1= mysqli_query($con ,$query1);

    if($result1){
        header("location:user.php?inff=edited");
    }
    else{
        header("location:user.php");
    }


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

    
  -->