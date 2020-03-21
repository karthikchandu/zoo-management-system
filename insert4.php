<?php
$con = mysqli_connect('localhost','root','','my_database');
if(isset($_POST['insert'])){
$id = $_POST['id'];
$name = $_POST['name'];
$male = $_POST['male'];
$female = $_POST['female'];
$age = $_POST['age'];
$no_of_animals = $_POST['no_of_animals'];

$sql = "INSERT INTO safari (id, name, male, female, age, no_of_animals) VALUES ('$id','$name','$male','$female','$age','$no_of_animals')";
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

		background-image:url("an1.jpg");
		background-size: 100%; 
	}
	a {


		text-decoration: none;

	}

</head>
</style>
<body text="white"><br><br><br><br>
	
<center><form action="insert4.php" method="POST">
	<p><h1>inserting animals data in safari</h1></p><br><br>
<label>id:</label> <input type="number" name="id" required><br><br>
<label>name:</label><input type="text" name="name" required><br><br>
<label>male:</label><input type="number" name="male" required><br><br>
<label>female:</label><input type="number" name="female" required><br><br><br><br>
<label>age:</label><input type="number" name="age" required><br><br><br><br>
<label>no_of_animals:</label><input type="number" name="no_of_animals" required><br><br><br><br>
<input type="submit" name="insert" value="insert "></center>
</form>
&nbsp;&nbsp;&nbsp;&nbsp; <center>&nbsp;&nbsp; <a href="safari.php">BACK</a></center>

</body>
</html>
