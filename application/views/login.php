<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Login</title>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
</head>
<body>
<div class="col-lg-5 col-lg-offset-2">
	<h1>Bidder Login</h1>
	<p>Enter your credentials to login</p>

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
			<label for="password" class="label-default">Password: </label>
			<input type="password" class="form-control" id="password" name="password">
		</div>


		<div class="text-center">
			<button class="btn btn-primary" name="login" color="purple">Login</button>
		</div>
	</form>
</div>

<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
</body>
</html>
