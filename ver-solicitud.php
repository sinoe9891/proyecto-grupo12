<?php
include 'includes/template/header.php';
include 'includes/conexion.php';

?>

<section class="section section-lg text-center novi-background bg-cover" style="padding-bottom:0">
	<div class="container container-wide">
		<h3>Menú</h3>
		<div class="divider divider-decorate"></div>
		<br>
		<div class="opciones">
			<a href="solicitudes.php">
				<h3 style="font-size:20px"><span class="iconify" data-icon="akar-icons:arrow-right"></span>Regresar a Solicitudes</h3>
			</a>
		</div>
	</div>
</section>
<section class="section text-center novi-background bg-cover">
	<div class="container container-wide">
		<h3>Todos las Solicitudes</h3>
		<div class="divider divider-decorate"></div>
		<div class="d-flex justify-content-center">
			<div>
				<?php
				if (isset($_GET['eliminado'])) {
					if ($_GET['eliminado'] == 'eliminado') {
						echo '<div class="alert alert-success" role="alert">
								<strong>¡Éxito!</strong> La Solicitud se ha eliminado correctamente.
							</div>';
					} elseif ($_GET['eliminado'] == 'error-delete') {
						echo '<div class="alert alert-danger" role="alert">
								<strong>¡Error!</strong> La Solicitud no se ha eliminado correctamente.
							</div>';
					}
				}
				?>

				<div class="table">
					<div class="agregar">
						<div class="paquetes" id="paquetes">
							<table>
								<?php
								if ($conn) {
									$id = $_GET['id'];
									$consulta = "SELECT * FROM solicitudes where id = $id";
									$resultado = $conn->query($consulta);
									if ($resultado) {
										$i = 1;
										while ($fila = $resultado->fetch_assoc()) {
								?>
											<tr>
												<th>Nombre Completo:</th>
												<td><?php echo $fila['nombres']; ?></td>
											</tr>
											<tr>
												<th>Corre:</th>
												<td><?php echo $fila['correo']; ?></td>
											</tr>
											<tr>
												<th>Teléfono:</th>
												<td><?php echo $fila['celular']; ?></td>
											</tr>
											<tr>
												<th>Interesado en:</th>
												<td><?php echo $fila['paquetes']; ?></td>
											</tr>
											<tr>
												<th>Fecha de Salida:</th>
												<td><?php echo $fila['fecha_salida']; ?></td>
											</tr>
											<tr>
												<th>Estadía:</th>
												<td><?php echo $fila['estadia']; ?> días</td>
											</tr>
											<tr>
												<th>Adultos:</th>
												<td><?php echo $fila['adultos']; ?></td>
											</tr>
											<tr>
												<th>Niños:</th>
												<td><?php echo $fila['ninos']; ?></td>
											</tr>


								<?php
										}
									} else {
										echo "No hay paquetes";
									}
								} else {
									echo "Error en conexión: " . $conn->error;
								}
								?>

							</table>
							<a href='includes/eliminar-solicitud.php?id=<?php echo $id; ?>'><span class='iconify' data-icon='bi:trash'></span>Eliminar</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
include 'includes/template/footer.php';
?>