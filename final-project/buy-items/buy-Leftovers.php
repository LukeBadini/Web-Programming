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
			$buyQuantity = $_POST['buyLeftovers'];
			
			$query = "select quantity from inventory where item_id = 3";
			$quantity = $db -> query($query);
			$quantity2 = $quantity -> fetchAll();
			$quantity3 = $quantity2[0]['quantity'] + $buyQuantity;
			
			$query2 = "update inventory 
						set quantity = $quantity3 
						where item_id = 3";
			$db -> query($query2);
			
			$query3 = "select u.money, u.user_id, i.price from users as u, items as i 
						where i.item_id = 3 && u.username = '$username'";
			$info = $db -> query($query3);
			$info2 = $info -> fetchAll();
			$money = $info2[0]['money'];
			$price = $info2[0]['price'];
			$user_id = $info2[0]['user_id'];
			
			$transaction = $buyQuantity * $price;
			$money2 = $money - $transaction;
			
			$query4 = "update users 
						set money = $money2 
						where user_id = $user_id";
			$db -> query($query4);
		?>
		<div class="content">
			<?php
				include("../header.php");
				include("../sidebar.php");
			?>
			<p class="buy-item">You bought <?= $buyQuantity ?> Leftovers.</p>
		</div>
		<?php
			$db = NULL;
		?>
	</body>
</html>