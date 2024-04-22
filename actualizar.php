<?php 
include('conexion.php');
$con = connection();

$ID=$_GET['ID'];
$sql = "SELECT * FROM usuarios WHERE ID='$ID'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
<div class="users-form">
		<form action="editar.php" method="POST">
			
			<h1>Registro</h1>

            <input type="hidden" name="ID" value=" <?= $row['ID'] ?>">
			<input type="text" name="name"placeholder="Nombre" value=" <?= $row['name'] ?>">
			<input type="text" name="lastname"placeholder="Apellido" value=" <?= $row['lastname'] ?>">
			<input type="text" name="username"placeholder="Nombre de usuario" value=" <?= $row['username'] ?>">
			<input type="text" name="password"placeholder="Clave" value=" <?= $row['password'] ?>">
			<input type="text" name="email"placeholder="Email" value=" <?= $row['email'] ?>">

			<input type="submit" value="Agregar usuario">
		</form>
	</div>
</body>
</html>