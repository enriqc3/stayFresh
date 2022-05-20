<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Products</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/prodcutStyles.css" />
		<!--<link rel="stylesheet" href="css/loginStyles.css" /> -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
	</head>
	<body>
		<?php require ('navbar.inc.php'); ?>
		<?php require_once 'dbconfig.php'; ?>


	<header class= "about-header">
		<div class="container pt-3">
			<div class="row align-items-center justify-content-center">
				<div class="col-md-2">
					<h1>Inventory</h1>
				</div>
			</div>
			<div class="row align-items-center justify-content-center">
				<div class="col-md-3">
					<p> Browse our available inventory. </p>
					<p> The lowest prices, guaranteed!</p>
				</div>
			</div>
		</div>
	</header>

	<?php

		// create a list of products from the database
		$db = get_connection();

		$allpost = $db->prepare("select * from Item");
		$allpost->execute();
		mysqli_stmt_bind_result($allpost, $itemNumber, $itemCount, $itemPrice, $storageType, $expirationDate,
			$itemLocation);
		
		$item_count = 0;
		$item_count = 0;
		while ($allpost->fetch()) {
			if ($item_count % 3 == 0) {
			echo "<header class = products-Page>";
			echo "<div class='container pt-3'>";
				echo "<div class='row align-items-center justify-content-center'>";
					echo "<div class='col-md-4'>";
						echo "<div class='card mb-4'>";
							echo "<div class='card-body'>";
								echo "<h5 class='card-title'>Item Number: $itemNumber</h5>";
								echo "<h6 class='card-subtitle mb-2'>Price: $$itemPrice</h6>";
								echo "<h6 class='card-subtitle mb-2'>Item Location: $itemLocation</h6>";
								echo "<h6 class='card-subtitle mb-3'>Expiration Date: $expirationDate</h6>";
								echo "<h6 class='card-subtitle mb-2 text-muted'>Storage Type: $storageType</h6>";
								echo "<h6 class='card-subtitle mb-2 text-muted'>Qty available: $itemCount</h6>";
								//echo "<h7 class='card-subtitle mb-2 text-muted'>COUNTER: $item_count</h7>";
							echo "</div>";
						echo "</div>";
					echo "</div>";

			} else if ($item_count % 3 == 2) {
					echo "<div class='col-md-4'>";
						echo "<div class='card mb-4'>";
							echo "<div class='card-body'>";
								echo "<h5 class='card-title'>Item Number: $itemNumber</h5>";
								echo "<h6 class='card-subtitle mb-2'>Price: $$itemPrice</h6>";
								echo "<h6 class='card-subtitle mb-2'>Item Location: $itemLocation</h6>";
								echo "<h6 class='card-subtitle mb-3'>Expiration Date: $expirationDate</h6>";
								echo "<h6 class='card-subtitle mb-2 text-muted'>Storage Type: $storageType</h6>";
								echo "<h6 class='card-subtitle mb-2 text-muted'>Qty available: $itemCount</h6>";
								//echo "<h7 class='card-subtitle mb-2 text-muted'>COUNTER: $item_count</h7>";
							echo "</div>";
						echo "</div>";
					echo "</div>";
				echo "</div>";
			echo "</div>";
			echo "</header>";
			
			} else {
				echo "<div class='col-md-4'>";
					echo "<div class='card mb-4'>";
						echo "<div class='card-body'>";
							echo "<h5 class='card-title'>Item Number: $itemNumber</h5>";
							echo "<h6 class='card-subtitle mb-2'>Price: $$itemPrice</h6>";
							echo "<h6 class='card-subtitle mb-2'>Item Location: $itemLocation</h6>";
							echo "<h6 class='card-subtitle mb-3'>Expiration Date: $expirationDate</h6>";
							echo "<h6 class='card-subtitle mb-2 text-muted'>Storage Type: $storageType</h6>";
							echo "<h6 class='card-subtitle mb-2 text-muted'>Qty available: $itemCount</h6>";
							//echo "<h7 class='card-subtitle mb-2 text-muted'>COUNTER: $item_count</h7>";
						echo "</div>";
					echo "</div>";
				echo "</div>";
			}
				$item_count++;
		}
		$allpost->close();
	?>

	</body>
</html>
