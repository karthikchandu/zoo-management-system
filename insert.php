<?php
$con = mysqli_connect('localhost','root','','my_database');
if(isset($_POST['insert'])){
$id = $_POST['id'];
$name = $_POST['name'];
$lifespan = $_POST['lifespan'];
$total = $_POST['total'];

$sql = "INSERT INTO birds (id, name, lifespan, total) VALUES ('$id','$name','$lifespan','$total')";
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

		background-image:url("b.jpg");
		background-size: 100%; 
	}
	term{
background: transparent;
border: none;

	}
	a {


		text-decoration: none;

	}
</style>
</head>
<body text="white">
	<center><p><h1> inserting birds data to nest </h1></p></center>
<form action="insert.php" method="POST">
	<div class ="term"><br><br><br><br><center>
id: <input type="number" name="id" required><br><br><br><br>
name:<input type="text" name="name" required><br><br><br><br>
lifespan:<input type="number" name="lifespan" required><br><br><br><br>
total:<input type="number" name="total" required><br><br><br><br><br><br>
<input type="submit" name="insert" value="insert "></center>
</div>
</form>
&nbsp;&nbsp;&nbsp;&nbsp; <center>&nbsp;&nbsp; <a href="birds.php">BACK</a></center>

</body>
</html>