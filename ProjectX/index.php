
<?php
session_start();
$title = 'Login';
include('header.php');

if(isset($_POST['submit'])){
	$username = trim($_POST['username']);
	$password = md5($_POST['password']);
	
	$users = "SELECT `userid`, `username`, `userpass`, `usertype` FROM `users` WHERE username = '$username' AND userpass = '$password'";
    $result = mysqli_query($connection,$users);
	if(mysqli_num_rows($result) == 1){
		$userdata = mysqli_fetch_array($result);
		$_SESSION['username'] = $userdata[1];
		$_SESSION['usertype'] = $userdata[3];
		header('location: dashboard.php');
	}else{
		$error = '*Please enter your username and password correctly.';
	}
}


?>
	


<div class="container">
	<form class="login" action="" method="post">
		<h2>Admin</h2>
		<input type="text" name="username" class="form-control" placeholder="UserName" autocomplete="on" autofocus required autocomplete="on"><br/>
		<input type="password" name="password" class="form-control" placeholder="Password" required><br/>
		<button type="submit" name="submit" class="btn btn-primary">LOGIN</button><br>
		<?php if(isset($error)){
	echo $error;
}
?>
	</form>
</div>
