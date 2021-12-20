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
		<h1>Formulario</h1>
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
	<div class="formulario"  >
		<form action="includes/solicitudes.php" method="post">
			<label for="Nombres"></label>
			<input type="text" placeholder="Nombres" name="nombres" id="nombres">
			<label for="Apellidos"></label>
			<input type="text" placeholder="Apellidos" name="apellidos" id="apellidos">
			<label for="Apellidos"></label>
			<input type="tel" placeholder="Celular" name="tel" id="tel">
			<label for="Correo"></label>
			<input type="email" placeholder="Correo Electrónico" name="correo" id="correo">
			<label for="Paquetes"></label>
			<select name="paquetes" id="">
				<option value="1">Paquete 1</option>
				<option value="2">Paquete 2</option>
				<option value="3">Paquete 3</option>
				<option value="4">Paquete 4</option>
			</select>
			<input type="hidden" name="solicitud" value="solicitud">
			<input type="submit" value="Solicitar">
		</form>
	</div>
</body>

</html>