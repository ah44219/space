<?php
include_once '../models/userMapper.php';
include_once '../models/userModel.php';

class userController{
    public function insertUser($firstname,$lastname,$phone,$email,$password){
        //Insertimi i userit ne DB
        $user=new User($firstname,$lastname,$phone,$email,$password);
        $userMapper=new userMapper($user);
        $userMapper->Insert($firstname,$lastname,$phone,$email,$password);
        return true;
    }
}
?>