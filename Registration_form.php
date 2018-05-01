<!DOCTYPE html>
<html>
<head>
	<title>Advertisement Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="left">

		<h2>Company/Person Details</h2>

			<form action="information_collection.php" method="post">
				<input type="text" name="fname" placeholder="First Name"><br><br>
				<input type="text" name="lname" placeholder="Last Name"><br><br>
				<input type="text" name="company" placeholder="Company's Name"><br><br>
				<input type="text" name="address" placeholder="Current Address"><br><br>
				<input type="text" name="phonenumber" placeholder="Phone Number"><br><br>
				<input type="email" name="email" placeholder="Email"><br><br>
				<input type="url" name="website" placeholder="Website"><br><br>
				
				<br><br>
			
	</div>

	<div class="right">
		<h2>Advertisement Details</h2><?php date_default_timezone_set("Asia/Kathmandu"); ?>
		

		
				<input type="text" name="ad_title" placeholder="Advertisement Title"><br><br>
				<input type="text" name="ad_category" placeholder="Advertisement Category"><br><br>
				<input type="text" name="ownership" placeholder="Advertisement Ownership"><br><br>
				<input type="number" min="1" name="ad_duration" placeholder="Advertisement Duration   ">(Days)<br><br>
				<input type="number" min="1" max="15" name="page_specifications" placeholder="Page Specification">(Which page you want the ad to be posted in ?)<br><br>

				Colour Specifications:(coloured/not coloured)
				<input list="colour_specs" name="colour_specs">
					<datalist id="colour_specs">
						<option value="COLOURED">
						<option value="NOT COLOURED ">
					</datalist>

				<br><br>
				Professional Editor:(required/not required)
				<input list="pro_editor" name="pro_editor">
					<datalist id="pro_editor">
						<option value="REQUIRED">
						<option value="NOT REQUIRED">
					</datalist>

				
	</div>
	<p>Further Page Alignment Details will be discussed after the confirmation of the advertisement posting.</p>
	<div class="submit"><input type="submit" name="submit" value="Confirm Your Submission"><input type="reset" name="Reset" ><div>
			</form>


	
</body>
</html>