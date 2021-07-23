<?php
$query = 'SELECT * FROM contenido';
$result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysqli_error());

$i = 0;
$arrayDat = [];
$arrayKey = [];
while ($line = $result->fetch_array(MYSQLI_ASSOC)) {
    $arrayDat[$line['id']] = $line;
}
mysqli_free_result($result);
mysqli_close($link);
?>