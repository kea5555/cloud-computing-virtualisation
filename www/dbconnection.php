<?php

$db_host   = '192.168.2.12';
$db_name   = 'fvision';
$db_user   = 'webuser';
$db_passwd = 'insecure_db_pw';

$pdo_dsn = "mysql:host=$db_host;dbname=$db_name";

$db = new PDO($pdo_dsn, $db_user, $db_passwd);

if(!$db){
    die("Connection failed: ");
}

?>