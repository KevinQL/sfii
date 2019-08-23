<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="views/css/normalize.css">
    <link rel="stylesheet" href="views/css/sweetalert2.css">
    <link rel="stylesheet" href="views/css/material.min.css">
    <link rel="stylesheet" href="views/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="views/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="views/css/main.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="views/js/material.min.js" ></script>
    <script src="views/js/sweetalert2.min.js" ></script>
    <script src="views/js/jquery.mCustomScrollbar.concat.min.js" ></script>
    <script src="views/js/main.js" ></script>
</head>
<body>

<?php

$modulos = new viewsControlersb();
$modulos -> enlacesController();

?>

</body>
</html>
