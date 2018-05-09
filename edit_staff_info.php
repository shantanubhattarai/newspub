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
				$id = $_POST['staff_id'];
				echo $id;
			?>
		</div>

	</div>
</div>

<?php include 'partial_lower.php'; ?>