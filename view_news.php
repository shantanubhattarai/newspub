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
				$news_id = $_GET['news_id'];
				$query = " SELECT * FROM news WHERE news_id=$news_id";
				$result = mysqli_query($conn, $query);
				$row = mysqli_fetch_assoc($result);

				$sql = "SELECT type FROM news_type WHERE id=".$row['type_id'];
				$type = mysqli_query($conn, $sql);
				$type = mysqli_fetch_assoc($type);
			?>
			<div class="card-header">
				<h3><?= $row['news_topic']; ?> </h3>
			</div>
			<div class="card-body">
				Category: <i><?= $type['type']; ?></i></br>
				<?= $row['news']; ?></br>
				<?= $row['post_date']; ?></br>
				<?= $row['source']; ?></br>
			</div>
		</div>
	</div>
</div>

<?php include 'partial_lower.php'; ?>