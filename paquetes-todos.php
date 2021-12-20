<?php
include 'includes/template/header.php';
include 'includes/conexion.php';
?>

<section class="section section-lg text-center novi-background bg-cover">
	<div class="container container-wide">
		<h3>Nuestros Paquetes</h3>
		<div class="divider divider-decorate"></div>
		<div class="row row-50">
			<?php
			if ($grupo12) {
				$consulta = "SELECT * FROM paquetes";
				$resultado = $grupo12->query($consulta);
				if ($resultado) {
					$i = 1;
					while ($fila = $resultado->fetch_assoc()) {
			?>
						<div class="col-md-6 col-xl-4">
							<article class="event-default-wrap">
								<div class="event-default">
									<figure class="event-default-image"><img src="<?php echo $fila['url_img'] ?>" alt="" width="570" height="370" />
									</figure>
									<div class="event-default-caption"><a class="button button-xs button-secondary button-nina" href="#">Ver más</a></div>
								</div>
								<div class="event-default-inner">
									<h5><a class="event-default-title" href="#"><?php echo $fila['nombre_paquete'] ?></a></h5><span class="heading-5">Precio $<?php echo $fila['precio'] ?></span>
								</div>
							</article>
						</div>

			<?php
					}
				} else {
					echo '<div class="post-blog-caption-body">
					<h5>Error al enviar la solicitud, por favor intente nuevamente.</h5>
				</div>';
				}
			} else {
				echo "Error en conexión: " . $grupo12->error;
			}
			?>
		</div>
	</div>
</section>

<?php
include 'includes/template/footer.php';
?>