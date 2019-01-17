<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
			h1 {
				display: inline-block;
			}
		</style>
</head>
<body>
	<?php
	
	// older syntax
	$numberList1 = array(19, 'dog', '<h1>Hello, world!</h1>');
	
	// newer syntax
	$numberList2 = [16, 29, 34];
	
	echo $numberList1[0] . ', ' . $numberList1[1] . ', ' . $numberList1[2];
	echo '<br>';
	echo $numberList2[2];
	echo '<br>';
	
	print_r($numberList1);
	
	?>
</body>
</html>