<?php
	$host="localhost";
	$user="root";
	$pass="";
	$db="student";
	$con=mysqli_connect($host,$user,$pass,$db);
	if($con)
	{
		echo "Connnection Established<br>";
	}
	else
	{
		echo "Connnection Not Established<br>";
	}
	/*$qry="insert into product(Pro_name,Pro_price,QOH) values('oppo',12000,70)";
	if(mysqli_query($con,$qry))
	{
		echo "Record inserted";
	}
	else
	{
		echo "Record not inserted";
	}*/
?>