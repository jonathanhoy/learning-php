<?php include 'db.php'; ?>
<?php include 'functions.php'; ?>
<?php createRows(); ?>
<?php include 'includes/header.php'; ?>

<div class="container">
	<div class="col-sm-6">
		<h1 class="text-center">Create</h1>
		<form action="login_create.php" method="POST">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" class="form-control" id="username" name="username">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" id="password" name="password">
			</div>
			<input class="btn btn-primary" type="submit" name="submit" value="Create">
		</form>
	</div>
</div>

<?php include 'includes/footer.php'; ?>