<?php
require_once 'config.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $consulta = $conexion->prepare("SELECT nombre, password FROM usuarios WHERE email = ?");
    $consulta->bind_param("s", $email);
    $consulta->execute();
    $resultado = $consulta->get_result();

    if ($fila = $resultado->fetch_assoc()) {
        if (password_verify($password, $fila['password'])) {
            echo "<script>alert('Bienvenido " . $fila['nombre'] . "!'); window.location.href='index.php';</script>";
            exit();
        }
    }
    echo "<script>alert('Correo o contrasena incorrectos'); window.location.href='index.php';</script>";
}
?>