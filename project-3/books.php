<!DOCTYPE html>
<!--
	Author: Luke Badini
	Version: October 2015
	
	Project 3: PHP Practice: Task 2
	This web page shows a list of books and their authors read by a file books.txt
-->
<html>
	<head>
		<title>Books</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="books.css" />
	</head>
	<body>
		<h1>Books</h1>

		<!-- Add your code here. -->
		<ul>
			<?php
				$books = file("books.txt");
				foreach ($books as $entry) {
					
					/* in the $info array, index 0 represents the book title
					 * while index 1 represents the author's name */
					$info = explode(":::", $entry);
			?>
			<li>
				<span class="title"><?= $info[0] ?></span> by <span class="author"><?= $info[1] ?></span>
			</li>
			<?php
				}
			?>
		</ul>

		
		<footer>
			<a class="validator" href="http://validator.w3.org/check?uri=referer">Valid HTML 5</a>
			<a class="validator" href="http://jigsaw.w3.org/css-validator/check/referer">Valid CSS</a>
		</footer>

	</body>
</html>
