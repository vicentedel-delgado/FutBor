<?php
include('conexion.php');

// Obtener los datos del formulario
$cancha = $_POST['cancha'];
$fecha = $_POST['fecha'];
$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];

// Preparar la consulta SQL para la inserción
$sql = "INSERT INTO clientes (cancha, fecha, nombre, mensaje) 
        VALUES ('$cancha', '$fecha', '$nombre', '$mensaje')";

if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente.";
} else {
    echo "Error al insertar datos: " . $conn->error;
}

$conn->close();
?>
