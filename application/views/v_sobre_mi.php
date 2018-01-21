<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="ISO-8859-1">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Portafolio Jhonatan Meza Inca.">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon"       href="<?php echo RUTA_IMG?>logo.ico">
    <link rel="stylesheet" href="<?php echo RUTA_PLUGINS?>normalize/normalize.css">
    <link rel="stylesheet" href="<?php echo RUTA_PLUGINS?>bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo RUTA_PLUGINS?>mdl/material.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?php echo RUTA_CSS?>general.css">
    <link rel="stylesheet" href="<?php echo RUTA_CSS?>sobre_mi.css">
    <title>Jhomein | Sobre mi</title>
</head>
<body>
  <div class="container-fluid">
    <?php echo isset($menu) ? $menu : null ?>
    <div class="header-home">
      <header>
        <h1>Sobre mi</h1>
      </header>
    </div>
  </div>
  <div class="container">
    <section>
      <h4>¡Hola&#33;</h4>
      <p>Me llamo Jhonatan Meza Inca, soy programador web experto y t&eacute;cnico electr&oacute;nico.
      Actualmente me desempe&ntilde;o como developer backend en la empresa <a class="link" href="http://www.softhy.pe" target="_blank">SOFTHY</a> y participo 
      en el proyecto <a class="link" href="http://www.smiledu.pe" target="_blank">SMILEDU</a>, que esta enfocado a la gesti&oacute;n de escuelas.</p>

      <h4>Estudios</h4>
      <ul>
        <li>Ingenieria Inform&aacute;tica - UNIVERSIDAD RICARDO PALMA (URP)</li>
        <li>Computaci&oacute;n e Inform&aacute;tica - Instituto Superior Tecnol&oacute;gico IDAT</li>
      </ul>
    </section>
  </div>
  <script src="<?php echo RUTA_PLUGINS?>jquery-3.2.1.min.js"></script>
  <script src="<?php echo RUTA_PLUGINS?>bootstrap-3.3.7/js/bootstrap.min.js"></script>
  <script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js"></script>
  <script type="text/javascript">
    // $(document).ready(function() {
        $('#nav-bar').find('ul ').children('li:nth-child(2)').addClass('active');
    // });
  </script>
</body>
</html>