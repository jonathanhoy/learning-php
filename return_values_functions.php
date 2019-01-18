<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
	<?php
	
	function addNumbers($num1, $num2) {
		$sum = $num1 + $num2;
		return $sum;
	}
	
	$res = addNumbers(3, 7); // 10
	echo $res;
	echo '<br>';
	$res = addNumbers(100, $res); // 110
	echo $res;
	echo '<br>';
	$res = addNumbers($res, $res); // 220
	echo $res;
	echo '<br>';
	
	?>
</body>
</html>