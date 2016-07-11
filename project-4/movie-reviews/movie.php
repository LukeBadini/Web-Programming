<!DOCTYPE html>
<!--
	Author: Luke Badini
	Version: October 2015
	
	Project 4: Movie Review Part 2
	This web page shows movie reviews by reading files in from the moviefiles folder.
-->
<html>
	<head>
		<title>TMNT - Rancid Tomatoes</title>

		<meta charset="utf-8" />
		<link href="movie.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		
		<?php
			$film = "tmnt";
			if (isset($_GET["film"])) {
				$film = $_GET["film"];
			}
			
			$info = file("moviefiles/$film/info.txt");
			$title = $info[0];
			$year = $info[1];
			$rating = $info[2];
		?>
		
		<header>
			<img src="images/rancidbanner.png" alt="Rancid Tomatoes" />
		</header>

		
		<h1><?= $title ?> (<?= trim($year) ?>)</h1>

		<div class="content">
			<div class="overview">
				<img src="moviefiles/<?= $film ?>/overview.png" alt="general overview" />

				<dl>
					<?php
						$overview = file("moviefiles/$film/overview.txt");
						foreach ($overview as $element) {
							$info = explode(":", $element);
					?>
					<dt>
						<?= $info[0] ?>:
					</dt>
					<dd>
						<?= $info[1] ?>
					<?php 
						}
					?>
				</dl>
			</div>

			<div class="reviews">
				<div class="rating">
					<?php
						if (intval($rating) < 60) {
					?>
						<img src="images/rottenlarge.png" alt="Rotten" />
					<?php
						}
						else {
					?>
						<img src="images/freshlarge.png" alt="Fresh" />
					<?php
						}
					?>
 					<span><?= $rating ?>%</span>
				</div>
				
				<?php
					$reviews = glob("moviefiles/$film/*.txt");
				?>
				<div class="reviewcolumn">
					<?php
						for ($i = 2; $i < (count($reviews) + 2)/2; $i++) {
					?>
					<p class="review">
						<?php
							$reviewInfo = file($reviews[$i]);
							$text = trim($reviewInfo[0]);
							$freshness = trim($reviewInfo[1]);
							$critic = trim($reviewInfo[2]);
							$publication = trim($reviewInfo[3]);
							
							if ($freshness == "ROTTEN") {
						?>
							<img src="images/rotten.gif" alt="Rotten" />
						<?php
							}
							else {
						?>
							<img src="images/fresh.gif" alt="Fresh" />
						<?php
							}
						?>
						<q><?= $text ?></q>
					</p>
					<p class="critic">
						<img src="images/critic.gif" alt="Critic" />
						<?= $critic ?>
						<br />
						<span class="publication"><?= $publication ?></span>
					</p>
					<?php
						}
					?>
				</div>
				<div class="reviewcolumn">
					<?php
						for ($i = (count($reviews) +2)/2; $i < count($reviews); $i++) {
					?>
					<p class="review">
						<?php
							$reviewInfo = file($reviews[$i]);
							$text = $reviewInfo[0];
							$freshness = trim($reviewInfo[1]);
							$critic = $reviewInfo[2];
							$publication = $reviewInfo[3];
							
							if ($freshness == "ROTTEN") {
						?>
							<img src="images/rotten.gif" alt="Rotten" />
						<?php
							}
							else {
						?>
							<img src="images/fresh.gif" alt="Fresh" />
						<?php
							}
						?>
						<q><?= $text ?></q>
					</p>
					<p class="critic">
						<img src="images/critic.gif" alt="Critic" />
						<?= $critic ?>
						<br />
						<span class="publication"><?= $publication ?></span>
					</p>
					<?php
						}
					?>
				</div>
			</div>

			<p class="contentfooter">
				(1-10) of 88
			</p>
		</div>

	</body>
</html>
