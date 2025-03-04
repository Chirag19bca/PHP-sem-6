<?php 
    $pro = $_GET["Pro_id"]; 
    $con = mysqli_connect("localhost","root","","db5012");  
    $q = "select * from product where Pro_id = '$pro'"; 
    $res = mysqli_query($con,$q); 
    if($fetch=mysqli_fetch_array($res))
	{
		echo $fetch['Pro_name'];
		echo $fetch['Pro_price'];
		echo $fetch['QOH'];
	}
?>
