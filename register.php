<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Space2Create - Register</title>
</head>
<body>
    <div class="header">
        <div class="shade5"></div>
        <ul class="navbar">
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="index.php">Home</a>
        </ul>
        <a href="index.php"><p>Space2Create</p></a>
        <div class="register">
            <p class="logintxt">Welcome To <br/>Space2Create</p>
            <img src="images/person.png">
            <form id="registerform" name="registerform" onsubmit="return REGISTERForm()" method="POST">
                <input type="text" placeholder="First Name" name="firstname">
                <input type="text" placeholder="Last Name" name="lastname">
                <input type="number" placeholder="Phone">
                <input type="email" placeholder="Email address" name="email">
                <input type="password" placeholder="Password" name="password">
                <input type="password" placeholder="Confirm Password" name="password2">
                <input type="checkbox" name="emails"  >
                <label  id="label2" for="emails">Yes , I want to recieve emails from Space2Create</label>
                <input id="box"type="checkbox" name="agree">
                <label for="agree" id="agree">I accept the <a href="#"> Terms</a> & <a href="#"> Privacy Policy</a></label>
                <input id="registerbutton" type="submit" value="Register"> 
               </form>
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
                <img class="img-back" src="/images/lamp1.png">
                <img class="img-front" src="/images/lamp2.png">
                </div>
               <div class="secondL">
                <img class="img-back" src="/images/lamp1.png">
                <img class="img-front" src="/images/lamp2.png">
               </div>
               </div>
            </div>
        </div>

        <script src="register.js"></script>
</body>
</html>