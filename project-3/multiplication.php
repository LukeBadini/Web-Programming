<!DOCTYPE html>
<!--
	Author: Luke Badini
	Version: October 2015
	
	Project 3: PHP Practice: Task 2
	This web page shows a multiplication table from 1 to 10
-->
<html>
	<head>
		<title>Multiplication Table</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="multiplication.css" />
	</head>
	<body>
		<h1>Multiplication Table</h1>
		
		<!-- Add your code here. -->
		<table>
			<?php
			for ($i = 1; $i <= 10; $i++) { 
			?>
				<tr>
					<?php
					for ($j = 1; $j <= 10; $j++) { 
					?>
						<td><?= $i ?> * <?= $j ?> = <?= $i * $j ?></td>
					<?php
					}
					?>
				</tr>
			<?php
			}
			?>
		</table>

		
		<footer>
			<a class="validator" href="http://validator.w3.org/check?uri=referer">Valid HTML 5</a>
			<a class="validator" href="http://jigsaw.w3.org/css-validator/check/referer">Valid CSS</a>
		</footer>
	</body>
</html>
