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