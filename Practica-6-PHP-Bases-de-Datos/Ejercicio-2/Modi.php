
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Modificar Ciudad</title>
</head>

<body>

<?php

include("conexion.inc");

// Capturar los datos enviados desde el formulario
$vId = (int) $_POST['id'];
$vCiudad = mysqli_real_escape_string($link, $_POST['ciudad']);
$vPais = mysqli_real_escape_string($link, $_POST['pais']);
$vHabitantes = (int) $_POST['habitantes'];
$vSuperficie = (float) $_POST['superficie'];
$vTieneMetro = isset($_POST['tieneMetro']) ? 1 : 0;

// Armar la instrucción SQL
$vSql = "UPDATE ciudades
         SET ciudad = '$vCiudad',
             pais = '$vPais',
             habitantes = $vHabitantes,
             superficie = $vSuperficie,
             tieneMetro = $vTieneMetro
         WHERE id = $vId";

// Ejecutar la consulta
mysqli_query($link, $vSql) or die(mysqli_error($link));

if (mysqli_affected_rows($link) >= 0) {
    echo "La ciudad fue modificada correctamente.<br>";
}

echo "<a href='Menu.html'>Volver al menú del ABML</a>";

// Cerrar la conexión
mysqli_close($link);

?>

</body>
</html>
