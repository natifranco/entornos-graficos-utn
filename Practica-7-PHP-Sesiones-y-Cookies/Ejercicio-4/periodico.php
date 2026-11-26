<?php

if (isset($_POST['titular'])) {

    $opciones = ['politica', 'economica', 'deportiva'];

    if (in_array($_POST['titular'], $opciones)) {
        setcookie('titular', $_POST['titular'], time() + (30 * 24 * 60 * 60), '/');
    }

    header('Location: periodico.php');
    exit;
}

$titular = $_COOKIE['titular'] ?? '';

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>El Diario</title>
</head>

<body>

    <h1>El Diario</h1>

    <?php if ($titular === 'politica') { ?>

        <h2>Noticias políticas</h2>
        <p>El gobierno anunció nuevas medidas para impulsar el desarrollo del país.</p>

    <?php } elseif ($titular === 'economica') { ?>

        <h2>Noticias económicas</h2>
        <p>El mercado registró cambios importantes durante la última jornada.</p>

    <?php } elseif ($titular === 'deportiva') { ?>

        <h2>Noticias deportivas</h2>
        <p>Los equipos se preparan para una nueva fecha del campeonato.</p>

    <?php } else { ?>

        <h2>Noticias políticas</h2>
        <p>El gobierno anunció nuevas medidas para impulsar el desarrollo del país.</p>

        <h2>Noticias económicas</h2>
        <p>El mercado registró cambios importantes durante la última jornada.</p>

        <h2>Noticias deportivas</h2>
        <p>Los equipos se preparan para una nueva fecha del campeonato.</p>

    <?php } ?>

    <hr>

    <p><a href="index.php">Cambiar preferencias</a></p>

    <p><a href="borrar_cookie.php">Borrar preferencia guardada</a></p>

</body>
</html>
