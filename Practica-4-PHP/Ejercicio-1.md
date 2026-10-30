# Práctica N.º 4 — PHP

## Ejercicio 1: Variables, tipos, operadores y estructuras de control

### Código del enunciado

```php
<?php
function doble($i) {
    return $i*2;
}

$a = TRUE;
$b = "xyz";
$c = 'xyz';
$d = 12;

echo gettype($a);
echo gettype($b);
echo gettype($c);
echo gettype($d);

if (is_int($d)) {
    $d += 4;
}

if (is_string($a)) {
    echo "Cadena: $a";
}

$d = $a ? ++$d : $d*3;
$f = doble($d++);
$g = $f += 10;

echo $a, $b, $c, $d, $f, $g;
?>
```

### 1. Variables y sus tipos

| Variable | Valor inicial | Tipo |
|---|---|---|
| `$a` | `TRUE` | Booleano (`bool`) |
| `$b` | `"xyz"` | Cadena (`string`) |
| `$c` | `'xyz'` | Cadena (`string`) |
| `$d` | `12` | Entero (`int`) |

Posteriormente se crean:

- `$f`: almacena el resultado de la función `doble()`.
- `$g`: almacena el resultado de una asignación combinada con suma.

### 2. Operadores utilizados

- `*`: multiplicación.
- `+=`: suma y asignación.
- `++`: incremento en uno.
- `?:`: operador ternario, permite elegir entre dos expresiones según una condición.
- `=`: asignación.
- `==`: comparación de igualdad (no aparece en este código).
- `()` : agrupación y llamada a funciones.

### 3. Funciones y parámetros

**Función `doble($i)`**

Recibe un parámetro llamado `$i`, lo multiplica por dos y devuelve el resultado mediante `return`.

También se utilizan las siguientes funciones incorporadas de PHP:

- `gettype()`: devuelve el tipo de una variable.
- `is_int()`: comprueba si una variable es de tipo entero.
- `is_string()`: comprueba si una variable es una cadena.

### 4. Estructuras de control

**Primer condicional:**

```php
if (is_int($d)) {
    $d += 4;
}
```

Comprueba si `$d` es un entero. Como inicialmente vale 12, la condición es verdadera y se le suman 4 unidades. Por lo tanto, `$d` pasa a valer 16.

**Segundo condicional:**

```php
if (is_string($a)) {
    echo "Cadena: $a";
}
```

Comprueba si `$a` es una cadena. Como `$a` contiene el valor booleano `TRUE`, la condición es falsa y no se ejecuta el `echo`.

**Operador ternario:**

```php
$d = $a ? ++$d : $d*3;
```

Como `$a` es verdadero, se ejecuta `++$d`. La variable `$d` aumenta de 16 a 17.

### 5. Resolución paso a paso

**Primero: ejecución de los `echo gettype()`**

Se muestran los tipos de las variables:

```text
booleanstringstringinteger
```

**Segundo: ejecución de los condicionales**

- `$d` es entero, entonces pasa de 12 a 16.
- `$a` no es una cadena, por lo que no se imprime «Cadena: TRUE».

**Tercero: operador ternario**

Como `$a` es verdadero, se incrementa `$d`:

```text
$d = 17
```

**Cuarto: llamada a la función**

```php
$f = doble($d++);
```

Se utiliza el valor actual de `$d` (17) como argumento de la función. Como el incremento es posterior, primero se calcula el resultado y luego se incrementa `$d`.

La función realiza:

```text
17 * 2 = 34
```

Por lo tanto:
- `$f = 34`
- `$d = 18`

**Quinto: asignación combinada**

```php
$g = $f += 10;
```

Se suman 10 unidades a `$f` y el resultado se asigna también a `$g`.

- `$f = 44`
- `$g = 44`

### 6. Salida final por pantalla

El último `echo` imprime las variables en el siguiente orden:

| Variable | Valor |
|---|---|
| `$a` | `1` |
| `$b` | `xyz` |
| `$c` | `xyz` |
| `$d` | `18` |
| `$f` | `44` |
| `$g` | `44` |

La salida completa del programa es:

```text
booleanstringstringinteger1xyzxyz184444
```

