<!--
	Author: Luke Badini
	Version: November 2015
	
	Project 5: One Degree of Kevin Bacon
	This web page allows users to search for actors' roles in movies with or without Kevin Bacon.
-->
<!DOCTYPE html>
<html>
  <head>
    <title>My Movie Database (MyMDb)</title>
    <meta charset="utf-8" />
    <link href="images/favicon.png" type="image/png" rel="shortcut icon" />
    <link href="bacon.css" type="text/css" rel="stylesheet" />
  </head>

	<body>
		<div id="frame">
			<?php
	      		include("common-header.php");
	     	?>
	
			<main>
				<h1>The One Degree of Kevin Bacon</h1>
				<p>
				  Type in an actor's name to see if he/she was ever in a movie with Kevin Bacon!
				</p>
				<p>
				  <img src="images/kevin_bacon.jpg" alt="Kevin Bacon" />
				</p>
				<?php
					include("common-forms.php");
				?>
			</main>
	    	<?php 
	    		include("common-footer.php");
			?>
		</div> <!-- end of #frame div -->
	</body>
</html>



