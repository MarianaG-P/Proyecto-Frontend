<header>
        <!-- <a href="#" class="logo">Sabor</a> -->
        <div class="bx bx-menu" id="menu-icon"><i class="fa-solid fa-bars" style="color: #ffffff;"></i></div>
        <ul class="navbar">
            <li><a href="index.php#home">Inicio</a></li>
            <li><a href="index.php#about">Conócenos</a></li>
            <li><a href="index.php#menu">Productos</a></li>
            <li><a href="index.php#services">Servicios</a></li>
        </ul>

        <form class="form-h">
            <input type="text" placeholder="Lechuga freca...">
            <button type="submit"><i class="fa-solid fa-magnifying-glass fa-sm" style="color: #ffffff;"></i></button>
        </form>
        <?php
        session_start();

        if (isset($_SESSION['usuario'])) {
            #La sesión está activa, el usuario ha iniciado sesión
            $textoBoton = 'Salir';
            $urlBoton = 'index.php?logout=1';
            $user_name = 'Hola '.$_SESSION['usuario'];
            #session_destroy();
        } else {
            #La sesión no está activa, el usuario no ha iniciado sesión
            $textoBoton = 'Ingresar';
            $urlBoton = 'login.php';
            $user_name = 'Hola, inicia sesión';
        }
        if (isset($_GET['logout']) == 1) {
            #cierre de sesión
            session_destroy();
            header('Location: index.php');
            exit();
        }
        ?>
        <div class="icons">
            <a href="#"><i class="fa-solid fa-cart-shopping fa-lg"></i></a>
            <span id="cart-count" class="badge bg-secondary"></span>
            <a href="#"><i class="fa-regular fa-circle-user fa-lg"></i></a>
            <div class="info-nombre"><?php echo $user_name; ?></div>
        </div>        
        <a href="<?php echo $urlBoton; ?>" class="button_ingresar"><?php echo $textoBoton; ?></a>
    </header>