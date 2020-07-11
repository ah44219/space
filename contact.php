<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Space2Create - Contact Us </title>
</head>
<body>
    <div class="header" style="height:1000px;">
        <ul class="navbar">
            <li><a href="login.php">Log In</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="index.php">Home</a></li>
        </ul>
        <a href="index.php"><p>Space2Create</p></a>
        
        <div class="contact-bar"></div>
        <div class="main-contact">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d752303.6699447088!2d20.89932177364182!3d42.56195543085221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549d6b5ba50e51%3A0x8c570f3668bd7ec4!2sBINNI%20-%20Prishtin%C3%AB!5e0!3m2!1sen!2s!4v1589226775945!5m2!1sen!2s" 
            width="550" height="600" frameborder="0" style="border:0;position: absolute;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>

            <h1 style="font-size:42px;">Contact Us</h1><br></br>
            <form id="contact-idform" name="ContactForm" onsubmit="return contactForm()">
                <img src="images/person.png" alt="contact"><br></br>
                <div id="contact-form">
                <div id="error"></div>
                <label for="Email" style="font-size:26px;font-weight: bold;padding:10px;">Email:</label>
                <input id="email" type="text" name="email" placeholder="Enter Your Email" style="margin-left:50px;padding-left:10px;" ><br></br>
                <label for="name" style="font-size:26px;font-weight: bold;padding:10px;">Full Name:</label>
                <input id="fullName" type="text" name="name" placeholder="Enter Your Full Name" style="padding-left:10px;" ><br></br>
                <label style="font-size:26px;font-weight:bold;padding:10px;position: absolute;">Message:</label>
                <textarea id="textarea" name="textarea" rows="5" cols="52" style="padding:10px;margin-left:145px;border:1px solid #FFF407;" placeholder="Enter more than 20 characters"></textarea><br></br>
                <input id="contact-submit" type="submit" name="submit" value="Send Message"><br></br>
                <a href="#" style="margin-left:250px;">Have any questions?</a>   
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
        </div>

        <script type="text/javascript" src="contact.js"></script>
      
</body>
</html>