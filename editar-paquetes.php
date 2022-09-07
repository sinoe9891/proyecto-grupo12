<?php
include 'includes/conexion.php';
$id_paquetes = $_GET['id'];
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
	<div class="formulario">
		<?php
		$consulta = $conn->query("SELECT * FROM paquetes where id = $id_paquetes");
		if ($consulta->num_rows > 0) {
			$fila = $consulta->fetch_assoc();
			$nombre = $fila['nombre_paquete'];
			$precio = $fila['precio'];
			$id = $fila['id'];
			$imagen = $fila['url_img'];
		}
		?>
		<form action="includes/actualizar.php?id=<?php echo $id; ?>" method="post">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<label for="Paquete">Paquete</label>
			<input type="text" name="nombre" id="nombre" placeholder="Nombre paquete" value="<?php echo $nombre; ?>">

			<label for="Precio">Precio</label>
			<input type="number" name="precio" id="precio" placeholder="$00.00" value="<?php echo $precio; ?>">

			<label for="Imagen">Imagen</label>
			<input type="url" name="imagen" id="imagen" placeholder="url foto" value="<?php echo $imagen; ?>">
			<input type="hidden" name="editar" value="actualizar">
			<input type="submit" value="Actualizar">
		</form>
	</div>
</body>

</html>