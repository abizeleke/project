<?php
    $host = "localhost";
    $name = "root";
    $password = "";
    $database = "csec";

    $con = new mysqli($host, $name, $password, $database);

    $eventName = filter_input(INPUT_POST , "eventName");
    $place = filter_input(INPUT_POST, "place");
    $date = filter_input(INPUT_POST, "date");
    $time = filter_input(INPUT_POST , "time");
    $description = filter_input(INPUT_POST , "description");

    $qq="INSERT INTO `events`(`name`, `place`, `date`, `time`, `description`) VALUES ('$eventName','$place','$date','$time','$description')";

    $result = mysqli_query($con, $qq);
    if($result){
        header("location:admin.php?msgg5=added");
    }
    else{

        header("location:admin.php?msgg6=notAdded");
    }  


?>