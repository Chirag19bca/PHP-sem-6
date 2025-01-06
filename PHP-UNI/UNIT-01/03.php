<?php
$age=$_POST["age"];
$gender=$_POST["gender"];
if($age>18)
{
	if($gender=="Male")
	{
		echo "You are aligible for Vote and you are Male candidate";
	}
	else
	{
		echo "You are aligible for Vote and you are Female candidate";
	}
}
else
{
	echo "You are Not aligible for Vote";
}
?>