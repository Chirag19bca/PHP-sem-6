<?php
	$arr=array(13,41,24,21,11);
	print "ascending order<br>";
	sort($arr);
	for($i=0;$i<count($arr);$i++)
	{
		print "$arr[$i]<br>";
	}
	print "descending order<br>";
	rsort($arr);
	for($i=0;$i<count($arr);$i++)
	{
		print "$arr[$i]<br>";
	}
?>