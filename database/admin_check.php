<?php
	require_once 'authcheck.php';
	if($_SESSION['role'] != 1){
		header('location:/admin_login.php');
	}
?>