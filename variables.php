<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
	<?php
		
		$name = 'Jonathan';
		$age = 26;
		$camelCaseIsPreferred = true;
		$This_Is_Okay = 'too';
		// variables are case-sensitive, age & AGE are different.
		$AGE = 30;
		
		echo 'My name is ' . $name . ' and I am ' . $age . ' years old.';
	?>
</body>
</html>