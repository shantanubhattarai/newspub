<!-- TODO: UPGRADE VALIDATION -->
<?php
	session_start();
	require_once('connection.php');
	$name = $email = $password1 = $password2 ="";

	$target= '/media/';
	$default_file = $target."default.png";
	if(isset($_FILES["image"]) && $_FILES["image"]["name"]!=null){
		print_r($_FILES['image']);
		$target_file=$target.basename($_FILES["image"]["name"]);
		$filetype=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$check = getimagesize($_FILES["image"]["tmp_name"]);
		$checkfiletype = array('png','jpg','jpeg');
	}


	if(isset($_POST['submit'])){
		$name = mysqli_real_escape_string($conn,$_POST['name']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$password1 = mysqli_real_escape_string($conn,$_POST['password1']);
		$password2 = mysqli_real_escape_string($conn,$_POST['password2']);

		if(($password1 == $password2) && (strlen($password1) >= 8)){
	        $password1 = md5($password2);
			if(isset($target_file)){
				if(move_uploaded_file($_FILES["image"]["tmp_name"], '..'.$target_file)){
					$image_path = $target_file;
				}
			}else{
				$image_path = $default_file;
			}

			echo $image_path;
		        $hash = md5(rand(0,1000));

		        $to=$email;
		        $subject="Email Verification";
		        $message="
		        	Thanks for signing up!
						Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
						Please click this link to activate your account:
						http://budgetx.dev/verify.php?email=$email&hash=$hash
		        ";
		        $headers = "From:noreply@budgetx.dev" . "\r\n"; // Set from headers
				if(mail($to, $subject, $message)){
					$_SESSION['message'] = "Email has been sent. Please verify.";
					$sql = "INSERT INTO users (name,email,password,hash,image_path)
		                VALUES ('$name','$email','$password1','$hash','$image_path')";
		        	mysqli_query($conn,$sql);
					header('location:/waiting.php');
				}else{
					$_SESSION['error'] = "Email invalid.";
					header('location:/register.php');
				} // Send our email
			}else{
			    $_SESSION['error'] = "The password is not long enough or they dont match";
		        header('location:/register.php');
			}
		}
?>