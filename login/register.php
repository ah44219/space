<?php 
    // session_start();

    // if(isset($_SESSION['user_id'])){
    //     header("Location: ../index.php");
    // }

    // require '../includes/connection.php';
    // require '../controller/userController.php';

    // class registerUser{
    //     public function insertUser{

    //     }
    // }

    // if(isset($_POST['submit'])){
    //     $firstname=$_POST['firstname'];
    //     $lastname=$_POST['lastname'];
    //     $phone=$_POST['phone'];
    //     $email=$_POST['email'];
    //     $password=password_hash($_POST['password'], PASSWORD_BCRYPT);

    //     $sql='INSERT INTO users (firstname,lastname,phone,email,password,roli) VALUES (:firstname,:lastname,:phone,:email,:password)';
    //     $query=$pdo->prepare($sql);
    //     $query->bindParam('firstname',$firstname);
    //     $query->bindParam('lastname',$lastname);
    //     $query->bindParam('phone',$phone);
    //     $query->bindParam('email',$email);
    //     $query->bindParam('password',$password);

    //     if($query->execute()){
    //         echo "Jeni Regjistruar me Sukses !";
    //     }else{
    //         echo "Regjistrimi Deshtoi";
    //     }
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Space2Create - Register</title>
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
        <div class="register">
            <p class="logintxt">Welcome To <br/> Space2Create</p>
            <img src="../images/user.png">
            <form id="registerform" name="registerform" method="POST" action="../view/insertUserView.php">
                <input type="text" placeholder="First Name" name="firstname">
                <input type="text" placeholder="Last Name" name="lastname">
                <input type="number" placeholder="Phone" name ="phone">
                <input type="email" placeholder="Email address" name="email">
                <input type="password" placeholder="Password" name="passwordi">
                <input type="password" placeholder="Confirm Password" name="passwordi2">
                <input type="checkbox" name="emails">
                <label for="emails">Yes , I want to recieve emails from Space2Create</label>
                <input id="box"type="checkbox" name="agree">
                <label for="agree" id="agree">I accept the <a href="#"> Terms</a> & <a href="#"> Privacy Policy</a></label>
                <input id="registerbutton" type="submit" value="register" name="register"> 
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