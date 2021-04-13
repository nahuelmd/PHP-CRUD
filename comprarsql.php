<?php
require 'clases/BaseDatos.php';
require 'clases/Producto.php';
require 'clases/Carrito.php';
require 'constantes.php';
$base = new BasedeDatos(SERVIDOR, USUARIO, PASSWORD, BASE);
$carrito = new Carrito($base);


$carrito->insertProducto($_GET['codigo'], $_GET['nombre'], $_GET['descripcion'], $_GET['precio']);
header("Location: carrito.php?ok");

