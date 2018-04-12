<!-- TODO: PUT A FEW FINISHES HERE -->
<?php
	include 'connection.php';
	session_start();
	if(isset($_POST['confirm'])){
		$password_old = mysqli_real_escape_string($conn,$_POST['password_old']);
		$password_new1 = mysqli_real_escape_string($conn,$_POST['password_new1']);
		$password_new2 = mysqli_real_escape_string($conn,$_POST['password_new2']);
		$uid=$_SESSION['user'];
		$result=mysqli_query($conn,"SELECT password FROM users WHERE id=$uid");
		if($row=mysqli_fetch_assoc($result))
		{
			if(md5($password_old)==$row['password']){
				if(($password_new1 == $password_new2) && (strlen($password_new1) >= 8)){
					$password = md5($password_new1);
					$sql = "UPDATE users SET password = '$password' WHERE id=$uid";
					$result = mysqli_query($conn,$sql);
					$_SESSION['message'] = "Password changed successfully.";
					header('location:/overview.php/?type=profile');
				}else{
					$_SESSION['error'] = "New password is not long enough or they dont match";
			        header("location:/overview.php/?type=edit_profile");
				}
			}else{
				$_SESSION['error']= "Old password doesn't match";
				header("location:/overview.php/?type=edit_profile");
			}
		}

	}

?>