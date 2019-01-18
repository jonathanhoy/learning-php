<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
	<?php
	
	$string = 'Hello student do you like the class';
	
	echo strlen($string);
	
	echo '<br>';
	
	echo strtoupper($string);
	
	echo '<br>';
	
	echo strtolower($string);
	
	echo '<br>';
	
	print($string);
	
	// Echo vs. Print
	// They are both used to output data to the screen. The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.
	
	?>
</body>
</html>