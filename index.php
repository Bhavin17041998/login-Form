<!DOCTYPE html>
    <html>
	    <head>
		 <title>index</title>
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="style/index.css" media="all" />
	    </head>
		<body>
			<form action="process.php" method="post">
				<div class="login-box">
				   <h1>Login</h1>
					<div class="textbox">
						<i class="fa fa-user" aria-hidden="true"></i>
						<input type="text" placeholder="Username" name="username" value="">
					</div>
					<div class="textbox">
						<i class="fa fa-lock" aria-hidden="true"></i>
						<input type="Password" placeholder="Password" name="password" value="">
					</div>
					<div class="checkbox">
					    <input type="checkbox" name="" value=""> Remember me
					</div>
				    <?php
					    if(@$_GET['Empty']==true)
					    {
					?>
					     <br><div class="empty"><?php echo $_GET['Empty']?></div>
					 <?php
					    }
					 ?>
					 <?php
					    if(@$_GET['Invalid']==true)
					    {
					 ?>
					     <br><div class="empty"><?php echo $_GET['Invalid']?></div>
					 <?php
					    }
					 ?>
					<input type="submit" class="btn" name="login" value="Login">	
				</div>
			</form>
		</body>
    </html>

