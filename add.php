<?php

	// Database connection
	include('includes/dataConn.php');

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$category = mysqli_real_escape_string($conn, $_POST['category']);
	$code = mysqli_real_escape_string($conn, $_POST['code']);

	// create sql
	$sql = "INSERT INTO code(name, category, code_module) VALUES('$name', '$category', '$code')";

	// Save to database and check
	if(mysqli_query($conn, $sql)) {
		// Success
		header('Location: settings.php');
	} else {
		// Error
		echo 'query error: ' . mysqli_error($conn);
	}

?>
