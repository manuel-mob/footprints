<?php
include_once('src/lib/conn.php');
include('src/controllers/contenidoController.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Footprints</title>
  </head>
  <body>
    <div class="container">
        <!-- Content here -->
        <h1>Mi Contenido</h1>
        <h5>El contenido que tengo hasta el momento</h5>
        <div class="row">
            <?php
            while ($i < count($arrayDat)){
                $key = random_int(1, count($arrayDat)+1);
                if (!array_key_exists($key,$arrayKey)){
                    if (array_key_exists($key,$arrayDat)){
                        echo '<div class="col">';
     
                        echo '<div class="card" style="width: 18rem;">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">'.$arrayDat[$key]['nombre'].'</h5>';
                        echo '<p class="card-text">'.$arrayDat[$key]['descripcion'].'</p>';
                        echo '<a href="#" class="btn btn-primary">Ver apuntes <span class="badge bg-secondary">'.$key.'</span></a>';
                        echo '</div>';
                        echo '</div>';
                        $arrayKey[$key] = $arrayDat[$key];
                        $i = $i + 1;
                        echo '</div>';
                    }
                }
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>