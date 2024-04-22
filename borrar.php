<?php
include('conexion.php');
$con = connection();

$ID = $_GET['ID'];

$sql = "DELETE FROM usuarios WHERE ID='$ID'";

$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
};

?>