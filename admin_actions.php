<?php
	include 'dbconn.php';

	$ID 		=$_POST["ID"];
	$BUTTON 	=$_POST["BUTTON"];
	

	// echo $BUTTON;
	// exit();
	if($BUTTON =="UPDATE"){
		$NAME 		=$_POST["NAME"];
		$EMAIL=$_POST["EMAIL"];
		$PASSWORD=$_POST["PASSWORD"];
		$GENDER=$_POST["GENDER"];	
		$ADDRESS=$_POST["ADDRESS"];
		$PHONE_NUMBER=$_POST["PHONE_NUMBER"];
		$QUALIFICATION=$_POST["QUALIFICATION"];

		// echo $ID , $NAME;
		// exit();

		$sql="UPDATE users SET NAME='$NAME',EMAIL='$EMAIL',PASSWORD='$PASSWORD',ADDRESS='$ADDRESS',PHONE_NUMBER='$PHONE_NUMBER',QUALIFICATION='$QUALIFICATION' where ID=$ID";
		
		if(mysqli_query($conn,$sql)){
			echo "<script>
					alert('Record updated successfully');
					window.location.href='admin_viewuser.php';
				  </script>";
		}else{
			echo "Error updating record: " . mysqli_error($conn);
		}	
	}
	else{
		$sql="DELETE FROM users where ID=$ID";

		if(mysqli_query($conn,$sql)){
			echo "<script> alert('Record deleted successfully.');
			      window.location.href='admin_viewuser.php';
			     </script>";
		}else{
				echo "records not deleted";
		}
	}
	mysqli_close($conn);	
?>