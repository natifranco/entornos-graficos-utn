
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Listado completo de ciudades</title>
</head>

<body>

<?php

include("conexion.inc");

// Consultar todas las ciudades
$vSql = "SELECT * FROM ciudades";

$vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));

$total_registros = mysqli_num_rows($vResultado);

echo "Cantidad de ciudades registradas: " . $total_registros;

?>

<h2>Listado completo de ciudades</h2>

<table border="1" cellpadding="5">

    <tr>
        <th>ID</th>
        <th>Ciudad</th>
        <th>País</th>
        <th>Habitantes</th>
        <th>Superficie</th>
        <th>Tiene metro</th>
    </tr>

    <?php

    while ($fila = mysqli_fetch_array($vResultado)) {

    ?>

    <tr>
        <td><?php echo $fila['id']; ?></td>
        <td><?php echo htmlspecialchars($fila['ciudad']); ?></td>
        <td><?php echo htmlspecialchars($fila['pais']); ?></td>
        <td><?php echo $fila['habitantes']; ?></td>
        <td><?php echo $fila['superficie']; ?></td>
        <td><?php echo ($fila['tieneMetro'] == 1) ? "Sí" : "No"; ?></td>
    </tr>

    <?php
    }

    // Liberar resultados
    mysqli_free_result($vResultado);

    // Cerrar conexión
    mysqli_close($link);

    ?>

</table>

<p><a href="Menu.html">Volver al menú del ABML</a></p>

</body>
</html>
