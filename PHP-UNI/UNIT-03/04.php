<?php 
    $pro = $_GET["Pro_id"]; 
    $con = mysqli_connect("localhost","root","","student");  
    $q = "select * from product where Pro_Id = $pro"; 
    $res = mysqli_query($con,$q); 
    if($fetch=mysqli_fetch_array($res))
	{
		echo $fetch['Pro_name'];
		echo $fetch['Pro_price'];
		echo $fetch['QOH'];
	}
?>
