<?php
$host="localhost";
$user="root";
$pass="";
$con=mysqli_connect($host,$user,$pass);
if($con)
{
	echo "Connnection Established";
}
else
{
	echo "Connnection Not Established";
}
?>