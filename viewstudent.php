<html>
<head>
 <title>Student Information Page</title>
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
	&nbsp;<button type="button" style="height:40px;width:60px" class="btn btn-primary " onclick="history.back()"><b>Back</b></button>&nbsp;	
	
	<center>
	<h2> Student Details </h2>
	</center>

<center>
<footer>
        <div class="footer-bottom">
            <p>copyright &copy;2021 BMCC Placement Cell. designed by Group I</p>
        </div>
    </footer></center>

</body>
</html>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$database ="placementdb";
$conn = mysqli_connect($servername, $username, $password, $database);
  
mysqli_select_db($conn, "placementdb");
$sql= "Select * from stureg";
$result = $conn->query($sql);
if(mysqli_num_rows($result)>0){
                
        while($row=$result->fetch_assoc()){
        ?>
			<table frame='border'  cellpadding='10' cellspacing='5' align='center'>
                <tr>
			     <th>Roll no</th>
			     <th>First name</th>
			     <th>Surname</th>
			     <th>Date of Birth</th>
			     <th>Contact number</th>
			     <th>email</th>
                 <th>Stream</th>
                 <th>Course</th>
                 <th>CGPA</th>
                 <th>10th marks</th>
				 <th>12th marks</th>
                 <th>Backlog</th>  
				   </tr>
					<tr><td><?php echo $row['rollno']?></td>   
                       <td><?php echo $row['stuname']?></td>   
                          <td><?php echo $row['fname']?></td> 
                             <td><?php echo $row['dob']?></td>
                             <td><?php echo $row['contno']?></td>
                             <td><?php echo $row['email']?></td>
                             <td><?php echo $row['strm']?></td>
							 <td><?php echo $row['course']?></td>
							 <td><?php echo $row['score']?></td>
							 <td><?php echo $row['ten']?></td>
							 <td><?php echo $row['twelve']?></td>
							 <td><?php echo $row['backlog']?></td>
							 <td></td>
                           <?php  $delLink = "deleteStudent.php?rollno=".$row['rollno']; ?>
                             <td><a href="<?php  echo $delLink ?>" >Delete</a></td> </br> 
                </tr></table>
            <?php
        
         }
    }
?>