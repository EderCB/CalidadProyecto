<?php namespace Views;

	$template = new Template();

	class Template{

		public function __construct(){
?>
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>LIBRERÍA BAZAR | JORGUITO</title>
		<link rel="stylesheet" href="<?php echo URL; ?>/Views/template/css/bootstrap1.css">
		<link rel="stylesheet" href="<?php echo URL; ?>/Views/template/css/general.css">
		
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
  		<div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
		        <span class="sr-only"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="<?php echo URL; ?>">LIBRERÍA BAZAR | JORGUITO</a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
		      <ul class="nav navbar-nav">
		        <li><a href="<?php echo URL; ?>">Inicio</a></li>
		        <li><a href="#">Venta</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Registro <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="<?php echo URL; ?>/productos/agregar">Nuevo Producto</a></li>
		            <li><a href="<?php echo URL; ?>/clientes/agregar">Nuevo Cliente</a></li>
		            <li><a href="<?php echo URL; ?>/empleados/agregar">Nuevo Empleado</a></li>
		            <li><a href="<?php echo URL; ?>/categorias/agregar">Nueva Categoria</a></li>
		            <li><a href="<?php echo URL; ?>/cargos/agregar">Nuevo Cargo</a></li>
		            <li><a href="<?php echo URL; ?>/ocupaciones/agregar">Nueva Ocupación</a></li>
		            <li><a href="<?php echo URL; ?>/generos/agregar">Nuevo Género</a></li>
		          </ul>
		        </li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Operaciones <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		          	<li><a href="<?php echo URL; ?>/productos">Buscar Producto</a></li>
		          	<li><a href="<?php echo URL; ?>/clientes">Buscar Cliente</a></li>
		          	<li><a href="<?php echo URL; ?>/empleados">Buscar Empleado</a></li>
		          	<li><a href="<?php echo URL; ?>/categorias">Buscar Categoria</a></li>
		          	<li><a href="<?php echo URL; ?>/cargos">Buscar Cargos</a></li>
		          	<li><a href="<?php echo URL; ?>/ocupaciones">Buscar Ocupaciones</a></li>
		          	<li><a href="<?php echo URL; ?>/generos">Buscar Género</a></li>
		          </ul>
		        </li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#">Cerrar Sesión</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>
<?php
		}

		public function __destruct(){
?>
	<footer class="navbar-fixed-bottom">
		Todos los derechos reservados &copy 2018 <br>
		ADMINISTRACIÓN JORGUITO ~ | <b>LIBRERÍA BAZAR | JORGUITO</b>
	</footer>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  
	<script src="<?php echo URL; ?>/Views/template/js/bootstrap.js"></script>
	</body>
	</html>
<?php
		}

	}

?>