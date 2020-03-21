<?php
$con = mysqli_connect('localhost','root','','my_database');
if(isset($_POST['update'])){
$sql = "UPDATE aquarium SET name='$_POST[name]', lifespan ='$_POST[lifespan]',inwater='$_POST[inwater]'  WHERE id='$_POST[id]' ";
mysqli_query($con, $sql);
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

		background-image:url("f1.jpg");
		background-size: 100%; 
	}
	a {


		text-decoration: none;

	}
</style>	
</head>
<body text="white">
	<center><p><h1>updating the aquarium</h1></p></center><br><br>
<center>	<form action="Update.php" method="POST">
		ID to Update: <input type="number" name="id" required><br><br><br><br>
		name:<input type="text" name="name" required><br><br><br><br>
		lifespan:<input type="number" name="lifespan" required><br><br><br><br>
		inwater:<input type="number" name="inwater" required><br><br><br><br>
        
		<input type="submit" name="update" value="update "></center>
	</form>
	&nbsp;&nbsp;&nbsp;&nbsp; <center>&nbsp;&nbsp; <a href="aquarium.php">BACK</a></center>

</body>
</html>
