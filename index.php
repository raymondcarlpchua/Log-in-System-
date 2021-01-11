<!DOCTYPE html>
<html>
<head>
<title></title>	
<link rel="stylesheet" type="text/css" href="nav.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
</head>
<body>  
  <center> <img src="adu.png" width="100" align="left"> <img src="cpe.jpg" width="100" align="right" >
   <h3><b> Adamson University</b></h3>
    <h3><b>Computer Engineering Department</h3><br></b> </center>   
  <div class="topnav">
  <a href="view.php">View All Data / Data Configure </a>
  <a class="active" href="index.php">Add Data</a>
  <a href="login.php" style="float:right" >Logout</a> </div>
   <div
    style = "background-image: url('poster.jpg') "
    style= "background-size: fixed ";
    background-image: url('poster.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center; 
  >
   <br>
    
<br>
   	<center>
      <img src="personal.png" width="125" align="center">         
    <i><b><h1>Student Registration Form </i><br><br></b></h1></b> 

    <div class = "col-lg-8 m-auto d-block"> 
   <form action = "upload.php" method = "post" enctype="multipart/form-data">
   	<div class = "form-group">
      <b>
    	<label for = "user">Full Name: </label><br>
    	<input type = "text" name="username" id = "user">
    	<br>
    	<label for = "user">Email: </label><br>
    	<input type = "text" name="email" id = "user"> 
    	<br>
    	 <label for = "user">Contact Number: </label><br> 
    	<input type = "text" name="contact" id = "user"><br><br> 
  
    	 <label for = "file">Upload Photo: </label><br>
    	<input type = "file" name="file" id = "file" >
    </div> <br>
  </b>
   
   <input type="submit" name = "submit" value = "Submit" class = "btn btn-success">
   <br>
   <br>

 

 </center>
    </form>
    </div>
</body>
</html>



