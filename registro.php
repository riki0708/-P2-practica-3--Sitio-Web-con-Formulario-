<?php
require_once 'config.php';

if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['password'])) {
    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $insertar = $conexion->prepare("INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, ?)");
    $insertar->bind_param("sss", $nombre, $email, $password);

    if ($insertar->execute()) {
        echo "<script>alert('Registro exitoso!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Error: El correo ya existe'); window.location.href='index.php';</script>";
    }
}
?>