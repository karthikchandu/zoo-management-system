<?php
$con = mysqli_connect('localhost','root','','my_database');


if(isset($_POST['update'])){

$query = "UPDATE birds SET name = '$_POST[name]', lifespan =' $_POST[lifespan]', total ='$_POST[total]' WHERE id ='$_POST[id]' ";
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

		background-image:url("br.jpg");
		background-size: 100%; 
	}
	a {


		text-decoration: none;

	}
</style>
</head>
<body text="white">
	<center><p><h1>update birds data to nest </h1></p></center>
     <br><br><br> <form action="Update1.php" method="POST"><br><br><br><center>
            ID to Update: <input type="number" name="id" required><br><br><br><br><br><br>
            name:<input type="text" name="name" required><br><br><br><br><br><br>
            lifespan:<input type="number" name="lifespan" required><br><br><br><br<br><br>            
            total:<input type="number" name="total" required><br><br><br><br><br><br>
            <input type="submit" name="update" value="update "></center><br><br><br><br><br><br>


            &nbsp;&nbsp;&nbsp;&nbsp; <center>&nbsp;&nbsp; <a href="birds.php">BACK</a></center>

      </form>

      


</body>
</html>
