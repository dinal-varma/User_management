<?php
include 'dbconn.php';

$ID             = $_POST["ID"];
$NAME           = $_POST["NAME"];
$EMAIL          = $_POST["EMAIL"];
$PASSWORD       = $_POST["PASSWORD"];
$GENDER 	    = $_POST["GENDER"];
$ADDRESS 		= $_POST["ADDRESS"];
$PHONE_NUMBER   = $_POST["PHONE_NUMBER"];
$QUALIFICATION  = $_POST["QUALIFICATION"];

?>

<!DOCTYPE html>
<html>
<head>
	<title> Admin Update User</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/daemonite-material@4.1.1/js/material.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="index.php"><h2>User Management</h2></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
		    <a class="form-inline my-2 my-lg-0" href="logout.php" style="color:black;text-decoration: none;">		
		    	<button class = "btn btn-light my-2 my-sm-0">LOGOUT</button>
			</a>  
		  </div>
		</nav>
	</div> 
	<div class="container">
		<div>	
			<br>
			<h1>&nbsp;UPDATE USER</h1>
			<hr>
		</div>
		<div align="center">
			<div class="card text-left" style="width: 23rem;">
				<div class="card-body">
					<form action="admin_actions.php" method="POST">
						<div class="form-row">
							<div class="form-group col-md-6">
								<label =>ID</label>
								<input type="text" class="form-control" id="ID" value="<?php echo $ID?>" name="ID" readonly>
							</div>
							<div class="form-group col-md-6">
								<label>NAME</label>
								<input type="text" class="form-control" id="NAME" value="<?php echo  $NAME;?>" name="NAME">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label>EMAIL</label>
								<input type="text" class="form-control" id="EMAIL" value="<?php echo  $EMAIL;?>" name="EMAIL">
							</div>
							<div class="form-group col-md-6">
								<label>PASSWORD</label>
								<input type="text" class="form-control" id="PASSWORD" value="<?php echo  $PASSWORD;?>" name="PASSWORD">
							</div>
						</div>
						<div class="form-group">
							<label>GENDER</label>
							&nbsp;&nbsp;&nbsp;<input type="radio" name="GENDER" id="GENDER" value="MALE" <?php echo ($GENDER=='MALE')?'
							checked':'' ?> >&nbsp;MALE   &nbsp;&nbsp;&nbsp;
							<input type="radio" name="GENDER" id="GENDER" value="FEMALE" <?php echo ($GENDER=='FEMALE')?'checked':'' ?> >&nbsp;FEMALE 
						</div>
						<div class="form-group">
							<label>ADDRESS</label>
							<input type="text" class="form-control" id="ADDRESS" value="<?php echo  $ADDRESS;?>" name="ADDRESS">
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label>PHONE NUMBER</label>
								<input type="text" class="form-control" id="PHONE_NUMBER" value="<?php echo  $PHONE_NUMBER;?>" name="PHONE_NUMBER">
							</div>
							<div class="form-group col-md-6">
								<label>QUALIFICATION</label>
								<input type="text" class="form-control" id="QUALIFICATION" value="<?php echo  $QUALIFICATION;?>" name="QUALIFICATION">
							</div>
						</div>
						<button class="btn btn-primary"><a href="admin_viewuser.php" style="color: white;text-decoration: none;">BACK </a></button>
						<input type="submit" value="UPDATE" name="BUTTON" class="btn btn-primary btn">
					</form>	
					
				</div>
			</div>
		</div>
	</div>

</body>
</html>
