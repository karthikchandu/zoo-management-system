<?php
$con = mysqli_connect('localhost','root','','my_database');
$query="select * from logs";
$result=mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
<head>
 <title> Fetch data from Database </title>
	<style>
	body{

		background-image:url(".jpg");
		background-size: 100%; 
	}
</style>	
</head>
<body>

	<table align="center" border="lpx" style="width:600px; line-height:40px;">

			<br><br><h2><center><U>TRIGGERS  TABLE  DETAILS</U></center></h2><br><br><br>
	
		<t>
			<th>id</th>
			<th>animal_id</th>
			<th>action</th>
			<th>cdate</th>
			

		
		</t>

	<?php
	    while($rows=mysqli_fetch_assoc($result))
	    {
    ?>
           <tr>
           	<td><center><?php echo $rows['id']; ?><center></td>
           	<td><center><?php echo $rows['animal_id']; ?></center></td>
           	<td><center><?php echo $rows['action']; ?></center></td>
           	<td><center><?php echo $rows['cdate']; ?></center></td>
           	
             

       
           </tr>

     <?php
	    }
	 ?>
	</table>
</body>
</html>
