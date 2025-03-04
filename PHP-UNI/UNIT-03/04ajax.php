<script>
    function myselect() 
    { 
        var pro = document.getElementById("pro").value;
        var h = new XMLHttpRequest(); 
		h.open("GET","04.php?Pro_id="+pro,true); 
		h.onreadystatechange = function()
		{ 
			if( this.readyState == 4 &&this.status == 200)   
			{ 
				document.getElementById("d1").innerHTML  = this.responseText; 
			} 
		} 
		h.send(); 
    } 
</script>
<?php
	$con=mysqli_connect("localhost","root","","db5012");
	$query = "select * from product"; 
    $res = mysqli_query($con,$query) 

	
?>
<form action="" method="post">
<select id="pro" onChange="myselect()">
<?php 
	while($fetch = mysqli_fetch_array($res)) 
    { 
?>
		<option><?php echo $fetch['Pro_name']; ?>,<?php echo $fetch['Pro_price']; ?>,<?php echo $fetch['QOH']; ?></option>
<?php 
    } 
?>
</select>

<div id="d1"></div>
</form>

