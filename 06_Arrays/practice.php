<?php
	
	// Constants
	define('TITLE', "Doro's PHP array's");

	
	// Custom Variables
	$lessonNumber = 6;
	
	// Moustache Array
	$moustaches = Array('HandleBars', "Salvador Dali", "Fu Manchu");

	$date = date('Y');
	$name = 'Ezekiel Saturday';
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo(TITLE) ?></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<?php echo $date?>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Lecture <?php echo($lessonNumber) ?>: <small><?php echo(TITLE) ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
			
				<h2>Moustache Types</h2>
				<ul>
					<?php
						for ($i = 0; $i < count($moustaches); $i++) { //update the range when i have learnt how to find the length of an array
							echo('<li>'.$moustaches[$i].'</li>');
						};
					?>
				</ul>
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<?php echo($date)?> - <?php echo($name)?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
