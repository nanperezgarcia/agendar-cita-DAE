<?php
  require './logica/conexion.php';
  session_start();
  $sesion = $_SESSION['username'];
  $sesionTipo = $_SESSION['idTipo'];
  $sesionNombre = $_SESSION['nombre'];

  if(!isset($sesion))
  {
    header("location: login.php");
  }
  else
  {} 
?>

<!DOCTYPE html>
  <html lang="es">
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
      <link rel="stylesheet" href="estilos/stylePrincipal.css" type="text/css" media="all" />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css" rel="stylesheet"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
      <script src="peticion.js"></script>
    </head>
    <body>
    <!--Barra de navegación-->
      <nav>
        <div class="nav-wrapper">
          <a class="brand-logo"><img id="logo" src="./src/buap.png"></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li class="active"><a href="paginaprincipal.php"><img id="icono" src="./src/document.png">Trámites</a></li>
            <li><a href="agendarCita.php"><img id="icono" src="./src/calendar.png">Agendar cita</a></li>
            <li><a><img id="icono" src="./src/avatar.png"><?php echo $sesionNombre ?></a></li>
            <li><a href="logica/logout.php" id="cerrar"><img id="icono" src="./src/logout.png">Cerrar Sesión</a></li>
          </ul>
        </div>
      </nav>

    <!--Búsqueda-->
    <br><br><br>
    <section>
      <div class="box">
        <div class="container-1">
          <span class="icon"><i class="fa fa-search"></i></span>
          <input type="text" name="busqueda" id="busqueda" placeholder="Buscar">
      </div>
    </div>
    </section>

    <!--Trámites-->
    <section>
      <br><br><br>
      <div class="container">
        <div class="row" id="div_resultado">
        </div>
      </div>
    </section>
  </body>
</html>



