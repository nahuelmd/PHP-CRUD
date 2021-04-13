<!DOCTYPE html>
<html>
<head>
    <title>CRUD</title>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" type="text/css" href="estilos2.css"> -->
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/crud.css">
    <link rel="stylesheet" href="/css/botonera_por_usuario.css">
</head>

<body>
    <main class="container">
         <?php include("header.php"); ?>
        <section>
        <div class="detalle">
			<p>En este ejemplo se utiliza PHP realizar CRUD (Create, Read, Update, Delete) con conexiones a bases de datos. <br> <a target="_blank" href="https://github.com/nahuelmd/PHP-CRUD">Ver código fuente en GitHub</a>  </p>
		</div>
            <h1>Tienda Online</h1>
            <?php
            include("botonera_por_usuario.php");
            require 'clases/BaseDatos.php';
            require 'clases/Producto.php';
            require 'clases/Carrito.php';
            require 'constantes.php';
            $base = new BasedeDatos(SERVIDOR, USUARIO, PASSWORD, BASE);
            $producto = new Productos($base);
            $mostrar_producto = $producto->getProductos();
            ?>

            <table>
                <tr class="titulos">
                    <td>Código</td>
                    <td>Producto</td>
                    <td>Descripcion</td>
                    <td>Precio</td>
                    <td colspan="2">Añadir a Carrito</td>
                </tr>
                <?php
                for ($i = 0; $i < count($mostrar_producto); $i++) { ?>
                <tr>
                    <td>
                        <?php echo $mostrar_producto[$i]['codigo']; ?>
                    </td>
                    <td>
                        <?php echo $mostrar_producto[$i]['producto']; ?>
                    </td>
                    <td>
                        <?php echo $mostrar_producto[$i]['descripcion']; ?>
                    </td>
                    <td>
                        <?php echo $mostrar_producto[$i]['precio']; ?>
                    </td>

                    <td><a
                            href="comprarsql.php?codigo=<?php echo $mostrar_producto[$i]['codigo']; ?>&nombre=<?php echo $mostrar_producto[$i]['producto'] ?> &descripcion=<?php echo $mostrar_producto[$i]['descripcion'] ?> &precio=<?php echo $mostrar_producto[$i]['precio'] ?>"><button
                                type="button" class="btn btn-info">Añadir a Carrito</button></a></td>
                </tr>
                <?php } ?>
            </table>
        </section>
    </main>
    <?php include("footer.php"); ?>
</body>

</html>