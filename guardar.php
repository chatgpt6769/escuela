
<?php
require_once "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST["nombre"] ?? "");
    $apellido = trim($_POST["apellido"] ?? "");

    if (
        $nombre === "" ||
        $apellido === "" ||
        mb_strlen($nombre) > 150 ||
        mb_strlen($apellido) > 150
    ) {
        die("Ingresa un nombre y apellido válidos.");
    }

    $sql = "INSERT INTO alumnos (nombre, apellido) VALUES (?, ?)";

    $stmt = $conexion->prepare($sql);

    $stmt->bind_param("ss", $nombre, $apellido);

    if ($stmt->execute()) {
        echo "<h2>¡Alumno registrado correctamente!</h2>";
        echo '<a href="pipi.php">Registrar otro alumno</a>';
    } else {
        echo "Error al guardar el alumno: " . $stmt->error;
    }

    $stmt->close();

} else {
    echo "Acceso no permitido.";
}

$conexion->close();
?>
