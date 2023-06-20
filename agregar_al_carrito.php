<?php
session_start(); // Iniciar la sesión si no se ha iniciado aún

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    $productID = $_POST['product_id'];

    // Aquí puedes realizar las operaciones necesarias para agregar el producto al carrito
    // Por ejemplo, puedes almacenar el ID del producto en la sesión

    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array(); // Crear un array para almacenar los productos del carrito
    }

    // Agregar el ID del producto al carrito
    $_SESSION['carrito'][] = $productID;

    // Obtener el conteo actual del carrito
    $conteoCarrito = count($_SESSION['carrito']);

    // Enviar una respuesta JSON con el resultado y el conteo actual del carrito
    echo json_encode(['success' => true, 'conteo_carrito' => $conteoCarrito]);
} else {
    // Si no se recibió correctamente el ID del producto, devuelve un error
    echo json_encode(['success' => false, 'error' => 'ID del producto no válido']);
}
