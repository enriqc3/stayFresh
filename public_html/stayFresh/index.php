
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Stay Fresh</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/styles.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
	</head>
	<body>
	<?php require ('navbar.inc.php'); ?>

		<header class= "page-header gradient">
			<div class= "container pt-3">
				<div class="row align-items-center justify-content-center">
					<div class="col-md-5">
						<h2> Welcome to Stay Fresh </h2>
						<p> We are a team of dedicated individuals 
							who are dedicated to providing you with 
							the best possible experience. 
						</p>
						<p> - Keeping it fresh since 2021 </p>
					</div>
						<div class="col-md-5">
							<img 
								src="imgs/oranges.jpg"
								alt="header image"
								style = "object-fit:scale-down;
								max-width: 90%;
								height: auto;"
								/>
						</div>
				</div>
			</div>
		</header>
		<header class= "products-eggs gradient">
			<div class= "container pt-3">
				<div class="row align-items-center justify-content-center">
					<div class="col-md-5">
						<img 
							src="imgs/eggs.jpg"
							alt="header image"
							style = "object-fit:scale-down;
							max-width: 90%;
							max-height: auto;"
							/>
					</div>
					<div class="col-md-5">
						<p> We have the best products available </p>
					</div>
				</div>
			</div>
		</header>
		<footer class ="footer in-text">
			<div class="container-fluid text-center"></div>
				<span>Stay Fresh Copyright 2022 </span>
			</div>
		</footer>
		<script src= "js/bootstrap.min.js"></script>
	</body>
</html>