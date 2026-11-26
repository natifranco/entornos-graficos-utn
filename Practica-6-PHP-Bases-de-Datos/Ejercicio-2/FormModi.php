
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Modificar Ciudad</title>
</head>

<body>

<?php

include("conexion.inc");

// Capturar el ID ingresado
$vId = (int) $_POST['id'];

// Buscar la ciudad
$vSql = "SELECT * FROM ciudades WHERE id = $vId";

$vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));

if (mysqli_num_rows($vResultado) == 0) {

    echo "La ciudad no existe.<br>";
    echo "<a href='FormModiIni.html'>Volver a intentar</a>";

} else {

    $fila = mysqli_fetch_array($vResultado);

?>

    <h2>Modificar datos de la ciudad</h2>

    <form action="Modi.php" method="POST" name="FormModi">

        <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">

        <p>
            Ciudad:
            <input type="text" name="ciudad"
                   value="<?php echo htmlspecialchars($fila['ciudad']); ?>"
                   required>
        </p>

        <p>
            País:
            <input type="text" name="pais"
                   value="<?php echo htmlspecialchars($fila['pais']); ?>"
                   required>
        </p>

        <p>
            Habitantes:
            <input type="number" name="habitantes"
                   value="<?php echo $fila['habitantes']; ?>"
                   min="0" required>
        </p>

        <p>
            Superficie:
            <input type="number" name="superficie"
                   value="<?php echo $fila['superficie']; ?>"
                   min="0" step="0.01" required>
        </p>

        <p>
            ¿Tiene metro?
            <input type="checkbox" name="tieneMetro" value="1"
                <?php if ($fila['tieneMetro'] == 1) echo "checked"; ?>>
        </p>

        <input type="submit" value="Guardar modificaciones">

    </form>

<?php
}

// Liberar resultados y cerrar conexión
mysqli_free_result($vResultado);
mysqli_close($link);

?>

<p><a href="Menu.html">Volver al menú del ABML</a></p>

</body>
</html>
