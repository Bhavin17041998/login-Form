<?php
require_once("connect.php");

if(isset($_POST['update']))
    {
	
	 $id=$_GET['id'];																											
	 $firstname=$_POST['firstname'];
     $lastname=$_POST['lastname'];
     $phone=$_POST['phone'];
     $email=$_POST['email'];
     $image='image/'.$_FILES['image']['name'];
     $username=$_POST['username'];
     $password=$_POST['password'];
	
	 $query="update userpass set firstname='".$firstname."',lastname='".$lastname."',phone='".$phone."',email='".$email."',image='".$image."',username='".$username."',password='".$password."' where id='".$id."'";
	 $result=mysqli_query($conn,$query);
	 
	 if($result){
		 header("location:display.php");
	    }else{
			echo "Query has not updated";
		}
	 
	 
    }
?>