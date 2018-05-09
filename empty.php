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
				$str = "this is nice   ";
				echo substr_count($str," ");
				echo "\n";
				$p = explode(" ",$str);
				foreach ($p as $item){
					echo $item;
				}
				echo $p[0];
			?>
		</div>
		</div>

	</div>
</div>

<?php include 'partial_lower.php'; ?>