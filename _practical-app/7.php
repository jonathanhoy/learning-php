<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
   
<?php
	
	$connection = mysqli_connect('localhost', 'root', '', 'naruto'); // server, default username, default password, database to connect to
	if (!$connection) {
		die('database connection failed');
	}

	
	// Create data
	function addToDatabase() {
		global $connection;
		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$village = $_POST['village'];
			$sensei = $_POST['sensei'];

			$query = 'INSERT INTO genin(name, village, sensei) ';
			$query .= "VALUES ('$name', '$village', '$sensei')";

			$result = mysqli_query($connection, $query);

			if ($result) echo 'Genin added.';
		}
	}

	// Read data
	function readDatabase() {
		global $connection;
		$query = 'SELECT * FROM genin';
		$result = mysqli_query($connection, $query);
		while ($genin = mysqli_fetch_assoc($result)) print_r($genin);
	}
	

	
?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  
		
	  // Step 1 - Create a database in PHPmyadmin
		// Step 2 - Create a table like the one from the lecture
		// Step 3 - Insert some Data
		// Step 4 - Connect to Database and read data
	
	?>
	
	<div class="container">
		<div class="col-sm-6">
			<h1 class="text-center">Genin</h1>
			<form action="7.php" method="POST">
				<div class="form-group">
					<label for="name">Name</label>
					<input class="form-control" type="text" name="name" id="name" required>					
				</div>
				<div class="form-group">
					<label for="village">Village</label>
					<input class="form-control" type="text" name="village" id="village" required>
				</div>
				<div class="form-group">
					<label for="Sensei">Sensei</label>
					<input class="form-control" type="text" name="sensei" id="sensei" required>
				</div>
				<input class="btn btn-primary" type="submit" name="submit">
			</form>
		</div>
	</div>
	
	<?php addToDatabase(); ?>
		
	<pre>
		<?php readDatabase(); ?>
	</pre>


</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
