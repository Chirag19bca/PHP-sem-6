<?php 
    $email = $_GET['str']; 
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)==false) 
    {
	echo("$email is a valid email adress");# code...
     } 
     else
     {
	echo("$email is not a valid email adress");
     }

?>
