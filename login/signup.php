<?php 
	include('../includes/connection.php');
	if(isset($_GET['username'])){
    $f=$_GET['firstname'];
    $n=$_GET['lastname'];
    $o=$_GET['phone'];    
	$u=$_GET['username'];
    $p=$_GET['pass'];
	$SQL="insert into users(`firstname`,`lastname`,`phone`,`email`,`password`,`roli`) values('$f','$n','$o','$u','$p',1)";  
	//echo $SQL;

	//die();

	mySqli_Query($pdo,$SQL);

}
//echo "albert";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="GET" id="myform">
        Fisrtname: <input type="text" name="firstname"><br>
        lastname: <input type="text" name="lastname"><br>
        phone: <input type="number" name="phone"><br>
		Username: <input type="text" name="username" ><br>
		Password:<input type="password" name="pass" id="pass1"><br>
		<div id="div7"></div>
		Confirm Password: <input type="password" name="confpass" id="pass2"><br>
		<button type="submit" onclick="valido()">Sign up</button>
		<input type="sumbit" name="" value="sign up" onclick="valido();"></input> 
	</form>



     