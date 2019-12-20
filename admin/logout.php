<?php 

	session_start();
	// remove all session variables
	session_unset(); 
	if (empty($_SESSION['user_name'])) {
      header("Location: login.php");
    }

 ?>