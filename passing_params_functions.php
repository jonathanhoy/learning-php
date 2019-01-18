<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
	<?php
	
	function calculator($a, $b) {
		$sum = $a + $b;
		echo $sum;
	}
	
	calculator(1, 2);
	echo '<br>';
	calculator(3, 4);
	
	?>
</body>
</html>