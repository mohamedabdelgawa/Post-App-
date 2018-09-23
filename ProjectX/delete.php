<?php 

if(isset($_POST['submit'])){
	$postid = $_GET['id'];
	$delete = "DELETE FROM `posts` WHERE postid = '$postid'";
	if(mysqli_query($connection,$delete)){
	header('location:dashboard.php?page=management.php');
}else{
		echo 'Failed to Connect to database.';
	}
}
?>
<form class="text-center" action='' method='post'>
  <h3> Do you want to delete this Post ?</h3>
  <input class="btn btn-danger" type="submit" name="submit" value="Yes" >
	 <a class="btn btn-default" href="dashboard.php?page=management.php">NO</a>
 
 </form>

