
<?php
session_start();
mysqli_connect('localhost','root','','my_database');
if(!isset($_SESSION['username'])){
header('location:l.php');

}
	?>
<!DOCTYPE html>
<html lang="en">
<head>

	<link rel="stylesheet" type="text/css" href="font.css">
	<title>login page</title>
	

	<style>
	body {


		font-family: arial;
		color: white;
	}

	.split {
		height:100%;
		width:50%;
		position: fixed;
		z-index: 1;
		top: 0;
		overflow-x:hidden;
		padding-top: 20px;

	}

		.left {

			left:0;
			background-color: grey;


		}

		.right {

			right:0;
			background-color: darkgrey;
		}


		.centered{


			position: absolute;
			top: 40%;
			left: 50%;
			transform: translate(-50%,-50%);
			text-align: center;
		}
		
	</style>
 
</head>
<body>
	
		
<div class=" split left">
	<div class="centered">
		<h1><U> ENTRY TICKETS AVAILABLE FOR SAFARI</U></h1>
		<p><center><h3>TIMINGS:</h2></center>
		   <center>Morning:7:30-10:30 and Evening:2:30-6:00</center><br>
	
		   <center><h3>AGE GROUP:</h2></center>
		   <center>Below 12 are not allowed</center><br>

		   <center><h3>INSTRUCTIONS:</h3></center>
		   <center>*Distributing any kind of edibles to the animals on the go is strictly prohibited.<br>
		   *Keep flashlight of your camera and mobile phone off.<br>
		   *Removing or alerting any kind of sign or post in the forest is strictly prohibited.<br>
		   *Safety first,fun next,see to that you travel in a closed vehicle whether jeep or van with all the doors and windows closed.<br>
		   *Avoid carrying objects that are flammable while entering the forest as there are chances to catch fire.
		   </center>
		</p>

		<table align="center" border="lpx" style="width:600px; line-height:40px;">

			<br><br><h2><center><U> </U></center></h2><br><br><br>
	
		<t>
			<th>1</th>
			<th>Safari</th>
			<th>Entry Fee- 200/-</th>
			<th><button onclick="window.location.href='f1.php'">Payment</button></th>		
		</t>


</table>
	</div>
</div>

<div class=" split right">
	<div class="centered">
		<h1><U>     ENTRY  TICKETS  AVAILABLE  FOR  ZOO</U></h1>
		<p><center><h3>TIMINGS:</h2></center>
		   <center>9:00AM to 5:00PM</center><br>
	
		   <center><h3>INSTRUCTIONS:</h3></center>
		   <center>*Distributing any kind of edibles to the animals on the go is strictly prohibited.
		   *Touching, cutting or removing of any plants and flowers are strictly prohibited.
		   *Entering zones where it says prohobited zone or fetched is strictly prohibited.
		   *Avoid close encounters.
		   <center>
		</p>
		
		<table align="center" border="lpx" style="width:600px; line-height:40px;">

			<br><br><h2><center><U> </U></center></h2><br><br><br>
	
		<t>
			<th>1</th>
			<th>Zoo</th>
			<th>Entry Fee - 300/- </th>
			<th><button onclick="window.location.href='f.php'">Payment</button></th>
			
		</t>
        </table>


	</div>
</div>


</body>
</html>
