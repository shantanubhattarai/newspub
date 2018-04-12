<?php
	if(isset($_GET['email'])&& !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
		// Verify data
		$email = mysqli_escape_string($conn,$_GET['email']); // Set email variable
		$hash = mysqli_escape_string($conn,$_GET['hash']); // Set hash variable
		$result = mysqli_query($conn,"SELECT email, hash, active FROM users WHERE email='$email' AND hash='$hash'"); 
		$match  = mysqli_num_rows($result);
		if($match > 0){
			$sql = "UPDATE users SET active='1' WHERE email='$email' AND hash='$hash'";
			mysqli_query($conn,$sql);
		}else{
			header('location:/index.php');
		}
	}else{
		header('location:/index.php');
	}

?>