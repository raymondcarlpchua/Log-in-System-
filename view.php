<?php
  //MAKE CONNECTION
 $con = mysqli_connect("127.0.0.1","root","","displayupload");
 // mysql_connect('localhost','root','');
  //DATABSE
 //mysql_select_db('displayupload');
  //make connection to table
  //$sql = ;
  $row = mysqli_query($con,"SELECT * FROM uploaddata");
// $sql = mysqli_query($success, "SELECT * FROM uploaddata WHERE image = '".$_POST['image']."' , username = '".$_POST['username']."','".$_POST['email']."',and contact = '".$_POST['contact']."'");
//$row = mysqli_num_rows($sql);

?>

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
   <h3><b> Adamson University </b> </h3>
    <h3><b>Computer Engineering Department</h3></b><br> </center>
  <div class="topnav">
  <a class="active" href="view.php">View All Data / Data Configure </a>
  <a href="index.php">Add Data</a>  
  <a href="login.php" style="float:right" >Logout</a>

</div>
<div class = "container">
   <br>
   <h1 class= "text-white bg-dark text-center">
    
    </h1><br>
    <table class = "table table-bordered table striped table-hover text-center ">
        <thead class="bg-dark text-white">
        
    <div class = "col-lg-8 m-auto d-block">
   <form action = "upload.php" method = "post" enctype="multipart/form-data">
            
            <th> Profile Picture</th>
            <th> Full Name</th>
            <th> Email</th>
            <th> Contact Number</th>
            <th> Data Configuration</th>
            <!-- <th> Delete Data</th> -->  </thead>

        <tbody>
         <?php
           while($uploaddata=mysqli_fetch_assoc($row)){
            ?>
               <tr>
                     
                     <td> <img src = "<?php echo $uploaddata['image']; ?>" height= "100px" width= "100px"></td> 
                     <td> <?php echo $uploaddata['username']; ?></td>
                     <td> <?php echo $uploaddata['email']; ?></td>
                     <td> <?php echo $uploaddata['contact']; ?></td>
                     <td><a href="update.php?id=<?php echo $uploaddata["id"];?>">UPDATE</a>

                      &nbsp;&nbsp;&nbsp;&nbsp;<a href="delete.php?id=<?php echo $uploaddata["id"];?>">DELETE</a></td>
                     
                </tr>
         <?php
           }//end while

           ?>

 </tbody>
</table>
</div>
</body>
</html>
    <!-- //echo "<tr>"; -->
       <!-- // echo "<td>".$uploaddata['image']."</td>"; -->
       <!-- // echo "<td>".$uploaddata['username']."</td>"; -->
        <!-- //echo "<td>".$uploaddata['email']."</td>"; -->
        <!-- //echo "<td>".$uploaddata['contact']."</td>"; -->
       <!-- // echo "</tr>"; -->