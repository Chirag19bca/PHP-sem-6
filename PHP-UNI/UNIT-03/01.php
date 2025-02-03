<?php
	$name=$_GET['uname'];
	$pass=$_GET['Password'];
	if($name=="" || $pass=="")
	{
		echo "Please Enter username and Password";
	}
	else
	{
		echo "welcome: ".$name;
		echo "<br> Password: ".$pass;
	}
?>