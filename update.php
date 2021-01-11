<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
    
   // $hostname = "localhost";
   // $username = "root";
   // $password = "";
   // $databaseName = "test_db";
    $con = mysqli_connect("127.0.0.1","root","","displayupload");
 // mysql_connect('localhost','root','');
  //DATABSE
 //mysql_select_db('displayupload');
  //make connection to table
  //$sql = ;
   $row = mysqli_query($con,"SELECT * FROM uploaddata");
   
  // $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
   
   $id = $_POST['id'];
   $image = $_POST['image'];
   $username = $_POST['username'];
   $email = $_POST['email'];
   $contact = $_POST['contact'];
           
   // mysql query to Update data
   $query = "UPDATE `uploaddata` SET `image
   `='".$image."',`username`='".$username."',`email`='" .$email."',`contact`='" .$contact.'"WHERE `id` ='"$id';
   
   $result = mysqli_query($con $query);
   
   if($result)
   {
       echo 'Data Updated';
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($connect);
}

?>

<!DOCTYPE html>
<html>
<head>
<title></title>   
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

   <div
    style = "background-image: url('poster.jpg') "
    style= "background-size: ";
    background-image: url('poster.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center; 
  >
   <br>
    

      <center>
    <img src="adu.png" width="250" >
   <h1><b> Adamson University</h1>
    <h2>900 San Marcelino St, Ermita, Manila, 1000 Metro Manila</h2><br><br><br><br></b>                     
    <i><b><h1>Student Registration Form </i><br><br></b></h1></b> 

      </h4>
      <br>
      <br>
   <!-- <div class = "col-lg-8 m-auto d-block"> -->
   <form action = "upload.php" method = "post" enctype="multipart/form-data">
      <div class = "form-group">
      <b>
      <label for = "user">Update Full Name: </label><br>
      <input type = "text" name="username" id = "user">
      <br>
      <label for = "user">Update Email: </label><br>
      <input type = "text" name="email" id = "user"> 
      <br>
       <label for = "user">Update Contact Number: </label><br> 
      <input type = "text" name="contact" id = "user"><br><br> 
  
       <label for = "file">Update Photo: </label><br>
      <input type = "file" name="file" id = "file" >
    </div> <br>
  </b>
    <br>
   
    <br>
    <br><br>
   <input type="submit" name = "update" value = "Update Data" class = "btn btn-success">
   <br>
   <br>

</div>
</body>
</html>