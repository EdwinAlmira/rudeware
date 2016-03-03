  <!DOCTYPE html>
  <html lang="en">
  <head>
  	<meta charset="UTF-8">
  	<title>Inicia Sesión</title>
  	<link rel="stylesheet" href="../css/bootstrap.min.css">
  	<link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/nav.css">
  </head>
  <body>


  <!--Barra de navegación-->

  <?php include 'nav.php' ?>

  <!--Cuerpo de Login -->
   <?php include 'terminos.php'; ?>
   <br><br><br>
  <section><br>
    <div class="container-fluid logincontent">    
      <div class="col-xs-12 col-md-6 col-md-offset-3">
        <div class="thumbnail card">
          <img src="../img/workers.jpg" alt="img-rude">
          <div class="caption">
            <h3 class="text-center">Tu cuenta</h3>
            <p class="text-center">Tu sitio de administracion del software de tu empresa</p>
          </div>
        </div>
      </div>
      <div id="loginbox" class="col-xs-12  col-md-6 col-md-offset-3">
        <div class="row">
         <h2 id="title" class="text-center">Iniciar Sesion</h2>
       </div>
       <div class="panel-body" >
        <div id="login-alert" class="alert alert-danger col-sm-12"></div>
        <form id="loginform" class="form-horizontal" role="form">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="correo electronico">
          </div>

          <div  class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="login-password" type="password" class="form-control" name="password" placeholder="Contraseña">
          </div>      
          <div class="input-group">
            <div class="checkbox">
              <label>
               <input id="login-remember" type="checkbox" name="remember" value="1"> Recordar Contraseña
             </label>
           </div>
         </div>
         <div  class="form-group">
           <div class="col-sm-12 controls">
            <button class="btn btn-hola center-block">Iniciar Sesión</button>
          </div>
        </div>
      </form>
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
<script src="../js/nav.js"></script>
</body>
</html>