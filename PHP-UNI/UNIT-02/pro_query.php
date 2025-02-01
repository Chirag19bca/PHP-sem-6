<?php
	include("unit_2_connection.php");
	$proname=$_POST["Pro_name"];
	$price=$_POST["Pro_price"];
	$qoh=$_POST["QOH"];
	
	$qry="insert into product(Pro_name,Pro_price,QOH) values('$proname',$price,$qoh)";
	if(mysqli_query($con,$qry))
	{
		echo "Record successfully inserted<br>";
		header("location:pro_rec.php");
	}
	else
	{
		echo "Record not inserted<br>";
	}
	
?>