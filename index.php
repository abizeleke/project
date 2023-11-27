<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <div class="topbar">
        <div class="div1">
            <img src="icon/csec.jpg" alt="">
            <p>CSEC-ASTU</p>
        </div>      
        <div class="div2">
            <a href="register.php"> <button> Sign in</button> </a>
            <a href="index.php"> <button> Login</button> </a>
            <button onclick="func111()">manual</button>
        </div>    
    </div>
    <section class="login">
        <form action="login.php" method="POST">
            <h2>Login</h2>

            <?php
                if(isset($_GET['inf3'])){
                    $msg = $_GET['inf3'];
                    if($msg = "pendding"){
                        ?>
                            <h3 class="sucess" id="class1"> Your account not approved by Admin!</h3>
                        <?php
                    }
                }
            ?>

            <?php
                if(isset($_GET['msg1'])){
                    $msg = $_GET['msg1'];
                    if($msg = "registerd"){
                        ?>
                            <h3 class="sucess" id="class1">Successfully Registered</h3>
                        <?php
                    }
                }
            ?>

            <?php
                if(isset($_GET['infoo'])){
                    $msg = $_GET['infoo'];
                    if($msg = "changed"){
                        ?>
                            <h3 class="sucess" id="class1">Successfully Changed!</h3>
                        <?php
                    }
                }
            ?>

            <input type="text" name="userId" placeholder="User id" required>
            <input type="password" name="password" placeholder="Password" required>

            <?php
                if(isset($_GET['msg'])){
                    $msg = $_GET['msg'];
                    if($msg = "invalid"){
                        ?>
                            <h4 class="h4">Invalid email or password</h4>
                        <?php
                    }
                }
            ?>
            <input class="submit" type="submit" value="Login">

            <a href="register.php" >Register</a>
            <a href="reset.php">Forgot password?</a>
        </form>
    </section>
    <section class="manual">
        <div class="manual1">

            <p>The project is in web form.</p>
                <p>it has two actors Admin and members.</p>
                <p>members should register and approved by admin in order to login.</p>
                <p>Admin’s username = "admin" and password = "1234"</p>
                <p>admin can Approve and remove users , Post events , Reed feedbacks and Change his password</p>
                <p>Members can , Register and login , Show events , Give feedbacks , Show and update his profile , Communicate with other members through group chat and Change password</p>
                <p>Tesfaye Zeleke</p>
                <p>tesfayezeleke19@gmail.com</p>
                <a href="https://t.me/abi1924">https://t.me/abi1924</a>


        </div>
    </section>
            
<script> 
    const manual=document.querySelector('.manual');
    const login=document.querySelector('.login');


    function func111(){
        if(manual.style.display==="flex")
        {
        }

        else 
        {
            login.style.display="none";
            manual.style.display="flex";
        }
    }
</script>
</body>
</html>