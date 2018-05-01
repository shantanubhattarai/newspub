<?php 
session_start();
//Company Detials
$first_name=$_POST['fname'];
$last_name=$_POST['lname'];
$company_name=$_POST['company'];
$address=$_POST['address'];
$phone_number=$_POST['phonenumber'];
$email=$_POST['email'];
$website=$_POST['website'];

//Advertisement Details

$ad_title=$_POST['ad_title'];
$ad_category=$_POST['ad_category'];
$ad_ownership=$_POST['ownership'];
$ad_duration=$_POST['ad_duration'];
$page_specs=$_POST['page_specifications'];
$colour_specs=$_POST['colour_specs'];
$pro_editor=$_POST['pro_editor'];
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Informations Submitted</title>
</head>
<body>
	<h2><?php echo $ad_title; ?></h2>

	Name: <?php echo $first_name; echo " ";echo $last_name; ?><br>
	Address: <?php echo $address; ?><br>
	Phone Number:<?php echo $phone_number; ?><br>
	Email:<?php echo $email; ?><br>
	Website:<?php echo $website; ?><br>


	

</body>
</html>