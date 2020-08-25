<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">

<?php

// include('session.php');

?>

<html>
<head><title>Database test page</title>
<style>
th { text-align: left; }

table, th, td {
  border: 2px solid grey;
  border-collapse: collapse;
}

th, td {
  padding: 0.2em;
}
</style>
</head>

<body>
<h1>Database test page</h1>

<h3> Add a paper </h3>
<form action="addPaper.php" method="post">
Paper Code: <input type="text" name="add_code"><br>
Paper Name: <input type="text" name="name"><br>
<input type="submit">
</form>

<h3> Delete a paper </h3>
<form action="deletePaper.php" method="post">
Paper Code: <input type="text" name="delete_code"><br>
<input type="submit">
</form>

<p>Showing contents of papers table:</p>

<table border="1">
<tr><th>Paper code</th><th>Paper name</th></tr>


<?php
 
include('../dbconnection.php');

$q = $db->query("SELECT * FROM papers");

while($row = $q->fetch()){
  echo "<tr><td>".$row["code"]."</td><td>".$row["name"]."</td></tr>\n";
}

?>
</table>
</body>
</html>
