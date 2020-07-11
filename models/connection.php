<?php
// $pdo = mysqli_connect('Localhost','root','','space');
// if(!$pdo){
//    die("Connection Failed!" .mysqli_connect_error());
// }

class connection{
   private $servername='localhost';
   private $user='root';
   private $password='';
   private $dbname='space';

   public function getConnection(){
      try{
         $connection = new PDO("mysql:host=$servername;dbname=$dbname",$this->user,$this->password);
         $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERR_MODE_EXCEPTION);
         return "sucess";
      }catch(PDOException $e){
         echo $e->getMessage();
         return "GABIM";
      }
      return $connection;
   }
}
?>