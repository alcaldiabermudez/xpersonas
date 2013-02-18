<?php header('SystemDevelopedBy: BryanPHP'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Base de datos XPersona</title>
	<link rel="stylesheet" href="<?= base_url('public/css/style.css'); ?>" />
	<!-- Soporte HTML5, para IE6-8 soporta los elementos de HTML5 -->
	<!--[if lt IE 9]>
		<script src="<?= base_url('public/js/html5.js')?>"></script>
	<![endif]-->
</head>
<body>



<div class="container">
	<img src="<?=base_url('public/img/cintillo.png')?>" width="100%" style="position:relative;border-radius:3px 3px 0 0; height:65px;" />



<div class="navbar navbar-inverse print" style="position: relative; margin-top:-1.85px;">
	<div class="navbar-inner" style="border-radius:0 0 5px 5px;">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="<?= base_url(); ?>">XPersona</a>

			<div class="nav-collapse collapse navbar-inverse-collapse">
				<ul class="nav">
					<li class="active"><a href="<?= base_url(); ?>">Inicio</a></li>
					<li class="dropdown">
					<a href="<?= base_url('persona/index'); ?>" class="dropdown-toggle" data-toggle="dropdown">Personas <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><?= anchor('persona/agregar','<i class="icon-chevron-right pull-right"></i> Agregar') ?></li>
							<li><?= anchor('persona/buscar','<i class="icon-chevron-right pull-right"></i> Buscar') ?></li>
							<li><?= anchor('persona/listar','<i class="icon-chevron-right pull-right"></i> Listar') ?></li>
							<li class="divider"></li>
							<li class="nav-header">Nav header</li>
							<li><a href="#">Separated link</a></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
					</li>
					<li class="dropdown">
					<a href="<?= base_url('persona/index'); ?>" class="dropdown-toggle" data-toggle="dropdown">Reportes <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><?= anchor('reporte/xparroquia','<i class="icon-chevron-right pull-right"></i> Por parroquia') ?></li>
							<li><?= anchor('reporte/xcentro','<i class="icon-chevron-right pull-right"></i> Por centro') ?></li>
							<li><?= anchor('reporte/xpersona','<i class="icon-chevron-right pull-right"></i> Por persona') ?></li>
							<li class="divider"></li>
							<li class="nav-header">Nav header</li>
							<li><a href="#">Separated link</a></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
					</li>
					<!--
					<li><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
					-->
				</ul>

				
				<ul class="nav pull-right">
					<li>
						<form class="navbar-search pull-left" action="<?=base_url('persona/buscar')?>" method="post" autocomplete="off">
							<input type="text" class="search-query span2" name="cedula" placeholder="Buscar Persona">
						</form>
					</li>
					<li class="divider-vertical"></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuario <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#"><i class="icon-edit"></i> Editar</a></li>
							<li class="divider"></li>
							<li><a href="#">Cerrar sesión</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.nav-collapse -->
		</div><!-- /.container del menu-->
	</div><!-- /.navbar-inner -->
</div>

<div class="clearfix"> </div>











<!--
	<div class="menu menu-cerrado">
		<button class="btn btn-menu" rel="tooltip" data-original-title="Abrir el Menú" data-placement="bottom"><i class="icon-th-large"></i></button>
		<button class="btn btn-inverse btn-menu-cerrar" style="display:none; float:right; right:1%;" ><i class="icon-arrow-left icon-white"></i> Cerrar el Menú</button>
		<div class="clearfix"></div>
		
		<h3 class="title-menu">Menú</h3>
		<div class="menu-lista">
			<ul>
				<li><a href="javascript:redirec();" ><i class="icon-home"></i><i class="icon-chevron-right pull-right"></i> Inicio</a></li>
				<li><i class="icon-user"></i> <?= anchor('persona/index','<i class="icon-chevron-right pull-right"></i> Personas') ?>
					<ul style="margin-top:10px;">
						<li><i class="icon-plus-sign"></i> <?= anchor('persona/agregar','<i class="icon-chevron-right pull-right"></i> Agregar Persona') ?></li>
						<li><i class="icon-search"></i> <?= anchor('persona/buscar','<i class="icon-chevron-right pull-right"></i> Buscar Empleado') ?></li>
						<li><i class="icon-list"></i> <?= anchor('persona/listar','<i class="icon-chevron-right pull-right"></i> Listar Empleados') ?></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>

<li><i class="icon-circle-arrow-down"></i> <?= anchor('reporte/index','<i class="icon-chevron-right pull-right"></i> Reportes') ?></li>
-->

<div class="content">