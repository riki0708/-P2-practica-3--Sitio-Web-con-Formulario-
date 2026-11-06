<?php
$host = "localhost";
$usuario = "root";
$password = "";
$bd = "tienda_ropa";

$conexion = new mysqli($host, $usuario, $password, $bd);

if ($conexion->connect_error) {
    die("Error en la conexion: " . $conexion->connect_error);
}
?>