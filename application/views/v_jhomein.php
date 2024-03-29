<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="keywords"               content="your,keywords">
    <link rel="icon"       href="<?php echo RUTA_IMG?>logo.ico">
    <link rel="stylesheet" href="<?php echo RUTA_PLUGINS?>normalize/normalize.css">
    <link rel="stylesheet" href="<?php echo RUTA_PLUGINS?>bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo RUTA_PLUGINS?>mdl/material.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?php echo RUTA_CSS?>general.css">
    <title>Jhomein | Inicio</title>
</head>
<body>
	<div class="container-fluid">
    <?php echo isset($menu) ? $menu : null ?>
    <div class="header-home">
      <header>
        <h1>Bienvenidos</h1>
      </header>
    </div>
	</div>
	<div class="container-fluid">
		<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
      <div class="mdl-tabs__tab-bar">
          <a href="#novedades" class="mdl-tabs__tab is-active">Novedades</a>
          <a href="#tutoriales" class="mdl-tabs__tab">Tutoriales</a>
          <a href="#descargas" class="mdl-tabs__tab">Descargas</a>
      </div>
      <div class="mdl-tabs__panel is-active" id="novedades">
        <ul>
          <li>novedades</li>
        </ul>
      </div>
      <div class="mdl-tabs__panel" id="tutoriales">
        <ul>
          <li>tutoriales</li>
        </ul>
      </div>
      <div class="mdl-tabs__panel" id="descargas">
        <ul>
          <li>descargas</li>
        </ul>
      </div>
    </div>
	</div>
	
	<script src="<?php echo RUTA_PLUGINS?>jquery-3.2.1.min.js"></script>
	<script src="<?php echo RUTA_PLUGINS?>bootstrap-3.3.7/js/bootstrap.min.js"></script>
	<script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js"></script>
</body>
</html>