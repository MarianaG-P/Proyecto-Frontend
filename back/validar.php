<?php

include '../db/conexion.php';

if (isset($_POST['inicio'])) {
    $correo = $_POST['correo'];
    $contra = $_POST['contra'];
    $contra_enc = base64_encode($contra);

    if (empty($_POST['correo']) or empty($_POST['contra'])) {
        $error_message = 'Uno de los campos está vacío';
        header('Location: ../login.php?error_ingreso=' . urlencode($error_message));
        exit();
    } else {
        $consulta = mysqli_query($conexion, "SELECT nombre, correo, clave from usuarios 
        where correo = '$correo' AND clave = '$contra_enc'");
        #Consulta para traer el nombre del usuario
        /*$consultaNombre = mysqli_query($conexion, "SELECT nombre FROM usuarios WHERE correo = '$correo' AND clave = '$contra_enc'");*/
        $nombreUsuario = mysqli_fetch_assoc($consulta);
        #$nombreUsuario = $row['nombre'];

        $cant = mysqli_num_rows($consulta);

        if ($cant == 1) {
            header('location:../index.php');
            session_start();
            $_SESSION['usuario'] = $nombreUsuario['nombre'];
        } else {
            $error_message = 'El correo o la clave son incorrectas';
            header('Location: ../login.php?error_ingreso=' . urlencode($error_message));
            exit();
            #header('location:../login.php');
        }
    }
}

?>