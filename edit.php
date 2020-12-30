<?php
include "process.php";

if(!isset($_SESSION['username'])){
	header("location:index.php");
}
?>
<?php
include "connect.php";
$id=$_GET['id'];
$query="select * from userpass where id='".$id."'";
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result)){
	 $firstname=$row['firstname'];
     $lastname=$row['lastname'];
     $phone=$row['phone'];
     $email=$row['email'];
     $image=$row['image'];
     $username=$row['username'];
     $password=$row['password'];
    }
?>
<!DOCTYPE html>
    <html>
        <head>
         <title>registeration</title>
		 <link rel="stylesheet" href="style/update.css" type="text/css" media="all" />
        </head>

        <body>
		 <h1>Update Here</h1>
			<div class="container">
			    <form action="update.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data">
				   <h2 class="name">Name</h2>
				     <input type="text" name="firstname" class="firstname" placeholder="Firstname" value="<?php echo $firstname?>" required />
					 <input type="text" name="lastname" class="lastname" placeholder="LastName" value="<?php echo $lastname?>" required />
					<h2 class="name">Phone</h2>
						 <input type="text" name="phone" class="code" value="+91">
						 <input type="text" name="phone" class="number" placeholder="Number" value="<?php echo $phone?>" required />
					<h2 class="name">Email</h2>
						 <input type="text" name="email" class="email" placeholder="Enter E-mail here" value="<?php echo $email?>" required /><br>
					<h2 class="name">Image</h2>
						 <input type="file" name="image" class="image" value="<?php echo $image?>" />
					<h2 class="name">Username</h2>
						 <input type="text" name="username" class="username" placeholder="Enter Username" value="<?php echo $username?>" required /><br>
					<h2 class="name">Password</h2>
						 <input type="password" name="password" class="password" placeholder="Enter Password" value="<?php echo $password?>" required /><br>
					<h2 class="name">ConfirmPassword</h2>
						 <input type="Password" name="confirmpassword" class="password" placeholder="Confirm Password" required /><br>
						 <input class="submit" type="submit" name="update" value="Update"><br>
			    </form>
			</div>
        </body>
    </html>