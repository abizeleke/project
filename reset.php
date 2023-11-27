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
        <form action="recover.php" method="POST">
            <h2>Recovery</h2>
            
            <?php
                if(isset($_GET['info2'])){
                    $msg = $_GET['info2'];
                    if($msg = "notChanged"){
                        ?>
                            <h4 class="h5">Invalid entry!</h4>
                        <?php
                    }
                }
            ?>       
            
            <input type="text" name="id" placeholder="Id" required>
            <input type="email" name="email" placeholder="Email" required>
            <select class="secQstn" name="secQstn">
                <option value="family birthday">Select security question</option>
                <option value="family birthday">family Birthday</option>
                <option value="user birthday">your Birthday</option>
                <option value="favorite number">your favorite number</option>
            </select>
            
            <input type="text" name="secAns" placeholder="Answer security question" required> 
            <input type="password" name="password1" placeholder="New password" required>
            <input type="password" name="password2" placeholder="confirm password" required>
            <input class="submit1" type="submit" value="Submit">
            <a href="index.php" class="a1">Already have an account?</a>
        </form>
    </section>      
</body>
</html>