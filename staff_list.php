<?php
	$title = "Staff List";
	$search = "";
?>

<?php include'partial_upper.php'; ?>

<div class="container">
	<div class="card">
		<div class="card-header">
			<h3>Staff List</h3>
		</div>
		<div class="card-body">
			<table class="col-md-4 table table-striped">
				<tr>
					<a class="btn btn-success" href="add_staff.php">Add Staff</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" name="search" id="search">&nbsp;&nbsp;&nbsp;
					<input class="btn btn-success" value="search" onclick="setsearch()">
				</tr>
			</table>
			<?php
				
			?>
				<thead>
					<tr>
						<th>S. No.</th>
						<th>Name</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php
							$sno = 1;
							$mysql = mysqli_query($conn,"select * from staff_list");
							while($row=mysqli_fetch_assoc($mysql)){
						?>
							<td><?=$sno?></td>
							<td>
									<?=$row['first_name']." ".$row['middle_name']." ".$row['last_name']?>
							</td>
							<td>
								<?php
									$mysql2 = mysqli_query($conn,"select * from staff_category where id=".$row['category']);
									$row2=mysqli_fetch_assoc($mysql2);
									echo $row2['category'];

								?>
							</td>
							<td>
								<form method="post" action ="edit_staff_info.php">
									<input type="text" value='<?=$row['id']?>' name="staff_id" hidden>
									<input class="btn btn-success" type="submit" value="EDIT">
								</form>
							</td>
					</tr>
						<?php
							$sno++;
							}
						?>
				</tbody>
			</table>
		</div>

	</div>
</div>

<script type="text/javascript">
	function setsearch(){
		var searchtext = document.getElementById('search').value;
	}
</script>

<?php include 'partial_lower.php'; ?>