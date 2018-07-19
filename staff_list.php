<?php
	$title = "Staff List";

	$search = "";
?>

<?php include'partial_upper.php'; 

	include'partial_upper.php'; 
	ob_start();
	$sno =1;
	$last_staff_id=1;
	if(isset($_COOKIE['search_name']) && !empty($_COOKIE['search_name'])){
		$searchbox = trim(strtoupper($_COOKIE['search_name']));
	}
	else{
		$searchbox = "";
	}
	$query = mysqli_query($conn,"select * from staff_list");
	$row_no = mysqli_num_rows($query);
	$no_of_pages = ceil($row_no/2); // change the 2 to determine the no of pages you want to create
?>


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
		</div>

		<div class="card-body container">

			<div class="row"> 
				<a class="btn btn-success" href="add_staff.php">Add</a> &nbsp;&nbsp;&nbsp;&nbsp;
				<input type ="text" placeholder="Search name..." name="searchbox" id="search" value=<?=$searchbox?>>
		  		<input type="button" class="btn btn-success" onclick = "setSearch()" value="Search"/>
			</div>
				<div class="pages">
					<?php
						for($i=1;$i<=$no_of_pages;$i++){
					?>
						<a href="#" class="page_list" onclick="openPage(event, <?=$i?>)"> <?=$i?></a>	
						<?php } ?>
				</div>
					<?php
						for($i=1;$i<=$no_of_pages;$i++){
							$limit = $sno +1;
							
					?>
						<table class="table table-striped pagecontent" id=<?=$i?>>
						<thead>	
							<tr>
								<th> S.No. </th>
								<th> Full Name</th> 
								<th> Staff Category</th> 
								<th></th>
							</tr>
						</thead>
						<tbody >
							<?php
								if($query)
								while($sno <= $limit && $row = mysqli_fetch_assoc($query)){
									$id =$row['id'];
									if($id >=$last_staff_id ){
										if(strlen($searchbox) == 0){
							?>			
										<tr>
										<?php
											$sqli2 = mysqli_query($conn,"select category from staff_category where id = ".$row['category']);
											$cat = mysqli_fetch_assoc($sqli2);
										?>
												<td> <?=$sno?> </td>
												<td>
													<?= $row['first_name'] ." ". $row['middle_name']." ". $row['last_name']?>

												</td>
												<td> <?= $cat['category']?> </td>
												<td>
													<form action="edit_staff_info.php" method="post">
														<input type="hidden" value="<?=$id?>" name="staff_id">
														<button class="btn btn-info" type="submit">
															Edit
														</button>
													</form>
												</td>
															
											<?php
												$sno++;
												$last_staff_id = $id;									
											?>
											</tr>
											<?php
											}

											else{
												$full_name =  $row['first_name'] ." ". $row['middle_name']." ". $row['last_name'];
												$no = substr_count($full_name,$searchbox);
												if($no > 0){
											?>

												<tr>
												<?php
													$sqli2 = mysqli_query($conn,"select category from staff_category where id = ".$row['category']);
													$cat = mysqli_fetch_assoc($sqli2);
												?>
														<td> <?=$sno?> </td>
														<td>
															<?= $row['first_name'] ." ". $row['middle_name']." ". $row['last_name']?>

														</td>
														<td> <?= $cat['category']?> </td>
														<td>
															<form action="edit_staff_info.php" method="post">
																<input type="hidden" value="<?=$id?>" name="staff_id">
																<button class="btn btn-info" type="submit">
																	Edit
																</button>
															</form>
														</td>
																	
													<?php
														$sno++;
														$last_staff_id = $id;									
													?>
													</tr>
											<?php
												}
											}	
										}								
									}
										?>
									
						</tbody>

						<?php
							}
							setcookie("search_name",null);
						?>

				
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

</div>

<script type="text/javascript">
	// to set search name
	var temp= "";
	function setSearch(){
		temp = document.getElementById("search").value;
		document.cookie = "search_name="+temp;
		location.reload(true);
	}

	// for page scrollling
	var pagecontent = document.getElementsByClassName("pagecontent");
    for (i = 1; i < pagecontent.length; i++) {
        pagecontent[i].style.display = "none";
    }
    pagecontent[0].style.display = "table";
    function openPage(evt, page_no){
    	var page_list,pagecontent,i;
    	pagecontent = document.getElementsByClassName("pagecontent");
	    for (i = 0; i < pagecontent.length; i++) {
	        pagecontent[i].style.display = "none";
	    }
	    page_list = document.getElementsByClassName("page_list");
	    for (i = 0; i < page_list.length; i++) {
        	page_list[i].className = page_list[i].className.replace(" active", "");
    	}
    	document.getElementById(page_no).style.display = "table";
    	evt.currentTarget.className += " active";
    }

</script>

<?php include 'partial_lower.php'; ?>
							
