<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$image='image/'.$_FILES['image']['name'];
$username=$_POST['username'];
$password=$_POST['password'];

// Create connection
$conn = new mysqli('localhost', 'root', '', 'demo');

if($conn->connect_error){
	 die ("Please check Your Connection".$conn->connect_error);
    }
else{
	 $stmt=$conn->prepare("INSERT INTO userpass(id, firstname, lastname, phone, email, image, username, password) VALUES (?,?,?,?,?,?,?,?)");
	 $stmt->bind_param("ississss",$id,$firstname,$lastname,$phone,$email,$image,$username,$password);
	 $stmt->execute();
	 header("location:home.php");
	 $stmt->close();
	 $conn->close();
    }
?>

