<!DOCTYPE html>
<html>
<head>
	<title>View User</title>
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
	<br>
	<div class = "container">
		<div>	
			<h1>&nbsp;USERS
				<button class="btn btn-secondary" style="float: right;" data-toggle="modal" data-target="#ADD">
					<i class="fas fa-user-plus"></i>
					&nbsp;ADD NEW USER
				</button>
			</h1>
			<hr>
		</div>

		<!-- Modal --> 

		<div class = "modal fade" id = "ADD" tabindex = "-1" role = "dialog" aria-labelledby = "ModalLabel" aria-hidden = "true">
			<div class = "modal-dialog" role = "document">
				<div class = "modal-content">
					<div class = "modal-header">
						<h2 class = "modal-title">ADD NEW USER</h2>
						<button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
							<span aria-hidden = "true">&times;</span>
						</button>
					</div>
					<div class = "modal-body">
						<form action = "insert_newuser.php" method = "POST">
							<div class = "form-group">
								<label>NAME</label>
								<input type = "text" class = "form-control" id = "NAME" name = "NAME">
							</div>
							<div class = "form-row">
								<div class = "form-group col-md-6">
									<label>Email</label>
									<input type = "email" class = "form-control" id = "EMAIL" name = "EMAIL">
								</div>
								<div class="form-group col-md-6">
									<label>Password</label>
									<input type = "text" class = "form-control" id = "PASSWORD" name = "PASSWORD">
								</div>
							</div>
							<div class = "form-group">
								<label>GENDER&nbsp;</label>
								<div class = "form-check form-check-inline">
									<input class = "form-check-input" type = "radio" name = "GENDER" value = "MALE">
									<label class = "form-check-label">MALE</label>
								</div>
								<div class = "form-check form-check-inline">
									<input class = "form-check-input" type = "radio" name = "GENDER" value = "FEMALE">
									<label class = "form-check-label">FEMALE</label>
								</div>
							</div>
							<div class = "form-group">
								<label>ADDRESS</label>
								<input type = "text" class = "form-control" id = "ADDRESS" name = "ADDRESS">
							</div>
							<div class = "form-row">
								<div class = "form-group col-md-6">
									<label>PHONE NUMBER</label>
									<input type = "text" class = "form-control" id = "PHONE_NUMBER" name = "PHONE_NUMBER">
								</div>
								<div class = "form-group col-md-6">
									<label>QUALIFICATION</label>
									<input type = "text" class = "form-control" id = "QUALIFICATION" name = "QUALIFICATION">
								</div>
							</div>
							<div class = "modal-footer">
								<input type = "submit" name = "SUBMIT" value = "ADD NEW USER" class = "btn btn-primary">
								<button type = "button" class = "btn btn-secondary" data-dismiss = "modal">Close</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<?php
		include 'dbconn.php';

		$sql = "SELECT * FROM users";
		$result = mysqli_fetch_all(mysqli_query($conn,$sql));
		?>

		<div align = "center" class="table-responsive">
			<table class = "table table-striped">
				<th>ID</th>
				<th>NAME</th>
				<th>EMAIL</th>
				<th>PASSWORD</th>
				<th>GENDER</th>
				<th>ADDRESS</th>
				<th>PHONE&nbsp;NUMBER</th>
				<th>QUALIFICATION</th>
				<th>ACTION</th>

				<?php foreach ($result as $data) { ?>
					<tr>
						<td>
							<?php echo $data["0"];?>
						</td>
						<td>
							<?php echo $data["1"];?>
						</td>
						<td>
							<?php echo $data["2"];?>
						</td>
						<td>
							<?php echo $data["3"];?>
						</td>
						<td>
							<?php echo $data["4"];?>
						</td>
						<td>
							<?php echo $data["5"];?>
						</td>
						<td>
							<?php echo $data["6"];?>
						</td>
						<td>
							<?php echo $data["7"];?>
						</td>
						<td>
							<form action = "admin_update_user.php" method = "POST">
								<input type = "hidden" value = "<?php echo  $data["0"]; ?>" name = "ID">
								<input type = "hidden" id = "NAME" value = "<?php echo  $data["1"];?>" name = "NAME">
								<input type = "hidden" id = "EMAIL" value = "<?php echo  $data["2"];?>" name = "EMAIL">
								<input type = "hidden" id = "PASSWORD" value = "<?php echo  $data["3"];?>" name = "PASSWORD">
								<input type = "hidden" id = "GENDER" value = "<?php echo  $data["4"];?>" name = "GENDER">
								<input type = "hidden" id = "ADDRESS" value = "<?php echo  $data["5"];?>" name = "ADDRESS">
								<input type = "hidden" id = "PHONE_NUMBER" value = "<?php echo  $data["6"];?>" name = "PHONE_NUMBER">
								<input type = "hidden" id = "QUALIFICATION" value = "<?php echo  $data["7"];?>" name = "QUALIFICATION">
								<button type = 'submit' class = 'btn btn-primary btn-sm' value = "EDIT" name = "BUTTON">
									<i class='fas fa-pen'></i>
								</button>
							</form>
							<form action = "admin_actions.php" method = "POST">
								<input type = "hidden" value = "<?php echo  $data["0"];?>" name = "ID">
								<button type = "submit" value = "DELETE" name = "BUTTON" class = 'btn btn-danger btn-sm'  style = "margin-left: 40px; margin-top: -54px; ">
									<i class='fa fa-trash'></i>
								</button>
							</form>		
						</td>
					</tr>
				<?php }?>
			</table>
		</div>	
	</div>
</body>
</html>

