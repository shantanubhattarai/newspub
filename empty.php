<?php
	$title = "Title";
?>

<?php include'partial_upper.php'; ?>

<div class="container">
	<div class="card">
		<div class="card-header">
			TITLE
		</div>
		<div class="card-body">
			<?php
				$no=substr_count("RAM BAHADUR KARKI", "AM");
				if($no > 0){
					echo "YES AM IS FOUND";
				}
				else{
					echo "this doesnt work";
				}
				$sql = mysqli_query($conn,"select * from staff_list");
				while($row= mysqli_fetch_assoc($sql)){
					$name1 = $row['first_name'].' '.$row['middle_name'].' '.$row['last_name'];
					$no = substr_count($name1,"AM");
					if($no >0){
						echo $name1;
					}
					else{
						echo "NO";
					}
				}
			?>
		</div>
		</div>

	</div>
</div>

<?php include 'partial_lower.php'; ?>