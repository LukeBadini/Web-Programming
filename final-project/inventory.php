<!DOCTYPE html>
<html>
	<head>
		<title>Inventory</title>
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
			$query = "select inv.* from inventory as inv, users as u 
						where inv.user_id = u.user_id && u.username = '$username'";
			$inventory = $db -> query($query);
			$inventory2 = $inventory -> fetchAll();
		?>
		<div class="content">
			<?php
				include("../header.php");
				include("../sidebar.php");
			?>
			
			<div id="inventory">
				<h1>Inventory</h1>
				<table>
					<?php
						$length = count($inventory2);
						for ($i = 0; $i < $length; $i++) {
							$item_id = $inventory2[$i]['item_id'];
							$query2 = "select i.* from items as i  
										where i.item_id = $item_id";
							$item = $db -> query($query2);
							$item2 = $item -> fetchAll();
					?>
							<tr>
								<td><img src="../images/<?= $item2[0]['name'] ?>.png" alt="<?= $item2[0]['name'] ?>" /></td>
								<td><?= $item2[0]['description'] ?></td>
								<td>Quantity: <?= $inventory2[$i]['quantity'] ?></br>
									<form action="../use-items/use-<?= $item2[0]['name'] ?>.php?username=<?= $username ?>" method="post">
										<input type="submit" value="Use" /></td>
									</form>
							</tr>
					<?php
						}
					?>
				</table>
			</div>
		</div>
		<?php
			$db = NULL;
		?>
	</body>
</html>