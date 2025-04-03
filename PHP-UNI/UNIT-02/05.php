<?php
include("unit_2_connection.php");
if (!empty($_POST["search_product"])) {
	$search = $_POST["search_product"];
	$sel_qry = "select * from product where Pro_Id=$search";
	$res = mysqli_query($con, $sel_qry);

} else {
	$sel_qry = "select * from product";
	$res = mysqli_query($con, $sel_qry);
}
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>u2p5</title>
</head>

<body>
	<div>
		<h3><a href="04.php">+Add new Record</a></h3>
	</div>
	<div>
		<form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
			<table>
				<tr>
					<td>
						<select name="search_product">
							<option value="">Please Select</option>
							<?php
								$sel_qry_search="select * from product";
								$res_search=mysqli_query($con,$sel_qry_search);
								while($row_search=mysqli_fetch_array($res_search))
								{
									?>
									<option value="<?php echo $row_search["Pro_Id"];?>">
										<?php echo $row_search["Pro_name"];?>
									</option>
									<?php
								}
								?>
						</select>
					</td>
					<td>
						<input type="submit" name="submit" value="Search">
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div>
		<table border="1">
			<caption><b>Product Details</b></caption>
			<tr bgcolor="#6699FF">
				<th>Product Id</th>
				<th>Product Name</th>
				<th>Product Price</th>
				<th>Product Quantity</th>
			</tr>
			
			<?php
				while($row=mysqli_fetch_array($res))
				{
					
			?>
					<tr>
						<td><?php echo $row["Pro_Id"];?></td>
						<td><?php echo $row["Pro_name"];?></td>
						<td><?php echo $row["Pro_price"];?></td>
						<td><?php echo $row["QOH"];?></td>
					</tr>
			<?php
				}
			?>
			
		</table>
	</div>
</body>
</html>