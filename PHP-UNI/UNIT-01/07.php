<?php
	function string_cat()
	{
		$fname=$_POST["fname"];
		$lname=$_POST["lname"];
	}
	function str_cat($fname,$lname)
	{
		$flname=$fname." ".$lname;
		echo $flname;
	}
	string_cat();
	str_cat($_POST["fname"],$_POST["lname"]);
?>