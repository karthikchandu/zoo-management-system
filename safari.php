<?php
$con = mysqli_connect('localhost','root','','my_database');
$query="select * from safari";
$result=mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>
<head>
 <title> Fetch data from Database </title>
	<style>
	body{

		background-image:url("s4.jpg");
		background-size: 100%; 
	}
	a {


		text-decoration: none;
	}
</style>	
</head>
<body text="black">

	<table align="center" border="lpx" style="width:600px; line-height:40px;">

			<br><br><h2><center><U>JUNGLE SAFARI</U></center></h2>&nbsp;
	
		<t>
			<th>id</th>
			<th>name</th>
			<th>male</th>
			<th>female</th>
			<th>age</th>
			<th>no of animals</th>

			<th>Delete</th>
		</t>

	<?php
	    while($rows=mysqli_fetch_assoc($result))
	    {
    ?>
           <tr>
           	<td><center><?php echo $rows['id']; ?><center></td>
           	<td><center><?php echo $rows['name']; ?></center></td>
           	<td><center><?php echo $rows['male']; ?></center></td>
           	<td><center><?php echo $rows['female']; ?></center></td>
           	<td><center><?php echo $rows['age']; ?></center></td>
           	<td><center><?php echo $rows['no_of_animals']; ?></center></td>
           			<td><center><a href="Delete.php?id=<?php echo $rows['id']; ?>" onclick="return confirm('Are you sure ?');"style="color:white">Delete</a></center></td>
           </tr>

     <?php
	    }
	 ?>
	</table>
	<br><br><br><center><label> click here for inserting the data</label> &nbsp;->&nbsp; <a href="insert4.php">INSERT</a></center>
	<br><br><center><label> click here for updating the data</label> &nbsp;->&nbsp; <a href="Update4.php">UPDATE</a></center>
&nbsp;&nbsp;&nbsp;&nbsp; <center>&nbsp;&nbsp; <a href="l.php">BACK</a></center>
	
</body>
</html>
