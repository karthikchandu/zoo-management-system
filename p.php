<!Doctype html>
<html>
<head>
	<title>user login and registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="font.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<style >
		body{
         background-image: url('p1.gif');
		 background-repeat: repeat-y;
	background-attachment: fixed;
	height: 100vh;
	padding: 0;
	margin:0;

}

	</style>
</head>
<body text="black">
     <br><br><marquee bgcolor="ForestGreen"; direction="left"><h2 style=
		"color:white;">Treating all animals with dignity, respect and care is an essential part of a spiritual lifestyle. So, Save Wildlife Save Forest and keep the environment healthy.</h2></marquee>
     <center><h1 style="color:green;"><p><U>ZOO MANAGEMENT SYSTEM</U></p></h1></center>
	 <center><h2 font-color:><p>welcome to the world of animals</p></h2></center>
    
    
    <?php

        $con = mysqli_connect('localhost','root','','my_database');

	 ?>

<div class="container">
	<div class="login-box">
	<div class="row">
	<div class="col-md-6">
		<h2 style=
		"color:;"> login here</h2>
		<form action="validation.php" method="post">
		   <div class="form-group">
		   	 <label style=
		"color:black;">Username</label>
		   	 <input type="text" name="user" class="form-control" required>
		   	</div><br><br>
		 <div class="form-group">
		   	 <label style=
		"color:black;">Password</label>
		   	 <input type="Password" name="password" class="form-control" required>
		   	</div> <br> 
		   	<button type="submit" class="btn btn-primary">Login</button></form></div>
		   	
    <div class="col-md-6">
		<h2 style=
		"color:;"> Register here</h2>
		<form action="registration.php" method="post">
		   <div class="form-group">
		   	 <label style=
		"color:black;">Username</label>
		   	 <input type="text" name="user" class="form-control" required>
		   	</div><br><br>
		 <div class="form-group">
		   	 <label style=
		"color:black;">Password</label>
		   	 <input type="Password" name="password" class="form-control" required>
		   	</div> <br> 
		   	<button type="submit" class="btn btn-primary">Register</button>
		   		</form></div></div></div></div>

</body>
</html>   
