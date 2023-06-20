<?php

include 'db/conexion.php';
$conexion = new mysqli($host, $usuario, $contraseña, $basedatos);
if ($conexion->connect_errno) {
    echo "fallos en conexión";
    exit();
}
#$consulta_productos = mysqli_query($conexion, "SELECT id, nombre, categoria, precio FROM productos");
#$resultado = $consulta_productos->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3155ac22a3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/products.css" class="stylesheet">
    <link rel="shortcut icon" href="img/lettuce.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Greeny - Conócenos</title>
</head>

<body>

    <?php include 'logo_component.php'; ?>
    <?php include 'header_component.php'; ?>

    <!--------------- Menu --------------------->
    <section class="menu" id="frutas">
        <div class="heading">
            <h2>Frutas</h2>
        </div>
        <div class="slider">
            <?php
            $consulta_frutas = mysqli_query($conexion, "SELECT id, nombre, categoria, precio, imagen FROM productos WHERE categoria = 'Frutas' ");
            $resultado_frutas = $consulta_frutas->fetch_all(MYSQLI_ASSOC);
            foreach ($resultado_frutas as $row) { ?>
            <div class="slide">
                <?php
                $id = $row['id'];
                $nombre = $row['nombre'];
                $precio = $row['precio'];
                $categoria = $row['categoria'];
                $imagen = $row['imagen'];
                #Array colores para contenedor
                $colores = array('rgba(196, 220, 220, 0.72);', 'rgba(255, 205, 121, 0.73);', 'rgba(240, 193, 166, 0.73);');
                $color_aleatorio = $colores[array_rand($colores)];
                ?>
                <div class="box-i fruit" style="background-color: <?php echo $color_aleatorio; ?>">
                    <div class="box-img-i">
                        <img src="<?php echo $imagen; ?>" alt="">
                    </div>
                    <h2>
                        <?php echo $nombre; ?>
                    </h2>
                    <h3>
                        <?php echo $categoria; ?>
                    </h3>
                    <span>$
                        <?php echo number_format($precio, 1, ',', '.') ?> c/u
                    </span>                    
                    <a class="button-link" data-product-id="<?php echo $id; ?>"><i
                            class="fa-solid fa-cart-shopping fa-lg"></i></a>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="buttons">
            <button class="prev-btn"><i class="fa-solid fa-circle-arrow-right fa-rotate-180"></i></button>
            <button class="next-btn"><i class="fa-solid fa-circle-arrow-right"></i></button>

        </div>
    </section>
    <section class="menu" id="verduras">
        <div class="heading">
            <h2>Verduras</h2>
        </div>
        <div class="slider">
            <?php
            $consulta_verduras = mysqli_query($conexion, "SELECT id, nombre, categoria, precio, imagen FROM productos WHERE categoria = 'Verduras' ");
            $resultado_verduras = $consulta_verduras->fetch_all(MYSQLI_ASSOC);
            foreach ($resultado_verduras as $row) { ?>
            <div class="slide">
                <?php
                $id = $row['id'];
                $nombre = $row['nombre'];
                $precio = $row['precio'];
                $categoria = $row['categoria'];
                $imagen = $row['imagen'];
                ?>
                <div class="box-i color-orange fruit">
                    <div class="box-img-i">
                        <img src="<?php echo $imagen; ?>" alt="">
                    </div>
                    <h2>
                        <?php echo $nombre; ?>
                    </h2>
                    <h3>
                        <?php echo $categoria; ?>
                    </h3>
                    <span>$
                        <?php echo number_format($precio, 1, ',', '.') ?> c/u
                    </span>
                    <a class="button-link" data-product-id="<?php echo $id; ?>"><i
                            class="fa-solid fa-cart-shopping fa-lg"></i></a>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="buttons">
            <button class="prev-btn"><i class="fa-solid fa-circle-arrow-right fa-rotate-180"></i></button>
            <button class="next-btn"><i class="fa-solid fa-circle-arrow-right"></i></button>
        </div>
    </section>
    <section class="menu" id="otros">
        <div class="heading">
            <h2>Otros</h2>
        </div>
        <div class="slider">
            <?php
            $consulta_otros = mysqli_query($conexion, "SELECT id, nombre, categoria, precio, imagen FROM productos WHERE categoria = 'Otros' ");
            $resultado_otros = $consulta_otros->fetch_all(MYSQLI_ASSOC);
            foreach ($resultado_otros as $row) { ?>
            <div class="slide">
                <?php
                $id = $row['id'];
                $nombre = $row['nombre'];
                $precio = $row['precio'];
                $categoria = $row['categoria'];
                $imagen = $row['imagen'];

                ?>
                <div class="box-i color-orange fruit">
                    <div class="box-img-i">
                        <img src="<?php echo $imagen; ?>" alt="">
                    </div>
                    <h2>
                        <?php echo $nombre; ?>
                    </h2>
                    <h3>
                        <?php echo $categoria; ?>
                    </h3>
                    <span>$
                        <?php echo number_format($precio, 1, ',', '.'); ?> c/u
                    </span>
                    <a class="button-link" data-product-id="<?php echo $id; ?>"><i
                            class="fa-solid fa-cart-shopping fa-lg"></i></a>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="buttons">
            <button class="prev-btn"><i class="fa-solid fa-circle-arrow-right fa-rotate-180"></i></button>
            <button class="next-btn"><i class="fa-solid fa-circle-arrow-right"></i></button>
        </div>
    </section>
    <script src="js/slider.js"></script>
    
<script src="js/cart_counter.js"></script>

</body>

</html>