<?php

include_once '../controller/userController.php';
include_once '../models/connection.php';

if(isset($_POST['register'])){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $password=password_hash($_POST['password'], PASSWORD_BCRYPT);
        $view=new insertView();
        $view->insertUser($firstname,$lastname,$phone,$email,$password);

}

class insertView{
    public function insertUser($firstname,$lastname,$phone,$email,$password){
        if(!isset($firstname) || empty($firstname) || !isset($lastname) || empty($lastname) || !isset($phone) || empty($phone) ||
         !isset($email) || empty($email) || !isset($password) || empty($password)){

            header("Location: ../login/login.php"); 
            exit();

        }else{
            $controller=new userController();
        $response=$controller->insertUser($firstname,$lastname,$phone,$email,$password);

        if($response){
            ?>
            <h1>U regjistrua me sukses</h1>
            <?
        }else{
            ?>
            <h1>Nuk u regjistrua me sukses!</h1>
            <?
            header("Location: ../index.php"); 
            exit();
        }
        }
    }
}

        

?>