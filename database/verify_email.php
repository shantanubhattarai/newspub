<?php
session_start();
	if(isset($_GET['email'])&& !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
		// Verify data
		$email = mysqli_escape_string($conn,$_GET['email']); // Set email variable
		$hash = mysqli_escape_string($conn,$_GET['hash']); // Set hash variable
		$result = mysqli_query($conn,"SELECT email, hash, active FROM users WHERE email='".$email."' AND hash='".$hash."' AND active='0'"); 
		$match  = mysqli_num_rows($result);
		if($match > 0){
		// We have a match, activate the account
			mysqli_query($conn,"UPDATE users SET active='1' WHERE email='".$email."' AND hash='".$hash."' AND active='0'");
			$_SESSION['message'] = "Your account has been activated, you can now login";
		}else{
			$_SESSION['error'] = "Your account has not been activated,try again.";
		}
	}else{
		$_SESSION['error'] = "You can't just do that.";
	}
?>