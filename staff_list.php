<?php
	$title = "Staff List";
	include'partial_upper.php'; 

?>

<div class="container">
	<div class="card">
		<div class="card-header">
			Staff List
		</div>

		<div class="card-body caontainer">

			<div class="row"> 
				<a class="btn btn-success" href="add_staff.php">Add</a> &nbsp;&nbsp;&nbsp;&nbsp;
				<form action="staff_list.php" method="get">
					<input type ="text" placeholder="Search name..." name="searchbox">
					<button type="submit" class="btn btn-success">Search</button>
				</form>
			</div>


			<table class="table table-striped">
				<thead>	
					<tr>
						<th> S.No. </th
						<th> Full Name</th> 
						<th> Staff Category</th> 
					</tr>
				</thead>
				<tbody>
					<?php
						$searchbox = /*$_GET['searchbox'];*/ "";
						$searchbox = strtoupper($searchbox);
						if(isset($searchbox) && empty($searchbox)){
							$query = mysqli_query($conn,"select * from personal_info");
							$sno = 1;
							if(mysqli_num_rows($query) >0)
							while($row = mysqli_fetch_assoc($query)){
								$sqli2 = mysqli_query($conn,"select category from staff_category where id = ".$row['category']);
								$cat = mysqli_fetch_assoc($sqli2);
								$id =$row['id'];
						?>
									<tr>
										<td> <?=$sno?> </td>
										<td>
											<!-- add an onclick to the button sothat it can redirect to personal_info -->
											<?= $row['first_name'] ." ". $row['middle_name']." ". $row['last_name']?>

										</td>
										<td> <?= $cat['category']?> </td>
										<td>
											<form action="personal_info.php" method="post">
												<input type="hidden" value="<?=$id?>" name="id">
												<button class="btn btn-info" type="submit">
													Edit
												</button>
											</form>
										</td>
									</tr>
								
						<?php
							$sno++;
							}
						}

					else{
						$query = mysqli_query($conn,"select * from personal_info where first_name=".$searchbox);

					}
					?>
				</tbody>
			</table>
		</div>

	</div>

</div>

<?php include 'partial_lower.php'; ?>