<?php

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$connection = mysqli_connect('localhost', 'root', '', 'loginapp'); // server, default username, default password, database to connect to
	if ($connection) {
		echo 'connected to database';
	} else {
		die('database connection failed');
	}
	
	// the below code is for inserting the above data into the database
	
	$query = 'INSERT INTO users(username, password) '; // SQL command used in phpMyAdmin
	$query .= "VALUES ('$username', '$password')";
	
	$result = mysqli_query($connection, $query);
	
	if (!$result) {
		die('Query failed' . mysqli_error());
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="col-sm-6">
			<form action="login_create.php" method="POST">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" id="username" name="username" required>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password" required>
				</div>
				<input class="btn btn-primary" type="submit" name="submit" value="Submit">
			</form>
		</div>
	</div>
</body>
</html>