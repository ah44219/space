<?php

include_once '../controller/userController.php';
include_once '../models/connection.php';

if(isset($_POST['register'])){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $passwordi=password_hash($_POST['passwordi'], PASSWORD_BCRYPT);
        $view=new insertView();
        $view->insertUser($firstname,$lastname,$phone,$email,$passwordi);
}

class insertView{
    public function insertUser($firstname,$lastname,$phone,$email,$passwordi){
        $controller=new userController();
        $response=$controller->insertUser($firstname,$lastname,$phone,$email,$passwordi);

        if($response ){
            ?>
            <h1>U regjistrua me sukses</h1>
            <?
        }else{
            ?>
            <h1>Nuk u regjistrua me sukses!</h1>
            <?
        }
    }
}

?>