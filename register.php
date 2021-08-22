<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="style.css" rel="stylesheet">
	<style>
	.reg-box {
	background-color: rgba(0, 0, 0, 0.5);
	margin: auto auto;
	padding: 40px;
	border-radius: 5px;
	box-shadow: 0 0 10px #000;
	position: absolute;
	top: -30%;
	bottom: -30%;
	left: 0;
	right: 0;
	width: 400px;
	height: 600px;
}
.reg-box:before {
	background-image: url("https://images7.alphacoders.com/996/996873.jpg");
	width: 100%;
	height: 100%;
	background-size: cover;
	content: "";
	position: fixed;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	z-index: -1;
	display: block;
	filter: blur(2px);
}
.reg-box .header-text {
	font-size: 32px;
	font-weight: 600;
	padding-bottom: 30px;
	text-align: center;
}
.reg-box input {
	margin: 10px 0px;
	border: none;
	padding: 10px;
	border-radius: 5px;
	width: 100%;
	font-size: 18px;
	font-family: poppins;
}
.reg-box label {
	position: relative;
	margin-left: 5px;
	margin-right: 10px;
	top: 5px;
	display: inline-block;
	width: 20px;
	height: 20px;
	cursor: pointer;
}
.reg-box label:before {
	content: "";
	display: inline-block;
	width: 20px;
	height: 20px;
	border-radius: 5px;
	position: absolute;
	left: 0;
	bottom: 1px;
	background-color: #ddd;
}
.reg-box span {
	font-size: 14px;
}
.reg-box button {
	background-color: deepskyblue;
	color: #fff;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	width: 50%;
	font-size: 18px;
	padding: 10px;
	margin: 20px 0px;
}
.error {
  width: 30%; 
  margin: 0px auto; 
  padding: 80px; 
  color:#FF0000;
  background: none; 
  text-align: center;
}
input:invalid{
	border:3px solid red;
}
</style>
</head>
<body>	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="reg-box">
		<div class="header-text">
Register 
		</div>
	  Username
  	  <input type="text" name="username" maxlength="13" pattern="[0-9]+" value="<?php echo $username; ?>">
	  Email id
  	  <input type="email" name="email" value="<?php echo $email; ?>">
	  Password
  	  <input type="password" name="password_1">
	  Confirm Password
  	  <input type="password" name="password_2">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
	  	</div>
  </form>
</body>
</html>
