<?php

// Iniciar o recuperar la sesión
session_start();

// Si el contador no existe, inicializarlo en cero
if (!isset($_SESSION["visitas"])) {
    $_SESSION["visitas"] = 0;
}

// Incrementar el contador
$_SESSION["visitas"]++;

// Mostrar la cantidad de páginas visitadas
echo "Cantidad de páginas visitadas durante la sesión: " . $_SESSION["visitas"];

?>

La función session_start() debe ejecutarse antes de enviar contenido HTML al navegador. Para contar las visitas a distintas páginas, el código debe ejecutarse en cada una de ellas o incluirse desde ellas.

El contador se mantiene durante la sesión del usuario.
