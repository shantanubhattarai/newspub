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


$temp_var=substr($first_name,0,2).substr($ad_category,0,2).substr($ad_title,0,2);
$ad_id=strtoupper($temp_var);



		//Addint the advertisement details in the datbase
	include "ad_database.php";
	$ad_query="INSERT into advertisement(Ad_ID,Ad_title,Ad_category,Ad_duration,Ad_ownership,Colour_specifications,Page_Specifications)VALUES ('$ad_id','$ad_title','$ad_category','$ad_duration','$ad_ownership','$colour_specs','$page_specs')";
	mysqli_query($ad_con,$ad_query);

	//Adding the Customer Details in the database
		include "customer_database.php";
		$customer_query="INSERT into customer(First_name,Last_name,Company_name,Address,Email,Website,Phone_number,Ad_ID) VALUES('$first_name','$last_name','$company_name','$address','$email','$website','$phone_number','$ad_id')";
		mysqli_query($con,$customer_query);
			

	






 ?>

</body>
</html>