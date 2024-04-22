<?php 
include('conexion.php');
$con = connection();

$ID = null;
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO usuarios VALUES('$ID', '$name', '$lastname', '$username', '$password', '$email')";
$query = mysqli_query($con, $sql);

if($query){
    Header("location: index.php");
};
?>