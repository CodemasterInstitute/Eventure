<?php
	define('DB_HOST', '54.153.169.253:3306');
	define('DB_USER', 'jeroen');
	define('DB_PASS', 'wwwquhiquq');
    define('DB_NAME', 'jeroen_events');
    
    	// Create Connection
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	// Check Connection
	if(mysqli_connect_errno()){
		// Connection Failed
		echo 'Failed to connect to MySQL '. mysqli_connect_errno();
	}
