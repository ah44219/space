<?php 
    require 'includes/connection.php';

    if(isset($_GET['id'])){
        $id=$_GET['id'];
    }

    $sql='SELECT * from users WHERE id =:id';
    $query=$pdo->prepare($sql);
    $query->execute(['id'=>$id]);

    $user=$query->fetch();

    
?>