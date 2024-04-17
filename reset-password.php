<?php

?>
<html>
<head>
<title> Reset Password </title>
<link rel='stylesheet' href='css/style1.css' type='text/css' media='all' />
<link rel='stylesheet' href='css/style1.css' type='text/css' media='all' />
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
    body {
     background-image: url('Pink-Blue-Blured-Texture.jpg');
     background-repeat: no-repeat;
	 background-position: center;
	 background-size: 100%;
    }
</style>
</head>
<body>
<style>
   
   footer{
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(255,255,255,0);
    height: auto;
    width: 100vw;
    font-family: "Open Sans";
    color: #000000;
}
	.footer-bottom{
    background: rgba(255,255,255,0);
    width: 80vw;
    padding: 4px 0;
    text-align: center;
}
.footer-bottom p{
    font-size: 10px;
    word-spacing: 4px;
    text-transform: capitalize;
}
   
</style>
<link href="style1.css" rel="stylesheet" type="text/css">
     <div class="container-fluid p-3 my-3 bg-dark text-white" style="height:130px" >
   <img src="logo.jpeg" class="rounded float-left" style="width:100px;height:100px;">
	
	<center> 
	<h2> Brihan Maharashtra College of Commerce </h2>
	<h3> Placement Cell Management </h3>
	</center>
	</div>
<div style="width:700px; margin:50 auto;">
<div style="width:700px; margin:50 auto;">

<h2> Reset Password Tool</h2>   

<?php
include('db.php');
if (isset($_GET["key"]) && isset($_GET["email"])
&& isset($_GET["action"]) && ($_GET["action"]=="reset")
&& !isset($_POST["action"])){
$key = $_GET["key"];
$email = $_GET["email"];
$curDate = date("Y-m-d H:i:s");
$query = mysqli_query($con,"
SELECT * FROM `password_reset_temp` WHERE `key`='".$key."' and `email`='".$email."';");
$row = mysqli_num_rows($query);
if ($row==""){
$error .= '<h2>Invalid Link</h2>
<p>The link is invalid/expired. Either you did not copy the correct link from the email, 
or you have already used the key in which case it is deactivated.</p>
<p><a href="http://localhost/placement/index1.php">Click here</a> to reset password.</p>';
	}else{
	$row = mysqli_fetch_assoc($query);
	$expDate = $row['expDate'];
	if ($expDate >= $curDate){
	?>
    <br />
	<form method="post" action="" name="update">
	<input type="hidden" name="action" value="update" />
	<br /><br />
	<label><strong>Enter New Password:</strong></label><br />
	<input type="password" name="pass1" id="pass1" maxlength="15" required />
    <br /><br />
	<label><strong>Re-Enter New Password:</strong></label><br />
	<input type="password" name="pass2" id="pass2" maxlength="15" required/>
    <br /><br />
	<input type="hidden" name="email" value="<?php echo $email;?>"/>
	<input type="submit" id="reset" value="Reset Password" />
	</form>
<?php
}else{
$error .= "<h2>Link Expired</h2>
<p>The link is expired. You are trying to use the expired link which as valid only 24 hours (1 days after request).<br /><br /></p>";
				}
		}
if($error!=""){
	echo "<div class='error'>".$error."</div><br />";
	}			
} // isset email key validate end


if(isset($_POST["email"]) && isset($_POST["action"]) && ($_POST["action"]=="update")){
$error="";
$pass1 = mysqli_real_escape_string($con,$_POST["pass1"]);
$pass2 = mysqli_real_escape_string($con,$_POST["pass2"]);
$email = $_POST["email"];
$curDate = date("Y-m-d H:i:s");
if ($pass1!=$pass2){
		$error .= "<p>Password do not match, both password should be same.<br /><br /></p>";
}
	if($error!=""){
		echo "<div class='error'>".$error."</div><br />";
		}
else{
$pass1 = $pass1;
mysqli_query($con,
"update usertable set `password`='$pass1' where `email`='$email';");	

mysqli_query($con,"DELETE FROM `password_reset_temp` WHERE `email`='".$email."';");		
	
echo '<div class="error"><p>Congratulations! Your password has been updated successfully.</p>
<p><a href="http://localhost/placement/stulogin.php">Click here</a> to Login.</p></div><br />';
		}		
}
?>


<br /><br />
<center>
<footer>
        <div class="footer-bottom">
            <p><h6>copyright &copy;2021 BMCC Placement Cell. designed by Group I</h6></p>
        </div>
    </footer></center>
</div>
</body>
</html>