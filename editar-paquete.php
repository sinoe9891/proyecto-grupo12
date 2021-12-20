<?php
include 'includes/template/header.php';
include 'includes/conexion.php';
$id_paquetes = $_GET['id'];
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
<section class="section section-lg text-center novi-background bg-cover" style="padding-top:0">
	<div class="container container-wide">
		<h3>Editar Paquete</h3>
		<div class="divider divider-decorate"></div>
		<div class="d-flex justify-content-center">
			<div style="width: 400px;">
				<?php
				$consulta = $grupo12->query("SELECT * FROM paquetes where id = $id_paquetes");
				if ($consulta->num_rows > 0) {
					$fila = $consulta->fetch_assoc();
					$nombre = $fila['nombre_paquete'];
					$precio = $fila['precio'];
					$id = $fila['id'];
					$imagen = $fila['url_img'];
				}
				?>
				<form action="includes/actualizar.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<div class="col-sm-12" style="margin-bottom:10px">
						<div class="form-wrap form-wrap-validation">
							<label for="form-1-name">Nombre Paquete</label>
							<input class="form-input form-control-has-validation form-control-last-child" type="text" name="nombre" id="nombre" placeholder="Nombre paquete" value="<?php echo $nombre; ?>">
						</div>
					</div>

					<div class="col-sm-12" style="margin-bottom:10px">
						<div class="form-wrap form-wrap-validation">
							<label for="form-1-name">Precio</label><br>
							<input class="form-input form-control-has-validation form-control-last-child" type="number" name="precio" id="precio" placeholder="$00.00" value="<?php echo $precio; ?>">
						</div>
					</div>
					<div class="col-sm-12" style="margin-bottom:10px">
						<div class="form-wrap form-wrap-validation">
							<label for="Imagen">URl de Imagen</label><br>
							<img src='<?php echo $imagen; ?>' alt='' width='100px'>
							<input class="form-input form-control-has-validation form-control-last-child" name="imagen" id="imagen" type="file" required/>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-button">
							<input type="hidden" name="editar" value="actualizar">
							<input class="button button-block button-secondary" type="submit" value="Actualizar">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- Footer Minimal-->
<?php
include 'includes/template/footer.php';
?>