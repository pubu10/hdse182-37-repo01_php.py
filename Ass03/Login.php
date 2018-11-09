<?php

if(isset($_POST['Submit']))
{
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "qwe" && $password == "1234")
{
    echo "You are login Successfully ";
	session_start(); 
        $_SESSIONlogged = TRUE; 
     header('Location:Redirect.php');
}
 else {
     header('Location:index.php');
      $_SESSIONlogged = FALSE; 
}
}


?>
