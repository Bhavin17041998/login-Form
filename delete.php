<?php
include "connect.php";

$id=$_GET['id'];

$q= "DELETE FROM `userpass` WHERE id = $id";

mysqli_query($conn,$q);

header('location:display.php');
?>