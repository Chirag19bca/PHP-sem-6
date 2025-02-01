<?php
	include("unit_2_connection.php");
	$Pro_Id=$_POST["Pro_Id"];
	$qoh=$_POST["QOH"];
	if(!empty($qoh))
	{
		$upt_qry="update product set QOH=$qoh where Pro_Id=$Pro_Id";
		if(mysqli_query($con,$upt_qry))
		{
			header("location:pro_rec.php");
		}
		else
		{
			header("location:06.php?msg=Please Try Again");
		}
	}
?>