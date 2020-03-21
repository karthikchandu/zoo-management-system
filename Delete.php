<?php
$con = mysqli_connect('localhost','root','','my_database');
$query="delete  from aquarium where id = '$_GET[id]'";
if(mysqli_query($con,  $query )){

header("refresh:1; url= aquarium.php");

}
else{
    echo "not deleted";
}
?>
<?php
$con = mysqli_connect('localhost','root','','my_database');
$q="delete  from others where id = '$_GET[id]'";
if(mysqli_query($con,  $q)){

header("refresh:1; url= others.php");

}
else{
    echo "not deleted";
}
?>

<?php
$con = mysqli_connect('localhost','root','','my_database');
$k="delete  from safari where id = '$_GET[id]'";
if(mysqli_query($con,  $k)){

header("refresh:1; url= safari.php");

}
else{
    echo "not deleted";
}
?>

<?php
$con = mysqli_connect('localhost','root','','my_database');
$u="delete  from birds where id = '$_GET[id]'";
if(mysqli_query($con,  $u)){

header("refresh:1; url= birds.php");

}
else{
    echo "not deleted";
}
?>

<?php
$con = mysqli_connect('localhost','root','','my_database');
$m="delete  from reptiles where id = '$_GET[id]'";
if(mysqli_query($con,  $m)){

header("refresh:1; url= reptiles.php");

}
else{
    echo "not deleted";
}
?>