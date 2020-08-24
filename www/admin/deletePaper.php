<html>
<body>

Paper Code: <?php echo $_POST["delete_code"]; ?><br>

<?php
 
include('../dbconnection.php');

$code = $_POST["delete_code"];

$q = "DELETE FROM papers WHERE code='$code'";

$connection->query($q);

?>

</body>
</html>