<html>
<body>

Paper Code: <?php echo $_POST["add_code"]; ?><br>
Paper Name: <?php echo $_POST["name"]; ?>

<?php
 
include('../dbconnection.php');

$code = $_POST["add_code"];
$name = $_POST["name"];

$q = "INSERT INTO papers(code, name) VALUES('$code','$name')";

$connection->query($q);

?>

</body>
</html>