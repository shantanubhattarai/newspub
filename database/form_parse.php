<?php
session_start();
require_once("connection.php");
	if (isset($_POST['news_submit']))//value comes from form.php
	{
		
		$type_id = mysqli_real_escape_string($conn,$_POST['type_id']);
  		$news_topic = mysqli_real_escape_string($conn,$_POST['news_topic']);
  		$author = mysqli_real_escape_string($conn,$_POST['news_author']);
  		$news_content = mysqli_real_escape_string($conn,$_POST['news_content']);
  		$source = mysqli_real_escape_string($conn,$_POST['source']);
		//insert news in the table
		$sql = "INSERT INTO news (news_topic, author, news,  source, post_date) VALUES ('$news_topic', '$author', '$news_content', '$source',now())";
		if($result = mysqli_query($conn, $sql))
		{
			$last_id = mysqli_insert_id($conn);
			$sql  = "INSERT INTO news_type_rel (news_id, type_id) VALUES ($last_id, $type_id)";
			mysqli_query($conn,$sql);
			header('location: /newspub/index.php');
		}
		else
			echo "error";
	}
	
?>
