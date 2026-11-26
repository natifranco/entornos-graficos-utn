<?php

session_start();

$carrito = $_SESSION['carrito'] ?? [];

$total = 0;

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Carrito de compras</title>
</head>

<body>

    <h1>Mi carrito de compras</h1>

    <?php if (!empty($carrito)) { ?>

        <table border="1" cellpadding="8">

            <tr>
                <th>Producto</th>
                <th>Precio</th>
            </tr>

            <?php foreach ($carrito as $producto) { ?>

                <tr>
                    <td><?php echo htmlspecialchars($producto['producto']); ?></td>

                    <td>
                        $<?php echo number_format($producto['precio'], 2, ',', '.'); ?>
                    </td>
                </tr>

                <?php $total += $producto['precio']; ?>

            <?php } ?>

        </table>

        <h2>
            Total: $<?php echo number_format($total, 2, ',', '.'); ?>
        </h2>

        <p><a href="vaciar.php">Vaciar carrito</a></p>

    <?php } else { ?>

        <p>El carrito está vacío.</p>

    <?php } ?>

    <p><a href="index.php">Volver al catálogo</a></p>

</body>
</html>
