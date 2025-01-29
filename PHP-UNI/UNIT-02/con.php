<?php
$host="localhost";
$user="root";
$pass="";
$db="db5012";
$con=mysqli_connect($host,$user,$pass,$db);
if($con)
{
	echo "Connnection Established<br>";
}
else
{
	echo "Connnection Not Established<br>".mysqli_connect_error($con);
}
?>