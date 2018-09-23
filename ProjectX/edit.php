<?php

$postid = $_GET['id'];
$posts = "SELECT `postid`, `header`, `content`, `calender`, `Clock` FROM `posts` WHERE postid = $postid";
$result = mysqli_query($connection,$posts);
$postarr = mysqli_fetch_array($result);

?>
<form action="update.php" method="post">
   
   <input type="hidden" name="postid" value="<?php echo $postarr[0]; ?>" >
   
   <input class="form-control" type="text" name="subject" placeholder="Title"  
   value="<?php echo $postarr[1]; ?>"><br>
  
   <textarea class="form-control" name="content" placeholder="Content"><?php echo $postarr[2]; ?></textarea><br>
  
   <button class="btn btn-primary" type="submit" name="submit" >Update Post</button>
 
 </form>