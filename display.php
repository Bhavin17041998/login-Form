<?php
include "process.php";

if(!isset($_SESSION['username'])){
	header("location:index.php");
}

?>
<!DOCTYPE html>
    <html>
        <head>
		  <title>display</title>
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>  
		    <style>
 			 .header{
			         background-color:#00b3b3;
			         padding:30px;
			         text-align:center;
			         font-size:60px;
			        }
		    </style>
        </head>
	    <body>
		 <h1 class="header">Display Table Data</h1>
		    <div class="container">
		        <div class="col-lg-12">
				 <br>
		            <table class="table table-striped table-hover table-bordered">
						<tr class="bg-dark text-white text-center">
						    <th>Id</th>
							<th>Firstname</th>
						    <th>Lastname</th>
							<th>phone</th>
							<th>email</th>
							<th>image</th>
							<th>Username</th>
							<th>Password</th>
							<th>Update</th>
							<th>Delete</th>   
						   
						</tr>
					    <?php
						  include 'connect.php';
		      			  $q = "SELECT *FROM userpass";
					      $query = mysqli_query($conn, $q);
					      while ($row = mysqli_fetch_assoc($query))
					        {
						     $id = $row['id'];
						     $firstname = $row['firstname'];
						     $lastname = $row['lastname'];
						     $phone = $row['phone'];
						     $email = $row['email'];
						     $image = $row['image'];
						     $username = $row['username'];
						     $password = $row['password'];
                        ?>
							    <tr class="text-center">
							 	 <td><?php echo $id ?></td>
								 <td><?php echo $firstname ?></td>
								 <td><?php echo $lastname ?></td>
								 <td><?php echo $phone ?></td>
								 <td><?php echo $email ?></td>
								 <td><?php echo $image ?></td>
								 <td><?php echo $username ?></td>
								 <td><?php echo $password ?></td>
								 <td><button class="btn btn-primary btn"><a href="edit.php?id=<?php echo $id; ?>" class="text-white"> Update </a></button></td>
								 <td><button class="btn btn-danger btn"><a href="delete.php?id=<?php echo $id ?>" class="text-white"> Delete </a></button></td>
						        </tr>
						   <?php
					        }
						    ?>
		            </table>
		        </div>
		    </div>
		</body>
    </html>
