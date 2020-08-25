<?php

$db_host   = '192.168.2.12';
$db_name   = 'subscriptions';
$db_user   = 'admin';
$db_passwd = 'admin';

// $pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

// $dbc = new PDO($pdo_dsn, $db_user, $db_passwd);

$db = new mysqli($db_host, $db_user, $db_passwd, $db_name);

if(!$db){
    die("Connection failed: " . mysqli_connect_error);
}

?>