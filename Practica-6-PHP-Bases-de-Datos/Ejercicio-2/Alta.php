
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Alta de Ciudad</title>
</head>

<body>

<?php

include("conexion.inc");

// Capturar los datos enviados desde el formulario
$vCiudad = mysqli_real_escape_string($link, $_POST['ciudad']);
$vPais = mysqli_real_escape_string($link, $_POST['pais']);
$vHabitantes = (int) $_POST['habitantes'];
$vSuperficie = (float) $_POST['superficie'];
$vTieneMetro = isset($_POST['tieneMetro']) ? 1 : 0;

// Armar la instrucción SQL
$vSql = "INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tieneMetro)
         VALUES ('$vCiudad', '$vPais', $vHabitantes, $vSuperficie, $vTieneMetro)";

// Ejecutar la consulta
mysqli_query($link, $vSql) or die(mysqli_error($link));

echo "La ciudad fue registrada correctamente.<br>";

echo "<a href='Menu.html'>Volver al menú del ABML</a>";

// Cerrar la conexión
mysqli_close($link);

?>

</body>
</html>
