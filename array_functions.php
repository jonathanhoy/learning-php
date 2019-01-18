<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
	<?php
	
	$list = [1, 3, 5, 4, 2];
	
	echo max($list);
	
	echo '<br>';
	
	echo min($list);
	
	echo '<br>';
	
	sort($list);
	print_r($list);
	
	?>
</body>
</html>