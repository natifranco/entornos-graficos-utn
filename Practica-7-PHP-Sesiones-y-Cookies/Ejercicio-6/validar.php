<?php

session_start();

require_once 'conexion.inc';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['mail'])) {

    $mail = trim($_POST['mail']);

    $consulta = mysqli_prepare(
        $conexion,
        "SELECT nombre FROM alumnos WHERE mail = ?"
    );

    mysqli_stmt_bind_param($consulta, "s", $mail);
    mysqli_stmt_execute($consulta);

    $resultado = mysqli_stmt_get_result($consulta);

    if ($fila = mysqli_fetch_assoc($resultado)) {

        $_SESSION['nombre'] = $fila['nombre'];

        header('Location: bienvenida.php');
        exit;

    } else {

        unset($_SESSION['nombre']);

        header('Location: index.php?error=1');
        exit;
    }

} else {

    header('Location: index.php');
    exit;
}

?>
