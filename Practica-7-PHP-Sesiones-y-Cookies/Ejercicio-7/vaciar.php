<?php

session_start();

// Elimina todos los productos del carrito.
unset($_SESSION['carrito']);

header('Location: carrito.php');
exit;

?>
