<?php
	$title = "Add Staff";
	$title = "Title";
?>

<?php include'partial_upper.php'; ?>

<div class="container">
	<div class="card">
		<div class="card-header">
			Add A New Staff
		</div>
		<div class="card-body">
			<form action="database/add_staff.php" method="post" class="col-md-4">
				<h4 class="header">
					Fill up the credentials
				</h4> 
				<div class="form control">
					<label class="control-label">First Name</label>
					<input type="text" name="first_name" class="form-control" required>
				</div>
				<div class="form control">
					<label class="control-label">Middle Name</label>
					<input type="text" name="middle_name" class="form-control">
				</div>
				<div class="form control">
					<label class="control-label">Last Name</label>
					<input type="text" name="last_name" class="form-control" required>
				</div>
				<div class="form-control">
					<label class="control-label" for="image"> Select your image</label><br>
		  			<img id="ProfImage" src="media/default.png" alt="your image" width="100" height="100" class="rounded-circle" />
					<input type="file" name="image" onchange="document.getElementById('ProfImage').src = window.URL.createObjectURL(this.files[0])" required>
		  		</div>
				<div class="form control">
					<label class="control-label">Date Of Birth</label>
					<input type="date" name="dob" class="form-control" required>
				</div>
				<div class="form control">
					<label class="control-label">Citizenship No.</label>
					<input type="text" name="citizenship_no" class="form-control" required>
				</div>
				<div class="form control">
					<label class="control-label">Date of Enrollment</label>
					<input type="date" name="date_enrolled" class="form-control" required>
				</div>
				<div class="form control">
					<label class="control-label">Contact No.</label>
					<input type="tel" name="contact1" class="form-control" required>
					<span id="contact"></span><br>
					<input class="btn btn-success" onclick="add_contact()" value="Add Another">
					<input type = "text" value="1" id="no_contacts" name="no_contacts" hidden>
				</div>
				<div class="form control">
					<label class="control-label">Father Name</label>
					<input type="text" name="father_name" class="form-control" required>
				</div>
				<div class="form control">
					<label class="control-label">Status in the Company</label>
					<?php
						$sql= mysqli_query($conn,"select * from staff_category");
						while($row = mysqli_fetch_assoc($sql)){
					?><br>
							<input type="radio" name="category" value=<?=$row['id']?> required>
							<?= $row['category']?>
					<?php
						}
					?>
				</div>
				<div class="form control">
					<br>
					<input class="btn btn-success" type="submit" name="submit" value="ADD STAFF"> 
				</div>
			Add a Staff
		</div>
		<div class="card-body">
			<form  action="database/add_staff.php" method = "post" class="col-md-5" enctype="multipart/form-data">
				<h3>
					Please enter the credentials here
				</h3>
				<table>
					<tr>
						<td>
							<div class="form-group">
			  				<label class="control-label" for="name">First Name</label>
				  			<input class="form-control" type="text" name="first_name">
			  				</div>
			  			</td>
			  			<td>
			  				<div class="form-group">
			  				<label class="control-label">Middle Name</label>
				  			<input class="form-control" type="text" name="middle_name">
			  				</div>
			  			</td>
			  			<td>
			  				<div class="form-group">
			  				<label class="control-label">Last Name</label>
				  			<input class="form-control" type="text" name="last_name">
				  			</div>
				  		</td>
			  			</div>
	  				</tr>
	  			</table>
			    <div class="form-group">
	  				<label class="control-label">Date Of Birth</label>
		  			<input class="form-control" type="date" name="dob">
	  			</div>
	  			<div class="form-group">
	  				<label class="control-label">Citizenship No.</label>
		  			<input class="form-control" type="text" name="citizenship_no">
	  			</div>
	  			<div>
	  				<label class="control-label">Contact No.</label>
		  			<input class="form-control" type="tel" name="contact1">
		  			<span id="cont"></span>
		  			<input class="btn btn-info" onclick="addcontact()" value="Add another">
		  			<input class="text" onclick="no_of_contacts()" id="no_contacts" name="no_contacts" value="1" hidden>
		  			
	  			</div>
				<table>
					<h4>
						Father Name
					</h4>
					<tr>
						<td>
							<div class="form-group">
			  				<label class="control-label" for="name">First Name</label>
				  			<input class="form-control" type="text" name="father_first_name">
			  				</div>
			  			</td>
			  			<td>
			  				<div class="form-group">
			  				<label class="control-label">Middle Name</label>
				  			<input class="form-control" type="text" name="father_middle_name">
			  				</div>
			  			</td>
			  			<td>
			  				<div class="form-group">
			  				<label class="control-label">Last Name</label>
				  			<input class="form-control" type="text" name="father_last_name">
				  			</div>
				  		</td>
			  			</div>
	  				</tr>
	  			</table>
	  			<div class="form group">
	  				<label class="control-label">Staff category:</label>
	  				<br>
	  				<?php
	  					$sql = mysqli_query($conn,"select * from staff_category");
	  					while($row = mysqli_fetch_assoc($sql)){
	  				?>
	  						<input type="radio" name="category" value="<?=$row['id']?>">
	  						<?=$row['category']?> <br>
	  				<?php
	  					}
	  				?>
	  			</div>
	  			<div class="form-group">
		  			<img id="ProfImage" src="media/default.png" alt="your image" width="100" height="100" class="rounded-circle" />
				  	<label class="control-label" for="image"> Select your image</label>
					<input type="file" name="image" onchange="document.getElementById('ProfImage').src = window.URL.createObjectURL(this.files[0])">
		  		</div>
	  			<div class="form-group">
	  				<input type="submit" class="btn btn-success" value="Add" name="submit">
	  			</div>
			</form>
		</div>

	</div>
</div>

<script type="text/javascript">
	var number=1;
	function add_contact(){
		number+=1;
		var contactsno="contact"+number;
		document.getElementById('contact').innerHTML+='<br><input type="tel" class="form-control" name="'+contactsno+'"/>';
		document.getElementById('no_contacts').value= number;
	var number = 1;
	function addcontact(){
		number+=1;
		var value = "contact" + number;
		document.getElementById('cont').innerHTML+='<br><input class="form-control"type="tel" name="'+value+'">';
		no_of_contacts();
	}
	function no_of_contacts(){
		document.getElementById('no_contacts').value = number;
	}
</script>
<?php include 'partial_lower.php'; ?>