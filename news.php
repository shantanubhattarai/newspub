<?php
	$title = "News";
?>

<?php include'partial_upper.php'; ?>

<div class="container">
	<div class="card">
		<div class="card-header">
			Recent News
		</div>
		<div class="card-body">
		<?php
			$id = mysqli_connect('localhost', 'root', '','newspub');

			$sql2 = mysqli_query( $id , " SELECT * FROM news ");

			if(mysqli_num_rows($sql2) > 0)
			{
				while($results = mysqli_fetch_array($sql2))
				{
				echo "<h1> ".$results['news_topic']." </h1>";
				echo "<b> ".$results['staff_id']." </b><br>";
				echo "<b> ".$results['post_date']." </b><br>";
				echo "<i> ".$results['news_type']." </i><br>";
				echo " ".$results['news']." <br>";
				echo " <i> ".$results['source']."<br></i>";
				}
			}
		?>
		</div>

	</div>
</div>

<?php include 'partial_lower.php'; ?>
