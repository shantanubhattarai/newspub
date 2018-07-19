<!DOCTYPE html>
<html>
<?php
	include'partial_head.php';
	require_once 'database/connection.php';
	if(session_status() == PHP_SESSION_NONE)
		session_start();
?>
<body>
<?php include'partial_nav.php'; ?>
<div class="container col-sm-12 col-md-12">
<?php
	//MAY USE LATER
	// if(isset($_SESSION['message']) && $_SESSION['message']!=""){
	// 	echo "<div class='alert alert-success alert-dismissible'>
	// 		  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
	// 			<span aria-hidden='true'><i class='material-icons'>clear</i></span>
	// 		  </button>"
	// 		  .$_SESSION['message'].
	// 		  "</div>";
	// 	$_SESSION['message']="";
	// }

	// if(isset($_SESSION['error']) && $_SESSION['error']!=""){
	// 	echo "<div class='alert alert-danger alert-dismissible'>
	// 			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
	// 			<span aria-hidden='true'><i class='material-icons'>clear</i></span>
	// 			</button>"
	// 			.$_SESSION['error'].
	// 			"</div>";
	// 	$_SESSION['error']="";
	// }
?>
