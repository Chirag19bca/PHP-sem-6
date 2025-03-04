<?php 
    $str = $_GET["str"]; 
	$len = strlen($str);
	if($len < 5)
	{
		if($str == "")
		{
			echo "Pls Enter something";
		}
		else
		{
			echo "length greater than 5";
		}
	}
?>
