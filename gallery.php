<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Space2Create - Gallery </title>
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
        <div id="slider" onsubmit="automaticSlide()">
            <div id="main-slider">
                <h1>Chose Your Own Mobile </h1>
                <img src="images/shtrati.jpg" id="slider1">
            </div>
            <div id="arrow">
                 <button id="previous" onclick="previous()"><</button>
                 <button id="next" onclick="next()" >></button>
            </div>
        </div>
    </div>

    <div class="mid-part">
        <h1>Our Gallery</h1>
        <div class="img-gallery">
            <div class="img-gallery1">
                <img  src="images/gallery1.jpg" alt="gallery">
            </div>
            <div class="img-gallery1">
                <img  src="images/gallery2.jpg" alt="gallery">
            </div>
            <div class="img-gallery1">
                <img  src="images/gallery3.jpg" alt="gallery">
            </div>
        </div>

        <div class="img-galleryy">
            <div class="img-gallery2">
                <img  src="images/gallery4.jpg" alt="gallery">
            </div>
            <div class="img-gallery2">
                <img  src="images/gallery5.jpg" alt="gallery">
            </div>
            <div class="img-gallery2">
                <img  src="images/gallery6.jpg" alt="gallery">
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
      
        <script type="text/javascript" src="gallery.js"></script>
</body>
</html>