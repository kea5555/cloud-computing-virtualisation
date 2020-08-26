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

<!-- 
	The main page, it holds the table that displays the subscribers and their data,
	this is the page that an admin is brought to after signing in, and from here they 
	can add/remove subscribers from the list.
 -->

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
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Subsrcibed</th>
				<th>Delete</th>
				<!-- TODO funcitoning delete button, possibly add an edit button -->
			</tr>
			<?php
				// Include file to connect to database with the $db variable
				include("../dbconnection.php");
				// The sql query
				$sql1 = "SELECT * FROM subscribers";
				// Search the database with the query and save results in the variable $results
				$result1 = $db->query($sql1);
				// fetch a sinle row from the results
				while($row = $result1->fetch_assoc()){
					$nid = $row["newsletter_id"];
					$sql2 = "SELECT * FROM newsletters WHERE newsletter_id='$nid'";
					$result2 = $db->query($sql2);
					while($nrow = $result2->fetch_assoc()) {
						echo "<tr><td>".$row["subscribers_id"]."</td><td>".$row["sub_name"]."</td><td>".$row["sub_email"]."</td><td>".$nrow["news_name"]." Newsletter"."</td></tr>\n";
					  }
				}
			?>
		</table>
	</div>


		
</body>
</html>
<script>
var js_variable_as_placeholder = <?= json_encode($nid, 
    JSON_HEX_TAG); ?>;
console.log(js_variable_as_placeholder);

var js_variable_as_placeholder = <?= json_encode($qu2, 
    JSON_HEX_TAG); ?>;
console.log(js_variable_as_placeholder);

var js_variable_as_placeholder = <?= json_encode($nname, 
    JSON_HEX_TAG); ?>;
console.log(js_variable_as_placeholder);

</script>