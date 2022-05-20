	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
			<a class="navbar-brand" href="index.php"><img src="imgs/logo5.png"/></a>
			<button 
				class="navbar-toggler" 
				type="button" 
				data-bs-toggle="collapse" 
				data-bs-target="#navbarNav" 
				aria-controls="navbarNav" 
				aria-expanded="false" 
				aria-label="Toggle navigation"
			>
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
				<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.php">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="products.php">Products</a>
				</li>
				<!-- add login button if not logged in -->
				<?php if(!isset($_SESSION['loggedin'])){ ?>
					<li class="nav-item">
						<a class="nav-link" href="login.php">Login</a>
					</li>
				<?php } ?>
				<!-- add logout button if logged in -->
				<?php if(isset($_SESSION['loggedin'])){ ?>
					<li class="nav-item">
						<a class="nav-link" href="logout.php">Logout</a>
					</li>
				<?php } ?>
				</ul>
			</div>
		</div>
	</nav>
