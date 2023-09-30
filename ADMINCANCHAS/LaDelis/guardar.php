<?php
// Incluir el archivo de conexión
include 'conexion.php';

// Obtener los valores del formulario
$cancha = $_POST['cancha'];
$fecha = $_POST['fecha'];
$hora_inicio = $_POST['hora_inicio'];
$hora_fin = $_POST['hora_fin'];
$nombre_completo = $_POST['nombre_completo'];
$mensaje = $_POST['mensaje'];

// Preparar la consulta SQL
$sql = "INSERT INTO reservas (cancha, fecha, hora_inicio, hora_fin, nombre_completo, mensaje) VALUES ('$cancha', '$fecha', '$hora_inicio', '$hora_fin', '$nombre_completo', '$mensaje')";

// Ejecutar la consulta SQL
if ($conn->query($sql) === TRUE) {
  echo "Reserva guardada exitosamente";
} else {
  echo "Error al guardar reserva: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
