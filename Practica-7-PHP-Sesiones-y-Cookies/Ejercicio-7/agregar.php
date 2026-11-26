<?php

session_start();

require_once 'conexion.inc';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {

    $id = (int) $_POST['id'];

    $consulta = mysqli_prepare(
        $conexion,
        "SELECT id, producto, precio FROM catalogo WHERE id = ?"
    );

    mysqli_stmt_bind_param($consulta, "i", $id);
    mysqli_stmt_execute($consulta);

    $resultado = mysqli_stmt_get_result($consulta);
    $producto = mysqli_fetch_assoc($resultado);

    if ($producto) {

        if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = [];
        }

        $_SESSION['carrito'][] = $producto;
    }

    header('Location: carrito.php');
    exit;
}

header('Location: index.php');
exit;

?>
