<?php
    session_start();
    $host = "localhost";
    $name = "root";
    $password = "";
    $database = "csec";

    $con = new mysqli($host, $name, $password, $database);
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="user.css">
</head>
<body>
    <div class="navigBar">
               
        <div class="div1">
        <img src="icon/csec.jpg" alt="">
            <p>CSEC-ASTU</p>
        </div>
        <div class="div2">
            <button onclick="home1()" > home </button>
            <button onclick="message1()" > message </button>
            <button onclick="feedback1()" > feedback</button>
            <button onclick="profile1()" > profile </button>
  
        </div>
        <div  class="div3">
            <button class="menuBtn" onclick="close1()" >
                <img src="icon/drop-down-menu.png" alt="">
            </button> 
        </div>
        <div  class="div4">
            <button class="menuBtn" onclick="close2()" >
                <img src="icon/drop-down-menu.png" alt="">
            </button> 
        </div>

        <div class="dropDown">
            <li>
                <button onclick="home1()" > home </button>
                <button onclick="message1()" > message </button>
                <button onclick="feedback1()" > feedback</button>
                <button onclick="profile1()" > profile </button>
                <button onclick="changepassword1()" > change password </button>
                <a href="index.php"><button>log out</button></a> 
            </li>
            
        </div> 
        <div class="dropDown1">
            <li>
                <button onclick="changepassword1()" >change password</button>
                <a href="index.php"><button>log out</button></a> 
            </li>
            
        </div>    
    </div>

            <!-- HOME -->

<section class="home">

    <div class="wellcome">
        <p>wellcome to csec astu</p>
    </div>
    <div class="events">
        <p class="p0">Upcoming events</p>

        <?php
            $query="SELECT `name`, `place`, `date`, `time`, `description` FROM `events`";

            $result= mysqli_query($con ,$query);
            while($row=mysqli_fetch_assoc($result)) { ?>

            <div class="evnt1">
                <P class="p1"><?php echo $row['name']?></P>
                <span>
                    <p class="p1">Place :</p> &nbsp; <p class="p2"><?php echo $row['place']?></p>
                </span>
                <span>
                    <p class="p1">Date :</p> &nbsp; <p class="p2" ><?php echo $row['date']?></p>
                </span>
                <span>
                    <p class="p1" >Time :</p> &nbsp; <p class="p2"><?php echo $row['time']?></p>
                </span>
                <p class="p1">Description :</p> 
                <p class="p2"><?php echo $row['description']?></p>
            </div>
        <?php
            }
        ?>

        
    </div>    

</section>

            <!-- MESSAGE-->
<section class="message">

<?php 
    if(isset($_GET['inffo'])){
    ?>
        <script>
            const messag1=document.querySelector('.message');
            const hom1=document.querySelector('.home');
            hom1.style.display="none";
            messag1.style.display="flex";
        </script>
    <?php
    }
?>

<div class="message1">
    <div class="viewbox">
    <?php 
        $queryy = "SELECT * FROM `message` " ;
        $resultt= mysqli_query($con ,$queryy);
        while($roww=mysqli_fetch_assoc($resultt)){
    ?>
        <div class="viewbox1">
            <p class="p1"><?php echo $roww['sender']?></p>
            <p class="p2"><?php echo $roww['content']?></p>
            <div><p><?php echo $roww['date']?></p></div>
        </div>
    <?php
        }
    ?>
        
    </div>
    <div class="textbox1">
        <form action="message.php" method="POST">
            <input class="b1" type="text" name="text" placeholder="type here..." required>
            <input class="b2"  type="submit" value="send" >
        </form>        
    </div> 
</div>

</section>

                <!-- FEEDBACK-->
<section class="feedback">
<?php 
if(isset($_GET['inf'])){
    $inf = $_GET['inf'];
    if($inf= "submited"){
        ?>
            <script>
                const fedback=document.querySelector('.feedback');
                const hom2=document.querySelector('.home');
                hom2.style.display="none";
                fedback.style.display="flex";
            </script>
            <P>Submited succesfully!</P>
        <?php
    }
}

?>

    <P>Write your blow</P>
    <div class="box1">
        <form action="addFeedback.php" method="POST">
            <label for="" > feedback </label><input class="description" type="" name="feedback">
            <input class="submit" type="submit" value="Submit">
        </form>
    </div>    
