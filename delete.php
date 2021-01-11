<?php
	 if (isset($_GET['id']) && ctype_digit($_GET['id']))
	 {
	 	$id = $_GET['id'];
	 }
	 else
	 {
	 	header('Location: .php');
	 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Name</title>
	<link rel="stylesheet" type="text/css" href="css/select.css">
</head>
<br>
<br>
<br>
<br>
<br>
<br>
<h1>



<p>DATA HAS BEEN DELETED

</p>

</h1>
<body><br>
<br>
<?php
	$db = mysqli_connect('localhost', 'root','','displayupload');
	$sql = sprintf("DELETE FROM uploaddata WHERE id=%s",$id);
	mysqli_query($db, $sql);
	mysqli_close($db);
	
?>

<ul>
  <li><a href="http://localhost/proj2/view.php">Back to View Data / Data Configuration</a></li>

</ul>


</body>
</html>