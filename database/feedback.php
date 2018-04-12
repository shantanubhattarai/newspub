<?php
	session_start();
	require_once('connection.php');

	if(isset($_POST['submit'])){
		$title = mysqli_real_escape_string($conn, $_POST['title']);
		$body = $_POST['body'];
		$uid = $_SESSION['user'];
		$query = "INSERT INTO feedback(title, body,user_id) VALUES ('$title', '$body', '$uid') ";
		if(!mysqli_query($conn, $query)){
			$_SESSION['error'] = "There was an error sending the feedback. Please try again.";
			header('location:/overview.php?type=feedback');
		}
		else{
			$_SESSION['message'] = "Feedback sent.";
			header('location:/overview.php');
		}
		
	}
?>