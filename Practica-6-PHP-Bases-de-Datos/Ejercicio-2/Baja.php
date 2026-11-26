
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Baja de Ciudad</title>
</head>

<body>

<?php

include("conexion.inc");

// Capturar el ID enviado desde el formulario
$vId = (int) $_POST['id'];

// Buscar si existe la ciudad
$vSql = "SELECT * FROM ciudades WHERE id = $vId";

$vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));

if (mysqli_num_rows($vResultado) == 0) {

    echo "La ciudad no existe.<br>";
    echo "<a href='FormBajaIni.html'>Volver a intentar</a>";

} else {

    // Eliminar la ciudad
    $vSql = "DELETE FROM ciudades WHERE id = $vId";

    mysqli_query($link, $vSql) or die(mysqli_error($link));

    echo "La ciudad fue eliminada correctamente.<br>";
    echo "<a href='Menu.html'>Volver al menú del ABML</a>";

}

// Liberar resultados
mysqli_free_result($vResultado);

// Cerrar conexión
mysqli_close($link);

?>

</body>
</html>
