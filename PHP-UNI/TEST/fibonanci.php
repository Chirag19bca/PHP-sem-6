<?php
	$series = [0,1];
	$n = 15;
	for( $i = 2 ; $i < $n ; $i++ )
	{
		$series[] = $series[$i - 1] + $series[$i - 2]; 
	}
	
	echo implode(", ",$series);
?>