<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
	<?php
	
	function sayMyName() {
		echo 'Jonathan';
	}
	
	function doSomeMath() {
		echo 1 + 2;
	}

	function init() {
		sayMyName();
		echo '<br>';
		doSomeMath();
	}
	
	init();
	
	?>
</body>
</html>