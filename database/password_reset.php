<?php
	
	require_once'connection.php';

	if(isset($_POST)& !empty($_POST)){
		$email=mysqli_real_escape_string($conn,$_POST["email"]);
		$sql="SELECT hash,name FROM users WHERE email='$email'";
		$result=mysqli_query($conn,$sql);
		$count=mysqli_num_rows($result);

		if($count==1){
			$row= mysqli_fetch_assoc($result);
			$to=$email;
			$hash = $row['hash'];
			
			$subject="Password Reset Request";
			
			$message="Please click the link below. 
				http://budgetx.dev/reset.php?email=$email&hash=$hash
			";

			$headers = "From:noreply@budgetx.dev" . "\r\n"; // Set from headers
			
			if(mail($to, $subject, $message)){
				$_SESSION['message'] = "Password has been sent to login!!";
			} // Send our email
			echo "Email sent.";
		}else{
			echo"Failed to recover password";
		}
	}else{
			echo"Email does not exist in the database";
		}


?>