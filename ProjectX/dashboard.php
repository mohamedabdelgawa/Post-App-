
<?php 

session_start();
if(!isset($_SESSION['username'])){
	header('location:index.php');
	exit();
}

$title = 'Korora';include"header.php";


?>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
		<h2><span class="glyphicon glyphicon-dashboard"></span> Dashboard</h2>
			
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
			
			<?php if(isset($_SESSION['username']) && $_SESSION['usertype']=='admin')
{
	?>

			
		<div class="list-group">
			  <a class="list-group-item active">Welcome,  <?php echo $_SESSION['username'];?></a>
			  <a href="dashboard.php?page=home.php" class="list-group-item"><span class="glyphicon glyphicon-home"></span> Home<span class="badge"><?php echo totals(); ?></span></a>
			  <a href="dashboard.php?page=management.php" class="list-group-item"><span class="glyphicon glyphicon-cog"></span> Post Management</a>
			  <a href="dashboard.php?page=newpost.php" class="list-group-item"><span class="glyphicon glyphicon-plus"></span> New Post</a>
			  <a href="dashboard.php?page=newuser.php" class="list-group-item"><span class="glyphicon glyphicon-user"></span> Create User</a>
			  <a href="signout.php" class="list-group-item"><span class="glyphicon glyphicon-bed"></span> Sign out</a>
		</div>
		<?php }else{  ?>	
			
					
		<div class="list-group">
			  <a class="list-group-item active">Welcome,  <?php echo $_SESSION['username'];?></a>
			  <a href="dashboard.php?page=home.php" class="list-group-item"><span class="glyphicon glyphicon-home"></span> Home <span class="badge"><?php echo totals(); ?></span></a>
			  <a href="dashboard.php?page=newpost.php" class="list-group-item"><span class="glyphicon glyphicon-plus"></span> New Post</a>
			  <a href="dashboard.php?page=newuser.php" class="list-group-item"><span class="glyphicon glyphicon-user"></span> Create User</a>
			  <a href="index.php" class="list-group-item"><span class="glyphicon glyphicon-bed"></span> Sign out</a>	
			  </div> 
	
<?php } ?>
		</div>
		<div class="col-lg-9">
			<div class="panel panel-primary">
			  <div class="panel-heading">
				  <?php 
				  $url = @$_GET['page'];
				  if(isset($url)):
					  switch($url):
					  
					  case 'home.php':
					  echo 'Home';
					  break;
					  
					  case 'management.php':
					  echo 'Post Management';
					  break;
					  
					  case 'newpost.php':
					  echo 'Create New Post';
					  break;
					  
					  case 'newuser.php':
					  echo 'Create new User';
					  break;
				  
				      case 'edit.php':
					  echo 'Editing';
					  break;
				  
				      case 'delete.php':
					  echo 'Delete Post';
					  break;
					  
					  endswitch;
				  else:
				
				  echo 'Home';	
				  endif;
				  ?>
				  
				</div>
			  <div class="panel-body">
				<?php 
				  $url = @$_GET['page'];
				  if(isset($url)){
					  include($url);
				  }else{
					 include('home.php');
				  }
				  ?>
			  </div>
			</div>
		</div>
	</div>


</div>

