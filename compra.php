<?php
// Incluir la conexión a la base de datos
include 'includes/db_connect.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra de Entradas - Parque Acuático</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <header>
        <h1>Compra de Entradas y Servicios</h1>
    </header>

    <section id="compra">
        <form action="procesar_compra.php" method="POST">
            <label>Nombre Completo:</label>
            <input type="text" name="nombre" required>

            <label>Entradas Adulto ($180 c/u):</label>
            <input type="number" name="adultos" min="0" value="0">

            <label>Entradas Niño ($120 c/u):</label>
            <input type="number" name="ninos" min="0" value="0">

            <label>Espacio para casa de campaña ($350/noche):</label>
            <input type="number" name="camping" min="0" value="0">

            <label>Cabaña para 4 personas ($2500):</label>
            <input type="number" name="cabana_4" min="0" value="0">

            <label>Cabaña para 6 personas ($3000):</label>
            <input type="number" name="cabana_6" min="0" value="0">

            <label>Sillas ($30 c/u):</label>
            <input type="number" name="sillas" min="0" value="0">

            <label>Mesas ($50 c/u):</label>
            <input type="number" name="mesas" min="0" value="0">

            <label>Sombrillas ($50 c/u):</label>
            <input type="number" name="sombrillas" min="0" value="0">

            <button type="submit">Realizar Compra</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2025 Parque Acuático. Todos los derechos reservados.</p>
    </footer>

</body>
</html>
