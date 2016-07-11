<!DOCTYPE html>
<html>
	<head>
		<title>User Info</title>
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
			$query = "select * from users where username = '$username'";
			$user_info = $db -> query($query);
			$user_info2 = $user_info -> fetchAll();
		?>
		<div class="content">
			<?php
				include("../header.php");
				include("../sidebar.php");
			?>
			
			<div id="user_info">
				<div id="user_info_img">
					<img src="../images/<?= $user_info2[0]['gender'] ?>.png" alt="<?= $user_info2[0]['gender'] ?> trainer" />
				</div>
				<div id="user_info_table">
					<table>
						<tr>
							<td class="first">Username:</td>
							<td><?= $user_info2[0]['username'] ?></td>							
						</tr>
						<tr>
							<td class="first">Gender:</td>
							<td><?= $user_info2[0]['gender'] ?></td>
						</tr>
						<tr>
							<td class="first">Money:</td>
							<td><?= $user_info2[0]['money'] ?></td>
						</tr>
						<tr>
							<td class="first">Creation Date:</td>
							<td><?= $user_info2[0]['creation_date'] ?></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<?php
			$db = NULL;
		?>
	</body>
</html>