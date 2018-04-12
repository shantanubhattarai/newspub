<!--TODO:  REWORK THIS -->
<?php
	session_start();
	require_once('connection.php');
	$email = $password = '';

	if(isset($_POST['submit'])){
		$email = mysqli_real_escape_string($conn, $_POST['email_login']);
		$password = mysqli_real_escape_string($conn, $_POST['password_login']);
		$password = md5($password);

		$query = "SELECT * FROM users";
		$result = mysqli_query($conn, $query);

		while($row = mysqli_fetch_assoc($result)){
			if(($row['email'] == $email) && ($row['password'] == $password) && $row['role_id'] == 1) {
				if($row['active'] == 1){
					$_SESSION['logged_in'] = true;
					$_SESSION['user'] = $row['id'];
					$_SESSION['role'] = $row['role_id'];
					header('location:/dashboard_admin.php');
				}else{
					header('location:/waiting.php');
				}
			}
			else{
				$_SESSION['error'] = "The email or password is wrong";
				header('location:/admin_login.php');
			}
		}
	}
?>