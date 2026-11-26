Se desarrolla una página utilizando HTML y PHP. El formulario permite ingresar el nombre, el correo electrónico y la consulta del visitante.

Cuando se envía el formulario, PHP recibe los datos mediante el método POST y utiliza la función mail() para enviar la consulta al webmaster.


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST["nombre"]);
    $email = trim($_POST["email"]);
    $consulta = trim($_POST["consulta"]);

    if (
        $nombre != "" &&
        filter_var($email, FILTER_VALIDATE_EMAIL) &&
        $consulta != ""
    ) {
        $destinatario = "webmaster@ejemplo.com";
        $asunto = "Nueva consulta desde el sitio web";

        $cuerpo = "
        <html>
        <body>
            <h2>Nueva consulta</h2>
            <p><b>Nombre:</b> " . htmlspecialchars($nombre) . "</p>
            <p><b>Email:</b> " . htmlspecialchars($email) . "</p>
            <p><b>Consulta:</b> " . nl2br(htmlspecialchars($consulta)) . "</p>
        </body>
        </html>
        ";

        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        if (mail($destinatario, $asunto, $cuerpo, $headers)) {
            echo "La consulta fue enviada correctamente.";
        } else {
            echo "No se pudo enviar la consulta.";
        }

    } else {
        echo "Por favor, complete todos los campos correctamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
</head>
<body>

    <h1>Contacto</h1>

    <form method="POST" action="">
        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Correo electrónico:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Consulta:</label><br>
        <textarea name="consulta" required></textarea><br><br>

        <input type="submit" value="Enviar consulta">
    </form>

</body>
</html>


El formulario utiliza el método POST para enviar los datos ingresados por el visitante.

PHP recibe la información mediante $_POST, valida que los campos estén completos y que el correo electrónico tenga un formato correcto.

Luego prepara el mensaje y utiliza la función mail() para enviar la consulta a la dirección del webmaster.

Finalmente, muestra un mensaje indicando si el envío se realizó correctamente o si ocurrió un error.

Para que el envío funcione, el servidor debe tener configurado un servicio de correo.
