<?php
	session_start();
	require_once('connection.php');

	$i=1;
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
		 //change the values to upper case
		$first_name= strtoupper(mysqli_real_escape_string($conn,$_POST['first_name']));
		$middle_name = strtoupper(mysqli_real_escape_string($conn,$_POST['middle_name']));
		$last_name = strtoupper(mysqli_real_escape_string($conn,$_POST['last_name']));
		$no_of_contacts = mysqli_real_escape_string($conn,$_POST['no_contacts']);
		$dob = mysqli_real_escape_string($conn,$_POST['dob']);
		$citizenship_no = mysqli_real_escape_string($conn,$_POST['citizenship_no']);
		$category = mysqli_real_escape_string($conn,$_POST['category']);
		$date_enrolled = mysqli_real_escape_string($conn,$_POST['date_enrolled']);
		$father_first_name = strtoupper(mysqli_real_escape_string($conn,$_POST['father_first_name']));
		$father_middle_name = strtoupper(mysqli_real_escape_string($conn,$_POST['father_middle_name']));
		$father_last_name = strtoupper(mysqli_real_escape_string($conn,$_POST['father_last_name']));

		if(isset($target_file)){
			if(move_uploaded_file($_FILES["image"]["tmp_name"], '..'.$target_file)){
				$image_path = $target_file;
			}
		}else{
			$image_path = $default_file;
		}
		$query = "insert into staff_list(first_name,middle_name,last_name,dob,citizenship_no,photo,category,date_enrolled,father_first_name,father_middle_name,father_last_name)
		values('$first_name','$middle_name','$last_name','$dob','$citizenship_no','$image_path','$category','$date_enrolled','$father_first_name','father_middle_name','father_last_name')";
		
		if(mysqli_query($conn,$query)){
			header('location:../staff_list.php');
		}
		else{
			echo "ERROR IN INSETING TO DATBASE";
		}

		$query = mysqli_query($conn,"select id from staff_list where dob='$dob' and citizenship_no='$citizenship_no'");
		$row = mysqli_fetch_assoc($query);
		$staff_id = $row['id'];


		while($i<=$no_of_contacts){
			$temp = mysqli_real_escape_string($conn,$_POST["contact".$i]);
			$query = "insert into contact_number(staff_id,contact_number)
						values('$staff_id','$temp')";
			mysqli_query($conn,$query);
			$i++;
		}

	}

?>