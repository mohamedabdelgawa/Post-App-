<?php

if(isset($_POST['submit'])){
	$header = trim($_POST['header']);
	$content= trim($_POST['content']);
	if(empty($header) || empty($content)){
		echo("Please fill both header and content".'<br>');
		
	}else{
		$addpost = "INSERT INTO `posts`(`postid`,`header`, `content`, `calender`, `Clock`) VALUES (null,'$header','$content',NOW(),NOW())";
		$postconn = mysqli_query($connection,$addpost);
		echo('New post has been created successfully');
	}
}


?>
<form action="" method="post">
<input type="text" name="header" class="form-control" placeholder="Header" autofocus required><br>
<textarea name="content" class="form-control" required placeholder="Create New Post."></textarea><br>
<button type="submit" name="submit" class="btn btn-primary" style="border-radius: 30px;">POST+</button>
</form>