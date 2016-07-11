<?php
	$username = 'RandomUser123';
	if (isset ($_GET['username'])) {
		$username = $_GET['username'];
	}
?>
<nav>
	<img src="../images/navigation.png" alt="navigation" />
	<ul>
		<li><a href="../inventory/inventory.php?username=<?= $username ?>">Inventory</a></li>
		<li><a href="../store/store.php?username=<?= $username ?>">Shop</a></li>
		<li><a href="../pokemon-info/pokemon-info.php?username=<?= $username ?>">Pokémon Info</a></li>
		<li><a href="../user-info/user-info.php?username=<?= $username ?>">User Info</a></li>
	</ul>
</nav>