
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

  if (isset($_POST['login_user'])) {
    
  }
?>