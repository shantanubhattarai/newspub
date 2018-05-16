<?php
	$title = "Edit Staff Information";
	$id = $_POST['staff_id'];
?>

<?php include'partial_upper.php'; ?>

<div class="container">
	<div class="card">
		<div class="card-header">
			Edit Staff Information
		</div>
		<form  action="database/add_staff.php" method = "post" class="col-md-5">

			<div class="card-body col-md-5">
			<?php
				$sql = mysqli_query($conn,"select * from staff_list where id= '$id'");
				$row = mysqli_fetch_assoc($sql);
			?>
			<table>
				<tr>
					<td>
						<div class="form-group">
		  					<label class="control-label" for="name">First Name</label>
			  				<input class="form-control" type="text" name="first_name" value=<?=$row['first_name'];?> >
		  				</div>
		  			</td>
		  			<td>
		  				<div class="form-group">
		  					<label class="control-label">Middle Name</label>
			  				<input class="form-control" type="text" name="middle_name" value=<?=$row['middle_name'];?>>
		  				</div>
		  			</td>
		  			<td>
		  				<div class="form-group">
		  					<label class="control-label">Last Name</label>
			  				<input class="form-control" type="text" name="last_name" value=<?=$row['last_name'];?>>
			  			</div>
			  		</td>
		  			</div>
  				</tr>
  			</table>
		    <div class="form-group">
  				<label class="control-label">Date Of Birth</label>
	  			<input class="form-control" type="date" name="dob" value=<?=$row['dob'];?>>
  			</div>
  			<div class="form-group">
  				<label class="control-label">Citizenship No.</label>
	  			<input class="form-control" type="text" name="citizenship_no" value=<?=$row['citizenship_no'];?>>
  			</div>
  			<div>
  				<label class="control-label">Contact No.</label>
  				<?php
  					$sql2 = mysqli_query($conn,"select * from contact_number where staff_id = ".$row['id']);
  					if(mysqli_num_rows($sql2) == 0){
  						echo '<h6>NO CONTACT FOUND</h6>';
  					}
  					while($row2 = mysqli_fetch_assoc($sql2)){
  				?>
	  				<input class="form-control" type="tel" name="contact1" value=<?=$row2['contact_number'];?>>
  				<?php
  					}
  				?>
	  			<span id="cont"></span>
	  			<input class="btn btn-info" onclick="addcontact()" value="Add another">
	  			<input class="text" onclick="no_of_contacts()" id="contact_number" name="contact_number" value="0" hidden>
	  			
  			</div>
			<table>
				<h4>
					Father Name
				</h4>
				<tr>
					<td>
						<div class="form-group">
		  					<label class="control-label" for="name">First Name</label>
			  				<input class="form-control" type="text" name="father_first_name" value=<?=$row['father_first_name'];?>>
		  				</div>
		  			</td>
		  			<td>
		  				<div class="form-group">
		  					<label class="control-label">Middle Name</label>
			  				<input class="form-control" type="text" name="father_middle_name" value=<?=$row['father_middle_name'];?>>
		  				</div>
		  			</td>
		  			<td>
		  				<div class="form-group">
			  				<label class="control-label">Last Name</label>
				  			<input class="form-control" type="text" name="father_last_name" value=<?=$row['father_last_name'];?>>
			  			</div>
			  		</td>
		  			</div>
  				</tr>
  			</table>
  			<div>
				<label class="control-label">Photo</label>
				<img id="blah" src="<?=$row['photo']?>" alt="image" width="100" height="100" class="rounded-circle" />
		  		<label class="control-label" for="image"> Select your image</label>
				<input type="file" name="image" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
			</div>
			<input type="submit" class="btn btn-success" value ="Update">
		</form>
	</div>
</div>

<script type="text/javascript">
	var number = 0;
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