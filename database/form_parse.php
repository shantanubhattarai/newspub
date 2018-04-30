<?php
session_start();

	if (isset($_POST['news_submit']))//value comes from post_reply.php
	{
		include_once("connection.php");
		$news_type = $_POST['news_type'];
  		$news_topic = $_POST['news_topic'];
  		$news_content = $_POST['news_content'];
  		$source = $_POST['source'];

		//insert reply in the table
		$sql = "INSERT INTO news (news_type, news_topic, news, source, post_date) VALUES ('".$news_type."', '".$news_topic."', '".$news_content."', '".$source."',now())";
		$res = mysqli_query($dbconn,$sql) ;
	}
	if($res)
		{
			header("Location: /newspub/success.php");
		}
?>