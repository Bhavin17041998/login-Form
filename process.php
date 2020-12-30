<!DOCTYPE html>
<?php
require_once('connect.php');
session_start();
if(isset($_POST['login'])){
	//echo 'working now';

	if(empty($_POST['username'] || $_POST['password'])){
		header("location:index.php?Empty=Please Fill In The Blanks");
	}
	else{
		$query="SELECT `id`, `username`, `password` FROM `userpass` WHERE username='".$_POST['username']."' and password='".$_POST['password']."'";
		$result=mysqli_query($conn,$query);
		
		if(mysqli_fetch_assoc($result))
		{
			$_SESSION['id']=$_POST['id'];
			$_SESSION['username']=$_POST['username'];
			header("location:welcome.php");
		}else
		{
			header("location:index.php?Invalid= Please Enter Correct Username and Password");
		}
	}
}
else{
	//echo 'Not working Now';
}

?>
