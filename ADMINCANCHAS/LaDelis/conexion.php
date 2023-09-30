<?php
$servername = "localhost"; // Nombre del servidor (puede variar)
$username = "FutBor"; // Nombre de usuario de la base de datos
$password = "-COco22-"; // Contraseña de la base de datos
$dbname = "ladelis"; // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}
?>
