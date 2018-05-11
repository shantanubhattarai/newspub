<?php
	$title = "News";
?>

<?php include'partial_upper.php'; ?>

<div class="container">
	<div class="card">
		<div class="card-header">
			<?php
				$sql = "SELECT * from news_type";
				$result = mysqli_query($conn,$sql);
				while($row = mysqli_fetch_assoc($result)){
			?>
				<a href = "?type=click&&cat=<?=$row['id']?>"><span class="text-muted ml-3"><?=$row['type']?></span></a>
			<?php } ?>
		</div>
		<div class="container col-md-10" style="margin-left: -15px;">
		<?php if(isset($_GET['type'])) { ?>
					<div class="card">
						<?php include 'news_dashboard/type_'.$_GET['type'].'.php'; ?>
					</div>
		<?php }

		else{ ?>
		<div class="card-body">
		<?php
			$id = mysqli_connect('localhost', 'root', '','newspub');

			$sql2 = mysqli_query( $id , " SELECT * FROM news ORDER BY post_date DESC");

			if(mysqli_num_rows($sql2) > 0)
			{
				while($results = mysqli_fetch_array($sql2))
				{
				$type = mysqli_fetch_assoc(mysqli_query($id,"SELECT type FROM news_type WHERE id =".$results['type_id']));
				echo "<h1> ".$results['news_topic']." </h1>";
				//echo "<b> ".$results['staff_id']." </b><br>";
				echo "<b> ".$results['post_date']." </b><br>";
				echo "<i> ".$type['type']." </i><br>";
				echo " ".$results['news']." <br>";
				echo " <i> ".$results['source']."<br></i>";
				}
			}
		?>
		</div>
		<?php } ?>
	</div>
</div>

<?php include 'partial_lower.php'; ?>
