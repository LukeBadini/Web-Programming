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
		<?php
			/* I wasn't able to figure out the "Find an ID for a given actor's name" part */
		
			include("database-access.php");
			
			$firstname = $_GET['firstname'];
			$lastname = $_GET['lastname'];
			
			$query = "select m.name, m.year, a.film_count from movies as m, actors as a, roles as r 
						where a.first_name like ('%$firstname%') && a.last_name like ('%$lastname%') 
						&& a.id = r.actor_id && m.id = r.movie_id 
						order by m.year desc, m.name";
			$rows = $db -> query($query);
			
			
			include("common-header.php");
		?>
		<main>
			<h1>Results for <?= $firstname ?> <?= $lastname ?></h1>
			<h2>Films with <?= $firstname ?> <?= $lastname ?></h2>
			<?php
				if ($rows -> rowCount() > 0) {
			?>
			<table class="results">
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Year</th>
				</tr>
				<?php
					$movieCount = 1;
					foreach ($rows as $row) {
						if (($movieCount%2) == 0) {
				?>
							<tr>
								<td><?= $movieCount ?></td>
								<td><?= $row['name'] ?></td>
								<td><?= $row['year'] ?></td>
							</tr>
				<?php
						}
						else {
				?>
							<tr class="alt">
								<td><?= $movieCount ?></td>
								<td><?= $row['name'] ?></td>
								<td><?= $row['year'] ?></td>
							</tr>
						
				<?php
						}
						$movieCount++;
					}
				?>
			</table>
			<?php
				}
				else {
			?>
					<h3>Actor <?= $firstname ?> <?= $lastname ?> not found.</h3>
			
			<?php
				}
				include("common-forms.php");
			?>
		</main>
		<?php
			include("common-footer.php");
			
			$db = NULL;
		?>
	</body>
</html>