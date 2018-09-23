<?php
   if(isset($_POST['submit'])){
		
		$username = trim($_POST['username']);
		$password = md5($_POST['password']);
		$userType =  $_POST['userType'];
	   $checkuser = "SELECT `userid`, `username`, `userpass`, `usertype` FROM `users` WHERE username = '$username'";
	   $userconn = mysqli_query($connection,$checkuser);
			if(mysqli_num_rows($userconn) == 1){
				echo('*Please Choose different username');
				}else{
			$result ="INSERT INTO `users`(`username`, `userpass`, `usertype`) VALUES ('$username','$password','$userType')";
			mysqli_query($connection,$result);
					echo('New user has been created');
			}
		}
?>

<form action="" method="post">
<input class="form-control" type="text" name="username" placeholder="User Name" autocomplete="off" required><br>
<input class="form-control" type="password" name="password" placeholder="Password" required><br>
<select class="form-control" name="userType" required>
    <option value="">--User Type--</option>
    <option value="admin">Admin</option>
    <option value="supervisor">Supervisor</option>
    <option value="normal">Normal User</option>
</select><br>
<button class="btn btn-primary" type="submit" name="submit">Create</button>
</form>



