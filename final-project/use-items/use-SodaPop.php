<!DOCTYPE html>
<html>
	<head>
		<title>Use Item</title>
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
			
			$query = "select quantity from inventory where item_id = 4";
			$quantity = $db -> query($query);
			$quantity2 = $quantity -> fetchAll();
			
			if ($quantity2[0]['quantity'] == 0) {
		?>
				<div class="content">
					<?php
						include("../header.php");
						include("../sidebar.php");
					?>
					<p class="use-item">You have no Soda Pops to use.</p>
				</div>
		<?php
			}
			else {
				$quantity3 = $quantity2[0]['quantity'] - 1;
				
				$query2 = "update inventory 
							set quantity = $quantity3 
							where item_id = 4";
				$db -> query($query2);
				
				$query3 = "select p.happiness from pokemon as p, users as u 
							where p.user_id = u.user_id && u.username = '$username'";
				$happiness = $db -> query($query3);
				$happiness2 = $happiness -> fetchAll();
				$happiness3 = $happiness2[0]['happiness'];
				
				if ($happiness3 > 89) {
					$happiness3 = 100;
				}
				else {
					$happiness3 += 10;
				}
					
				$query4 = "select user_id from users where u.username = '$username'";
				$user_id = $db -> query($query4);
				$user_id2 = $user_id -> fetchAll();
				$user_id3 = $user_id2[0]['user_id'];
				
				$query5 = "update pokemon 
						set happiness = $happiness3 
						where user_id = $user_id3";
				$db -> query($query5);
			?>
			<div class="content">
				<?php
					include("../header.php");
					include("../sidebar.php");
				?>
				<p class="use-item">You used a Soda Pop on your Pokemon. Its happiness increased by 10.</p>
			</div>
		<?php
			}
			$db = NULL;
		?>
	</body>
</html>