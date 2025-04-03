<form action="" method="post">
    <label>Enter Number:</label>
    <input type="number" name="age" required />
    <br>
    <input type="submit" value="Check Prime">
</form>
		
		
<?php

    $num = $_POST["age"] ?? '';

	for( $i = 2 ; $i < $num ; $i++ )
	{
		if($num % $i == 0)
		{
			echo "$num is not prime number";
			break;
		}
	}

	if($i == $num)
	{
		echo "$num is prime";
	}
 	
?>