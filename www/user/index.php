<!DOCTYPE html>
<!-- 
	The main user page, it will hold the user registration form to sign up to a newsletter.
	//used this tutorial for the check boxes 
	//https://html.form.guide/php-form/php-form-checkbox/
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
			<!-- TODO News letter selection here 
		
		Please note that the checkboxes have the exact same name ( newsletter[ ] ). 
		Also notice that each name ends in [ ]. Using the same name indicates that these checkboxes are all related which, 
		indicates that the selected values will be accessed by PHP script as an array. -->


			<form action="server.php" method="post">

				Which Newsletters do you want to subscribe to?<br />
				<input type="checkbox" name="newsletter[]" value="Coding101, " />Coding101<br />
				<input type="checkbox" name="newsletter[]" value="Tips & tricks for Linux, " />Tips & tricks for Linux<br />
				<input type="checkbox" name="newsletter[]" value="Microsoft, " />Microsoft<br />
				<input type="checkbox" name="newsletter[]" value="Apple, " />Apple<br />
				<input type="checkbox" name="newsletter[]" value="NASA newsletter" />NASA newsletter

				<input type="submit" name="formSubmit" value="Submit" />

			</form>




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