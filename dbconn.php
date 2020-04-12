<?php
	$servername = "localhost";
	$username   = "root";
	$password   = "";
	$dbname     = "user_management";

	//create connection
	$conn=mysqli_connect($servername,$username,$password,$dbname);

	//check connection
	if(!$conn){
		echo "Connection failed: " .mysqli_connect_error();
	}
?>