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
<div class = "container">
   <br>

 <center> <img src="adu.png" width="100" align="left"> <img src="cpe.jpg" width="100" align="right" >
   <h3><b> Adamson University</b></h3>
    <h3><b>Computer Engineering Department</h3><br></b> </center>   
  <div class="topnav">
  <a href="view.php">View All Data / Data Configure </a>
  <a c href="index.php">Add Data</a>
  <a href="login.php" style="float:right" >Logout</a>
  <a href="upload.php" class="active" >UPLOAD SUCCESSFULLY !</a>
   </div>

   <h1 class= "text-white bg-dark text-center">
    
   	</h1><br>
   	<table class = "table table-bordered table striped table-hover text-center ">
   		<thead class="bg-dark text-white">
   		
   			<th> ID No.</th>
        <th> Profile Picture</th>
   			<th> Full Name</th>
   			<th> Email</th>
   			<th> Contact Number</th>
   			<!-- <th> Delete Data</th> --> 
   			

   		</thead>

        <tbody>
        <?php 

             $con = mysqli_connect('localhost','root');
             mysqli_select_db($con,'displayupload');

             if(isset($_POST['submit'])) {
             $username = $_POST['username'];
             $email = $_POST['email'];
             $contact = $_POST['contact'];
             $files = $_FILES['file'];

            
          
             //print_r(echo "UPLOAD SUCCESSFULLY!");
            //echo "UPLOAD SUCCESSFULLY!";
             //print_r($email);
            // echo "<br>";
             //print_r($contact);
            //echo "<br>";
             

             //print_r($files);

// FOR IMAGE CONFIGURATION
             $filename = $files['name'];
             $filerror = $files['error'];
             $filetmp = $files ['tmp_name'];

             $fileext = explode('.',$filename);
             $filecheck = strtolower(end($fileext));

             $fileextstored = array('png','jpg', 'jpeg');
             
             if(in_array($filecheck,$fileextstored)){
            
             $destinationfile = 'Upload/'.$filename;
             move_uploaded_file($filetmp,$destinationfile);

             $q = "INSERT INTO `uploaddata`(`username`,`email`,`contact`, `image`) 
             VALUES ('$username','$email','$contact', '$destinationfile')";

             $query = mysqli_query( $con,$q ); 

             $displayquery = " select * from uploaddata " ;
             $querydislay = mysqli_query($con,$displayquery );


             //$row = mysqli_num_rows($querydisplay);
             while ( $result = mysqli_fetch_array($querydislay) ) {

               ?>
           
                <tr>
                     <td> <?php echo $result['id']; ?></td>
                     <td> <img src = "<?php echo $result['image']; ?>" height= "100px" width= "100px"></td> 
                     <td> <?php echo $result['username']; ?></td>
                     <td> <?php echo $result['email']; ?></td>
                     <td> <?php echo $result['contact']; ?></td>
                  
                     
                </tr>

             <?php
             }

             }
             else{
             	echo "file upload error";
             }


    }

?>


</tbody>
</table>
</body>
</html>
