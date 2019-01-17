<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
	<?php
	
	// switch statements - testing 1 value against multiple conditions
	
	$number = 15;
	
	switch ($number) {
		case $number % 5 === 0:
			echo 'divisible by 5';
			break;
		case 34:
			echo 'is it 34?';
			break;
		case 34:
			echo 'is it 34?';
			break;
		default:
			echo "it's none of them";
			break;
	}
	
	?>
</body>
</html>