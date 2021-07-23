<?php
$host = 'localhost';
$user = 'user6';
$pass = 'password6';
$db = 'footprints';


$link = mysqli_connect($host, $user, $pass, $db)
    or die('No se pudo conectar: ' . mysqli_error());

?>