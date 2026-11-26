
<?php

// Guardar el estilo seleccionado mediante una cookie
if (isset($_POST['estilo'])) {

    $estilosPermitidos = ['estilo1', 'estilo2', 'estilo3'];

    if (in_array($_POST['estilo'], $estilosPermitidos, true)) {
        setcookie("estilo", $_POST['estilo'], time() + (86400 * 30), "/");
    }

    header("Location: index.php");
    exit;
}

// Recuperar el estilo guardado
$estilo = isset($_COOKIE['estilo']) ? $_COOKIE['estilo'] : 'estilo1';

$estilosPermitidos = ['estilo1', 'estilo2', 'estilo3'];

if (!in_array($estilo, $estilosPermitidos, true)) {
    $estilo = 'estilo1';
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Configuración de estilos</title>
    <link rel="stylesheet" href="<?php echo $estilo; ?>.css">
</head>

<body>

    <h1>Mi página personalizada</h1>

    <p>Elegí el estilo que querés utilizar:</p>

    <form method="POST" action="index.php">

        <label>
            <input type="radio" name="estilo" value="estilo1">
            Estilo 1
        </label>

        <br>

        <label>
            <input type="radio" name="estilo" value="estilo2">
            Estilo 2
        </label>

        <br>

        <label>
            <input type="radio" name="estilo" value="estilo3">
            Estilo 3
        </label>

        <br><br>

        <input type="submit" value="Guardar estilo">

    </form>

    <p>El estilo elegido se recordará en tus próximas visitas.</p>

</body>
</html>
