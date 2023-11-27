<?php
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
    <link rel="stylesheet" href="admin.css">
</head>
<body>

<script>


    approveMembers.style.display==="flex";
</script>

    <div class="navigBar">
               
        <div class="div1">
            <img src="icon/csec.jpg" alt="">
            <p>CSEC-ASTU</p>
        </div>
        <div class="div2">
            <button onclick="func1()" >members</button>
            <button onclick="func2()" > approve members</button>
            <button onclick="func3()" >Add events</button>
            <button onclick="func4()" >feedback</button>
  
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
                <button onclick="func1()" >members</button>
                <button onclick="func2()" > approve members</button>
                <button onclick="func3()" >Add events</button>
                <button onclick="func4()" >feedback</button>
                <button onclick="func5()" >change password</button>
                <a href="index.php"><button >log out</button> </a>
            </li>
            
        </div> 
        <div class="dropDown1">
            <li>
                <button onclick="func5()" >change password</button>
                <a href="index.php"><button >log out</button> </a> 
            </li>
            
        </div>    
    </div>
                         <!-- MEMBERS -->

<section class="members">
<div class="search_result">
                    <form class="search" method="POST" action="search.php">
                        <input type="search" name="search" placeholder="search here" required="">
                    <input class="search_button" type="submit" value="search">

                    </form>
                    <?php
                        if(isset($_GET['msg4'])){
                            $id2 = $_GET['msg4'];
                            $query= "SELECT * FROM `users` where id = " . "'$id2'" ;
                            $result = mysqli_query($con ,$query);
                        while($row=mysqli_fetch_assoc($result)) { 
                            ?>
                            <script>
                                const member1=document.querySelector('.members');
                                member1.style.display="flex";
                            </script>
                                <table>
                        <thead>
                        <tr>
                            <th>Full name</th>
                            <th>User id</th>
                            <th>Department</th>
                            <th>Year</th>
                            <th>Phone number</th>
                            <th>Email</th>
                            <th>Actionl</th>
                        </tr>
                        
                    </thead>
                    <tbody>                      
                        <tr>
                            <td><?php echo $row['fullName'] ?></td>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['department']?></td>
                            <td><?php echo $row['year']?></td>
                            <td><?php echo $row['phoneNo']?></td>
                            <td><?php echo $row['email']?></td>
                            <td class="action">
                                <a href="delete1.php?id=<?php echo $row['id'] ?>"><button>Delete</button></a>   
                            </td>
                        </tr>
                    </tbody>
                </table>
                            <?php    
                        }

                        }

                    ?>
                    
               
        <?php
         if(isset($_GET['msg2'])){
            $msg = $_GET['msg2'];
            if($msg="deleted"){
            ?>
                <script>
                    const member=document.querySelector('.members');
                    member.style.display="flex";
                </script>
                <div class="approved">
                    <P class="approved">delted!</P>
                </div>
    
            <?php
             }
        }
        ?>
        <?php 
            if(isset($_GET['msg5'])){
                $msg5 = $_GET['msg5'];
                if($msg5="notexist")
            ?>
                <script>
                    const member2=document.querySelector('.members');
                    member2.style.display="flex";
                </script>
                <div class="notexist">
                     <P class="notexist">not exist</P>
                </div>
            <?php
            }
        ?>
                 

                 

                </div>
                
                 <table>
                    <thead>
                        <tr>
                            <th>Full name</th>
                            <th>User id</th>
                            <th>Department</th>
                            <th>Year</th>
                            <th>Phone number</th>
                            <th>Email</th>
                            <th>Actionl</th>
                        </tr>
                        
                    </thead>
                    <tbody>

                <?php 

            
                $query11="SELECT `fullName`, `id`, `department`, `year`, `phoneNo`, `email` FROM `users` ";

                $result= mysqli_query($con ,$query11);
                while($row=mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td><?php echo $row['fullName'] ?></td>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['department']?></td>
                        <td><?php echo $row['year']?></td>
                        <td><?php echo $row['phoneNo']?></td>
                        <td><?php echo $row['email']?></td>
                        <td class="action">
                            <a href="delete1.php?id=<?php echo $row['id'] ?>"><button>Delete</button></a>   
                        </td>
                </tr>
                <?php
                }

                ?>
                                            
                    </tbody>
                </table>                
</section>

                     <!--  APPROVE MEMBERS -->
    
<section class=" approveMembers">
<div class="search_result">
            
<?php 
    if(isset($_GET['msg'])){
        $msg = $_GET['msg'];

        if($msg="approved"){
        ?>
            <script>
                const approveMember=document.querySelector('.approveMembers');
                const member3=document.querySelector('.members');
                approveMember.style.display="flex";
                member3.style.display="none";
            </script>
            <div class="approved">
                <P class="approved">Approved successfully!</P>
            </div>

        <?php
         }
        }
         ?>
         <?php
         if(isset($_GET['msg1'])){
            $msg = $_GET['msg1'];
            if($msg="unapproved"){
            ?>
                <script>
                    const approveMember=document.querySelector('.approveMembers');
                    const member4=document.querySelector('.members');
                    approveMember.style.display="flex";
                    member4.style.display="none";
                </script>
                <div class="approved">
                    <P class="approved">cancelled successfully!</P>
                </div>
    
            <?php
             }
    }
