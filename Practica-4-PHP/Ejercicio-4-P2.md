Análisis de la función

La función comprobar_nombre_usuario($nombre_usuario) verifica si un nombre de usuario es válido.

Para ello realiza las siguientes comprobaciones:

1. Control de longitud

Utiliza strlen() para contar los caracteres de la cadena. El nombre debe tener como mínimo 3 caracteres y como máximo 20.

Si no cumple esta condición, muestra un mensaje indicando que no es válido y devuelve false.

2. Control de caracteres permitidos

La variable $permitidos contiene los caracteres aceptados:

Letras minúsculas.

Letras mayúsculas.

Números del 0 al 9.

Guion -.

Guion bajo _.

3. Recorrido del nombre

Mediante un ciclo for, recorre cada carácter del nombre de usuario.

Utiliza substr() para obtener cada carácter y strpos() para comprobar si se encuentra dentro de la cadena de caracteres permitidos.

El operador === false permite verificar si el carácter no fue encontrado.

4. Resultado

Si el nombre cumple todas las condiciones, muestra que es válido y devuelve true. Si incumple alguna condición, muestra que no es válido y devuelve false.

Script de prueba

<?php

function comprobar_nombre_usuario($nombre_usuario) {

    if (strlen($nombre_usuario) < 3 || strlen($nombre_usuario) > 20) {
        echo $nombre_usuario . " no es válido<br>";
        return false;
    }

    $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";

    for ($i = 0; $i < strlen($nombre_usuario); $i++) {
        if (strpos($permitidos, substr($nombre_usuario, $i, 1)) === false) {
            echo $nombre_usuario . " no es válido<br>";
            return false;
        }
    }

    echo $nombre_usuario . " es válido<br>";
    return true;
}

// Pruebas de funcionamiento
comprobar_nombre_usuario("Natalia_123");
comprobar_nombre_usuario("Na");
comprobar_nombre_usuario("Natalia@123");
comprobar_nombre_usuario("Usuario2026");

?>


Salida esperada

Natalia_123 es válido
Na no es válido
Natalia@123 no es válido
Usuario2026 es válido
