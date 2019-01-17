<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
	<?php
	
	// normal array
	$regularArray = array(1, 2, 3);
	print_r($regularArray);
	
	echo '<br>';
	
	// associative array
	$names = ['first_name' => 'Jonathan', 'I am index 0', 'pet' => 'Jihyo', 'I am index 1'];
	print_r($names);
	echo '<br>';
	echo $names['first_name']; // returns Jonathan
	echo '<br>';
	echo $names[0]; // returns I am index 0
	
	?>
</body>
</html>