<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";


// Create connection
$conn =new mysqli($servername, $username, $password, $dbname);


if(!$conn){
	die ("Please check Your Connection".mysqli_error($conn));
}
?>