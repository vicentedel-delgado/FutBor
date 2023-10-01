<?php
$servername = "127.0.0.1";  // Comillas dobles
$username = 'FutBor';  // Comillas simples
$password = '-COco22-';  // Comillas simples
$dbname = 'ladelis';  // Comillas simples


// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
