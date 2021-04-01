<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="vista/assets/css/socios.css" rel="stylesheet">
    <link href="vista/assets/css/pagos.css" rel="stylesheet">
    <link href="vista/assets/css/hospital.css" rel="stylesheet">
    <link href="vista/assets/css/expedientes.css" rel="stylesheet">
    <link href="vista/assets/css/doctor.css" rel="stylesheet">

    <title>Formularios</title>
  </head>
  <body>

    <?php

    $ruta = $_GET['ruta'];

    if(isset($ruta)){
      $rutas = explode("/",$ruta);
      // print_r($rutas);

      switch ($rutas[0]){

        case'doctor':
          include "modulos/doctor.html.php";
          break;

        case'expedientes':
          include "modulos/expedientes.html.php";
          break;

        case 'hospital':
          include "modulos/hospital.html.php";
          break;
        
        case 'pagos':
          include "modulos/pagos.html.php";
          break;

        default:
        include "modulos/paginaPrincipal.html.php";
        break;
      }

    } else{

      include "modulos/paginaPrincipal.html.php";

    }





    // if (isset())
    
      // include "modulos/doctor.html.php";
      // include "modulos/expedientes.html.php";
      // include "modulos/hospital.html.php";
      // include "modulos/pagos.html.php";
      // include "modulos/socio.html.php";

    
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="vista/assets/js/pagos.js"></script>
  </body>
</html>
