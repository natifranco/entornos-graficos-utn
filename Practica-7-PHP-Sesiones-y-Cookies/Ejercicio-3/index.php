
<?php

// Verificar si se envió el formulario
if (isset($_POST['usuario'])) {

    $usuario = trim($_POST['usuario']);

    if ($usuario != "") {

        // Crear una cookie con el nombre ingresado
        setcookie("usuario", $usuario, time() + (86400 * 30), "/");

    }

    // Recargar la página para actualizar la cookie
    header("Location: index.php");
    exit;
}

// Recuperar el último usuario guardado
$ultimoUsuario = isset($_COOKIE['usuario']) ? $_COOKIE['usuario'] : "";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Recordar usuario</title>
</head>

<body>

    <h1>Ingreso de usuario</h1>

    <?php if ($ultimoUsuario != "") { ?>

        <p>El último usuario ingresado fue:
            <strong><?php echo htmlspecialchars($ultimoUsuario); ?></strong>
        </p>

    <?php } else { ?>

        <p>Todavía no se ingresó ningún usuario.</p>

    <?php } ?>

    <form method="POST" action="index.php">

        <label for="usuario">Nombre de usuario:</label>

        <input type="text" name="usuario" id="usuario" required>

        <input type="submit" value="Guardar usuario">

    </form>

</body>
</html>
