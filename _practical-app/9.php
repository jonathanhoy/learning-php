<?php include "functions.php" ?>
<?php include "includes/header.php" ?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		
	
	<?php 

		// Create a link saying Click Here, and set the link href to pass some parameters and use the GET super global to see it
		// Step 2 - Set a cookie that expires in one week
		// Step 3 - Start a session and set it to value, any value you want.
	
		$id = 'Hello Jonathan';
			
		if (isset($_GET['id'])) {
			print_r($_GET['id']);
		}
	?>
	
	<a href="9.php?id=<?php echo $id?>">Click Here</a>

	<?php
	
	$name = 'yummyCookie';
	$value = 'This is a cookie';
	$expiration = time() + (60*60*24);
	setcookie($name, $value, $expiration);
		 
	if (isset($_COOKIE['yummyCookie'])) {
		echo $_COOKIE['yummyCookie'];
	}
	
	?>
	
	<?php
				
	session_start();
	$phrase = $_SESSION['phrase'] = 'This is the session';
	
	if (isset($phrase)) echo $phrase
	
	?>



</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>