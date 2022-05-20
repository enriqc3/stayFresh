<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login/Signup</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/productsStyles.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
	</head>
	<body>
		<?php require ('navbar.inc.php'); ?>
		<?php require_once 'dbconfig.php'; ?>

	<?php

		// create a list of products from the database
		$db = get_connection();

		$allpost = $db->prepare("select * from Item");
		$allpost->execute();
		mysqli_stmt_bind_result($allpost, $itemNumber, $itemCount, $itemPrice, $storageType, $expirationDate,
			$itemLocation);
		
		$item_count = 0;
		while ($allpost->fetch()) {
			echo "<header class = products-Page>";
			echo "<div class='container pt-3'>";
				echo "<div class='row align-items-center justify-content-center'>";
					echo "<div class='col-md-4'>";
						echo "<div class='card mb-4'>";
							echo "<div class='card-body'>";
								echo "<h5 class='card-title'>Item Number: $itemNumber</h5>";
								echo "<h6 class='card-subtitle mb-2 text-muted'>Item Count: $itemCount</h6>";
								echo "<h6 class='card-subtitle mb-2 text-muted'>Item Price: $$itemPrice</h6>";
								echo "<h6 class='card-subtitle mb-2 text-muted'>Storage Type: $storageType</h6>";
								echo "<h6 class='card-subtitle mb-2 text-muted'>Expiration Date: $expirationDate</h6>";
								echo "<h6 class='card-subtitle mb-2 text-muted'>Item Location: $itemLocation</h6>";
							echo "</div>";
						echo "</div>";
					echo "</div>";
				echo "</div>";
			echo "</div>";
			echo "</header>";

			$item_count++;
		}
		$allpost->close();
	?>

	</body>
</html>
