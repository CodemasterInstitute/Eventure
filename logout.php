<?php 
	session_start();
	unset($_SESSION['username']); //  was the parameter
	session_destroy();
    echo 'You have been successfully logged out.'
?>
