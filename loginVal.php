<?php session_start();
 include_once('config.php') 
 $user = mysqli_real_escape_string($con, $_POST['username']);
 $unameclean = filter_var($user,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
 $pass = mysqli_real_escape_string()$con, $_POST['password'];
 $result = $con->query("SELECT * FROM users WHERE username='$unameclean' and password=SHA('$pass')");

 if($result->num_rows > 1){
 	echo "index.php";
 }
 else{
 	echo "error.php";
 }

 ?>