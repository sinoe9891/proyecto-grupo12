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
			<a href="paquetes.php">
				<h3 style="font-size:20px"><span class="iconify" data-icon="akar-icons:arrow-right"></span>Ir a Paquetes</h3>
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
								<tr>
									<th>No.</th>
									<th>Nombre Completo</th>
									<th>Correo</th>
									<th>Interesado en:</th>
									<th>Gestionar</th>
								</tr>
								<?php
								if ($conn) {
									$consulta = "SELECT * FROM solicitudes";
									$resultado = $conn->query($consulta);
									if ($resultado) {
										$i = 1;
										while ($fila = $resultado->fetch_assoc()) {
											echo "<tr>";
											echo "<td>" . $i . "</td>";
											echo "<td>" . $fila['nombres'] . "</td>";
											echo "<td>" . $fila['correo'] . "</td>";
											echo "<td>" . $fila['paquetes'] . "</td>";
											echo "<td>
											<a href='ver-solicitud.php?id=" . $fila['id'] . "'><span class='iconify' data-icon='akar-icons:eye'></span>Ver</a>
								<a href='includes/eliminar-solicitud.php?id=" . $fila['id'] . "'><span class='iconify' data-icon='bi:trash'></span>Eliminar</a>
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