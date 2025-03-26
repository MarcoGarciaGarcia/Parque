<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
require '../includes/db_connect.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<h2>Ventas Registradas</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Cliente</th>
        <th>Adultos</th>
        <th>Niños</th>
        <th>Total</th>
        <th>Fecha</th>
        <th>Ticket</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM ventas ORDER BY fecha DESC");
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nombre']}</td>
                <td>{$row['adultos']}</td>
                <td>{$row['ninos']}</td>
                <td>$ {$row['total']}</td>
                <td>{$row['fecha']}</td>
                <td><a href='../tickets/ticket_{$row['id']}.pdf' target='_blank'>Ver Ticket</a></td>
              </tr>";
    }
    ?>
</table>

<a href="logout.php">Cerrar Sesión</a>

</body>
</html>
