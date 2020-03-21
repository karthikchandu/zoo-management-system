<?php
mysqli_connect('localhost','root','','my_database');
?>
<html>
<head>
	<title>zoo page </title>
<style>
    body{

		background-image:url("sa.jpg");
		background-size: 100%; 
	}
	a {


		text-decoration: none;
		
		
		
	}
</style>
</head>
<body text="white">
<center><h1> ZOLOGICAL PARK WELCOMES YOU </h1></center>
<center><h2> you can find all the animals in the below places</h2></center>

<br><br><br><center><label text="white"><h3>BIRDS SANCTURY </h3></label> &nbsp;->&nbsp; <a href="birds.php"> CLICK HERE</a></center>

	<br><br><br><center><label text="white"><h3>BIRDS entry fee </h3></label> &nbsp;->&nbsp; <a href="f2.php"> CLICK HERE</a></center>
	
        <br><br><br>
<br><br><center><label><h3>ANIMALS PARK</h3> </label> &nbsp;->&nbsp; <a href="others.php"> CLICK HERE</a></center>
<br><br><center><label><h3>REPTILISE HOME</h3></label> &nbsp;->&nbsp; <a href="reptiles.php"> CLICK HERE</a></center>
<br><br><center><label><h3>AQUA SPEICES</h3> </label> &nbsp;->&nbsp; <a href="aquarium.php"> CLICK HERE</a></center>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <center>&nbsp;&nbsp; <a href="l.php">BACK</a></center><br>
<a class="float-right" href="logout.php"><h2>logout</h2></a>	
<center><P><h1>THANK YOU VISIT AGAIN..</h1></P></center>

</body>
</html>