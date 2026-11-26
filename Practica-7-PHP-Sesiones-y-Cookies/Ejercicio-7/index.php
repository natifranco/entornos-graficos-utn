<?php

require_once 'conexion.inc';

$consulta = "SELECT id, producto, precio FROM catalogo";
$resultado = mysqli_query($conexion, $consulta);

if (!$resultado) {
    die("Error al consultar el catálogo: " . mysqli_error($conexion));
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Catálogo de productos</title>
</head>

<body>

    <h1>Catálogo de productos</h1>

    <?php if (mysqli_num_rows($resultado) > 0) { ?>

        <table border="1" cellpadding="8">

            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Acción</th>
            </tr>

            <?php while ($producto = mysqli_fetch_assoc($resultado)) { ?>

                <tr>
                    <td><?php echo htmlspecialchars($producto['producto']); ?></td>

                    <td>$<?php echo number_format($producto['precio'], 2, ',', '.'); ?></td>

                    <td>
                        <form action="agregar.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
                            <input type="submit" value="Agregar al carrito">
                        </form>
                    </td>
                </tr>

            <?php } ?>

        </table>

    <?php } else { ?>

        <p>No hay productos disponibles en el catálogo.</p>

    <?php } ?>

    <br>

    <a href="carrito.php">Ver carrito de compras</a>

</body>
</html>
