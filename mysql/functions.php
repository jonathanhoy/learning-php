<?php include 'db.php'; ?>
<?php

// CRUD => Create, Read, Update, Delete

// Create
function createRows() {
	if (isset($_POST['submit'])) {
		global $connection;
		$username = $_POST['username'];
		$password = $_POST['password'];

		// the below code is for inserting the above data into the database

		$query = 'INSERT INTO users(username, password) '; // SQL command used in phpMyAdmin
		$query .= "VALUES ('$username', '$password')";

		$result = mysqli_query($connection, $query);

		if (!$result) {
			die('Query failed' . mysqli_error());
		} else {
			echo 'Record created';
		}
	}
}

// Read
function readRows() {
	global $connection;
	$query = 'SELECT * FROM users';
	$result = mysqli_query($connection, $query);
	if (!$result) {
		die('Query failed' . mysqli_error());
	}
	while ($row = mysqli_fetch_assoc($result)) {
		print_r($row);
	}
}

// Dynamically display IDs
function showAllData() {
	global $connection; // need to make global because now $connection is locally scoped to the function, wasn't previously
	$query = 'SELECT * FROM users'; // SQL command used in phpMyAdmin
	$result = mysqli_query($connection, $query);
	if (!$result) {
		die('Query failed' . mysqli_error());
	}

	while ($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
		$username = $row['username'];
		echo "<option value='$id'>$id, $username</option>";
	}
}

// Update
function updateTable() {
	if (isset($_POST['submit'])) {
		global $connection;
		$username = $_POST['username'];
		$password = $_POST['password'];
		$id = $_POST['id'];

		$query = 'UPDATE users SET ';
		$query .= "username = '$username', "; // $username and $password are str, the id is int
		$query .= "password = '$password' ";
		$query .= "WHERE id = $id";

		$result = mysqli_query($connection, $query);
		if (!$result) {
			die('query failed' . mysqli_error($connection));
		} else {
			echo 'Record updated';
		}
	}
}

// Delete
function deleteRows() {
	if (isset($_POST['submit'])) {
		global $connection;
		$id = $_POST['id'];

		$query = 'DELETE FROM users ';
		$query .= "WHERE id = $id";

		$result = mysqli_query($connection, $query);
		if (!$result) {
			die('query failed' . mysqli_error($connection));
		} else {
			echo 'Record deleted';
		}
	}
}

?>