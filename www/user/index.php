<!DOCTYPE html>
<!-- 
	The main user page, it will hold the user registration form to sign up to a newsletter.
 -->
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">

		

   <div class="input-group">
			<label>Name</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
      <div class="input-group">
			<label>Select a Newsletter</label>
			<!-- TODO News letter selection here -->
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>

      <?php
      
      // TODO save subscriber data, id should be generated automatically.

      ?>
				

	</div>	
</body>
</html>