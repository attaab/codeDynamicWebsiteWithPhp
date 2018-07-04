<?php
	
	// Constants
	define('TITLE', "Doro's Associative Array");
	
	// Custom Variables
	$lessonNumber = 7;
	$myName = 'Ezekiel Saturday';

	
	// Moustache Associative Array
	$moustache = Array("name" => "HandleBar", "creepFactor" => "High", "avgGrowth" => 14);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE?></title>
		<link href="/assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo($lessonNumber)?>: <small><?php echo(TITLE)?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
			
				<h2>The <?php echo($moustache["name"])?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><?php echo($moustache["creepFactor"])?></strong> and takes <strong><?php echo($moustache["avgGrowth"])?> days</strong> to grow on average.</strong></p>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo(date('Y')."-".$myName)?> <!-- YOUR NAME --></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
