<?php
$con = mysqli_connect('localhost','root','','my_database');
$query="select * from aquarium";
$result=mysqli_query($con,  $query);
?>
<!DOCTYPE html>
<html>
<head>
 <title> Fetch data from Database </title>
	<style>
	body{

		background-image:url("a.jpg");
		background-size: 100%; 
	}
	a {


		text-decoration: none;
	}
</style>	
</head>
<body text="white">

	<table align="center" border="lpx" style="width:600px; line-height:40px ; ">

			<br><br><h2><center><U> AQUARIUM DETAILS</U></center></h2><br>
	
		<t>
			<th >id</th>
			<th>name</th>
			<th>lifespan</th>
			<th>inwater</th>
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
           	<td><center><?php echo $rows['inwater']; ?></center></td>
           	<td><center><a href="Delete.php?id=<?php echo $rows['id']; ?>" onclick="return confirm('Are you sure ?');"style="color:white">Delete</a></center></td>
            <?php
       }
       ?>
	</table>

	<br><center><label><h3> click here for inserting the data</h3></label> &nbsp; <a href="insert3.php" style="color:red">INSERT</a></center>
	<br><center><label> <h3>click here for updating the data</h3></label> &nbsp; <a href="Update.php" style="color:red">UPDATE</a></center>

&nbsp;&nbsp;&nbsp;&nbsp; <center>&nbsp;&nbsp; <a href="zoo.php">BACK</a></center>
	

</body>
</html>