<?php
include "process.php";

if(!isset($_SESSION['username'])){
	header("location:index.php");
}
?>
<!DOCTYPE html>
    <html>
        <head>
         <title>registeration</title>
		 <link href="style/update.css" rel="stylesheet" media="all" />
        </head>

        <body>
		 <h1>Register Here</h1>
			<div class="container">
			    <form action="create.php" method="post" enctype="multipart/form-data">
				   <h2 class="name">Name</h2>
				     <input type="text" name="firstname" class="firstname" placeholder="Firstname" required>
					 <input type="text" name="lastname" class="lastname" placeholder="LastName" required>
					<h2 class="name">Phone</h2>
						 <input type="text" name="phone" class="code" value="+91">
						 <input type="text" name="phone" class="number" placeholder="Number" required>
					<h2 class="name">Email</h2>
						 <input type="text" name="email" class="email" placeholder="Enter E-mail here" required><br>
					<h2 class="name">Image</h2>
						 <input type="file" name="image" class="image">
					<h2 class="name">Username</h2>
						 <input type="text" name="username" class="username" placeholder="Enter Username" required><br>
					<h2 class="name">Password</h2>
						 <input type="password" name="password" class="password" placeholder="Enter Password" required><br>
					<h2 class="name">ConfirmPassword</h2>
						 <input type="Password" name="confirmpassword" class="password" placeholder="Confirm Password" required><br>
						 <input class="submit" type="submit" name="submit" value="Submit"><br>
			    </form>
			</div>
        </body>
    </html>