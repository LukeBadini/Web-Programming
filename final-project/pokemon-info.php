<!DOCTYPE html>
<html>
	<head>
		<title>Pokémon Info</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="../virtual-pet.css" />
	</head>
	
	<body>
		<?php
			$username = 'RandomUser123';
			if (isset ($_GET['username'])) {
				$username = $_GET['username'];
			}
			
			include("../database-access.php");
			$query = "select p.* from pokemon as p, users as u 
						where p.user_id = u.user_id && u.username = '$username'";
			$poke_info = $db -> query($query);
			$poke_info2 = $poke_info -> fetchAll();
		?>
		<div class="content">
			<?php
				include("../header.php");
				include("../sidebar.php");
			?>
			
			<div id="pokemon-info">
				<h1>Pokémon Info</h1>
				<img src="../images/<?= $poke_info2[0]['name'] ?>.png" alt="<?= $poke_info2[0]['name'] ?>" />
				
				<table>
					<tr>
						<td class="first">Name</td>
						<td class="second"><?= $poke_info2[0]['name'] ?></td>
					</tr>
					<tr>
						<td class="first">Happiness</td>
						<td class="second"><?= $poke_info2[0]['happiness'] ?></td>
					</tr>
					<tr>
						<td class="first">Hunger</td>
						<td class="second"><?= $poke_info2[0]['hunger'] ?></td>
					</tr>
					<tr>
						<td class="first">HP</td>
						<td class="second"><?= $poke_info2[0]['hp'] ?></td>
					</tr>
					<tr>
						<td class="first">Attack</td>
						<td class="second"><?= $poke_info2[0]['attack'] ?></td>
					</tr>
					<tr>
						<td class="first">Defense</td>
						<td class="second"><?= $poke_info2[0]['defense'] ?></td>
					</tr>
					<tr>
						<td class="first">Special Attack</td>
						<td class="second"><?= $poke_info2[0]['special_attack'] ?></td>
					</tr>
					<tr>
						<td class="first">Special Defense</td>
						<td class="second"><?= $poke_info2[0]['special_defense'] ?></td>
					</tr>
					<tr>
						<td class="first">Speed</td>
						<td class="second"><?= $poke_info2[0]['speed'] ?></td>
					</tr>
				</table>
			</div>
		</div>
		<?php
			$db = NULL;
		?>
	</body>
</html>