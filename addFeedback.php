<?php
    $host = "localhost";
    $name = "root";
    $password = "";
    $database = "csec";

    $con = new mysqli($host, $name, $password, $database);

    $feedback = filter_input(INPUT_POST , "feedback");
    $name = "tesfaye";


    $qq="INSERT INTO `feedback`(`name`, `feedback`) VALUES ('$name','$feedback')";
    $result = mysqli_query($con, $qq);


    if($result){
        header("location:user.php?inf=submited");
    }
    else{

        header("location:user.php");
    }  


?>