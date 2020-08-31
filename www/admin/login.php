<?php include('server.php') ?>
<!DOCTYPE html>

<!-- 
	The main login page, the php logic is contained in the server.php file.
 -->

<html>
<head>
	<title>Admin Sign In</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>

	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username1" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password1">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
	</form>
</body>
</html>