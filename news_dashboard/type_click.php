<div class="card-body">
		<?php
			$cat = $_GET['cat'];
			$id = mysqli_connect('localhost', 'root', '','newspub');

			$sql2 = mysqli_query( $id , " SELECT * FROM news WHERE type_id = $cat ORDER BY post_date DESC");

			if(mysqli_num_rows($sql2) > 0)
			{
				while($results = mysqli_fetch_array($sql2))
				{
				$type = mysqli_fetch_assoc(mysqli_query($id,"SELECT type FROM news_type WHERE id =".$cat));
				echo "<h1> ".$results['news_topic']." </h1>";
				echo "<b> ".$results['staff_id']." </b><br>";
				echo "<b> ".$results['post_date']." </b><br>";
				echo "<i> ".$type['type']." </i><br>";
				echo " ".$results['news']." <br>";
				echo " <i> ".$results['source']."<br></i>";
				}
			}
		?>
</div>