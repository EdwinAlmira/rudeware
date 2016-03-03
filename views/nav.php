 <nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--Marca del nav -->
      <a href="../index.php" class="navbar-brand"><img src="../img/rudeware.svg" class="img-responsive loguito" alt="Responsive image"></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../index.php">Home</a></li>
        <li><a href="products.php">Productos</a></li>
        <li><a href="blog.php">Noticias</a></li>
        <!--Dropdown del nav -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Quienes Somos<span class="caret"></span></a>
          <!--Contenido de Dropdowns-->
          <ul class="dropdown-menu">
            <li><a href="quienes.php">Visión y Misióm</a></li>
            <li><a href="ask.php">Preguntas Frecuentes</a></li>
            <li><a href="#" data-toggle="modal" data-target="#help">Soporte </a></li>
          </ul>
        </li>
        <li><a href="login.php">Iniciar Sesión</a></li>
        <li><a href="register.php">Registrate</a></li>
      </ul>
    </div>
  </div>
</nav>
<!--Incluye el modal de help-->
<?php include 'contac.php'; ?>