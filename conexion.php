<?php
$servername = "localhost";
$username = "usuario";
$password = "contraseña";
$dbname = "mi_app";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
