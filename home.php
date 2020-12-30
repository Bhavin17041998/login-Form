<?php
session_start();
if (!isset($_SESSION["username"])) {
    
	header("Location:index.php");
}
?>
<!DOCTYPE html>
    <html>
		<head>
		  <title>Home Page</title>
		  <link href="style/home.css" rel="stylesheet" media="all"/>

		</head>
		<body>
			<header class="header">Welcome to CRUD Home page</header>
			
			<ul>
				<li><a href="display.php">Display</a></li>
				<li><a href="registration.php">Registration</a></li>
				<li><a href="logout.php?logout">Logout</a></li>
			</ul>
			<div class="container">
				<h1><b>Welcome <?php echo $_SESSION['username'];?></b></h1>
			</div>
		</body>
    </html>