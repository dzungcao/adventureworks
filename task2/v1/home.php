<?php 
	session_start();
	if(!isset($_SESSION['user_id'])){
		header('location: login.php');
	}
?>
<h1>Home</h1>
<hr/>
<?php @include('include/menu.php') ?>
<span>Welcome to AdventureWorks administration page</span>