<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Space2Create - Login </title>
</head>
<body>
    <div class="header">
        <ul class="navbar">
            <li><a href="login.php">Log In</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="index.php">Home</a></li>
        </ul>
        <a href="index.php"><p>Space2Create</p></a>
        
        <div class="login-bar"></div>
        <div class="login">
            <h1 style="font-size:42px;">Login</h1><br></br>
            <form id="loginForm" name="loginForm" method="POST">
                <img src="images/person.png" alt="person"><br></br>
                <div id="login-form">
                <h3 style="padding-bottom:5px;">Email:</h3>
                <input type="email" name="email" placeholder="Enter Your Email"><br></br>
                <h3 style="padding-bottom:5px;">Password:</h3>
                <input type="password" name="password" placeholder="Enter Your Password"><br></br>
                <input id="login-submit" type="submit" name="submit" value="Login" ><br></br>
                <a href="#">Lost your password?</a>
                <a href="register.html" style="padding-left:20px;">Don't have an account?</a>    
                </div>
            </form>
        </div>
        </div>
    </div>
    


        <!-- Footeri -->
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
                <img class="img-back" src="images/lamp1.png">
                <img class="img-front" src="images/lamp2.png">
                </div>
               <div class="secondL">
                <img class="img-back" src="images/lamp1.png">
                <img class="img-front" src="images/lamp2.png">
               </div>
               </div>
            </div>
        </div> -->
    
        <script src="login.js"></script>
</body>
</html>