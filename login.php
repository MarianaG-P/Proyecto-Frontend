<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3155ac22a3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style_login.css">
    <link rel="shortcut icon" href="img/lettuce.ico" type="image/x-icon">
    <title>Greeny</title>
</head>
<body>
    <?php include 'logo_component.php'; ?>  
    <section class="register" id="register">
        <div class="container <?php echo (isset($_GET['error'])) ? 'right-panel-active' : ''; ?>" id="container">
            <div class="form-container sign-up-container ">
                <form action="back/register.php" method="POST">
                    <h1>Crear Cuenta</h1>
                    <div class="social-container" style="margin: 0 !important;">
                        <h1>Greeny</h1>
                    </div>
                    <?php
                        if (isset($_GET['error'])) {
                            $error_message = $_GET['error'];
                            echo '<p class="error-message" style=" color: #721c24;
                            background-color: #f8d7da;
                            border-color: #f5c6cb;
                            border-radius: 10px;
                            padding: 8px 22px;
                            font-weight: 400;">' . htmlspecialchars($error_message) . '</p>';
                        }
                        if (isset($_GET['registro_exitoso'])) {
                            echo '<script>alert("Registro exitoso, ahora inicie sesión");</script>';
                        }
                    ?>              
                    <span>Use el siguiente formulario para realizar el registro</span>
                    <input type="text" name="nombre" placeholder="Digite Nombre" />
                    <input type="email" name="correo" placeholder="Digite Email" />
                    <input type="password" name="contra" placeholder="Contraseña" />
                    <button type="submit" name="registro">Registrarse</button>
                </form>
            </div>                        
            <div class="form-container sign-in-container">
                <form action="back/validar.php" method="POST">
                    <h1>Iniciar Sesión</h1>
                    <div class="social-container" style="margin: 0 !important;">
                        <h1>Greeny</h1>
                    </div>
                    <?php
                        if (isset($_GET['error_ingreso'])) {
                            $error_message = $_GET['error_ingreso'];
                            echo '<p class="error-message" style="color: #721c24;
                            background-color: #f8d7da;
                            border-color: #f5c6cb;
                            border-radius: 10px;
                            padding: 8px 22px;
                            font-weight: 400;">' . htmlspecialchars($error_message) . '</p>';
                        }
                    ?>  
                    <span>Ingrese su cuenta</span>
                    <input type="email" name="correo" placeholder="Email" />
                    <input type="password" name="contra" placeholder="Password" />
                    <button type="submit" name="inicio">Ingresar</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Bienvenido de nuevo</h1>
                        <p>Si ya cuenta con un registro, ingrese al apartado de inicio de sesion</p>
                        <button class="ghost" id="signIn">Iniciar Sesión</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Bienvenidos</h1>
                        <p>Ingrese sus datos personales para el registro</p>
                        <button class="ghost" id="signUp">Registrarse</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/script.js"></script>
</body>
</html>