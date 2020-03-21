<?php

session_start();

$on = mysqli_connect('localhost','root','','my_database');
$name = $_POST['user'];
$pass = $_POST['password'];
$s = " select * from usertable where name ='$name' && password = '$pass'";
$result = mysqli_query($on, $s);
$num = mysqli_num_rows($result);
if($num == 1){
	$_SESSION['username'] = $name;
	header('location:w.php');
}else {
    header('location:p.php');
}
?>
