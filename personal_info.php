<?php
	$title = "Personal info";
	include'partial_upper.php';
?>

<div class="container">
	<div class="card">
		<div class="card-header">
			TITLE
		</div>
		<div class="card-body">
			<?php
				// use the id to show the data and what not!!
				$id = $_POST['id'];
			?>
			<h1><?=$id?></h1>
		</div>

	</div>
</div>


<?php include 'partial_lower.php'; ?>