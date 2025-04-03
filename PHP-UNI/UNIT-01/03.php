<?php
$age=$_POST["age"];
$gender=$_POST["gender"];
if($age>18)
{
	// if($gender == "male")
	// {
		// echo "You are aligible for vote and you are male  candidate";
	// }
	// else
	// {
		// echo "You are aligible for vote and you are female  candidate";
	// }
	switch($gender)
	{
		case 'male':
			echo "You are aligible for vote and you are male  candidate";
			break;
		case 'female':
			echo "You are aligible for vote and you are +female  candidate";
			break;
		default:
			echo "not valid";
			break;
	}
}
else
{
	echo "You are Not aligible for Vote";
}
?>