<!DOCTYPE html>
<html>
<head>
	<title>User Profile</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/daemonite-material@4.1.1/js/material.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		.card {
	        margin: 0 auto; 
	        float: none;  
	        margin-bottom: 10px;
		}
	</style>	
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
			<h1>&nbsp;PROFILE</h1>
			<hr>
		</div>
		<?php
			session_start();

			include 'dbconn.php';

			$EMAIL    = $_SESSION['EMAIL'];
			$PASSWORD = $_SESSION['PASSWORD'];


			$sql = "SELECT * FROM users WHERE EMAIL = '$EMAIL' AND PASSWORD = '$PASSWORD'";
			$result = mysqli_fetch_all(mysqli_query($conn,$sql));
	    ?>
		<div class="card" style="width: 23rem;" align="center">
  			<div class="card-body">
			<table class="table table-hover table-borderless">
				<?php foreach ($result as $data) { ?>
					<tr>
						<td>
							NAME:
						</td>
						<td>
							<?php echo $data["1"];?>
						</td>
					</tr>
					<tr>
						<td>
							EMAIL:
						</td>
						<td>
							<?php echo $data["2"] ?>
						</td>
					</tr>
					<tr>
						<td>
							PASSWORD:
						</td>
						<td>
							<?php echo $data["3"] ?>
						</td>
					</tr>
					<tr>
						<td>
							GENDER:
						</td>
						<td>
							<?php echo $data["4"] ?>
						</td>
					</tr>
					<tr>
						<td>
							ADDRESS:
						</td>
						<td>
							<?php echo $data["5"] ?>
						</td>
					</tr>
					<tr>
						<td>
							PHONE NUMBER:
						</td>
						<td>
							<?php echo $data["6"] ?>
						</td>
					</tr>
					<tr>
						<td>
							QUALIFICATION:
						</td>
						<td>
							<?php echo $data["7"] ?>
						</td>
					</tr>
					<tr>
						<td>
							<form action="user_update.php" method="POST">
								<input type="hidden" value="<?php echo  $data["0"]; ?>" name="ID">
								<input type="hidden" id="NAME" value="<?php echo  $data["1"];?>" name="NAME">
								<input type="hidden" id="EMAIL" value="<?php echo  $data["2"];?>" name="EMAIL">
								<input type="hidden" id="PASSWORD" value="<?php echo  $data["3"];?>" name="PASSWORD">
								<input type="hidden" id="GENDER" value="<?php echo  $data["4"];?>" name="GENDER">
								<input type="hidden" id="ADDRESS" value="<?php echo  $data["5"];?>" name="ADDRESS">
								<input type="hidden" id="PHONE_NUMBER" value="<?php echo  $data["6"];?>" name="PHONE_NUMBER">
								<input type="hidden" id="QUALIFICATION" value="<?php echo  $data["7"];?>" name="QUALIFICATION">
								<input type='submit' class='btn btn-primary btn' value="EDIT" name="BUTTON">
							</form>	
						</td>
						<td>
							
						</td>
					</tr>
				<?php }?>
			</table>
			
  			</div>
		</div>				
	</div>
	</body>
	</html>