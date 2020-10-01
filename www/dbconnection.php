<?php

// This is the database connection, the file can be included in php code that needs to 
// connect to the database. To connect use the reference '$conn'.

$db_host   = 'database-1.cmgahpcklmdx.us-east-1.rds.amazonaws.com';
$db_name   = 'setUPdatabase';
$db_user   = 'admin';
$db_passwd = 'Ryan&Kayla';

$conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>