<?php

include_once 'connection.php';

class User{
    private $user_id;
    private $firstname;
    private $lastname;
    private $phone;
    private $email;
    private $passwordi;

    public function __construct($firstname,$lastname,$phone,$email,$passwordi){
        $this->firstname=$firstname;
        $this->lastname=$lastname;
        $this->phone=$phone;
        $this->email=$email;
        $this->passwordi=$passwordi;
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
    public function getPasswordi(){
        return $this->passwordi;
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
    public function setPasswordi($passwordi){
        $this->passwordi=$passwordi;
    }
}

?>