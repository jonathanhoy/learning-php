<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
<?php 
	
  // Step 1: Use a pre-built math function here and echo it
	// Step 2: Use a pre-built string function here and echo it
	
	function fortuneTeller() {
		$rng = rand(1, 100);
		if ($rng >= 50) {
			$win = 'The Leafs are going to win the Stanley Cup!!!';
			echo strtoupper($win);
		} else {
			$lose = 'The Leafs are not going to win the Stanley Cup...';
			echo $lose;
		}
	}
	
	fortuneTeller();
	
	// Step 3: Use a pre-built Array function here and echo it
	
	$odds = [50, 60, 70, 80, 90, 100];
	
	function riggedFortuneTeller() {
		global $odds;
		if (max($odds) === 100) {
			$win = 'Plan the parade';
			echo $win;
		}
	}
	
	echo '<br>';
	riggedFortuneTeller();
	echo '<br>';
	
	
	$str = 'eiajfoiewjf';
	
	$arr = ['dog', 1, 'cat', 'car', $str, 45];
	
	if (in_array($str, $arr)) echo 'YEET';
	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>