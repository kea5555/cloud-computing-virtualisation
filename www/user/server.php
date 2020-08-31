<<<<<<< HEAD
<?php
include("../dbconnection.php");
session_start();

$id = rand(1, 9999999);
$username = "";
$email    = "";
$news = "";
$subscribeTo = array("Coding101","Tips & Tricks for Linux","Microsoft","Apple","Nasa");
$errors = array();

// REGISTER USER
if (isset($_POST['reg_user'])) {
	// receive all input values from the form
	$name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $newsletter = mysqli_real_escape_string($conn, $_POST['newsletter']);

	// form validation: ensure that the form is correctly filled
	if (empty($name)) {
    array_push($errors, "Name is required");
  }
  if (empty($email)) {
    array_push($errors, "Email is required");
  }
  if(empty($_POST['newsletter'])) {
    array_push($errors, "You didn't select a news letter");
  } else {
    if(count($_POST['newsletter']) > 1) {
      array_push($errors, "Only select one newsletter");
    }
  }

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		foreach($_POST['newsletter'] as $value){
			$news = rtrim($value, ",");
		}
		 
		$query2 = "INSERT INTO subscribers (subscribers_id, sub_name, sub_email, newsletter) 
					  VALUES('$id', '$name', '$email', '$news')";
		$success = $conn->query($query2);
		// $success1 = mysqli_query($conn, $query2);
		header('location: index.php');
	}
}
?>
=======

<!-- TODO add connecton to the database so that there is a connection with the form to the database -->


<!-- after someone has added their choices of newsleter -->
<?php
  $aDoor = $_POST['newsletter'];
  if(empty($aDoor)) 
  {
    echo("You didn't select any newsletters to add.");
  } 
  else 
  {
    $N = count($aDoor);

    echo("You selected $N newletter (s): ");
    for($i=0; $i < $N; $i++)
    {
      echo($aDoor[$i] . " ");
    }
  }
?>
>>>>>>> b801eb9ea9f4541a13eec4e0c3da722767a5acdd
