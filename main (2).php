<html>
<head>
 <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
  
</head>
<body>
<style>
    body {
     background-image: url('bmcc.jpeg');
     background-repeat: no-repeat;
	 background-position: center;
	 background-size: 100%;
    }
</style>

 
    <div class="container-fluid p-3 my-3 bg-dark text-white" style="height:140px" >
   <img src="logo.jpg" class="rounded float-left" style="width:100px;height:100px;">
	
	<center> 
	<h2> Brihan Maharashtra College of Commerce </h2>
	<h3> Placement Cell Management </h3>
	</center>
	</div>
	<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
  
  button{
 color: #fff;
 width: 100%;
 padding: 10px;
 border-radius: 20px;
 font-size: 15px;
 margin: 10px 0;
 border: none;
 outline: none;
 cursor: pointer;
 }
}
</style>
</head>
<body>

<div class="topnav">
  
  <a href="index.php">Contact Us</a>
  <a href="aboutus.php">About Us</a>
  <a href="gallery.php">Gallery</a>
</div>

</body>
</html>
<br>
	<div class="login-menu"> 
	<center>
	<form action="stulogin.php" method="post">
	<button type="submit" class="btn btn-primary">Student Login</button><br><br>
	</form>
	<form action="adminlogin.php" method="post">
	<button type="submit" class="btn btn-primary">Admin Login</button><br><br>
	</form><br><br><br><br><br>
	<b> Not having an account ? </b></br>
	<form action="signup.php" method="post">
	<button type="submit" class="btn btn-primary">Sign Up</button><br><br>
	</form>
	<?php
	 $con=mysqli_connect("localhost","root","","placementdb");
	$qry="select * from placement_tbl where expDate>'".date("Y-m-d")."'";
	
	
	?>
</div>
</body>
</html>