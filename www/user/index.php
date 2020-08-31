<?php include('server.php') ?>
<!DOCTYPE html>
<!-- 
	The main user page, it will hold the user registration form to sign up to a newsletter.
	//used this tutorial for the check boxes 
	//https://html.form.guide/php-form/php-form-checkbox/
 -->
<html>

<head>
	<title>User Sign Up</title>
	<link href="style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
	<div class="header">
		<h2>User Sign Up</h2>
	</div>

<<<<<<< HEAD
	<form method="post" action="index.php">

	<?php include('errors.php'); ?>

=======


>>>>>>> b801eb9ea9f4541a13eec4e0c3da722767a5acdd
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $name; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
<<<<<<< HEAD
		<div class="input-group">
			<br>
		
		<!-- Please note that the checkboxes have the exact same name ( newsletter[ ] ). 
		Also notice that each name ends in [ ]. Using the same name indicates that these checkboxes are all related which, 
		indicates that the selected values will be accessed by PHP script as an array. -->
				<ul>
					<p> Which Newsletters do you want to subscribe to? </p>
					<br>

					

					<div>
						<label>Coding101
						<input class="float" type="checkbox" name="newsletter[]" value="Coding101, "/>
						</label>
					</div>
					<div class="float-group">
						<label>Tips & tricks for Linux
						<input class="float" type="checkbox" name="newsletter[]" value="Tips & tricks for Linux," />
						</label>
					</div>
					<div class="float-group">
						<label>Microsoft
						<input class="float" type="checkbox" name="newsletter[]" value="Microsoft," />
						</label>
					</div>
					<div class="float-group">
						<label>Apple
						<input class="float" type="checkbox" name="newsletter[]" value="Apple," />
						</label>
					</div>
					<div class="float-group">
						<label>NASA Newsletter
						<input class="float" type="checkbox" name="newsletter[]" value="NASA newsletter" />
						</label>
					</div>
				</ul>
				<div class="input-group">
				<button type="submit" class="btn" name="reg_user">Register</button>
			</div>
		</form>
</body>

</html>
=======


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
>>>>>>> b801eb9ea9f4541a13eec4e0c3da722767a5acdd
