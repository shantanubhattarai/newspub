<?php
	$title = "Add Staff";
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
					<input type="text" name="first_name" class="form-control" >
				</div>
				<div class="form control">
					<label class="control-label">Middle Name</label>
					<input type="text" name="middle_name" class="form-control">
				</div>
				<div class="form control">
					<label class="control-label">Last Name</label>
					<input type="text" name="last_name" class="form-control" >
				</div>
				<div class="form control">
					<label class="control-label">Date Of Birth</label>
					<input type="date" name="dob" class="form-control" >
				</div>
				<div class="form control">
					<label class="control-label">Citizenship No.</label>
					<input type="text" name="citizenship_no" class="form-control" >
				</div>
				<div class="form control">
					<label class="control-label">Date of Enrollment</label>
					<input type="date" name="date_enrolled" class="form-control" >
				</div>
				<div class="form control">
					<label class="control-label">Contact No.</label>
					<input type="tel" name="contact1" class="form-control" >
					<span id="contact"></span><br>
					<input class="btn btn-success" onclick="add_contact()" value="Add Another">
					<input type = "text" value="1" id="no_contacts" name="no_contacts" hidden>
				</div>
				<div class="form control">
					<label class="control-label">Father Name</label>
					<input type="text" name="father_name" class="form-control">
				</div>
				<div class="form control">
					<br>
					<input class="btn btn-success" type="submit" value="ADD STAFF"> 
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
	}
</script>
<?php include 'partial_lower.php'; ?>