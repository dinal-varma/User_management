<?php
	include 'dbconn.php';

	$ID 	 		= $_POST["ID"];
	$BUTTON 		= $_POST["BUTTON"];
	$NAME 			= $_POST["NAME"];
	$EMAIL 			= $_POST["EMAIL"];
	$PASSWORD 		= $_POST["PASSWORD"];
	$GENDER 		= $_POST["GENDER"];
	$ADDRESS		= $_POST["ADDRESS"];
	$PHONE_NUMBER   = $_POST["PHONE_NUMBER"];
	$QUALIFICATION  = $_POST["QUALIFICATION"];

	if($BUTTON =="UPDATE"){		

		$sql="UPDATE users SET NAME='$NAME',
							   EMAIL='$EMAIL',
							   PASSWORD='$PASSWORD',
							   GENDER='$GENDER',
							   ADDRESS='$ADDRESS',
							   PHONE_NUMBER='$PHONE_NUMBER',
							   QUALIFICATION='$QUALIFICATION' where ID=$ID";
		
		if(mysqli_query($conn,$sql)){
			echo "<script>
					alert('Record updated successfully');
					window.location.href='user_profile.php';
				  </script>";
		}
		else{
			echo "Error updating record: " . mysqli_error($conn);
		}
	}
	mysqli_close($conn);	
?>