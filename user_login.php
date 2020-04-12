<?php
include 'dbconn.php';

$EMAIL    = $_POST["EMAIL"];
$PASSWORD = $_POST["PASSWORD"];

$sql = "SELECT * FROM users WHERE EMAIL='$EMAIL' AND PASSWORD='$PASSWORD'";
$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result) > 0){
		session_start();
		$_SESSION["EMAIL"]    = "$EMAIL";
		$_SESSION["PASSWORD"] = "$PASSWORD";
		echo "<script>window.location.href='user_profile.php';</script>";
	}
	else{
		echo "<script>
		      alert('Incorrect email/password. Please try again.');
			  window.location.href='index.php';
			  </script>";	
	}
 
 	mysqli_close($conn);	
?>