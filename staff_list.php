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
				<input type ="text" placeholder="Search name..." name="searchbox" id="search">
		  		<input type="button" class="btn btn-success" onclick="set_search()" value="Search"/>
			</div>


			<table class="table table-striped">
				<thead>	
					<tr>
						<th> S.No. </th>
						<th> Full Name</th> 
						<th> Staff Category</th> 
					</tr>
				</thead>
				<tbody>
					<?php
						if(!isset($_COOKIE['search_name']) || !empty($_COOKIE['search_name'])){
							$search_name = $_COOKIE['search_name'];
							$query = mysqli_query($conn,"select * from staff_list where first_name ='$search_name'");
							$sno = 1;
							if($query){

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
							$SESSION['search_name'] = "";
						}

						else{
							$query = mysqli_query($conn,"select * from staff_list");
							$sno = 1;
							if($query){
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
						}
						?>
				</tbody>
			</table>
		</div>

	</div>

</div>

<script type="text/javascript">
	var temp= "";
	function set_search(){
		temp = document.getElementById("search").value;
		document.cookie = "search_name="+temp;
		location.reload(true);
	}
</script>

<?php include 'partial_lower.php'; ?>

