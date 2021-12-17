<?php
	include 'includes/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Proyecto Final</title>
</head>

<body>
	<div class="container">
		<h1>Agregar Paquetes</h1>
	</div>
	<div class="menu">
		<ul>
			<a href="formulario.php">
				<li>Fomulario</li>
			</a>
			<li>Administración</li>
			<ul>
				<a href="paquetes.php">
					<li>Paquetes</li>
				</a>
				<a href="solicitudes.php">
					<li>Solicitudes</li>
				</a>
			</ul>
		</ul>
	</div>
	<div class="formulario" >
		<form action="includes/ingreso-paquetes.php" method="post">
			<label for="Paquete">Paquete</label>
			<input type="text" name="nombre" id="nombre"placeholder="Nombre paquete">

			<label for="Precio">Precio</label>
			<input type="number" name="precio" id="precio" placeholder="$00.00">

			<label for="Imagen">Imagen</label>
			<input type="url" name="imagen" id="imagen" placeholder="url foto">
			<input type="hidden" name="nuevo" value="crear">
			<input type="submit" value="Agregar Paquete">
		</form>
	</div>
</body>

</html>