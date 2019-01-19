<?php include 'db.php'; ?>
<?php include 'functions.php'; ?>
<?php updateTable(); ?>

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
			<h1 class="text-center">Update</h1>
			<form action="login_update.php" method="POST">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" id="username" name="username" required>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password" required>
				</div>
				<div class="form-group">
					<select name="id" id="">
						<?php	showAllData(); ?>
					</select>
				</div>
				<input class="btn btn-primary" type="submit" name="submit" value="Update">
			</form>
			
		</div>
	</div>
</body>
</html> 