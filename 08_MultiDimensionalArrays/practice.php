<?php
	
	// Constants
	define('TITLE', "Multi Dimensional Array's Practice Lesson");
	
	
	// Custom Variables
	$myName = "Ezekiel Saturday";
	

	
	// Moustache Multi-Dimensional Array
	$moustaches = Array (
 
		Array (
		 
			"name"              => "Handlebar",
			"creep_factor"      => "High",
			"avg_growth_days"   => 14
		 
		),
		 
		Array (
		 
			"name"              => "Salvador Dali",
			"creep_factor"      => "Extreme",
			"avg_growth_days"   => 62
		 
		),
		 
		Array (
		 
			"name"              => "Fu Manchu",
			"creep_factor"      => "Very High",
			"avg_growth_days"   => 58
		 
		)

  );


?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo(TITLE)?></title>
		<link href="/assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial : <small> <?php echo(TITLE)?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
			<?php
				for ($i=0; $i < count($moustaches); $i++) {
					echo("<h2>The ".$moustaches[$i]["name"]." Moustache!</h2>
					<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong>".$moustaches[$i]["creep_factor"]."</strong> and takes <strong>".$moustaches[$i]["avg_growth_days"]." days</strong> to grow on average.</strong></p>");
				}
			
			?>
				
				<!-- REPEAT ABOVE 2X -->
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo(date('Y')." - ".$myName)?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
