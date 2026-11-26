
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Listado de ciudades con paginación</title>
</head>

<body>

<?php

include("conexion.inc");

// Cantidad de registros por página
$Cant_por_Pag = 3;

// Obtener la página solicitada
$pagina = isset($_GET['pagina']) ? (int) $_GET['pagina'] : 1;

if ($pagina < 1) {
    $pagina = 1;
}

// Consultar la cantidad total de registros
$vSql = "SELECT * FROM ciudades";

$vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));

$total_registros = mysqli_num_rows($vResultado);

// Calcular la cantidad total de páginas
$total_paginas = ceil($total_registros / $Cant_por_Pag);

if ($total_paginas > 0 && $pagina > $total_paginas) {
    $pagina = $total_paginas;
}

// Calcular desde qué registro comenzar
$inicio = ($pagina - 1) * $Cant_por_Pag;

// Liberar el primer resultado
mysqli_free_result($vResultado);

// Consultar solamente los registros de la página actual
$vSql = "SELECT * FROM ciudades LIMIT $inicio, $Cant_por_Pag";

$vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));

echo "Número de registros encontrados: " . $total_registros . "<br>";
echo "Se muestran páginas de " . $Cant_por_Pag . " registros cada una.<br>";
echo "Mostrando la página " . $pagina . " de " . $total_paginas . "<p>";

?>

<h2>Listado de ciudades con paginación</h2>

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

    mysqli_free_result($vResultado);
    mysqli_close($link);

    ?>

</table>

<?php

// Mostrar los enlaces para cambiar de página
if ($total_paginas > 1) {

    echo "<p>";

    for ($i = 1; $i <= $total_paginas; $i++) {

        if ($pagina == $i) {
            echo $i . " ";
        } else {
            echo "<a href='Listado_pag.php?pagina=" . $i . "'>" . $i . "</a> ";
        }

    }

    echo "</p>";
}

?>

<p><a href="Menu.html">Volver al menú del ABML</a></p>

</body>
</html>
