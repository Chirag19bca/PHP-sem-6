<?php

	$arr=array("name"=>array("chirag","manan","dhruvil"),"age"=>array(22,18,20),"marks"=>array(70,80,90));
	
	echo $arr["name"][0]."<br>";
	echo $arr["name"][1]."<br>";
	echo $arr["name"][2]."<br>";
	/*foreach($arr as $key=>$val)
	{
		echo "<br>[".$key."]=".$val;
	}
	for($row=0;$row<3;$row++)
	{
		for($col=0;$col<3;$col++)
		{
			echo "<br>".$arr[$row][$col];
		}
	}*/
?>