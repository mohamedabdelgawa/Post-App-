<?php 


$allposts = "SELECT `postid`, `header`, `content`, `calender`, `Clock` FROM `posts`";
$conn = mysqli_query($connection,$allposts);
if($conn){
	while($result = mysqli_fetch_array($conn)){
		echo 
			"<h3>$result[1]</h3><br>
		     <p>$result[2]</p><span> $result[3] </span><span> $result[4] </span><br><hr>
			 
		";
	}
}
?>

