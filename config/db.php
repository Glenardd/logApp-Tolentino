<?php
	// Create Connection
	$DB_HOST = "sql6.freesqldatabase.com";
	$DB_USER = "sql6525697";
	$DB_PASS = "7bCzTmbZmD";
	$DB_NAME = "sql6525697";
	$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

	// Check Connection
	if(mysqli_connect_errno()){
		// Connection Failed
		echo 'Failed to connect to MySQL '. mysqli_connect_errno();
	}
?>