<?php
	$title = "News";
?>

<?php include'partial_upper.php'; ?>

<div class="container">
<div class="card">
	<div class="card-header">
		<a href = "./news.php"><span class="text-muted ml-3">All</span></a>
		<?php
		//Variables for pagination
			$page_name="news.php";
			if (isset($_GET['start'])){$start=$_GET['start'];}
			else {$start = 0;}
			$eu = ($start - 0);
			$limit = 2; // No of records to be shown per page.
			$this1 = $eu + $limit;
			$back = $eu - $limit;
			$next = $eu + $limit;
		//End Pagination Variables. 
			$sql = "SELECT * from news_type";
			$result = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_assoc($result)){
		?>
			<a href = "?type=click&&cat=<?=$row['type_id']?>"><span class="text-muted ml-3"><?=$row['type']?></span></a>
		<?php } ?>
	</div>

	<!-- END CATEGORY NAVIGATION -->

	<div class="card-header">
		<form class="form-inline" method = "GET">
			<div class="form-group">
				<input class = "form-control mr-2" type="text" name="search_text">
				<select class="form-control mr-2" name = "search_type">
					<option>All</option>
					<?php 
						$sql = "SELECT * from news_type";
						$result = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_assoc($result)){
					?>
					<option value = "<?=$row['type_id']?>"><?=$row['type']?></option>
					<?php 
					}
					?>
				</select>
				<button class="btn btn-primary">Search</button>
			</div>
		</form>
	</div>

		<?php 
			if(isset($_GET['type'])) { 
				include 'news_dashboard/type_'.$_GET['type'].'.php';
				echo "<hr>";
		 	}else {
		?>
		<div class="card-body">
			<?php
				$condition = " ";
				if(isset($_GET['search_text']) && $_GET['search_text'] != ""){
					$search_text = $_GET['search_text'];
					$condition = "WHERE news_topic LIKE '%$search_text%'";
					if(isset($_GET['search_type']) && $_GET['search_type'] != "All"){
						$search_type = $_GET['search_type'];
						$condition = "WHERE news.news_topic LIKE '%$search_text%' AND news_type_rel.type_id = '$search_type' ";
					}
				}
				$id = mysqli_connect('localhost', 'root', '','newspub');
				if($sql1 = mysqli_query( $id , " SELECT * FROM  news INNER JOIN news_type_rel ON news.news_id = news_type_rel.news_id $condition ")){
					$nume = mysqli_num_rows($sql1); //Total Number of items for Pagination
					$sql2 = mysqli_query( $id , " SELECT * FROM news INNER JOIN news_type_rel ON news.news_id = news_type_rel.news_id $condition ORDER BY post_date DESC LIMIT $eu, $limit");
				if(mysqli_num_rows($sql2) > 0){
					while($results = mysqli_fetch_assoc($sql2)){
						$type = mysqli_fetch_assoc(mysqli_query($id,"SELECT type FROM news_type WHERE type_id =" . $results['type_id']));
			?>
						<h1> <a href="view_news.php?news_id=<?=$results['news_id'] ?>"><?=$results['news_topic']?></a></h1>
			<?php
						echo $results['author']."<br>";
						echo "<b> ".$results['post_date']." </b><br>";
						echo "<i> ".$type['type']." </i><br>";
						$string = strip_tags($results['news']);
						if (strlen($string) > 500) {
						    // truncate string
						    $stringCut = substr($string, 0, 500);
						    $endPoint = strrpos($stringCut, ' ');
						    //if the string doesn't contain any space then it will cut without word basis.
						    $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
						    $string .= '... <br><a href="view_news.php?news_id='.$results['news_id'].'">Read More</a>';
						}
					echo $string;
					echo "<br>";
					echo " <i> ".$results['source']."<br></i>";
					echo "<hr>";
					}
				}
				if ( $limit < $nume) {
					echo "<table align = 'center' width='50%'><tr><td align='left' width='30%'>";
					if($back >=0) 
					{
						print "<a href='$page_name?start=$back'><font face='Verdana' size='2'>PREV</font></a>";
					}
					echo "</td><td align=center width='30%'>";
					$i=0;
					$l=1;
					for($i=0;$i < $nume;$i=$i+$limit){
					if($i <> $eu)
					{
						echo " <a href='$page_name?start=$i'><font size='2'>$l</font></a> ";
					}
					else 
					{ 
						echo "<font size='4' color=red>$l</font>";} //Current page is not displayed as link and given font color red
						$l=$l+1;
					}
					echo "</td><td align='right' width='30%'>";
					if($this1 < $nume) 
					{
						print "<a href='$page_name?start=$next'><font face='Verdana' size='2'>NEXT</font></a>";
					}
					echo "</td></tr></table>";
				}
			?>
		</div>
		<?php }} ?>
</div>
</div>

<?php include 'partial_lower.php'; ?>
