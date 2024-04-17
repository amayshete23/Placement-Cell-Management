


<?php 
    $servername = "localhost";
$username = "root";
$password = "";
$dbname="placementdb";


// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
    $msg = "";
    if(isset($_POST['submit'])){
        
                $date = $_POST['date'];
                $desc = $_POST['desc'];
                
                // Validation code here
				$msg = "Added New Anouncement.";
                
				echo "<script>alert('Announcement added sucessfully'); window.location='admdash.php'</script>";
                
                //Insert into db
                $sql = "insert into anouncement values(NULL,'$date','$desc');";
                
                if($conn->query($sql)==true){
                    

                    
                }else{
                    
                    $msg= "Failed to add new anouncement" ;
					
					echo "<script>alert('Announcement Failed'); window.location='admdash.php'</script>";
					
                }
                
    }


?>


<html>
    <head>
        <title>Anouncements</title>
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
	
	table tr td{
            font-family:sans-serif;
            font-size:0.6cm;
            color: #7B1F06
        }
        input{
            font-family:sans-serif;
            font-size:0.6cm;
            color:#003333;
        }
        .size21{
            font-style: italic;
        }
		
		submit{
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
&nbsp;<button type="button" style="height:40px;width:60px" class="btn btn-primary " onclick="history.back()"><b>Back</b></button>&nbsp;
         <div class="row">
          <div class="col-md-4 col-md-offset-4">
    
        
    <center>
         
        <div id="adminPane"  style="background:rgba(255,255,255,0)" class="jumbotron ">
            
             <center><center><center><center><center><h3>Add new Anouncement</h3></center></center></center></center></center>
			 
        <form action="announcement.php" method="post">
            
            <div><?php echo $msg; ?></div>
            <div class="input-group" style="margin:15px">   
             <span class="input-group-addon"><i class="glyphicon glyphicon-date"></i></span>
    <input id="email" type="date" class="form-control" name="date" placeholder="Date">
  </div>
                 
  <div class="input-group" style="margin:15px">
    <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
    <textarea id="password"  class="form-control" name="desc" placeholder="Anouncement"></textarea>
  </div>
                  
            
            
            <input name="submit" style="background-color: #1c8adb;color: #fff; width: 50%; padding: 10px; border-radius: 20px; font-size: 15px; margin: 10px 0; border: none;outline: none;cursor: pointer;"type="submit" value=" Add">
        </form>
             
         </div>
        <script>
       
        $("#adminPane").hover(function(){
             
             $(this).toggleClass("divhover");
             
         });
         
        </script>
        
        
        
    
                   </div>
               </div>
   
        <center>
<footer>
        <div class="footer-bottom">
            <p><h6>copyright &copy;2021 BMCC Placement Cell. designed by Group I</h6></p>
        </div>
    </footer></center>
    </body>   
</html>

