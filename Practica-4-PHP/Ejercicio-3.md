## Ejercicio 3: Análisis de códigos PHP

### a) Generación de una tabla HTML mediante PHP

#### Código del enunciado

```php
<html>
<head>
    <title>Documento 1</title>
</head>
<body>
<?php
    echo "<table width='90%' border='1'>";
    $row = 5;
    $col = 2;

    for ($r = 1; $r <= $row; $r++) {
        echo "<tr>";

        for ($c = 1; $c <= $col; $c++) {
            echo "<td>&nbsp;</td>\n";
        }

        echo "</tr>\n";
    }

    echo "</table>\n";
?>
</body>
</html>
```

#### ¿Para qué se utiliza?

Este código genera dinámicamente una tabla HTML de 5 filas y 2 columnas utilizando estructuras repetitivas `for`.

#### Explicación paso a paso

1. Se utiliza `echo` para comenzar a imprimir la etiqueta `<table>`, que representa una tabla HTML.
2. Se declaran dos variables:
   - `$row = 5`: indica la cantidad de filas.
   - `$col = 2`: indica la cantidad de columnas.
3. El primer ciclo `for` recorre las filas desde 1 hasta 5.
4. En cada iteración se imprime `<tr>`, que inicia una fila.
5. Dentro del primer ciclo se encuentra otro `for`, que recorre las columnas desde 1 hasta 2.
6. En cada iteración del ciclo interno se imprime `<td>&nbsp;</td>`, que crea una celda vacía.
7. Cuando termina el ciclo interno, se imprime `</tr>` para cerrar la fila.
8. Finalmente, se imprime `</table>` para cerrar la tabla.

#### Resultado

Se obtiene una tabla con:

- 5 filas.
- 2 columnas.
- 10 celdas vacías en total.
- Un borde de 1 píxel.
- Un ancho del 90%.

La estructura generada será:

| Celda 1 | Celda 2 |
|---|---|
| Vacía | Vacía |
| Vacía | Vacía |
| Vacía | Vacía |
| Vacía | Vacía |
| Vacía | Vacía |

**Conclusión:** el código permite generar una tabla HTML automáticamente utilizando dos ciclos `for` anidados. El ciclo externo controla las filas y el interno controla las columnas.

---

### b) Formulario para ingresar una edad y determinar si es mayor o menor de edad

#### Código del enunciado

```php
<html>
<head>
    <title>Documento 2</title>
</head>
<body>
<?php
    if (!isset($_POST['submit'])) {
?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            Edad: <input name="age" size="2">
            <input type="submit" name="submit" value="Ir">
        </form>
<?php
    }
    else {
        $age = $_POST['age'];

        if ($age >= 21) {
            echo 'Mayor de edad';
        }
        else {
            echo 'Menor de edad';
        }
    }
?>
</body>
</html>
```

#### ¿Para qué se utiliza?

Este código presenta un formulario que solicita al usuario ingresar su edad y, después de enviarlo, determina si es mayor o menor de edad según el límite establecido de 21 años.

#### Explicación paso a paso

**1. Comprobación de si se envió el formulario**

```php
if (!isset($_POST['submit'])) {
```

La función `isset()` comprueba si una variable está definida.

En este caso, verifica si existe el dato `submit` dentro del arreglo `$_POST`.

El operador `!` significa negación. Por lo tanto, si el formulario todavía no fue enviado, se muestra el formulario.

**2. Presentación del formulario**

```html
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Edad: <input name="age" size="2">
    <input type="submit" name="submit" value="Ir">
</form>
```

- `<form>` crea el formulario.
- `action` indica dónde se enviarán los datos.
- `$_SERVER['PHP_SELF']` indica que los datos se envían al mismo archivo PHP.
- `method="post"` establece que los datos se enviarán mediante el método POST.
- `input name="age"` permite ingresar la edad.
- `input type="submit"` crea el botón para enviar el formulario.

**3. Recepción del dato**

```php
$age = $_POST['age'];
```

Cuando el usuario envía el formulario, PHP recibe el valor ingresado mediante el arreglo superglobal `$_POST` y lo almacena en la variable `$age`.

**4. Evaluación de la edad**

```php
if ($age >= 21) {
    echo 'Mayor de edad';
}
else {
    echo 'Menor de edad';
}
```

Se utiliza una estructura condicional:

- Si la edad es mayor o igual a 21, muestra «Mayor de edad».
- Si la edad es menor a 21, muestra «Menor de edad».

#### Ejemplo de funcionamiento

| Edad ingresada | Resultado |
|---|---|
| 18 | Menor de edad |
| 20 | Menor de edad |
| 21 | Mayor de edad |
| 25 | Mayor de edad |

