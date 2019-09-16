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
	<h1>Bidders Panel</h1>

	<!--	Checking if session variable success is set from the controller-->
	<?php if (isset($_SESSION['success'])) { ?>
		<div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
	<?php }?>

	<h2>Hello <?php echo $_SESSION['username']; ?></h2>

	<h2>Welcome to Keysian Bidding.</h2>

	<br><br>

	<a href="<?php echo base_url()?>index.php/auth/logout">Logout</a>
</div>

<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
</body>
</html>
