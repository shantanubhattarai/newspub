<?php
	$title = "Title";
?>

<?php include'partial_upper.php'; ?>

<div class="container">
	<div class="card">
			<?php
				$news_id = $_GET['news_id'];
				$query = " SELECT * FROM news INNER JOIN news_type_rel ON news.news_id = news_type_rel.news_id WHERE news.news_id=$news_id";
				$result = mysqli_query($conn, $query);
				$row = mysqli_fetch_assoc($result);

				$sql = "SELECT type FROM news_type WHERE type_id=".$row['type_id'];
				$type = mysqli_query($conn, $sql);
				$type = mysqli_fetch_assoc($type);
			?>
			<div class="card-header">
				<h3><?= $row['news_topic']; ?> </h3>
			</div>
			<div class="card-body">
				<ul class="list-group list-group-flush news-list">
						<p class="list-group-item"> Category: <i><?= $type['type']; ?></i> </p>
						<p class="list-group-item">	 <?= $row['news']; ?> </p>
						<p class="list-group-item"> <?= $row['post_date']; ?> </p>
						<p class="list-group-item"> <?= $row['source']; ?> </p>
				</ul>
			</div>
		</div>
</div>

<?php include 'partial_lower.php'; ?>
