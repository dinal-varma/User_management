<?php
	include 'dbconn.php';

	$EMAIL 	  = $_POST["EMAIL"];
	$PASSWORD = $_POST["PASSWORD"];

	$sql = "SELECT * from admin_login WHERE EMAIL='$EMAIL' AND PASSWORD='$PASSWORD'";
	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result) > 0){
		session_start();
		//set session variables; 
		$_SESSION["EMAIL"]    = "$EMAIL";
		$_SESSION["PASSWORD"] = "$PASSWORD";
		echo "<script>window.location.href='admin_viewuser.php';</script>";
	}
	else{	
		echo "<script>
		      alert('Incorrect email/password. Please try again.');
			  window.location.href='index.php';
			  </script>";	
	}
	mysqli_close($conn);	
?>