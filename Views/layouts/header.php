<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="assets/images/icono.png" type="image/x-icon">
    <title>Promotion Factory</title>
    <!-- styles -->
    <link rel="stylesheet" href="assets/css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  </head>
<body>
<?php if(!isset($_SESSION['login'])): ?>
<nav id="menu" class="navbar navbar-expand-md navbar-light kj fixed-top">
<?php endif; ?>
<?php if(isset($_SESSION['login'])): ?>
<nav id="menu" class="navbar navbar-expand-md navbar-light kj fixed-top" >
<?php endif; ?>
<a class="navbar-brand" href="#">
    <img src="assets/images/icono.png" class="animation-target" width="45" height="45" alt="">
  </a>
  <?php if(isset($_SESSION['login'])): ?>
<?php if($_SESSION['login']->Id_cargo == 1){ ?>
  <a class="navbar-brand display-3" href="?controller=admin" style="font-family: 'Lexend Deca', sans-serif;"><b>Promotion Factory</b></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
<?php } ?>
<?php if($_SESSION['login']->Id_cargo == 2){ ?>
  <a class="navbar-brand display-3" href="?controller=vendedor" style="font-family: 'Lexend Deca', sans-serif;"><b>Promotion Factory</b></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
<?php } ?>
<?php if($_SESSION['login']->Id_cargo == 4){ ?>
  <a class="navbar-brand display-3" href="?controller=cliente" style="font-family: 'Lexend Deca', sans-serif;"><b>Promotion Factory</b></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
<?php } ?>
        <?php endif; ?>
        <?php if(! isset($_SESSION['login'])): ?>
          <a class="navbar-brand display-3" href="?controller=index" style="font-family: 'Lexend Deca', sans-serif;"><b>Promotion Factory</b></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
<?php endif; ?>
  
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
              <!--
                <a href="#" class="nav-item nav-link active">Home</a>
                <a href="#" class="nav-item nav-link">Profile</a>
                <a href="#" class="nav-item nav-link">Messages</a>
                <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>
              -->
            </div>
            <div class="navbar-nav ml-auto " style="font-family: 'Lexend Deca', sans-serif;"><br>
<?php if(! isset($_SESSION['login'])): ?>
<!--<a class="btn btn-info text-white mr-1 ml-1" href="?controller=index#coment" role="button">Comentarios</a>-->
<button type="button" class="btn btn-warning btn-lg text-white"  data-toggle="modal" data-target="#exampleModal">Comentario</button>&nbsp;&nbsp;
<button type="button" class="btn btn-success btn-lg text-white"  data-toggle="modal" data-target="#Registro">Registro</button>

<button type="button"  style="font-family: 'Lexend Deca', sans-serif;" class="btn btn-primary my-2 ml-2 my-sm-0" data-toggle="modal" data-target="#exampleModalCenter">
  Iniciar sesion
</button>
<?php endif; ?>
<?php if(isset($_SESSION['login'])): ?>
<?php if($_SESSION['login']->Id_cargo == 1){ ?>
            <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Usuarios
                    </button>&nbsp;
                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="?controller=usuario" class="btn btn-secondary mr-1 ml-1 qwe   " role="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Activos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                      <a href="?controller=usuario&method=vista" class="btn btn-secondary mr-1 ml-1 qwe" role="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inactivos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>

                    </div>
                  </div>

                    <div class="btn-group">
          <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Empleados
          </button>&nbsp;
          <div class="dropdown-menu dropdown-menu-right">
            <a href="?controller=empleado" class="btn btn-dark mr-1 ml-1 qwe white" role="button">&nbsp;&nbsp;&nbsp;&nbsp;Trabajando&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
            <a href="?controller=empleado&method=vista" class="btn btn-dark mr-1 ml-1 qwe" role="button">&nbsp;&nbsp;&nbsp;&nbsp;Liquidados&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>

          </div>
        </div>

        <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    productos
                    </button>&nbsp;
                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="?controller=productos" class="btn btn-primary mr-1 ml-1 qwe   " role="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Disponibles&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                      <a href="?controller=productos&method=vista" class="btn btn-primary mr-1 ml-1 qwe" role="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gastados&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>

                    </div>
                  </div>

                          <div class="btn-group">
                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Proveedor
                    </button>&nbsp;
                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="?controller=proveedor" class="btn btn-warning mr-1 ml-1 qwe   " role="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Disponibles&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                      <a href="?controller=proveedor&method=vista" class="btn btn-warning mr-1 ml-1 qwe" role="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Liquidados&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>

                    </div>
                  </div>

                  <div class="btn-group">
                    <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Inventario
                    </button>&nbsp;
                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="?controller=inventario" class="btn btn-success mr-1 ml-1 qwe   " role="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Existente&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                      <a href="?controller=inventario&method=vista" class="btn btn-success mr-1 ml-1 qwe" role="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inexistente&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>

                    </div>
                  </div>

<?php } ?>

<?php if($_SESSION['login']->Id_cargo == 2){ ?>
            <div class="btn-group">
              <a class="btn btn-secondary mr-1 ml-1 qwe" href="?controller=ventas"  role="button">Facturas</a>   
            </div>
<?php } ?>

<?php if($_SESSION['login']->Id_cargo == 4){ ?>
            <div class="btn-group">
              <a class="btn btn-secondary mr-1 ml-1 qwe" href="?controller=cliente&method=vista"  role="button">Productos</a>   
            </div>
<?php } ?>

                <a class="btn btn-danger mr-1 ml-1 qwe" href="?controller=security&method=logout"  role="button">Cerrar sesion</a>
        <?php endif; ?>


</div>
</div>

    </nav>
 
