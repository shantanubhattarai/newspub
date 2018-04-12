<?php
	include 'connection.php';
	
	if(session_status() == PHP_SESSION_NONE)
		session_start();
	
	if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false) {
		header('location:/login.php');
	}
?>