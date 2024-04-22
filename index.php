<?php 
include('conexion.php');

$con = connection();

$sql = "SELECT * FROM usuarios";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>CRUD</title>
</head>
<body>
	<div class="users-form">
		<form action="insertar.php" method="POST">
			
			<h1>Registro</h1>

			<input type="text" name="name"placeholder="Nombre">
			<input type="text" name="lastname"placeholder="Apellido">
			<input type="text" name="username"placeholder="Nombre de usuario">
			<input type="text" name="password"placeholder="Clave">
			<input type="text" name="email"placeholder="Email">

			<input type="submit" value="Agregar usuario">
		</form>
	</div>

	<div class="users-table">
		<h2>Usuarios Guardados</h2>
		<table>
			<thead>
				<th>ID</th>
				<th>NOMBRE</th>
				<th>APELLIDO</th>
				<th>NOMBRE USUARIO</th>
				<th>CLAVE</th>
				<th>CORREO</th>
				<th></th>
				<th></th>
			</thead>
			<tbody>
				<?php while($row = mysqli_fetch_array($query)): ?>
			    <tr>
					<th> <?= $row['ID'] ?></th> // 'en vez de echo usar esta forma' // 
					<th> <?= $row['name'] ?></th> 
					<th> <?= $row['lastname'] ?></th> 
					<th> <?= $row['username'] ?></th> 
					<th> <?= $row['password'] ?></th> 
					<th> <?= $row['email'] ?></th> 

					<th><a href="editar.php?ID=<?= $row['ID'] ?>"class="users-table--edit">Editar</a></th>
					<th><a href="borrar.php?ID=<?= $row['ID'] ?>"class="users-table--delete">Eliminar</a></th>
				</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>
</body>
</html>