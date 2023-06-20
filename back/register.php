<?php

require_once("../db/conexion.php");

if (isset($_POST['registro'])) {
    var_dump($_POST);
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contra = base64_encode($_POST['contra']);

    if (empty($_POST['nombre']) or empty($_POST['correo']) or empty($_POST['contra'])) {
        $error_message = 'Uno de los campos está vacío';
        header('Location: ../login.php?error=' . urlencode($error_message));
        exit();
    } else {
        #var_dump($_POST);
        $correo_existe = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");
        #echo $correo_existe->num_rows;
    
        if ($correo_existe->num_rows == 0) {
            $sql = mysqli_query($conexion, "INSERT INTO usuarios (nombre, correo, clave) VALUES ('$nombre', '$correo', '$contra')");

            if ($sql) {
                echo "Registro exitoso";
                header('Location: ../login.php?registro_exitoso=true');
                exit();
            } else {
                echo "Error al registrar el usuario: " . mysqli_error($conexion);
            }
            header('location:../login.php');            
            mysqli_close($conexion);
        } else {
            $error_message = "El correo ya existe";
            header('Location: ../login.php?error=' . urlencode($error_message));
            exit();
        }
    }
} else {
    echo 'error';
}

?>