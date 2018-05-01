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
	<?php 

		//Displaying all the values for confirmation
		echo "<b>Confirm the Informations::</b>";
		echo "<br>";
		echo"Name:".$first_name." ".$last_name;
		echo "<br>";
		echo"Email:".$email;
		echo "<br>";
		echo "Phone Number:".$phone_number;
		echo "<br>";
		echo "Advertisement Title:<b>".$ad_title."</b>";
		echo "<br>";
		echo "Advertisement Category:".$ad_category;
		echo "<br>";
		echo "Ad Ownership:".$ad_ownership;
		echo "<br>";
		echo "Ad Duration:".$ad_duration;
		echo "<br>";
		echo "Page Specifications:".$page_specs;
		echo "<br>";
		echo "Colour Specifications:".$colour_specs;
		echo "<br>";

//Adding the Customer Details in the database
	include"customer_database.php";
	$customer_query="INSERT into customer(First_name,Last_name,Company_name,Address,Email,Website,Phone_number) VALUES('$first_name','$last_name','$company_name','$address','$email','$website','$phone_number')";
	mysqli_query($con,$customer_query);
		
//Addint the advertisement details in the datbase
	include "ad_database.php";
	$ad_query="INSERT into advertisement(Ad_title,Ad_category,Ad_duration,Ad_ownership,Colour_specifications,Page_Specifications)VALUES ('$ad_title','$ad_category','$ad_duration','$ad_ownership','$colour_specs','$page_specs')";
	mysqli_query($ad_con,$ad_query)
	






 ?>

</body>
</html>