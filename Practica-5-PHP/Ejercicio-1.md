<?php

$destinatario = "destinatario@ejemplo.com";
$asunto = "Correo de prueba";

$cuerpo = "
<html>
<head>
    <title>Correo HTML</title>
</head>
<body>
    <h1>Hola!</h1>
    <p>Este es un correo electrónico enviado desde PHP.</p>
    <p><b>Mensaje de prueba con formato HTML.</b></p>
</body>
</html>
";

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

mail($destinatario, $asunto, $cuerpo, $headers);

?>

Explicación

La función mail() permite enviar correos electrónicos desde PHP.

Se definen cuatro elementos:

$destinatario: dirección de correo que recibirá el mensaje.

$asunto: título del correo.

$cuerpo: contenido del mensaje, escrito con etiquetas HTML.

$headers: encabezados que indican que el mensaje tiene formato HTML y utiliza codificación UTF-8.

Finalmente, se utiliza mail() para enviar el correo a través del servidor.

Para que funcione, PHP debe tener configurado un servidor de correo.
