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
			This is the body.
			<?php
				echo $_SESSION['search_name'];
			?>
		</div>
		</div>

	</div>
</div>

<?php include 'partial_lower.php'; ?>