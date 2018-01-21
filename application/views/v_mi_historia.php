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
    <title>Jhomein | Mi historia</title>
</head>
<body>
  <div class="container-fluid">
    <?php echo isset($menu) ? $menu : null ?>
    <div class="header-home">
      <header>
        <h1>Mi historia</h1>
      </header>
    </div>
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