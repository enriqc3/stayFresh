<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login/Signup</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/loginStyles.css" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
	</head>
	<body>
	<?php require ('navbar.inc.php'); ?>

	<!--create a login form-->
	<header class= "login">
		<div class="container">
			<div class="row align-center justify-content-center">
				<div class="col">
					<form action="login.php" method="post">
						<div class="form-group">
							<!--label for="username">Username</!--label-->
							<input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
						</div>
						<div class="form-group">
							<!--label for="password">Password</!--label-->
							<input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
						</div>
						<button type="submit" class="btn btn-primary">Login</button>
						<form action="signup.php" method="post">
							<button type="submit" class="btn btn-primary">Signup</button>
						</form>
					</form>
				</div>
			</div>
		</div>
	</header>
	<script src= "js/bootstrap.min.js"></script>
	</body>
</html>