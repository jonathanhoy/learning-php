<?php

if (isset($_POST['submit'])) echo $_POST['name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
	<form action="the_post.php" method="POST">
		<input type="text" name="name" placeholder="name">
		<input type="submit" name="submit">
	</form>
</body>
</html>