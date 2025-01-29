<?php
	include("con.php");
	$qry="CREATE TABLE product(Pro_Id INT(3) AUTO_INCREMENT PRIMARY KEY,Pro_name VARCHAR(100) NOT NULL,Pro_price FLOAT(7,2) NOT NULL,QOH INT(5) NOT NULL)";
	if(mysqli_query($con,$qry))
	{
		echo "Table created";
	}
	else
	{
		echo "Table not created";
	}
?>