</section>
    <section class="profile">

    <?php 
        if(isset($_GET['inff'])){
            ?>
            <script>
                const prfl=document.querySelector('.profile');
                const hom3=document.querySelector('.home');
                hom3.style.display="none";
                prfl.style.display="flex";
            </script>
            <P class="p">Successfully edited!</P>
            <?php
        }

    ?>

    <?php 
        $userId =  $_SESSION['userId'];
        $quer1 = "SELECT * FROM users WHERE id = '".$userId."' ";
        $rslt1= mysqli_query($con ,$quer1);
        $rw1=mysqli_fetch_assoc($rslt1);

    ?>

    <div class="profile1">
        <div><p class="a1">Full name</p><p class="a2" ><?php echo $rw1['fullName'];?></p></div>
        <div><p class="a1">Id</p><p class="a2" ><?php echo $rw1['id'];?></p></div>
        <div><p class="a1">Department</p> <p class="a2" ><?php echo $rw1['department'];?></p></div>
        <div><p class="a1">Year</p><p class="a2" ><?php echo $rw1['year'];?></p></div>
        <div><p class="a1">Email</p><p class="a2" ><?php echo $rw1['email'];?></p></div>
        <div><p class="a1">Phone number</p><p class="a2" ><?php echo $rw1['phoneNo'];?></p></div>
        <button onclick="edit()">Edit</button>
    </div>
    <div class="profile2">
        <form action="edit.php" method="POST">
        <div><p class="a1">Full name</p><p class="a2" ><input type="text" name="fullName" value="<?php echo $rw1['fullName'];?>"></p></div>
        <div><p class="a1">Department</p><p class="a2" ><input type="text" name="department" value="<?php echo $rw1['department'];?>"></p></div>
        <div><p class="a1">Year</p> <p class="a2" ><p class="a2" ><input type="text" name="year" value="<?php echo $rw1['year'];?>"></p></div>
        <div><p class="a1">Email</p><p class="a2" ><p class="a2" ><input type="email" name="email" value="<?php echo $rw1['email'];?>"></p></div>
        <div><p class="a1">Phone number</p><p class="a2" ><p class="a2" ><input type="text" name="phoneNo" value="<?php echo $rw1['phoneNo'];?>"></p></div>
        <button >Submit</button>
        </form>
    </div>
    </section>

            <!--  CHANGE PASSWORD-->

<section class="changePassword">
    <form action="password.php" method="POST">
            <h2>Change password</h2>
            
            <?php
                if(isset($_GET['info'])){
                    $msg = $_GET['info'];
                    if($msg = "changed"){
                        ?>
                        <script>
                            const changepassword1=document.querySelector('.changePassword');
                            const hom5=document.querySelector('.home');
                            hom5.style.display="none";
                            changepassword1.style.display="flex"
                        </script>
                            <h4 >The password changed successfully!</h4>
                        <?php
                    }
                }
            ?>
            <?php
                if(isset($_GET['info2'])){
                    $msg2 = $_GET['info2'];
                    if($msg2 = "notChanged"){
                        ?>
                            <script>
                                const changepassword2=document.querySelector('.changePassword');
                                const hom6=document.querySelector('.home');
                                hom6.style.display="none";
                                changepassword2.style.display="flex"
                        </script>
                            <h4 class="h5">Invalid entry!</h4>
                        <?php
                    }
                }
            ?>
                
            <input type="email" name="email" placeholder="Email" required>
            <select class="secQstn" name="secQstn">
                <option value="family birthday">Select security question</option>
                <option value="family birthday">family Birthday</option>
                <option value=" user birthday">your Birthday</option>
                <option value="favorite number">your favorite number</option>
            </select>
            <input type="text" name="secAns" placeholder="Answer security question" required>
            <input type="password" name="password1" placeholder="New password" required> 
            <input type="password" name="password2" placeholder="Confirm password" required>
            <input class="submit1" type="submit" value="Submit"> 
        </form>
</section>


<script>
    const home=document.querySelector('.home');
    const message=document.querySelector('.message');
    const feedback=document.querySelector('.feedback');
    const profile=document.querySelector('.profile');
    const changepassword=document.querySelector('.changePassword');
    const dropDown=document.querySelector('.dropDown');
    const dropDown1=document.querySelector('.dropDown1');
    const profil1=document.querySelector('.profile1');
    const profil2=document.querySelector('.profile2');
    
    dropDown1.style.display="none";
            dropDown.style.display="none";
    function home1(){
        if(home.style.display==="flex")
        {}
        else{
            home.style.display="flex";
            message.style.display="none";
            feedback.style.display="none";
            profile.style.display="none";
            changepassword.style.display="none";
            dropDown1.style.display="none";
            dropDown.style.display="none";
        }
    }
    function message1(){
        if(message.style.display==="flex")
        {}
        else{
            home.style.display="none";
            message.style.display="flex";
            feedback.style.display="none";
            profile.style.display="none";
            changepassword.style.display="none";
            dropDown1.style.display="none";
            dropDown.style.display="none";
        }
    }
    function feedback1(){
        if(feedback.style.display==="flex")
        {}
        else{
            home.style.display="none";
            message.style.display="none";
            feedback.style.display="flex";
            profile.style.display="none";
            changepassword.style.display="none";
            dropDown1.style.display="none";
            dropDown.style.display="none";

        }
    }
    function profile1(){
        if(profile.style.display==="flex")
        {}
        else{
            home.style.display="none";
            message.style.display="none";
            feedback.style.display="none";
            profile.style.display="flex";
            changepassword.style.display="none";
            dropDown1.style.display="none";
            dropDown.style.display="none";

        }
    }
    function changepassword1(){
        if(changepassword.style.display==="flex")
        {}
        else{
            home.style.display="none";
            message.style.display="none";
            feedback.style.display="none";
            profile.style.display="none";
            changepassword.style.display="flex";
            dropDown1.style.display="none";
            dropDown.style.display="none";

        }
    }

    function close1(){
        if(dropDown.style.display==="block")
        { 
            dropDown.style.display="none";
        }
        else 
        {
            dropDown.style.display="block";
        }    
    }
    function close2(){
        if(dropDown1.style.display==="block")
        { 
            dropDown1.style.display="none";
        }
        else 
        {
            dropDown1.style.display="block";
        }    
    }
    function edit(){
        profil2.style.display="flex"
        profil1.style.display="none";  
    }
        
    
</script>
</body>
</html>