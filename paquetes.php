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
		<h1>Paquetes</h1>
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
	<div class="agregar">
		<a href="agregar-paquetes.php">
			<button>Agregar Paquete</button>
		</a>
	</div>
	<div class="paquetes" id="paquetes">
		<table>
			<tr>
				<th>No.</th>
				<th>Paquete</th>
				<th>Precio</th>
				<th>Gestionar</th>
			</tr>
			<?php
				if($grupo12){
					$consulta = "SELECT * FROM paquetes";
					$resultado = $grupo12->query($consulta);
					if($resultado){
						$i = 1;
						while($fila = $resultado->fetch_assoc()){
							echo "<tr>";
							echo "<td>".$i."</td>";
							echo "<td>".$fila['nombre_paquete']."</td>";
							echo "<td>".$fila['precio']."</td>";
							echo "<td>
							<a href='editar-paquetes.php?id=".$fila['id']."&editar=true'>Editar</a>
							<a href='includes/eliminar-paquetes.php?id=".$fila['id']."'>Eliminar</a>
							</td>";
							echo "</tr>";
							$i++;
						}
					}else{
						echo "No hay paquetes";
					}
				}else{
					echo "Error en conexión: " . $grupo12->error;
				}
			?>
		</table>
	</div>
</body>

</html>