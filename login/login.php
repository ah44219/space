<?php 
   session_start();

   if(isset($_SESSION['user_id'])){
       header("Location: ../index.php");
   }

   require '../models/connection.php';

   if(isset($_POST['login'])){
       $check=validateLogin($_POST['email'],$_POST['password']);
      
      
   }


   
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Space2Create - Log In</title>
</head>
<body>
    <div class="header" id="header1">
        <div class="shade5"></div>
        <ul class="navigation">
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="../contact.php">Contact</a></li>
            <li><a href="../gallery.php">Gallery</a></li>
            <li><a href="../index.php">Home</a>
        </ul>
        <p>Space2Create</p>
        <div class="info">
            <p class="logintxt">Welcome To <br/> Space2Create</p>
            <img src="../images/user.png">
            <form id="loginform" name="loginForm" method="POST" action="login.php" >
                <input type="email" name="email" placeholder="Username"  >
                <input type="password" name="password" placeholder="Password" >
                <input id="loginbutton" type="submit" value="Log In" name="login" >
            </form>
            <a href="register.php" id="password">Dont Have An Account?</a>
        </div>
        </div>

       <div class="lastpart">
            <div class="shade5"></div>
            <div class="contact">
                <p>Our Address: <br/> 2200 Clarendon Blvd., Suite 1400A <br/> Arlington, VA 22201, USA</p>
                <p id="social">Socials</p>
                <div class="socials">
                    <a id="fb" href="#">Facebook</a>
                    <a id="youtube" href="#">Youtube</a>
                    <a id="ig" href="#">Instagram</a> 
               </div>
               <p id="phone">Phone : <br/> <br/> <a href="#">1-800-901-234</a></p>
               <p id="email">Email: <br/> <br/> <a href="#">info@demolink.org</a> </p>
               <div class="company">
               <p id="logo">Space2Create</p>
                <div class="firstL">
                <img class="img-back" src="../images/lamp1.png">
                <img class="img-front" src="../images/lamp2.png">
                </div>
               <div class="secondL">
                <img class="img-back" src="../images/lamp1.png">
                <img class="img-front" src="../images/lamp2.png">
               </div>
               </div>
            </div>
        </div>

        <!-- <script src="../js/script.js"></script> -->
</body>
</html>