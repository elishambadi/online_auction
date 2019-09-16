<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Register User</title>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
</head>
<body>
<div class="col-lg-5 col-lg-offset-2">
	<h1>Register as a bidder</h1>
	<p>Fill in the form below to register</p>

<!--	Checking if session variable success is set from the controller-->
	<?php if (isset($_SESSION['success'])) { ?>
		<div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
	<?php }?>

<!--	Echo errors - from controller validation-->
	<?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

	<form action="" method="POST">
		<div class="form-group">
			<label for="username" class="label-default">Username: </label>
			<input type="text" class="form-control" id="username" name="username">
		</div>

		<div class="form-group">
			<label for="email" class="label-default">Email: </label>
			<input type="text" class="form-control" id="email" name="email">
		</div>

		<div class="form-group">
			<label for="password" class="label-default">Password: </label>
			<input type="password" class="form-control" id="password" name="password">
		</div>

		<div class="form-group">
			<label for="password" class="label-default">Confirm password: </label>
			<input type="password" class="form-control" id="password2" name="password">
		</div>

		<div class="form-group">
			<label for="gender" class="label-default">Gender: </label>
			<select class="form-control" name="gender" id="gender">
				<option value="Male">Male</option>
				<option value="Female">Female</option>
			</select>
		</div>

		<div class="form-group">
			<label for="phone" class="label-default">Phone Number: </label>
			<input type="number" class="form-control" name="phone" id="phone">
		</div>

		<div class="text-center">
			<button class="btn btn-primary" name="register">Register</button>
		</div>
	</form>
</div>

<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
</body>
</html>
