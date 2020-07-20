<?php include('process.php') ?>
<!DOCTYPE html>
<html>
<head>



	<title>Student Event Management System</title>
	
</head>
<link rel="stylesheet" href="style.css">
<body>
<div class="header">
	<h2>Admin Login</h2>
</div>
<form method="post" action="register.php">
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="">
	</div>
	
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	
	<div class="input-group">
		<button type="submit" class="btn" name="login_btn">Login</button>
	</div>
	
</form>
</body>
</html>