<!DOCTYPE html>
<html>
	<head>
		<title>Store</title>
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
			$query = "select * from items";
			$items = $db -> query($query);
			$items2 = $items -> fetchAll();
		?>
		<div class="content">
			<?php
				include("../header.php");
				include("../sidebar.php");
			?>
			
			<div id="store">
				<h1>Store</h1>
				<table>
					<?php
						$length = count($items2);
						for ($i = 0; $i < $length; $i++) {
					?>
							<tr>
								<td><img src="../images/<?= $items2[$i]['name'] ?>.png" alt="<?= $items2[$i]['name'] ?>" /></td>
								<td><?= $items2[$i]['description'] ?></td>
								<td>Price: <?= $items2[$i]['price'] ?> 
									<form action="../buy-items/buy-<?= $items2[$i]['name'] ?>.php?username=<?= $username ?>" method="post">
										<select name="buy<?= $items2[$i]['name'] ?>" size = 1>
											<option>0</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
										</select>
										<input type="submit" value="Buy" />
									</form>
								</td>
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