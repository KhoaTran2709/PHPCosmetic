<?php
	$conn = mysqli_connect("localhost", "root", "", "cosmetic");

	// Check if connection established 
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}
?>

