<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 50%;
  padding: 12px 20px;
  padding-top: 15px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}


button {
  background-color: DodgerBlue;
  color: white;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 63%;
  padding: 14px 28px;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width:60%;
  
}

.container {
  padding: 16px;
  padding-top: -1px;
  align: center;    
  margin: auto;
  width: 50%;
  text-align: center;
}

span.psw {
  padding-left: 20px;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
}
</style>
</head>
<body>

<?php
  if (isset($_POST['submit'])){

	$user = $_POST['username'];
	$pass = $_POST['password'];
	if($user=="admin" && $pass="1234"){
		header('LOCATION: /proj2/view.php');
	}
	
    echo ("Wrong Credentials !");
}
?>
<form action="" method="post">
<div class="rectangle">
  <div class="imgcontainer"> 
    <img src="adu.png"  width="600">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSx1sZo9s6JgrLMnnFN21QL_soenl0CBAdNUu3r6XR9yPtdGtAM" width="500">
    
  </div>
<div class="">
  <div class="container">
  	<h1><b>Computer Engineering<br> Student Database</b> </h1><br>
    <label><b>Username:</b></label><br>
    <input type="text" placeholder="Enter Username" name="username" >
    <br>

    <label><b>Password:</b></label><br>
    <input type="text" placeholder="Enter Password" name="password" >
    <br>
    <br>   
      <button type="submit" name = "submit" value = "Submit">Login</button><br>
    <label>

    
</div>
</form>

</body>
</html>
