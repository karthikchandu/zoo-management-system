<?php
$con = mysqli_connect('localhost','root','','my_database');
$query="select * from reptiles";
$result=mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>
<head>
 <title> Fetch data from Database </title>
	<style>
	body{

		background-image:url("r6.jpg");
		background-size: 100%; 
	}
	a {


		text-decoration: none;

	}
</style>	
</head>
<body text="white">

	<table align="center" border="lpx" style="width:600px; line-height:40px;">

			<br><br><h2><center><U> REPTILES DATA</U></center></h2><br><br><br>
	
		<t>
			<th>id</th>
			<th>name</th>
			<th>lifespan</th>
			<th>total</th>
			<th>Delete</th>
			
		</t>
		
	

	<?php
	    while($rows=mysqli_fetch_assoc($result))
	    {
    ?>
           <tr>
           	<td><center><?php echo $rows['id']; ?><center></td>
           	<td><center><?php echo $rows['name']; ?></center></td>
           	<td><center><?php echo $rows['lifespan']; ?></center></td>
           	<td><center><?php echo $rows['total']; ?></center></td>
           	<td><center><a href="Delete.php?id=<?php echo $rows['id']; ?>" onclick="return confirm('Are you sure ?');">Delete</a></center></td>
           	
           </tr>
     <?php
	    }
	 ?>
	</table>
	<br><br><br><center><label> click here for inserting the data</label> &nbsp;->&nbsp; <a href="insert2.php">INSERT</a></center>
	<br><br><center><label> click here for updating the data</label> &nbsp;->&nbsp; <a href="Update2.php">UPDATE</a></center>
	&nbsp;&nbsp;&nbsp;&nbsp; <center>&nbsp;&nbsp; <a href="zoo.php">BACK</a></center>
</body>
</html>