<h1>Results for <?= $firstname ?> <?= $lastname ?></h1>
<h2>Films with <?= $firstname ?> <?= $lastname ?></h2>

<!-- Add a check to see if the actor has been in no movies -->		
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