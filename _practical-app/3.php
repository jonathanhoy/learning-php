<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

	// Step 1: Make an if Statement with elseif and else to finally display string saying, I love PHP

	// Step 2: Make a forloop  that displays 10 numbers

	// Step 3: Make a switch Statement that test against one condition with 5 cases
	
	
	// STEP 1
	
	if (4 > 5) {
		echo 'PHP sucks';
	} else if ('dog' === 'cat') {
		echo 'PHP still sucks';
	} else {
		echo 'I love PHP';
	}
	
	echo '<br>';
	
	// STEP 2
	
	for ($i = 1; $i <= 10; $i++) {
		if ($i < 10) {
			echo $i . ', ';
		} else {
			echo $i;
		}
	}
	
	echo '<br>';
	
	// STEP 3
	
	$favFood = 'sushi';
	
	switch ($favFood) {
		case 'pizza':
			echo 'pizza is my favorite';
			break;
		case 'burgers':
			echo 'burgers is my favorite';
			break;
		case 'chicken wings':
			echo 'chicken wings is my favorite';
			break;
		case 'french fries':
			echo 'french fries is my favorite';
			break;
		case 'sushi':
			echo 'sushi is my favorite';
			break;
		default:
			echo 'you are a literal monster';
	}
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>