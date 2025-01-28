<?php
include("connection.php");
$qry=mysqli_query($con,"create database db5012");
if($qry)
{
	echo "database Created Successfully";
}
else
{
	echo "database not Created";
}
?>