<?php
	include 'connection.php';
	if(session_status() == PHP_SESSION_NONE)
		session_start();
	
	if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
		if($_SESSION['role'] == 1){
			header('location:/dashboard_admin.php');
		}else{
			header('location:/overview.php');
		}
	}
?>