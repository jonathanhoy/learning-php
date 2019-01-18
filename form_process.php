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