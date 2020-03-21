

<?php
session_start();






mysqli_connect('localhost','root','','my_database');
if(!isset($_SESSION['username'])){
	header('location:w.php');

}







?>
<html>
<head>
	<title>welcome page</title>
	<style >
		body{
			background-image: url("l.jpg");
			background-size: 100%;
		}
		a{
			color: white;
			font-size: 20;
			text-decoration: none;
		}
	</style>
</head>
	<body text="white">
<div class="container">
	<a class="float-right" href="logout.php">logout</a>	
	<br><br><center><h1>WELCOME  <?php echo $_SESSION['username'];?></h1>
        <p style="font-family:georgia,garamond,serif;font-size:20px;font-style:italic;">
        </p>
        <br><br><center><h2>Thank you for registering....</h2></center><br><br><br>
        <br><br><center><h2>Entry Tickets are available for safari and zoo </h2></center><br><br><br>
        <br><br><center><h3>To Buy tickets </h3></center><br><br><br>

	</center><br><br><br>
	<center><a class="float-center" href="l.php">CLICK  HERE </a></center><br><br>
	
</div>

</body>
</html>