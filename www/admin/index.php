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
		<?php if (isset($_SESSION['username'])) : ?>
			<p class='inline'>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p class='inline'> <a href="index.php?logout='1'">logout</a> </p>
		<?php endif ?>


		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success">
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
				<th>Remove</th>
			</tr>
			<?php
			// Include file to connect to database with the $conn variable
			include("../dbconnection.php");
			// mysqli_refresh($conn, MYSQLI_REFRESH_TABLES);
			// The sql query
			$sql = "SELECT * FROM subscribers";
			// Search the database with the query and save results in the variable $results
			$result = mysqli_query($conn, $sql);
			// $result = $conn->query($sql);
			while ($row = mysqli_fetch_assoc($result)) { 
				echo 
				"<tr>
				<td>".$row['subscribers_id']."</td>
				<td>".$row['sub_name']."</td>
				<td>".$row['sub_email']."</td>
				<td>".$row['news_name']."Newsletter"."</td>
				<td>
				<div class='has-text-centered'>
				<button class='button'>Remove</button>
				</div>
				</td>
				</tr>\n";
			} ?>
		</table>
	</div>



</body>

</html>
<script>
	var js_variable_as_placeholder = <?= json_encode(
											$sql,
											JSON_HEX_TAG
										); ?>;
	console.log(js_variable_as_placeholder);

	var js_variable_as_placeholder = <?= json_encode(
											$result,
											JSON_HEX_TAG
										); ?>;
	console.log(js_variable_as_placeholder);

	var js_variable_as_placeholder = <?= json_encode(
											$row,
											JSON_HEX_TAG
										); ?>;
	console.log(js_variable_as_placeholder);
</script>