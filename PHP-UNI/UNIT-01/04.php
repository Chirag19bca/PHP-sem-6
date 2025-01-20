<?php
	$sub=array(10,20,30,40,50);
	$i=0;
	for($i=0;$i<5;$i++)
	{
		print "$sub[$i]<br>";
	}
	
	foreach($sub as $val)
	{
		echo "<br>".$val;
	}
?>