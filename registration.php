<?php

session_start();
header('location:p.php');

$on = mysqli_connect('localhost','root','','my_database');
$name = $_POST['user'];
$pass = $_POST['password'];
$s = " select * from usertable where name ='$name'";
$result = mysqli_query($on, $s);
$num = mysqli_num_rows($result);
if($num == 1){

	echo" username Already taken";
}else{
	$reg = "insert into usertable(name , password) values ('$name','$pass')";
	mysqli_query($on,$reg);
	echo"Registration Successful";
}

?>
