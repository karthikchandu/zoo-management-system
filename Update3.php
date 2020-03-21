<?php
$con = mysqli_connect('localhost','root','','my_database');


if(isset($_POST['update'])){

$query = "UPDATE others SET name = '$_POST[name]', lifespan = '$_POST[lifespan]', total ='$_POST[total]' WHERE id ='$_POST[id]' ";
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

		background-image:url("m3.jpg");
		background-size: 100%; 
	}
a {


		text-decoration: none;

	}
</style>
</head>
<body><center>
	<form action="Update3.php" method="POST"><br><br><br><br><br><br>
		ID to Update: <input type="number" name="id" required><br><br><br><br>
		name:<input type="text" name="name" required><br><br><br><br>
		lifespan:<input type="number" name="lifespan" required><br><br><br><br>
		total:<input type="number" name="total" required><br><br><br><br>
		<input type="submit" name="update" value="update data"><br><br><br><br>
		&nbsp;&nbsp;&nbsp;&nbsp; <center>&nbsp;&nbsp; <a href="others.php">BACK</a></center>

	</form>
</center>
</body>
</html>
