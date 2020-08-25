<?php
  include("../dbconnection.php");
  session_start();
   
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST["username"]);
      $mypassword = mysqli_real_escape_string($db,$_POST["password"]); 

      $myusername = $_POST["username"];
      $mypassword = $_POST["password"]; 
      
      $query = $db->query("SELECT * FROM users WHERE username='admin' and password='admin'");
      $answer = $query->fetch(MYSQLI_ASSOC);

      $active = $answer['active'];

      $count = mysqli_num_rows($active);

      // $sql = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'";
      // $result = mysqli_query($db,$sql);
      // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      // $active = $row['active'];

      
      // $count = mysqli_num_rows($active);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: main.php");
      }else {
         $error = "Your Username or Password is invalid";
      }
   }
?>

<script>

var js_variable_as_placeholder = <?= json_encode($myusername, 
    JSON_HEX_TAG); ?>;
console.log(js_variable_as_placeholder);
var js_variable_as_placeholder = <?= json_encode($answer, 
    JSON_HEX_TAG); ?>;
console.log(js_variable_as_placeholder);
var js_variable_as_placeholder = <?= json_encode($active, 
    JSON_HEX_TAG); ?>;
console.log(js_variable_as_placeholder);
var js_variable_as_placeholder = <?= json_encode($count, 
    JSON_HEX_TAG); ?>;
console.log(js_variable_as_placeholder);

</script>

<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>Username  :  </label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :  </label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

      <table border="1">
<tr><th>Paper code</th><th>Paper name</th></tr>


<?php
 
include('../dbconnection.php');

$q = $db->query("SELECT * FROM users WHERE username='admin' and password='admin'");

while($row = $q->fetch()){
  echo "<tr><td>".$row["username"]."</td><td>".$row["password"]."</td></tr>\n";
}

?>
</table>

   </body>
</html>