<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="topbar">
        <div class="div1">
            <p>CSEC-ASTU</p>
        </div>      
        <div class="div2">       
            <a href="index.php"> <button> log in </button> </a>
        </div>    
    </div>
    <section>
        <form action="signup.php" method="POST">
            <h2>Sign in</h2>
            
            <?php
                if(isset($_GET['inf'])){
                    $msg = $_GET['inf'];
                    if($msg = "invalidId"){
                        ?>
                            <h4 class="h5">The Id is already registered</h4>
                        <?php
                    }
                }
            ?>
            <?php
                if(isset($_GET['inf2'])){
                    $msg2 = $_GET['inf2'];
                    if($msg2 = "invalidEmail"){
                        ?>
                            <h4 class="h5">The Email is already registered</h4>
                        <?php
                    }
                }
            ?>
            <?php
                if(isset($_GET['inf3'])){
                    $msg3 = $_GET['inf3'];
                    if($msg2 = "pendding"){
                        ?>
                            <h4 class="h5">The id was registered but not approved!</h4>
                        <?php
                    }
                }
            ?>
                
                
            
            
            <input type="text" name="fullName" placeholder="Full name" required>
            <input type="text" name="id" placeholder="Id" required>
            <input type="text" name="phoneNo" placeholder="Phone Number" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <select class="secQstn" name="department">
                <option value="">Select your department</option>
                <option value="CSE">CSE</option>
                <option value="SE">SE</option>
                <option value="ECE">ECE</option>
                <option value="PCE">PCE</option>
            </select>
            <select class="secQstn" name="year">
                <option value="">Select your year</option>
                <option value="2nd">2nd</option>
                <option value="3rd">3rd</option>
                <option value="4th">4th</option>
            </select>
            <select class="secQstn" name="secQstn">
                <option value="family birthday">Select security question</option>
                <option value="family birthday">family Birthday</option>
                <option value="user birthday">your Birthday</option>
                <option value="favorite number">your favorite number</option>
            </select>
            
            <input type="text" name="secAns" placeholder="Answer security question" required> 
            <input class="submit1" type="submit" value="Submit"> 
            <a href="index.php" class="a1">Already have an account?</a>
        </form>
    </section>      
</body>
</html>