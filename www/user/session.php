<?php

   // This code checks to see if a user is logged in, if the user is not logged in then
   // it will redirect the user to the login in page. Becuase of this, no pages from the 
   // admin server can be accessed without first signing in as an admin.

   include('../dbconnection.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select username from users where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>