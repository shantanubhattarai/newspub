<div class="card-body">
		<?php
			$cat = $_GET['cat'];
			$id = mysqli_connect('localhost', 'root', '','newspub');

			$sql2 = mysqli_query( $id , " SELECT * FROM news INNER JOIN news_type_rel ON news.news_id = news_type_rel.news_id WHERE news_type_rel.type_id = $cat ORDER BY post_date DESC");
			$nume = mysqli_num_rows($sql2);
			if(mysqli_num_rows($sql2) > 0)
			{
				while($results = mysqli_fetch_array($sql2))
				{
				$type = mysqli_fetch_assoc(mysqli_query($id,"SELECT type FROM news_type WHERE type_id =".$results['type_id']));
		?>
				<h1> <a href="view_news.php?news_id=<?=$results['news_id'] ?>"><?=$results['news_topic']?></a></h1>
		<?php
				echo $results['author']."<br>";
				echo "<b> ".$results['post_date']." </b><br>";
				echo "<i> ".$type['type']." </i><br>";
				$string = strip_tags($results['news']);
				if (strlen($string) > 500) 
					{
				    // truncate string
				    $stringCut = substr($string, 0, 500);
				    $endPoint = strrpos($stringCut, ' ');
				
				    //if the string doesn't contain any space then it will cut without word basis.
				    $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
				    $string .= '...<br> <a href="view_news.php?news_id='.$results['news_id'].'">Read More</a>';
					}
				echo $string;
				echo "<br>";
				echo " <i> ".$results['source']."<br></i>";
				}
			}
		?>
</div>
