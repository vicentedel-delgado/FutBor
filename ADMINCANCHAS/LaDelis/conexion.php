<?php
$servername = "Apache/2.4.56 (Win64) OpenSSL/1.1.1t PHP/8.2.4";  // Comillas dobles
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
