<!--Modal desarrollo para los proyectos-->
<div class="modal fade" id="desarrollo">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" aria-hideden="true" data-dismiss="modal">&times;</button>
				<h2 class="modal-title">Desarrollo web</h2>
			</div>
			<div class="modal-body">
				<p>
					Convertimos tus ideas en potenciales modelos de negocio usando la tecnologia para
					contruir sistemas web que se adapten a vuestras nececidades.
				</p>
				<strong class="text-center">¿Interesado,inicia sesion y cotiza tu proyecto ?</strong>
				<br>
				<br>
				<img src="img/web.png" alt="web" class="img-responsive">
			</div>
			<div class="modal-footer">
				<a class="btn btn-hola"  href="views/login.php" >Comenzar</a>
				<buttton class="btn btn-default" data-dismiss="modal">Cancelar</buttton>
			</div>
		</div>
	</div>
</div>
<!--Modal para la software-->

<div class="modal fade" id="sofware">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" aria-hideden="true" data-dismiss="modal">&times;</button>
				<h2 class="modal-title">Obten todo lo que necesitas</h2>
			</div>
			<div class="modal-body">
				<p>
					Administramos tus licencias de sofware de tu empresa. Te ofrecemos el soporte
					y mantener todas tus licencias en un mismo lugar.
				</p>
				<strong class="text-center">¿Interesado,inicia sesion y añade a tu carrito ?</strong>
				<br>
				<br>
				<img src="img/office.jpg" alt="web" class="img-responsive">
			</div>
			<div class="modal-footer">
				<a class="btn btn-hola"  href="views/login.php" >Comenzar</a>
				<buttton class="btn btn-default" data-dismiss="modal">Cancelar</buttton>
			</div>
		</div>
	</div>
</div>
<!--Modal para el hosting en nuestro sitio web-->
<div class="modal fade" id="host">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" aria-hideden="true" data-dismiss="modal">&times;</button>
				<h2 class="modal-title">Almacenamiento de plataformas web</h2>
			</div>
			<div class="modal-body">
				<p>
					Brindamos almacenamiento ilimitado, mantenimiento y seguridad mas herramientas que permiten monitorear
					y analizar el movimiento de usuarios en el sitio para mostrar resultados y tomar deciciones para aprovechar 
					potenciales clientes.

				</p>
				<strong class="text-center">¿Interesado,inicia sesion y añade a tu contrata el plan que mas se adecue a tu empresa?</strong>
				<br>
				<br>
				<img src="img/host.jpg" alt="web" class="img-responsive">
			</div>
			<div class="modal-footer">
				<a class="btn btn-hola"  href="views/login.php" >Comenzar</a>
				<buttton class="btn btn-default" data-dismiss="modal">Cancelar</buttton>
			</div>
		</div>
	</div>
</div>
<!--contendor de nuestro lema usuando typed js-->
<div class="cotainer hidden-xs">
	<div class="row">
		<div class="typed col-xs-12 col-md-5">
			<h2>Creemos que te mereces</h2>
			<h3 class="typedcss"></h3>

		</div>
	</div>
</div>
<!--Posibilidad de crecimiento con un slider-->
<div class="carousel slide" id="myslider" data-ride="carousel">
	<div class="carousel-inner">
		<div class="item active"><img src="img/laptop.jpg" alt="img1"></div>
		
	</div>
</div>	
<!--seccion para nostrar los servicios de la plataforma-->
<section>
	<div class="container">
		<div class="row">
			<h2 class="text-center">Servicios Destacados</h2>
			<p class="col-xs-8 col-xs-offset-2 text-center">Nuestro principal objetivo es brindarte la facilidad de obtener todo lo que necesitas en el mismo lugar,
				y brindarte seguimieto para incrementar tu productividad </p>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="thumbnail card">
						<img src="img/desarrolloweb.jpg" alt="img-rude" data-toggle="modal" data-target="#desarrollo">
						<div class="caption">
							<h3 class="text-center">Desarrollo Web</h3>
							<p class="text-center">Convierte tus ideas en realidades de negocio</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="thumbnail">
						<img src="img/licencias.png" alt="img-rude" data-toggle="modal" data-target="#sofware">
						<div class="caption">
							<h3 class="text-center">Sofware</h3>
							<p class="text-center">Obten todo lo que necesitas para maxima productividad.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="thumbnail">
						<img src="img/hosting.jpg" alt="img-rude" data-toggle="modal" data-target="#host">
						<div class="caption">
							<h3 class="text-center">Hosting</h3>
							<p class="text-center">Servicios de alojamiento para tu plataforma web</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>