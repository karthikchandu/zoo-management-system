<?php
$con = mysqli_connect('localhost','root','','my_database');


if(isset($_POST['update'])){

$query = "UPDATE safari SET name = '$_POST[name]', male ='$_POST[male]', female ='$_POST[female]', age ='$_POST[age]', no_of_animals='$_POST[no_of_animals]' WHERE id ='$_POST[id]'";
mysqli_query($con, $query);
mysqli_close($con);
}
?>
<html>
<head>
	<title>php update </title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<style>
	body{

		background-image:url("t1.jpg");
		background-size: 100%; 
	}
	a {


		text-decoration: none;

	}
</style>
</head>
<body text="white">
<center>	<form action="Update4.php" method="POST">
	<p><h1>updating animals data in safari</h1></p><br><br>
		ID to Update: <input type="number" name="id" required><br><br><br><br>
		name:<input type="text" name="name" required><br><br><br><br>
		male:<input type="number" name="male" required><br><br><br><br>
		female:<input type="number" name="female" required><br><br><br><br>
        age:<input type="number" name="age" required><br><br><br><br>
        no_of_animals:<input type="number" name="no_of_animals" required><br><br>
		<br><br><br><br><input type="submit" name="update" value="update "></center>
	</form>
	&nbsp;&nbsp;&nbsp;&nbsp; <center>&nbsp;&nbsp; <a href="safari.php">BACK</a></center>

</body>
</html>
