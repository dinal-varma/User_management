<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/daemonite-material@4.1.1/js/material.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
	body{
		background-image: url(https://www.creativecnc.net/images/1-o.jpg);
		background-repeat: no-repeat;
		background-size: auto; 
		height: 200%;
	}
</style>
<body>	
	<div class="container" align="center" style="margin-top: 100px;">
		<h1 >USER MANAGEMENT SYSTEM</h1><br><br>
		<button type="button" class="btn btn-dark btn-lg " data-toggle="modal" data-target="#USER-MODAL">USER LOGIN</button>
		<button type="button" class="btn btn-dark btn-lg " data-toggle="modal" data-target="#ADMIN-MODAL">ADMIN LOGIN</button>
		
	</div>


	<!-- admin modal -->
	<form action="admin_login.php" method="POST">
		<div class="modal fade" id="ADMIN-MODAL" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">ADMIN LOGIN</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">	         
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">EMAIL:</label>
							<input type="text" class="form-control" id="EMAIL" name="EMAIL">
						</div>
						<div class="form-group">
							<label for="message-text" class="col-form-label">PASSWORD:</label>
							<input type="PASSWORD" class="form-control" id="PASSWORD" name="PASSWORD">
						</div>

					</div>
					<div class="modal-footer">
						<input type="submit" value="SUBMIT" name="SUBMIT" class="btn btn-success">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</form>

	<!-- user modal -->
	<form action="user_login.php" method="POST">
		<div class="modal fade" id="USER-MODAL" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">USER LOGIN</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">EMAIL:</label>
							<input type="text" class="form-control" id="EMAIL" name="EMAIL">
						</div>
						<div class="form-group">
							<label for="message-text" class="col-form-label">PASSWORD:</label>
							<input type="PASSWORD" class="form-control" id="PASSWORD" name="PASSWORD">
						</div>
					</div>
					<div class="modal-footer">
						<input type="submit" name="submit" class="btn btn-success">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>

</body>
</html>
