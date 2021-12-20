<?php
include 'includes/template/header.php';
include 'includes/conexion.php';
?>
<!-- our team-->
<section class="section section-lg text-center novi-background bg-cover" style="padding-bottom:0">
	<div class="container container-wide">
		<h3>Menú</h3>
		<div class="divider divider-decorate"></div>
		<br>
		<div class="opciones">
			<a href="dashboard.php">
				<h3 style="font-size:20px"><span class="iconify" data-icon="akar-icons:arrow-right"></span>Ir a Menú</h3>
			</a>
		</div>
	</div>
</section>
<section class="section section-lg text-center novi-background bg-cover" style="padding-top:0">
	<div class="container container-wide">
		<h3>Agregar Paquete</h3>
		<div class="divider divider-decorate"></div>
		<div class="d-flex justify-content-center">
			<div style="width: 400px;">
				<form action="includes/ingreso-paquetes.php" method="post" enctype="multipart/form-data"/>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<div class="col-sm-12" style="margin-bottom:10px">
						<div class="form-wrap form-wrap-validation">
							<label for="form-1-name">Nombre Paquete</label>
							<input class="form-input form-control-has-validation form-control-last-child" type="text" name="nombre" id="nombre" placeholder="Nombre" value="" required>
						</div>
					</div>

					<div class="col-sm-12" style="margin-bottom:10px">
						<div class="form-wrap form-wrap-validation">
							<label for="form-1-name">Precio</label><br>
							<input class="form-input form-control-has-validation form-control-last-child" type="number" name="precio" id="precio" placeholder="$00.00" value="" required>
						</div>
					</div>
					<div class="col-sm-12" style="margin-bottom:10px">
						<div class="form-wrap form-wrap-validation">
							<label for="Imagen">URl de Imagen</label>
							<input class="form-input form-control-has-validation form-control-last-child" name="imagen" id="imagen" type="file" required/>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="form-button">
							<input type="hidden" name="nuevo" value="crear">
							<input class="button button-block button-secondary" type="submit" value="Agregar Paquete">
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