?>          

        </div>
        
            <table>
            <thead>
                <tr>
                    <th>Full name</th>
                    <th>Id</th>
                    <th>Department</th>
                    <th>Year</th>
                    <th>Phone No</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                
            </thead>
            <tbody>
            
            <?php 

            
                $query1="SELECT `fullName`, `id`, `department`, `year`, `phoneNo`, `email` FROM `unapproved` ";

                $result= mysqli_query($con ,$query1);
                while($row=mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td><?php echo $row['fullName'] ?></td>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['department']?></td>
                        <td><?php echo $row['year']?></td>
                        <td><?php echo $row['phoneNo']?></td>
                        <td><?php echo $row['email']?></td>
                        <td class="action">
                            <a href="approve.php?id=<?php echo $row['id'] ?>"><button>Approve</button></a>

                            <a href="delete.php?id=<?php echo $row['id'] ?>"><button>Denie</button></a>
                            
                        </td>
                </tr>
            <?php
                }

            ?>
                
            </tbody>
        </table>
</section>

                <!--  ADD EVENTS -->

<section class="addEvents">
    <P>Add events blow</P>
        <?php
                if(isset($_GET['msgg5'])){
                    $msg = $_GET['msgg5'];
                    if($msg = "added"){
                        ?>
                        <script>
                            const addEvents2=document.querySelector('.addEvents');
                            const member9=document.querySelector('.members');
                            addEvents2.style.display="flex"
                            member9.style.display="none";
                        </script>
                            <h4 >The event added successfully!</h4>
                        <?php
                    }
                }
            ?>
            <?php
                if(isset($_GET['msgg6'])){
                    $msg = $_GET['msgg6'];
                    if($msg = "notAdded"){
                        ?>
                        <script>
                            const addEvents1=document.querySelector('.addEvents');
                            const member8=document.querySelector('.members');
                            addEvents1.style.display="flex"
                            member8.style.display="none";
                        </script>
                            <h4 >The not event added !</h4>
                        <?php
                    }
                }
            ?>

    <div class="box1">
        <form action="addEvents.php" method="POST">
            <label for="" > Event name</label><input type="text" name="eventName">
            <label for="" > Place</label><input type="text" name="place">
            <label for="" > date </label><input type="date" name="date">
            <label for="" > Time </label><input type="time" name="time">
            <label for="" > Description </label><input class="description" type="" name="description">
            <input class="submit" type="submit" value="Add">
        </form>
    </div>    

</section>

                <!-- CHANGE PASSWORD-->
<section class="changePassword">
    <form action="password1.php" method="POST">
            <h2>Change password</h2>
            
            <?php
                if(isset($_GET['info'])){
                    $msg = $_GET['info'];
                    if($msg = "changed"){
                        ?>
                        <script>
                            const changepassword1=document.querySelector('.changePassword');
                            const member5=document.querySelector('.members');
                            changepassword1.style.display="flex"
                            member5.style.display="none";
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
                                const member6=document.querySelector('.members');
                                changepassword2.style.display="flex"
                                member6.style.display="none";
                        </script>
                            <h4 class="h5">Invalid entry!</h4>
                        <?php
                    }
                }
            ?>
                
            <input type="password" name="oldPassword" placeholder="Old password" required>
            <input type="password" name="password1" placeholder="New password" required> 
            <input type="password" name="password2" placeholder="Confirm password" required>
            <input class="submit1" type="submit" value="Submit"> 
        </form>
</section>

    <!--FEEDBACK-->


<section class="feedback">
<div class="feedback1">
<?php 
        $quer = "SELECT * FROM `feedback`";
        $result= mysqli_query($con ,$quer);

        while( $row=mysqli_fetch_assoc($result)){
            ?>
                <div class="box1">
        <div class="box11"><?php echo $row['name'];?></div>
        <div class="content"><?php echo $row['feedback'];?></div>
    </div>
            
            <?php
        }
       
    ?>
</div>
    
</section>

    <script>
        const members=document.querySelector('.members');
        const approveMembers=document.querySelector('.approveMembers');
        const addEvents=document.querySelector('.addEvents');
        const changePassword=document.querySelector('.changePassword');
        const feedback=document.querySelector('.feedback');
        const navigBar=document.querySelector('.navigBar');
        const dropDown=document.querySelector('.dropDown');
        const dropDown1=document.querySelector('.dropDown1');  

    function func1(){
        if(members.style.display==="flex")
        { }
        else 
        {
            addEvents.style.display="none";
            changePassword.style.display="none";
            feedback.style.display="none";
            approveMembers.style.display="none";
            members.style.display="flex";
            dropDown1.style.display="none";
            dropDown.style.display="none";
        }
    }
    function func2(){
        if(approveMembers.style.display==="flex")
        { }
        else 
        {
            members.style.display="none";
            changePassword.style.display="none";
            feedback.style.display="none";
            addEvents.style.display="none";
            approveMembers.style.display="flex";
            dropDown1.style.display="none";
            dropDown.style.display="none";
        }
    }
    function func3(){
        if(addEvents.style.display==="flex")
        { }
        else 
        {
            members.style.display="none";
            changePassword.style.display="none";
            feedback.style.display="none";
            approveMembers.style.display="none";
            addEvents.style.display="flex";
            dropDown1.style.display="none";
            dropDown.style.display="none";
        }
    }
    function func4(){
        if(feedback.style.display==="flex")
        { }
        else 
        {
            addEvents.style.display="none";
            members.style.display="none"; 
            changePassword.style.display="none";
            approveMembers.style.display="none";
            feedback.style.display="flex";
            dropDown1.style.display="none";
            dropDown.style.display="none";
        }
    }
    function func5(){
        if(changePassword.style.display==="flex")
        { }
        else 
        {
            addEvents.style.display="none";
            members.style.display="none"; 
            feedback.style.display="none";
            approveMembers.style.display="none";
            changePassword.style.display="flex";
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
    </script>
</body>
</html>