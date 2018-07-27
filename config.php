<?php

$username = "root";
$password = "";
$host = "localhost";
$db_name = "MaLeDiCry_Admin";

$con = mysqli_connect("$host", "$username", "$password", "$db_name");

if(mysqli_connect_errno()){
	echo "Failed to connect to database :".mysqli_connect_errno();
}else{
	echo "";
}

?>