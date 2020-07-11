<?php

include_once 'connection.php';
include_once 'userModel.php';

class userMapper{
    private $user;
    private $connection;

    public function __construct($user){
        $obj=new connection();
        $this->connection=$obj->getConnection();
        $this->user=$user;
    }

    public function Insert($firstname,$lastname,$phone,$email,$password){
        
            $sql="INSERT INTO users (firstname,lastname,phone,email,password) VALUES (:firstname,:lastname,:phone,:email,:password)";
        
            $statement=$this->connection->prepare($sql);
    
            $statement->bindParam(":firstname",$firstname);
            $statement->bindParam(":lastname",$lastname);
            $statement->bindParam(":phone",$phone);
            $statement->bindParam(":email",$email);
            $statement->bindParam(":password",$password);
    
            $statement->execute();
    }
}

 ?>