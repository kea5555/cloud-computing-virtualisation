<?php
include("../dbconnection.php");
session_start();

// link from where i got this login/register application from, he states its okay to use other peopls
// code as long as we state it.
// https://codewithawa.com/posts/complete-user-registration-system-using-php-and-mysql-database
// https://www.w3schools.com/php/php_mysql_select.asp


// variable declaration
$id = rand(1, 9999999);
$username = "";
$email    = "";
$errors = array();
$_SESSION['success'] = "";
$update = false;

// REGISTER USER
if (isset($_POST['reg_user'])) {
	// receive all input values from the form
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	// form validation: ensure that the form is correctly filled
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($email)) {
		array_push($errors, "Email is required");
	}
	if (empty($password_1)) {
		array_push($errors, "Password is required");
	}

	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1); //encrypt the password before saving in the database
		$query = "INSERT INTO users (id, username, email, password) 
					  VALUES('$id', '$username', '$email', '$password')";
		mysqli_query($db, $query);

		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header('location: index.php');
	}
}

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
	$username = mysqli_real_escape_string($conn, $_POST['username1']);
	$password = mysqli_real_escape_string($conn, $_POST['password1']);

	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	if (count($errors) == 0) {
		// Password hash function
		$password = md5($password);
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$results = mysqli_query($conn, $query);

		if (mysqli_num_rows($results) == 1) {
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		} else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}

// Edit user
if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['address'];

	mysqli_query($db, "UPDATE info SET name='$name', address='$address' WHERE id=$id");
	$_SESSION['message'] = "Address updated!";
	header('location: index.php');
}

//Delete user
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM info WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: index.php');
}


?>

<script>
	var js_variable_as_placeholder = <?= json_encode(
											$query,
											JSON_HEX_TAG
										); ?>;
	console.log(js_variable_as_placeholder);

	var js_variable_as_placeholder = <?= json_encode(
											$results,
											JSON_HEX_TAG
										); ?>;
	console.log(js_variable_as_placeholder);
</script>