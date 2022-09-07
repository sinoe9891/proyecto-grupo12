<?php
include 'includes/template/header.php';
include 'includes/conexion.php';
?>
<section class="section">
	<div class="swiper-form-wrap">
		<!-- Swiper-->
		<div class="swiper-container swiper-slider swiper-slider_height-1 swiper-align-left swiper-align-left-custom context-dark bg-gray-darker" data-loop="false" data-autoplay="5500" data-simulate-touch="false" data-slide-effect="fade">
			<div class="swiper-wrapper">
				<div class="swiper-slide" data-slide-bg="images/swiper-slide-1.jpg">
					<div class="swiper-slide-caption">
						<div class="container container-bigger swiper-main-section">
							<div class="row row-fix justify-content-sm-center justify-content-md-start">
								<div class="col-md-6 col-lg-5 col-xl-4 col-xxl-5">
									<h3>CIENTOS DE DESTINOS INCREÍBLES</h3>
									<div class="divider divider-decorate"></div>
									<p class="text-spacing-sm">Ofrecemos una variedad de destinos para viajar, desde exóticos hasta algunos extremos. Incluyen países y ciudades muy populares como París, Río de Janeiro, El Cairo y muchos otros.</p><a class="button button-default-outline button-nina button-sm" href="#">Ver más</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide" data-slide-bg="images/swiper-slide-2.jpg">
					<div class="swiper-slide-caption">
						<div class="container container-bigger swiper-main-section">
							<div class="row row-fix justify-content-sm-center justify-content-md-start">
								<div class="col-md-6 col-lg-5 col-xl-4 col-xxl-5">
									<h3>El viaje de tu sueño</h3>
									<div class="divider divider-decorate"></div>
									<p class="text-spacing-sm">Nuestra agencia de viajes está lista para ofrecerle unas vacaciones emocionantes diseñadas para satisfacer sus propias necesidades y deseos. Ya sea un crucero exótico o un viaje a su resort favorito, seguramente tendrá la mejor experiencia.</p><a class="button button-default-outline button-nina button-sm" href="#">Ver más</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide" data-slide-bg="images/swiper-slide-3.jpg">
					<div class="swiper-slide-caption">
						<div class="container container-bigger swiper-main-section">
							<div class="row row-fix justify-content-sm-center justify-content-md-start">
								<div class="col-md-6 col-lg-5 col-xl-4 col-xxl-5">
									<h3>información de viajes únicos</h3>
									<div class="divider divider-decorate"></div>
									<p class="text-spacing-sm">Nuestro equipo está listo para brindarle información única sobre viajes semanales que incluye fotos, videos y artículos sobre rutas turísticas sin recorrer. ¡Sabemos todo sobre los lugares en los que nunca has estado!</p><a class="button button-default-outline button-nina button-sm" href="#">Ver más</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Swiper controls-->
			<div class="swiper-pagination-wrap">
				<div class="container container-bigger">
					<div class="row">
						<div class="col-sm-12">
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container container-bigger form-request-wrap form-request-wrap-modern">
			<div class="row row-fix justify-content-sm-center justify-content-lg-end">
				<div class="col-lg-6 col-xxl-5">
					<div class="form-request form-request-modern bg-gray-lighter novi-background">
						<h4>SOLICITAR PAQUETE TURISTICO</h4>
						<!-- RD Mailform-->
						<form class="rd-mailform form-fix" action="includes/solicitudes.php" method="post">
							<div class="row row-20 row-fix">
								<div class="col-sm-12">
									<label class="form-label-outside">Nombre Completo</label>
									<div class="form-wrap form-wrap-inline">
										<input class="form-input form-control-has-validation form-control-last-child" placeholder="Juan Perez" id="form-1-name" type="text" name="nombres" data-constraints="@Required">
									</div>
								</div>
								<div class="col-sm-12 col-lg-6">
									<label class="form-label-outside">Celular</label>
									<div class="form-wrap form-wrap-inline">
										<input class="form-input form-control-has-validation form-control-last-child" placeholder="+50494500122" id="form-1-name" type="tel" name="tel" data-constraints="@Required">
									</div>
								</div>
								<div class="col-sm-12 col-lg-6">
									<label class="form-label-outside">Correos</label>
									<div class="form-wrap form-wrap-inline">
										<input class="form-input form-control-has-validation form-control-last-child" placeholder="nombre@dominio.com" id="form-1-name" type="email" name="correo" data-constraints="@Required">
									</div>
								</div>
								<div class="col-sm-12">
									<label class="form-label-outside">Paquete</label>
									<div class="form-wrap form-wrap-inline">
										<select class="form-input select-filter" data-placeholder="All" data-minimum-results-for-search="Infinity" name="paquetes">
											<?php
											if ($conn) {
												$consulta = "SELECT * FROM paquetes";
												$resultado = $conn->query($consulta);
												if ($resultado) {
													$i = 1;
													while ($fila = $resultado->fetch_assoc()) {
											?>

														<option value=" <?php echo $fila['nombre_paquete'] ?> "><?php echo $fila['nombre_paquete']; ?></option>

											<?php
													}
												} else {
													echo "No hay paquetes";
												}
											} else {
												echo "Error en conexión: " . $conn->error;
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-sm-12 col-lg-6">
									<label class="form-label-outside">Fecha Salida</label>
									<div class="form-wrap form-wrap-validation">
										<input class="form-input" id="dateForm" name="fecha_salida" type="date" data-time-picker="date">
									</div>
								</div>
								<div class="col-sm-12 col-lg-6">
									<label class="form-label-outside">Tiempo Estadía</label>
									<div class="form-wrap form-wrap-validation">
										<!-- Select 2-->
										<select class="form-input select-filter" data-placeholder="Todos" data-minimum-results-for-search="Infinity" name="estadia">
											<option value="1">1 día</option>
											<option value="2">2 día</option>
											<option value="3">3 día</option>
											<option value="4">4 día</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6">
									<label class="form-label-outside">Adultos</label>
									<div class="form-wrap form-wrap-modern">
										<input class="form-input input-append" id="form-element-stepper" type="number" min="0" max="300" value="2" name="adultos">
									</div>
								</div>
								<div class="col-lg-6">
									<label class="form-label-outside">Niños</label>
									<div class="form-wrap form-wrap-modern">
										<input class="form-input input-append" id="form-element-stepper-1" type="number" min="0" max="300" value="0" name="ninos">
									</div>
								</div>
							</div>
							<div class="form-wrap form-button">
								<input type="hidden" name="solicitud" value="solicitud">
								<input class="button button-block button-secondary" type="submit" value="Solicitar Paquete">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section section-variant-1 bg-default novi-background bg-cover">
	<div class="container container-wide">
		<div class="row row-fix justify-content-xl-end row-30 text-center text-xl-left">
			<div class="col-xl-8">
				<div class="parallax-text-wrap">
					<h3>Nuestros Mejores Paquetes</h3><span class="parallax-text">Top Paquetes</span>
				</div>
				<hr class="divider divider-decorate">
			</div>
			<div class="col-xl-3 text-xl-right"><a class="button button-secondary button-nina" href="paquetes-todos.php">Ver todos los Paquetes</a></div>
		</div>
		<div class="row row-50">
			<?php
			if ($conn) {
				$consulta = "SELECT * FROM paquetes LIMIT 6";
				$resultado = $conn->query($consulta);
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
				echo "Error en conexión: " . $conn->error;
			}
			?>
		</div>
	</div>
</section>

<?php
include 'includes/template/footer.php';
?>