







<?php
if(!isset($_POST['user'])){
	
 
}
else {
	$pdo = mysqli_connect('Localhost','root','','space');
	if(!$pdo){
			echo "nuk u lidh per arsye:". mysqli_connect_error();
            }
               
	$u=$_POST['user'];
	$p=$_POST['pass'];
	$sql="select email,password from users where  email='$u' and password='$p'";
//==echo $sql;
//die();


	$qry=mysqli_query($pdo,$sql);
	$r=mysqli_num_rows($qry);
	if ($r==0) {
		die("username ose passwordi jan gabim o klloshar h3h3");
    }
    else{
        header('Location: ../index.php');
    }
}
?>
  testo 


<!DOCTYPE html>        

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<center><h1>Mirsevini</h1></center>
</head>
	<body>
		<form method="POST" >
<center>
	<label>Username:</label><input type="text" name="user" id="username" placeholder="Your Username..." required="">
</center><br>
<center>
	<label>Password:</label><input type="password" name="pass" id="pass" placeholder="Your Password..." required=""></center><br>
<center>
<button type="submit">login</button>
</center><br>
<center><a href="signup.php">Sign Up</a>
</center>
		</form>
	</body>

</html>