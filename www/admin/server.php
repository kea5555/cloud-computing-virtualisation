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

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM subscribers WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: index.php');
}

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
if (isset($_POST['edit'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['address'];

	mysqli_query($db, "UPDATE info SET name='$name', address='$address' WHERE id=$id");
	$_SESSION['message'] = "Address updated!";
	header('location: index.php');
}

?>