<?php

$connection = mysqli_connect('localhost', 'root', '', 'loginapp'); // server, default username, default password, database to connect to
if ($connection) {
	echo 'connected to database';
} else {
	die('database connection failed');
}

$query = 'SELECT * FROM users'; // SQL command used in phpMyAdmin

$result = mysqli_query($connection, $query);

if (!$result) {
	die('Query failed' . mysqli_error());
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
			<?php
			
			while ($row = mysqli_fetch_assoc($result)) {
				?>
				
				<pre>
					<?php
						print_r($row);
					?>
				</pre>
				
				<?php
			}
			
			?>
		</div>
	</div>
</body>
</html>