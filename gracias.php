<?php
include 'includes/template/header.php';
include 'includes/conexion.php';
$resultado = $_GET['resultado'];
?>


<!-- Tips & tricks-->
<section class="section section-lg novi-background bg-cover bg-default text-center">
	<div class="container-wide">
		<div class="row row-50">
			<?php
			if ($resultado == 'exito') {
			?>
				<div class="col-sm-12">
					<h3>¡Muchas gracias!</h3>
					<div class="divider divider-decorate"></div>
					<div class="post-blog-caption-body">
						<h5>Muchas gracias por contáctarnos, muy pronto nuestro personal<br> te contactará para indicarte que prosigue y disfrutar de tu viaje.</h5>
					</div>
				</div>
			<?php
			} else {
			?>
				<div class="col-sm-12">
					<h3>¡Muchas gracias!</h3>
					<div class="divider divider-decorate"></div>
					<div class="post-blog-caption-body">
						<h5>Error al enviar la solicitud, por favor intente nuevamente.</h5>
					</div>
				</div>
			<?php
			};
			?>

		</div>
		<div class="col-12"><a class="button button-secondary button-nina button-offset-lg" href="index.php">Regresar al inicio</a></div>
	</div>
</section>
<?php
include 'includes/template/footer.php';
?>