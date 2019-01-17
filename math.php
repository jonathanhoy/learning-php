<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
	<?php
	
	echo 9 + 10;
	echo '<br>';
	echo 9 - 10;
	echo '<br>';
	echo 9 * 10;
	echo '<br>';
	echo 9 / 10;
	echo '<br>';
	echo '<br>';
	
	echo 2 + 2 * 8 / 9 - 3;
	
	echo '<br>';
	echo '<br>';
	
	// BEDMAS still applies
	echo 5 + 5 * 10; // = 55
	echo '<br>';
	echo (5 + 5) * 10; // = 100
	
	$number1 = 12;
	$number2 = 24;
	
	echo '<br>';
	echo '<br>';
	
	echo $number1 + $number2;
	
	
	?>
</body>
</html>