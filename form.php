<?php

	if (isset($_POST['submit'])) {
		$name = ['Jihyo', 'Nayeon', 'Chaeyoung', 'Dahyun', 'Jeonyeong', 'Momo', 'Sana', 'Mina', 'Tzuyu'];
		$minLength = 5;
		$maxLength = 15;
		$username = $_POST['username'];
		$password = $_POST['password'];
		
//		if (strlen($username) < $minLength || strlen($username) > $maxLength) {
//			echo 'Username must be between 5 and 15 characters.';
//		}
		
		if (!in_array($username, $name)) {
			echo $username . ' is not a member of TWICE.';
		} else {
			echo 'Welcome ' . $username;
		}
	}

?>
	
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
	<p>TWICE member login</p>
	<form action="form.php" method="POST">
		<input type="text" placeholder="Enter Username" name="username">
		<br>
		<input type="password" placeholder="Enter Password" name="password">
		<br>
		<input type="submit" name="submit">
	</form>
	
</body>
</html>