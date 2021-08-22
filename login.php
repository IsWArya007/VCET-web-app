<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VCET-Placement Web App</title>
	<link href="style.css" rel="stylesheet">
</head>
<body>
<img src="http://localhost/VCET-Web App/1580133098955-removebg-preview.png" class="logo">
<h1> VELAMMAL COLLEGE OF ENGINEERING AND TECHNOLOGY</h1>
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
<div class="form-box">
<div class="header-text">
Login 
		</div>
		<input placeholder="Username" type="text" name="username"> 
		<input placeholder="Password" type="password"  name="password"> 
		<button type="submit" class="btn" name="login_user">Login</button>
		<p>
  		Not yet a member? <a href="register.php"> Sign up</a>
  	</p>
	</div>
	</form>
</body>
</html>
