<?php
$con = mysqli_connect('localhost','root','','my_database');
if(isset($_POST['insert'])){
$id = $_POST['id'];
$name = $_POST['name'];
$lifespan = $_POST['lifespan'];
$total = $_POST['total'];

$sql = "INSERT INTO others (id, name, lifespan, total) VALUES ('$id','$name','$lifespan','$total')";
if(!mysqli_query($con, $sql)){
die('error inserting new record ');
}
$newrecord ="1 record added to the database";
mysqli_query($con, $sql);
mysqli_close($con);
}
?>
<html>
<head>
	<title>php insert </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<style>
	body{

		background-image:url("d2.jpg");
		background-size: 100%; 
	}
a {


		text-decoration: none;

	}
</style>
</head>
<body><center>
<form action="insert1.php" method="POST"><br><br><br><br><br>
id: <input type="number" name="id" required><br><br><br><br>
name:<input type="text" name="name" required><br><br><br><br>
lifespan:<input type="number" name="lifespan" required><br><br><br>
total:<input type="number" name="total" required><br><br><br><br>
<input type="submit" name="insert" value="insert "></form>
&nbsp;&nbsp;&nbsp;&nbsp; <center>&nbsp;&nbsp; <a href="others.php">BACK</a></center>

</center>
</body>
</html>
