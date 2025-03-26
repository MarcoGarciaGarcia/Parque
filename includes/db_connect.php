<?php
$host = "localhost";
$user = "root"; // Cambiar si usas otro usuario
$password = "";
$dbname = "parque_acuatico";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
