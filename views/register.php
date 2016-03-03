<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registrate</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/register.css">
	<link rel="stylesheet" href="../css/nav.css">
</head>
<body>
	
	  <!--Barra de navegación-->

  <?php include 'nav.php' ?>

	<!-- Sección donde se encuentra el contenido de la pagina -->

	<br><br><br><br>
	<section>
		<div class="container-fluid">
			<div class="row">
			<br>
			<div class="col-xs-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-0">
					<div class="thumbnail card">
						<img src="../img/workers.jpg" alt="img-rude">
						<div class="caption">
							<h3 class="text-center">Tu cuenta</h3>
							<p class="text-center">Tu sitio de administracion del software de tu empresa</p>
						</div>
					</div>
				</div>
				<div id="loginbox" class="col-xs-12 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-0">
					<h2 id="title" class="text-center">Registrarme</h2>
					<form id="loginform" role="form">

						<form role="form">
							<div class="form-group">
								<label for="name">Nombres</label>
								<input type="text" class="form-control" id="name" placeholder="Ingrese sus nombres">
							</div>
							<div class="form-group">
								<label for="lname">Apellidos</label>
								<input type="text" class="form-control" id="lname" placeholder="Ingrese sus apellidos">
							</div>
							<div class="form-group">
								<label for="email">Correo Electronico</label>
								<input type="email" class="form-control" id="email" placeholder="correo electronico">
							</div>
							<div class="form-group">
								<label for="pwd">Contraseña</label>
								<input type="password" class="form-control" id="pwd" placeholder="Escriba una contraseña">
							</div>
							<div class="checkbox">
								<label><input type="checkbox">¡Sé el primero en conocer las mejores ofertas!</label>
							</div>
							<div  class="form-group">
								<div class="col-sm-12 controls">
									<button class="btn btn-hola center-block">Registrame</button>
								</div>
								<br>
								<br>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<br>

		<!--Footer -->
		<?php include 'footer.php'; ?>
}
<script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<script src="../js/vendor/jquery-1.11.2.min.js"></script>
<script src="../js/vendor/bootstrap.min.js"></script>
<script src="../js/nav.js"></script>
	</body>
	</html>