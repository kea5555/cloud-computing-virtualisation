<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
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

		

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p class='inline'>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p class='inline'> <a href="index.php?logout='1'">logout</a> </p>
		<?php endif ?>

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

	
<table>
<tr><th>ID</th><th>Name</th><th>Email</th><th>Subsrcibed</th></tr>

<?php
 
include('../dbconnection.php');

$sql = "SELECT * FROM subscribers";

$results = $mysqli_query($db, $sql);

while($row = $results->fetch()){
  echo "<tr><td>".$row["subscriber_ID"]."</td><td>".$row["sub_name"]."</td><td>".$row["sub_email"]."</td><td>".$row["newsletter_id"]."</td></tr>\n";
}



?>



</table>

	</div>


		
</body>
</html>

<script>
var js_variable_as_placeholder = <?= json_encode($sql, 
    JSON_HEX_TAG); ?>;
console.log(js_variable_as_placeholder);
</script>