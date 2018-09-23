<?php
include 'config.php';

if(isset($_POST['submit'])){
	$postid = $_POST['postid'];
	$subject = $_POST['subject'];
	$content = $_POST['content'];
	$postup = "UPDATE `posts` SET 
			`postid`=$postid,
			`header`='$subject',
			`content`='$content',
			`calender`=NOW(),
			`Clock`=NOW() WHERE postid = $postid";
}

if(mysqli_query($connection,$postup)){
	header('location:dashboard.php?page=management.php');
}

?>


















?>