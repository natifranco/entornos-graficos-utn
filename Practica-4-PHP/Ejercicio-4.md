## Ejercicio 4: Inclusión de archivos mediante include

### Código del archivo `datos.php`

```php
<?php
    $color = 'blanco';
    $flor = 'clavel';
?>
```

Este archivo contiene dos variables:

- `$color`, que almacena la cadena `blanco`.
- `$flor`, que almacena la cadena `clavel`.

### Código principal

```php
<?php
    echo "El $flor $color \n";
    include 'datos.php';
    echo " El $flor $color";
?>
```

### Análisis del código

**1. Primer `echo`**

```php
echo "El $flor $color \n";
```

Se intenta mostrar el contenido de las variables `$flor` y `$color`.

Sin embargo, en este momento todavía no fueron definidas, porque el archivo `datos.php` aún no fue incluido.

Por lo tanto, se generan avisos de variables indefinidas (`Undefined variable`) y no se muestran sus valores.

**2. Instrucción `include`**

```php
include 'datos.php';
```

La función `include` incorpora y ejecuta el contenido del archivo `datos.php` en el lugar donde aparece la instrucción.

Como consecuencia, se crean las variables:

```php
$color = 'blanco';
$flor = 'clavel';
```

**3. Segundo `echo`**

```php
echo " El $flor $color";
```

Ahora las variables ya están definidas, por lo que se muestra:

```text
El clavel blanco
```

### Salida por pantalla

La salida esperada, considerando que PHP muestra los avisos de variables indefinidas, es:

```text
 El clavel blanco
```

Antes de ese texto pueden aparecer mensajes de advertencia por el uso de variables no definidas en el primer `echo`.

### Conclusión

La instrucción `include` permite incorporar el contenido de otro archivo PHP dentro del archivo actual.

Es importante tener en cuenta que las instrucciones se ejecutan en orden. Por eso, las variables deben estar definidas antes de utilizarlas.

En este ejercicio, el primer `echo` intenta utilizar variables que todavía no existen, mientras que el segundo funciona correctamente porque el archivo `datos.php` ya fue incluido.
