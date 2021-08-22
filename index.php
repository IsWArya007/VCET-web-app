<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
  <style>
  
  body{
	  background:url('https://images.unsplash.com/photo-1526554850534-7c78330d5f90?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mnx8bWFpbHxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80');
	  background-size:cover;
  }
 	
.in-box {
	background-color: rgba(0, 0, 0, 0.5);
	margin: auto auto;
	padding: 40px;
	border-radius: 5px;
	box-shadow: 0 0 10px #000;
	position:absolute;
	top: 30%;
	bottom: -30%;
	left: 0;
	right: 0;
	width: 500px;
	height: 1000px;
}
.in-box:before {
	width: 100%;
	height: 100%;
	background-size: cover;
	content: "";
	position: absolute;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	z-index: -1;
	display: block;
	filter: blur(2px);
}

input[type=text]
{
	width:300px;
}

input[type=radio]
{
	-ms-transform:scale(1.5);
	-webkit-transform:scale(1.5);
	transform:scale(1.5);
}
label{
	margin-left:3px;
}































	 
</style>
  <body>
  <form action="index.php" method="post" enctype="multipart/form-data" >
    <div class="in-box">
	<div class="form-group">
	<label style="color:white">Name:</label><br><br>
	<input type="text"  class="form-control" name="fname" ><br>
	</div>
	  <div class="form-group">
    <label for="exampleFormControlInput1"  style="color:white">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" name="emailid" placeholder="name@example.com"  >
  </div>
	<label style="color:white">Section:</label><br><br>
	<input type="radio" id="a" name="section" value="a">
	<label for="a" style="color:white;">Section A</label><br>
	<input type="radio" id="b" name="section" value="b">
	<label for="b" style="color:white">Section B</label><br><br>
    <div class="form-group">
    <label for="exampleFormControlSelect1" style="color:white">Department</label>
    <select class="form-control" id="exampleFormControlSelect1" name="department">
      <option>CSE</option>
      <option>IT</option>
      <option>ECE</option>
      <option>EEE</option>
      <option>CIVIL</option>
	  <option>MECH</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2" style="color:white">Batch</label>
    <select class="form-control" id="exampleFormControlSelect2" name="batch">
     <option >2017-2021</option>
    				<option >2018--2022</option>
    				<option >2019-2023</option>
    				<option >2020-2024</option>
    				<option >2021-2025</option>
    				<option >2022-2026</option>
    </select>
  </div>
  <div class="form-group">
	<label style="color:white">Company Name:</label><br>
	<input type="text"  class="form-control" name="Cmpname"><br>
	</div>
  <label style="color:white">Choose:</label><br>
	<input type="radio" id="offer" name="letter" value="offerletter">
	<label for="offer" style="color:white;">Offer letter</label><br>
	<input type="radio" id="call" name="letter" value="callletter">
	<label for="call" style="color:white">Call letter</label><br><br>
	<div class="form-group">
    <label for="exampleFormControlFile1" style="color:white">Choose File</label>
    <input type="file" name="myfile" class="form-control-file" id="exampleFormControlFile1" accept="application/pdf">
  </div><br>
				<button type="submit" name="save" class="btn btn-primary">Upload</button>

	</div>
	</form>
  </body>
</html>