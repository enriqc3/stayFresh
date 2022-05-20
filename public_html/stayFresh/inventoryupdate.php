<?php

$itemNumber = $_POST["itemNumbers"];
$itemCount = $_POST["editemcount"];
$itemPrice = $_POST["edprice"];
$storageType = $_POST["edstorage"];
$expirationDate = $_POST["edexpdate"];
$itemLocation = $_POST["editemloc"];


require_once 'dbconfig.php'; 
$conn = get_connection();

$sql = "update Item set itemCount='$itemCount', itemPrice='$itemPrice', storageType='$storageType', expirationDate='$expirationDate', itemLocation='$itemLocation' where itemNumber='$itemNumber'";

if ($conn->query($sql) === TRUE) {
	echo "Records updated: ".$itemNumbers."-".$itemCount."-".$itemPrice."-".$storageType"-".$expirationDate"-".$storageType;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>