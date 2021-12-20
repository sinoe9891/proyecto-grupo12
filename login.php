<?php
include 'includes/template/header.php';

?>
<!-- our team-->
<section class="section section-lg text-center novi-background bg-cover">
	<div class="container container-wide">
		<h3>Inicio de Sesión</h3>
		<div class="divider divider-decorate"></div>
		<div class="d-flex justify-content-center">
			<div style="width: 300px;">
				<form method="post" action="includes/login.php">
					<div class="row row-fix row-20">
						<div class="col-sm-12">
							<div class="form-wrap form-wrap-validation">
								<label for="form-1-name">Usuario</label>
								<input class="form-input form-control-has-validation form-control-last-child" placeholder="Juan Perez" id="form-1-name" type="text" name="usuario">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-wrap form-wrap-validation">
								<label for="form-1-name">Contraseña</label>
								<input class="form-input form-control-has-validation form-control-last-child" placeholder="Juan Perez" id="form-1-name" type="password" name="password">
							</div>
						</div>
						<div class="col-sm-12" style="margin-bottom: 0;">
							<div class="form-wrap form-wrap-validation">
								<?php
								if (isset($_GET['error'])) {
									echo '<p style="color:red; margin:0;padding:0;">Error en el usuario o contraseña</p>';
								}
								?>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-button">
								<input type="hidden" name="login" value="login">
								<input class="button button-block button-secondary" type="submit" value="Iniciar Sesión">
							</div>
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