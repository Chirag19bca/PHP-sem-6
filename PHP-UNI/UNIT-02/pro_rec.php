<?php
	include("unit_2_connection.php");
	$sel_qry="select * from product";
	$res=mysqli_query($con,$sel_qry);
?>

<html>
	<head>
		<title>Record Display </title>
	</head>
	
	<body>
		<h3> <a href="04.php"> + Add New Record</a></h3>
		
		<table>
		<tr>
			<tr bgcolor="#6699FF">
			<tr bgcolor="#6699FF">
			<th>Productr Id</th>
			<th>Product Name</th>
			<th>Product Price</th>
			<th>product Quantity</th>
			<th>Edit</th>
		</tr>
		<?php
			while($row=mysqli_fetch_array($res))
			{
		?>
		<tr bgcolor="#FFCC33">
			<td><?php echo $row["Pro_Id"];?></td>
			<td><?php echo $row["Pro_name"];?></td>
			<td><?php echo $row["Pro_price"];?></td>
			<td><?php echo $row["QOH"];?></td>
			
			<td><?php echo"<a href=06.php?pid=$row[Pro_Id] style=text-decoration:none>Edit</a>"?></td>
		</tr>
		
		<?php 
			}
		?>
		</table>
	</body>
</html>