<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Home Rudeware</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Old+Standard+TT' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/nav.css">
</head>
<body>
		<!---Menu Rudeware-->
		
     <nav class="navbar navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <button class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!--Marca del nav -->
              <a href="#" class="navbar-brand"><img src="img/rudeware.svg" class="img-responsive loguito" alt="Responsive image"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
                <li><a href="views/products.php">Productos</a></li>
                <li><a href="views/blog.php">Noticias</a></li>
                <!--Dropdown del nav -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Quienes Somos<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="views/quienes.php">Visión y Misióm</a></li>
                    <li><a href="views/ask.php">Preguntas Frecuentes</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#help">Soporte </a></li>
                  </ul>
                </li>
                <li><a href="#">Iniciar Sesión</a></li>
                <li><a href="#">Registrate</a></li>
              </ul>
            </div>
          </div>
        </nav>


<div class="modal fade" id="help">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" aria-hideden="true" data-dismiss="modal">&times;</button>
        <h2 class="modal-title text-center">¿Cómo podemos ayudarle?</h2>
      </div>
      <div class="modal-body">
        
          <img class="img-responsive" src="img/workers.jpg" alt="img-rude">
        
            <h3 class="text-center">Estamos encantados en ayudarte</h3>
              
        <form role="form">
              <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" placeholder="Ingrese sus nombres">
              </div>
              
              <div class="form-group">
                <label for="email">Correo Electronico</label>
                <input type="email" class="form-control" id="email" placeholder="correo electronico">
              </div>
              <div class="form-group">
                <label for="pwd">Comentanos tu duda</label>
                <textarea class="form-control" id="pwd" rows="7" cols="50" name="comment" placeholder="Te responderemos lo mas antes posible" >
                </textarea>
              </div>
              
            </form>
        
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-hola" value="Consultar">
        <buttton class="btn btn-default" data-dismiss="modal">Cancelar</buttton>
      </div>
    </div>
  </div>
</div>

    
    
		<!-- en este div se estan insertando todas las paginas utilizando Ajax-->
		<div class="view">
      
    </div><br>
    <?php include 'views/footer.php'; ?>

  <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  <script src="js/vendor/jquery-1.11.2.min.js"></script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script src="js/typed.js"></script>
  <script src="js/main.js"></script>
  <script src="js/nav.js"></script>
</body>
</html>