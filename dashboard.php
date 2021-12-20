<?php
include 'includes/template/header.php';
include 'includes/conexion.php';
?>

<section class="section section-lg text-center novi-background bg-cover">
	<div class="container container-wide">
		<h3>Menú</h3>
		<div class="divider divider-decorate"></div>
		<br>
		<div class="opciones">
			<a href="solicitudes.php">
				<h3><span class="iconify" data-icon="akar-icons:arrow-right"></span>Solicitudes</h3>
			</a>
		</div>
		<div class="opciones">
			<a href="paquetes.php">
				<h3><span class="iconify" data-icon="akar-icons:arrow-right"></span>Paquetes</h3>
			</a>
		</div>
		<div class="opciones">
			<a href="#">
				<h3><span class="iconify" data-icon="akar-icons:arrow-right"></span>Usuarios</h3>
			</a>
		</div>
	</div>
</section>

<?php
include 'includes/template/footer.php';
?>