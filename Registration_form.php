<?php include 'partial_upper.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Advertisement Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- <div class="left"> -->
<div class="container col-md-6" >
	<div class="card ">
		<h2 class="card-header">Company/Person Details</h2>
		<div class="card-body">
			<form class="form" action="information_collection.php" method="post">
				<div class="row">
					<div class="form-group">
						<label class="" for="fname">First Name</label>
						<input class="form-control" type="text" name="fname" placeholder="First Name" class="form-control" required>
					</div>
					<div class="form-group">
						<label class="control-label" for="lname">Last Name</label>
						<input class="form-control" type="text" name="lname" placeholder="Last Name">
					</div>		
				</div>	
				<div class="form-group">
					<label class="control-label" for="company">Company</label>
					<input class="form-control" type="text" name="company" placeholder="Company's Name">
					
				</div>	
				<div class="form-group">	
					<label class="control-label" for="address">Address</label>
					<input class="form-control" type="text" name="address" placeholder="Current Address">
				</div>
				<div class="form-group">	
					<label class="control-label" for="phonenumber">Phone Number</label>
					<input class="form-control" 
					 type="text" name="phonenumber" placeholder="Phone Number" required>
				</div>
				<div class="form-group">
					<label class="control-label" for="email">E-mail</label>
					<input class="form-control" type="email" name="email" placeholder="Email" required>
				</div>		
				<div class="form-group">
					<label class="control-label" for="website">Website</label>
					<input class="form-control" type="url" name="website" placeholder="Website">
				</div>
			
<!-- 	</div>
 -->
<!-- 	<div class="right">
-->

				<h2 class="card-header">Advertisement Details</h2><?php date_default_timezone_set("Asia/Kathmandu"); ?>
				<div class="form-group">
					<label class="control-label" for="ad_title">Advertisement Title</label>
					<input class="form-control" type="text" name="ad_title" placeholder="Advertisement Title">
				</div>
				<div class="form-group">
					<label for="ad_category">Advertisement Category</label>
					<select class="form-control" id="ad_category">
						<option>Select Category</option>
						<option>Matrimonial</option>
						<option>Recruitments</option>
						<option>Educational</option>
						<option>Computers</option>
						<option>Lost Found</option>
						<option>Travel</option>
						<option>Property</option>
						<option>Personal Announcements</option>
					</select>
				</div>
				<div class="form-group">
					<label class="control-label" for="ownership">Advertisement Ownership</label>
					<input class="form-control" type="text" name="ownership" placeholder="Advertisement Ownership" required>
				</div>
				<div class="form-group">
					<label class="control-label" for="ad_duration">Advertisement Duration</label>
					<input class="form-control" type="number" min="1" name="ad_duration" placeholder="Advertisement Duration(Days)">
				</div>
				
				<div class="form-group">	
					<label class="control-label" for="page_specifications">Page Specification</label>
					<input class="form-control" type="number" min="1" max="15" name="page_specifications" placeholder="(Which page you want the ad to be posted in ?)" required>
				</div>
				<div class="row">
				<div class="form-group">
					<label class="control-label" for="colour_specs"> Colour Specifications</label>
					<input class="form-control" list="colour_specs" name="colour_specs" placeholder="Coloured/Not Coloured">
						<datalist id="colour_specs">
							<option value="COLOURED"></option>
							<option value="NOT COLOURED "></option>
						</datalist>
				</div>
				
				<div class="form-group">
					<label class="control-label" for="pro_editor"> Professional Editor</label>
					<input class="form-control" list="pro_editor" name="pro_editor" placeholder="Required/Not Required">
						<datalist id="pro_editor">
							<option value="REQUIRED">
							<option value="NOT REQUIRED"></option></option>
					</datalist>
					</div>
		<!-- 	</div>
				 --><p>Further Page Alignment and Colour Details will be discussed after the confirmation of the advertisement posting.</p>
				 	<div class="submit">
				 		<input type="submit" name="submit" value="Confirm Your Submission">
				 		<input type="reset" name="Reset" >
				 	</div>
					<!-- <button class="btn btn-success" type="submit" name="submit" value="Submit"></button>
					<button class="btn btn-warning" type="button" name="reset" value="Reset"></button> -->
		</div>
	</div>
</div>

</form>


	
</body>
</html>

