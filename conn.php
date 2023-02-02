<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "productos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Revisar conexión
if ($conn->connect_error) {
    die("ERROR DE CONEXIÓN: " . $conn->connect_error);
} 
?>