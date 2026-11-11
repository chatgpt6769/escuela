
<?php
// esto se debe adecuar para la practica 4
$servidor = "localhost";
$usuario = "root";
$password = "";
$basedatos = "escuela";

$conexion = new mysqli(
    $servidor,
    $usuario,
    $password,
    $basedatos
);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$conexion->set_charset("utf8mb4");
?>
