<?php

$conexion = mysqli_connect("localhost", "root", "", "base2");

if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

?>
