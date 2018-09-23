
   <?php
   /*
      Posts App Functions
	  Created at:23/9/2018
	  Created By:mohamed abd elgawad
      E-mail:mohamedabd_elgawad@hotmai.com

   */
include 'config.php';
function settitle(){
	
	global $title;
	if(isset($title)){
		echo $title;
	}
}


   function totals()
   {
	   global $connection;
	  $sql = "SELECT COUNT(*) FROM posts";
	  $result = mysqli_query($connection,$sql);
	  $postCount = mysqli_fetch_array($result);
	  return $postCount[0];
   }

?>