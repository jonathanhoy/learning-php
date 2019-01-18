<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php
	
  // Step 1: Define a function and make it return a calculation of 2 numbers
	// Step 2: Make a function that passes parameters and call it using parameter values
	
	function addNums() {
		$num1 = 1;
		$num2 = 2;
		$sum = $num1 + $num2;
		return $sum;
	}
	
	$res1 = addNums();
	
	function calculator($num1, $num2) {
		$sum = $num1 + $num2;
		return $sum;
	}
	
	$res2 = calculator(54315, 451);
	
	echo $res1;
	echo '<br>';
	echo $res2;
	
	?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php" ?>