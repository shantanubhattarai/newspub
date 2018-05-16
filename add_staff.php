<?php
	$title = "Title";
?>

<?php include'partial_upper.php'; ?>

<div class="container">
	<div class="card">
		<div class="card-header">
			Add a Staff
		</div>
		<div class="card-body">
			<form  action="database/add_staff.php" method = "post" class="col-md-5">
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
		  			<input class="text" onclick="no_of_contacts()" id="contact_number" name="contact_number" value="1" hidden>
		  			
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
	  				<input type="submit" class="btn btn-success" value="Add">
	  			</div>
			</form>
		</div>

	</div>
</div>

<script type="text/javascript">
	var number = 1;
	function addcontact(){
		number+=1;
		var value = "contact" + number;
		document.getElementById('cont').innerHTML+='<br><input class="form-control"type="tel" name="'+value+'">';
		no_of_contacts();
	}
	function no_of_contacts(){
		document.getElementById('contact_number').value = number;
	}
</script>
<?php include 'partial_lower.php'; ?>