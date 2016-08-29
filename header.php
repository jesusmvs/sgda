<?php
session_start();
  if (empty($_SESSION['user'])) { header("location: index.php"); } 
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>S.G.D.A</title>
  <link href="css/style2.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link href="css/clean.css" rel="stylesheet">
  <link href="css/css.css" rel='stylesheet' />
  <link href="css/styles.css" rel="stylesheet" />
  <link href="css/estilo.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div id="sup"><img src="images/logorojo.png" /><div>
      <div id="content">
        <div id="tope1" class="tope1" style="height:20px;">BIENVENIDO <?php echo $_SESSION['user'] ?> <span class="der"><?php echo date("d/m/Y"); ?></span></div>
        <div id="tope2" class="tope2"><span class="der"></span></div>
        <div id="tope3"></div>
        <div id="tope4"></div>
        <div id="center-wrapper">
          <!-- Static navbar -->
          <div class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="inicio.php">SGDA</a>
              </div>
              <div class="navbar-collapse collapse">



                <ul class="nav navbar-nav">
                  <?php if(($_SESSION['rol']=='Administrador')||($_SESSION['rol']=='Coordinador')): ?>
                  <li class="dropdown margen-superior">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administración del Sistema <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <!--<li><a id="" href="#">Exportar Base de Datos</a></li>-->
                      <li data-toggle="modal" data-target="#ModalGCanaimita"><a href="#">Gestionar Canaimitas</a></li>
                      <!--<li data-toggle="modal" data-target="#"><a href="#">Limpiar egresado y retirados</a></li>
                      <li data-toggle="modal" data-target="#"><a href="#">Limpiar Canaimitas Inactivas</a></li>-->
                      
                      <?php if($_SESSION['rol']=='Coordinador'): ?>
                      <li data-toggle="modal" data-target="#ModalCrearUsuario"><a href="#">Crear Usuario Coordinador</a></li>
                      <?php endif; if($_SESSION['rol']=='Administrador'): ?>
                      <li data-toggle="modal" data-target="#ModalCrearUsuario"><a href="#">Crear Nuevo Usuario</a></li>
                      <li id="AdminUB"><a href="#">Administrar Usuarios Bloqueados</a></li>
                      <?php endif; ?>
                   
                    </ul>
                  </li>
                <?php endif; ?>

                </ul>

                <div class="navbar-collapse collapse">
                  <ul class="nav navbar-nav">

                    <li class="dropdown margen-superior">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Administración de Cuenta <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li data-toggle="modal" data-target="#ModalModificarContraseña"><a href="#">Modificar Contraseña</a></li>
                        <li data-toggle="modal" data-target="#ModalModificarPregunta"><a href="#">Modificar Pregunta y Respuesta de Seguridad</a></li>                
                      </ul>
                    </li>

                  </ul>

                  <ul class="nav navbar-nav navbar-right">
                    <li><a id="cerrar" class="margen-superior" href="#">Cerrar Sesi&oacute;n</a></li>
                  </ul>
                </div><!--/.nav-collapse -->
              </div><!--/.container-fluid -->
            </div>

          </div>
         
