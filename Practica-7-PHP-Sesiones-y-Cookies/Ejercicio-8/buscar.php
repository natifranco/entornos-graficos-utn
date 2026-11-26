<?php

require_once 'conexion.inc';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['cancion'])) {

    $cancion = trim($_POST['cancion']);

    $consulta = mysqli_prepare(
        $conexion,
        "SELECT canciones FROM buscador WHERE canciones LIKE ?"
    );

    $busqueda = "%" . $cancion . "%";

    mysqli_stmt_bind_param($consulta, "s", $busqueda);
    mysqli_stmt_execute($consulta);

    $resultado = mysqli_stmt_get_result($consulta);

} else {

    header('Location: index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Resultados de búsqueda</title>
</head>

<body>

    <h1>Resultados de búsqueda</h1>

    <p>Buscaste: <?php echo htmlspecialchars($cancion); ?></p>

    <?php if (mysqli_num_rows($resultado) > 0) { ?>

        <h2>Canciones encontradas:</h2>

        <ul>

            <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>

                <li><?php echo htmlspecialchars($fila['canciones']); ?></li>

            <?php } ?>

        </ul>

    <?php } else { ?>

        <p>No se encontraron canciones que coincidan con tu búsqueda.</p>

    <?php } ?>

    <p><a href="index.php">Volver al buscador</a></p>

</body>
</html>
