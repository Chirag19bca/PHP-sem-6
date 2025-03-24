<?php 
 $con = mysqli_connect("localhost","root","","student");  
 $id = $_GET['sid']; 
 $name = $_GET['sname']; 
 $mob = $_GET['mob']; 
 $c = $_GET['c']; 
 $query = "select * from student where stu_id = '$id'"; 
 $res = mysqli_query($con,$query); 
if($res1 = mysqli_fetch_array($res)) 
 { 
     echo "User Already exist,<br> Try another student Id."; 
 } 
 else
 { 
if($name=="" && $mob==""&&$c=="") 
{
        		echo "pls fillup all fields"; 
	}
else
{
mysqli_query($con,"insert into student values('$id','$name','$mob','$c')"); 
      	  echo "data added"; 
   	 } 
 } 
?>
