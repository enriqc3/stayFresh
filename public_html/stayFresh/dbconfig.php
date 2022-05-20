<?php

date_default_timezone_set('America/Los_Angeles');

if (session_status() == PHP_SESSION_NONE) {
   session_start();
}

function get_connection() {
	static $connection;
	
	if (!isset($connection)) {
		$connection = mysqli_connect('localhost', 'stay_fresh', 'hserf_yats3420S22', 
			'stay_fresh') or die(mysqli_connect_error());
	}
	if ($connection === false) {
		echo "Unable to connect to database<br/>";
		echo mysqli_connect_error();
	}

	return $connection;
}

?>