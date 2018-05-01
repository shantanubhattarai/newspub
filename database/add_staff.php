<?php
	session_start();
	require_once('connection.php');
	$index = 1;
	$first_name = mysqli_real_escape_string($conn,$_POST['first_name']);
	$middle_name = mysqli_real_escape_string($conn,$_POST['middle_name']);
	$last_name = mysqli_real_escape_string($conn,$_POST['last_name']);
	$dateofbirth = mysqli_real_escape_string($conn,$_POST['dob']);
	$citizenship_no = mysqli_real_escape_string($conn,$_POST['citizenship_no']);
	$no_of_contact = mysqli_real_escape_string($conn,$_POST['contact_number']);
	$father_name =  mysqli_real_escape_string($conn,$_POST['father']);
	$cat = mysqli_real_escape_string($conn,$_POST['category']);

	while($index <= $no_of_contact){
		$temp = "contact".$index; 
		$temp = mysqli_real_escape_string($conn,$_POST[$temp]);
		$index++;
		//these are the no of contacts that haven been entered
	}
	//update to the database

?>

