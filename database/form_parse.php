<?php
session_start();
require_once("connection.php");
	if (isset($_POST['news_submit']))//value comes from post_reply.php
	{
		
		$type_id = mysqli_real_escape_string($conn,$_POST['type_id']);
  		$news_topic = mysqli_real_escape_string($conn,$_POST['news_topic']);
  		$news_content = mysqli_real_escape_string($conn,$_POST['news_content']);
  		$source = mysqli_real_escape_string($conn,$_POST['source']);

		//insert reply in the table
		$sql = "INSERT INTO news (type_id, news_topic, news,  source, post_date) VALUES ('$type_id', '$news_topic', '$news_content', '$source',now())";
		
		if(mysqli_query($conn, $sql))
		{
			header('location: /newspub/success.php');
		}
		else
			echo "error";
	}
	
?>
