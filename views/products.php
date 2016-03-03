<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
	<title>Nuestros Productos</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/products.css">
	<link rel="stylesheet" type="text/css" href="../css/nav.css">
	
</head>
<body>

<!--Barra de navegación-->

  <?php include 'nav.php'; ?>

<!---Navegacion entre categorias-->
<?php include '../views/detalle.php'; ?>
<?php include '../views/contac.php'; ?>
<section>
	<div class="container-fluid" id="principalP">
		<div class="row-fluid">
		<div class="col-sm-12 col-md-offset-10 col-md-2 postz" id="barranueva">
				<br><ul class="nav nav-pills nav-stacked" id="menuVertical">
					<li class="active item " ><a href="#" class="categoria"><p id="boton1" class="text-center"></p><button type="button" class="btn btn-hola center-block" onClick="getBuy()"><span class="glyphicon glyphicon-shopping-cart"></span> Comprar </button>
					</a></li>
				</ul><br>
			</div>
			<div class="col-sm-2 col-md-2 postz" id="">
				<ul class="nav nav-pills nav-stacked" id="menuVertical">
					<li class="active item " id="mobos"><a href="#" class="categoria">Todos</a></li>
					<li class="item" id="pros"> <a href="#">Oficina</a></li>
					<li class="item"> <a href="#">antivirus</a></li>
					<li class="item"> <a href="#">Productividad</a></li>
					<li class="item"> <a href="#">Diseño Grafico</a></li>
					<li class="item"> <a href="#">Ver más</a></li>
				</ul>
				<form class="navbar-form navbar-right" role="search">
					<input type="text" class="form-control" placeholder="Buscar producto...">
				</form>
			</div>
			
				<!--Cuadricula con productos-->
		
			<div class="col-sm-10 col-md-10 cuadricula">
				<div class="row">
					<div class="col-xs-6 col-sm-4 col-md-3  text-center box">
						<div class="thumbnail">

					      <img class="imgproducto img-responsive"  src="../img/licencias2.png" alt="img-rude">
					      <div class="caption">
					        <h3 class="text-center">Office 360</h3>
					        <p class="text-center">Obten todo lo que necesitas para maxima productividad.</p>
					        <button class="btn btn-hola-carrito" ><span class="glyphicon glyphicon-shopping-cart"></span></button>
					        <button type="button" class="btn btn-hola"  data-toggle="modal" data-target="#detalle" >Conocer más</button>
					      </div>
					    </div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
						<div class="thumbnail">
					      <img class="imgproducto img-responsive" src="../img/eset.png" alt="img-rude">
					      <div class="caption">
					        <h3 class="text-center">Nod 32</h3>
					        <p class="text-center">Protege tus equipos con el respaldo de Eset Nod 32.</p>
					        <button class="btn btn-hola-carrito2"><span class="glyphicon glyphicon-shopping-cart"></span></button>
					        <button type="button" class="btn btn-hola">Conocer más</button>
					      </div>
					    </div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
						<div class="thumbnail">
					      <img class="imgproducto img-responsive" src="../img/autocad.png" alt="img-rude">
					      <div class="caption">
					        <h3 class="text-center">AutoCad</h3>
					        <p class="text-center">Diseña y convierte tus ideas en proyectos fisicos.</p>
					        <button class="btn btn-hola pull-rigth"><span class="glyphicon glyphicon-shopping-cart"></span></button>
					        <button type="button" class="btn btn-hola">Conocer más</button>
					      </div>
					    </div>
					</div>
						<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
						<div class="thumbnail">
					      <img class="imgproducto img-responsive" src="../img/potho_converted.png" alt="img-rude">
					      <div class="caption">
					        <h3 class="text-center">Photoshop</h3>
					        <p class="text-center">Obten todo lo que necesitas para maxima productividad.</p>
					        <button class="btn btn-hola pull-rigth"><span class="glyphicon glyphicon-shopping-cart"></span></button>
					        <button type="button" class="btn btn-hola">Conocer más</button>
					      </div>
					    </div>
					</div>
					</div>
				
				<div class="row">
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
						<div class="thumbnail">
					      <img class="imgproducto img-responsive" src="../img/indesing.png" alt="img-rude">
					      <div class="caption">
					        <h3 class="text-center">InDesing</h3>
					        <p class="text-center">Obten todo lo que necesitas para maxima productividad.</p>
					        <button class="btn btn-hola pull-rigth"><span class="glyphicon glyphicon-shopping-cart"></span></button>
					        <button type="button" class="btn btn-hola">Conocer más</button>
					      </div>
					    </div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
							<div class="thumbnail">
						      <img class="imgproducto img-responsive" src="../img/oracle_converted.png" alt="img-rude">
						      <div class="caption">
						        <h3 class="text-center">Oracle DB</h3>
						        <p class="text-center">Obten todo lo que necesitas para maxima productividad.</p>
						        <button class="btn btn-hola pull-rigth"><span class="glyphicon glyphicon-shopping-cart"></span></button>
						        <button type="button" class="btn btn-hola">Conocer más</button>
						      </div>
						    </div>
						</div>
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
							<div class="thumbnail">
						      <img class="imgproducto img-responsive" src="../img/anti_converted.png" alt="img-rude">
						      <div class="caption">
						        <h3 class="text-center">Kaspersky</h3>
						        <p class="text-center">Obten todo lo que necesitas para maxima productividad.</p>
						        <button class="btn btn-hola pull-rigth"><span class="glyphicon glyphicon-shopping-cart"></span></button>
						        <button type="button" class="btn btn-hola">Conocer más</button>
						      </div>
						    </div>
						</div>
					<div class="col-xs-6 col-sm-4 col-md-3 text-center box">
							<div class="thumbnail">
						      <img class="imgproducto img-responsive" src="../img/vm.png" alt="img-rude">
						      <div class="caption">
						        <h3 class="text-center">Workstation</h3>
						        <p class="text-center">Obten todo lo que necesitas para maxima productividad.</p>
						        <button class="btn btn-hola pull-rigth"><span class="glyphicon glyphicon-shopping-cart"></span></button>
						        <button type="button" class="btn btn-hola">Conocer más</button>
						      </div>
						    </div>
						</div>
			</div>
			</div>
		</div>
	</div>
	</section>
	<br>

	<!--footer-->
<?php include 'footer.php'; ?>

<script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<script src="../js/vendor/jquery-1.11.2.min.js"></script>
<script src="../js/vendor/bootstrap.min.js"></script>
<script src="../js/products.js"></script>
<script src="../js/nav.js"></script>
</body>
</html>