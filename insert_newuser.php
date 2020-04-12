<?php
		include 'dbconn.php';

		$NAME          = $_POST["NAME"];
		$EMAIL         = $_POST["EMAIL"];
		$PASSWORD      = $_POST["PASSWORD"];
		$GENDER        = $_POST["GENDER"];
		$ADDRESS       = $_POST["ADDRESS"];
		$PHONE_NUMBER  = $_POST["PHONE_NUMBER"];
		$QUALIFICATION = $_POST["QUALIFICATION"];

		$sql = "INSERT INTO users (NAME ,  EMAIL ,  PASSWORD ,  GENDER ,  ADDRESS ,  PHONE_NUMBER ,  QUALIFICATION) 
		                  VALUES('$NAME','$EMAIL','$PASSWORD','$GENDER','$ADDRESS','$PHONE_NUMBER','$QUALIFICATION')";

		if(mysqli_query($conn,$sql)){
			echo "<script>
		      alert('New record inserted successfully');
			  window.location.href='admin_viewuser.php';
			  </script>";
		}
		else{
			echo "Error updating record: " . mysqli_error($conn);
		}
	
		mysqli_close($conn);
?>