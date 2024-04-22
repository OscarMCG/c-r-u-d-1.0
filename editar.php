<?php

include('conexion.php');
$con = connection();

$ID = $_POST['ID'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "UPDATE usuarios SET name='$name', lastname='$lastname', username='$username', password='$password', email='$email' WHERE ID='$ID'";
$query = mysqli_query($con, $sql);

if($query){
    Header("location: index.php");
};
?>