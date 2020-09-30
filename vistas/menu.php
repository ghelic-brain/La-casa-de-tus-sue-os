
<?php require_once "dependencias.php" ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- Begin Navbar -->
  <div id="nav" style="background-color:#FF8000;border:none;">
    <div class="navbar navbar-inverse navbar-fixed-top" style="background-color:#FF8000;border:none;" data-spy="affix" data-offset-top="100">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="inicio.php" style="border:none;text-decoration:none;"><img class="img-responsive logo" style="background:transparent" src="../img/ventas.png" alt="" width="300px" height="0px"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

          <ul class="nav navbar-nav navbar-right">

            <li ><a href="inicio.php">Inicio</a>
            </li>

            <li ><a href="contactanos.php">Contactanos</a>
            </li>

            
          </li>
          <li class="">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Administrar Articulos <span class="caret"></span></a>
            <ul class="dropdown-menu">
            <?php
              if( $_SESSION['rolUsuario']=="administrador"){ 
          ?>
              <li><a href="categorias.php">Categorias</a></li>

              <?php
               }
            ?>
              <li><a href="articulos.php">Ofertar Propiedad</a></li>
            </ul>
          </li>
          <?php
              if( $_SESSION['rolUsuario']=="administrador"){ 
          ?>
          <li ><a href="usuarios.php">Administrar usuarios</a>
            </li>
            <?php
               }
            ?>
         
          
          <li class="dropdown" >
            <a href="#" style="color: red"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Usuario: </a>
            <ul class="dropdown-menu">
              <li> <a style="color: red" href="../procesos/salir.php"><span class="glyphicon glyphicon-off"></span> Salir</a></li>
              
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.contatiner -->
  </div>
</div>
<!-- Main jumbotron for a primary marketing message or call to action -->





<!-- /container -->        


</body>
</html>

<script type="text/javascript">
  $(window).scroll(function() {
    if ($(document).scrollTop() > 150) {
      $('.logo').height(80);

    }
    else {
      $('.logo').height(80);
    }
  }
  );
</script> 