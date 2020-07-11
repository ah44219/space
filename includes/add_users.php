<?php 
    require 'includes/connection.php';
?>

<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $query=$pdo->prepare('SELECT * FROM users WHERE email=:email');

        $query->execute(array('email'=> htmlspecialchars($_POST['email'])));

        $count=$query->rowCount();

        if($count == 0){
             $sql='INSERT INTO users (name, email, password) VALUES (:name, :email, :password)';
             $query=$pdo->prepare($sql);
             $query->bindParam('name',$name);
             $query->bindParam('email',$email);
             $query->bindParam('password',$password);

             $query->execute();
        }else{
            echo "Ky user egziston ne databaz";
        }
        // header('Location: adminDashboard.php');

    }
?>