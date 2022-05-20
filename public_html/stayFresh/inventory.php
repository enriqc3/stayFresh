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

	<?php
		$db = get_connection();
		$allItems = $db->query("select itemNumber from Item");
	?>

	<header class= "about-header">
	<div class="container pt-3">
		<div class="row align-items-center justify-content-center">
		<div class="col-md-2">		
		<h1>Manage Inventory</h1>
		</div>
		</div>		
		<div class="row align-items-center justify-content-center">
		<div class="col-md-3">
		</div>
		</div>

		<hr/><br>
		<div class="row align-items-start justify-content-center">
		<div class="col-md-3">
		<p><b> Add New Inventory</b> </p>
		<form action="inventory.php" method="POST">
			<label>Item #   <input type="text" name="itemnumber" placeholder="123456" maxlength=9 required/>
			<label>Count    <input type="text" name="itemcount"  placeholder="321" required/>
			<label>Price    <input type="text" name="price" placeholder="99.99" required/>
			<label>Storage  <input type="text" name="storage" placeholder="Shelf" required/>
			<label>Expiration Date <input type="date" name="expdate" required/>
			<label>Location <input type="text" name="itemloc" placeholder="Z9" required/>
			<div class="row align-items-start justify-content-right">
			<input type="submit" name="additem" value="Add item" >	
			</div>
		</form>
		</div>
		</div>

		<hr/><br>
		<div class="row align-items-center justify-content-center">
		<div class="col-md-3">
		<p><b> Edit Inventory </b></p>
		<form action="inventory.php" method="POST">
			<label>Item #   
				<select name="itemNumbers">
				<?php
					while($rows = $allItems->fetch_assoc()) {
						$item_numbers = $rows['itemNumber'];
						echo "<option value='$item_numbers'>$item_numbers</option>";
					}
				?>
				</select>
			<label>Count    <input type="text" name="editemcount"  placeholder="321" />
			<label>Price    <input type="text" name="edprice" placeholder="99.99" />
			<label>Storage  <input type="text" name="edstorage" placeholder="Shelf" />
			<label>Expiration Date <input type="date" name="edexpdate" />
			<label>Location <input type="text" name="editemloc" placeholder="Z9" />
			<button type="submit" class="btn btn-primary">Update</button>
			<button type="submit" class="btn btn-primary">Delete</button>
		</form>
		</div>
		</div>

		<hr/><br>
		</div>
	</header>


</body>
</html>
