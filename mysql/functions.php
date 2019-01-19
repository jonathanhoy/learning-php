<?php include 'db.php'; ?>
<?php

function showAllData() {
	global $connection; // need to make global because now $connection is locally scoped to the function, wasn't previously
	$query = 'SELECT * FROM users'; // SQL command used in phpMyAdmin
	$result = mysqli_query($connection, $query);
	if (!$result) {
		die('Query failed' . mysqli_error());
	}

	while ($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
		echo "<option value='$id'>$id</option>";
	}
}


?>