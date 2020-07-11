<?php

include_once 'connection.php';

class user{
    private $user_id;
    private $firstname;
    private $lastname;
    private $phone;
    private $email;
    private $password;

    public function __construct($firstname,$lastname,$phone,$email,$password){
        $this->firstname=$firstname;
        $this->lastname=$lastname;
        $this->phone=$phone;
        $this->email=$email;
        $this->password=$password;
    }

    public function getFirstName(){
        return $this->firstname;
    }
    public function getLastName(){
        return $this->lastname;
    }
    public function getPhone(){
        return $this->phone;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
   

    public function setFirstName($firstname){
        $this->firstName=$firstname;
    }
    public function setLastName($lastname){
        $this->lastname=$lastname;
    }
    public function setPhone($phone){
        $this->phone=$phone;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function setPassword($password){
        $this->password=$password;
    }
}

?>