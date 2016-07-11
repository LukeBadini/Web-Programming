<!DOCTYPE html>
<!--
	Author: Luke Badini
	Version: October 2015
	
	Project 3: PHP Practice: Task 3
	This web page shows a box with a color that changes when you click on the color name
-->
<html>
	<head>
		<title>Colors</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="colors.css" />
	</head>
	<body>
		<h1>Colors</h1>

		<!-- Add your code here. -->
		
		<?php
		$color = "pink";
		if (isset($_GET["color"])) {
			$color = $_GET["color"];
		}
		?>
		
		<div class="colored <?= $color ?>">
		</div>
		
		<nav>
			Pick a color
			<ul>
				<li><a href="colors.php?color=red">red</a></li>
				<li><a href="colors.php?color=green">green</a></li>
				<li><a href="colors.php?color=blue">blue</a></li>
				<li><a href="colors.php?color=pink">pink</a></li>
				<li><a href="colors.php?color=yellow">yellow</a></li>
			</ul>
		</nav>
		
		
		<footer>
			<a class="validator" href="http://validator.w3.org/check?uri=referer">Valid HTML 5</a>
			<a class="validator" href="http://jigsaw.w3.org/css-validator/check/referer">Valid CSS</a>
		</footer>
	
	</body>
</html>
