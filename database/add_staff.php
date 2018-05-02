<?php
	session_start();
	require_once('connection.php');

	$first_name=mysqli_real_escape_string($conn,$_POST['first_name']);
	$middle_name = mysqli_real_escape_string($conn,$_POST['middle_name']);
	$last_name = mysqli_real_escape_string($conn,$_POST['last_name']);
	$no_of_contacts = mysqli_real_escape_string($conn,$_POST['no_contacts']);

	echo $no_of_contacts;
	$i=1;
	while($i<=$no_of_contacts){
		//use array
		"contact".$i = mysqli_real_escape_string($conn,$_POST["contact".$i]);
		echo "contact".$i;
		$i++;
	}
?>