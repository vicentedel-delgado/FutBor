<?php
$servername = 127.0.0.1;
$username = FutBor;
$password = -COco22-;
$dbname = ladelis;

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
