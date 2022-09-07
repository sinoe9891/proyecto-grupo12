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
				<h3 style="font-size:20px"><span class="iconify" data-icon="akar-icons:arrow-right"></span>Ir a Solicitudes</h3>
			</a>
		</div>
	</div>
</section>
<section class="section text-center novi-background bg-cover">
	<div class="container container-wide">
		<h3>Todos los Paquetes</h3>
		<div class="divider divider-decorate"></div>
		<div class="col-sm-12">
			<div class="form-button">
				<a href="agregar-paquete.php">
					<button class="button button-block button-secondary" style="font-size: 16px;padding: 2px 0px;margin-bottom: 20px;">Agregar Paquete</button>
				</a>
			</div>

		</div>

		<div class="d-flex justify-content-center">
			<div>
				<?php
				if (isset($_GET['resultado'])) {
					if ($_GET['resultado'] == 'exito') {
						echo '<div class="alert alert-success" role="alert">
								<strong>¡Éxito!</strong> El paquete se ha ingresado correctamente.
							</div>';
					} else {
						echo '<div class="alert alert-danger" role="alert">
								<strong>¡Error!</strong> El paquete no se ha ingresado correctamente.
							</div>';
					}
				}
				if (isset($_GET['eliminado'])) {
					if ($_GET['eliminado'] == 'eliminado') {
						echo '<div class="alert alert-success" role="alert">
								<strong>¡Éxito!</strong> El paquete se ha eliminado correctamente.
							</div>';
					} elseif ($_GET['eliminado'] == 'error-delete') {
						echo '<div class="alert alert-danger" role="alert">
								<strong>¡Error!</strong> El paquete no se ha eliminado correctamente.
							</div>';
					}
				}
				if (isset($_GET['actualizar'])) {
					if ($_GET['actualizar'] == 'exito') {
						echo '<div class="alert alert-success" role="alert">
								<strong>¡Éxito!</strong> El paquete se ha actualizado correctamente.
							</div>';
					} elseif ($_GET['actualizar'] == 'error') {
						echo '<div class="alert alert-danger" role="alert">
								<strong>¡Error!</strong> El paquete no se ha actualizado correctamente.
							</div>';
					}
				}
				if (isset($_GET['crear'])) {
					if ($_GET['crear'] == 'exito') {
						echo '<div class="alert alert-success" role="alert">
								<strong>¡Éxito!</strong> El Paquete se ha creado correctamente.
							</div>';
					} elseif ($_GET['crear'] == 'error') {
						echo '<div class="alert alert-danger" role="alert">
								<strong>¡Error!</strong> El Paquete no se ha creado correctamente.
							</div>';
					}
				}
				?>
				<div class="table">
					<div class="agregar">
						<div class="paquetes" id="paquetes">
							<table>
								<tr>
									<th>No.</th>
									<th>Paquete</th>
									<th>Precio</th>
									<th>Imagen</th>
									<th>Gestionar</th>
								</tr>
								<?php
								if ($conn) {
									$consulta = "SELECT * FROM paquetes";
									$resultado = $conn->query($consulta);
									if ($resultado) {
										$i = 1;
										while ($fila = $resultado->fetch_assoc()) {
											echo "<tr>";
											echo "<td>" . $i . "</td>";
											echo "<td>" . $fila['nombre_paquete'] . "</td>";
											echo "<td> $" . $fila['precio'] . "</td>";
											echo "<td><img src='" . $fila['url_img'] . "' alt='' width='70px'></td>";
											echo "<td>
								<a href='editar-paquete.php?id=" . $fila['id'] . "&editar=true'><span class='iconify' data-icon='bx:bxs-edit'></span>Editar</a>
								<a href='includes/eliminar-paquetes.php?id=" . $fila['id'] . "'><span class='iconify' data-icon='bi:trash'></span>Eliminar</a>
								</td>";
											echo "</tr>";
											$i++;
										}
									} else {
										echo "No hay paquetes";
									}
								} else {
									echo "Error en conexión: " . $conn->error;
								}
								?>

							</table>
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