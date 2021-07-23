<?php

$link = mysqli_connect('localhost', 'user6', 'password6','footprints')
    or die('No se pudo conectar: ' . mysql_error());

$query = 'SELECT * FROM contenido';
$result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysql_error());

$i = 0;
$arrayDat = [];
$arrayKey = [];
while ($line = $result->fetch_array(MYSQLI_ASSOC)) {
    $arrayDat[$line['id']] = $line;
}

mysqli_free_result($result);
mysqli_close($link);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
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
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>