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
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            background-color: #e0f7ff;
            /* Azul claro */
        }

        /* Encabezado */
        header {
            background: url('header.jpg') no-repeat center;
            background-size: cover;
            color: white;
            padding: 40px 0;
        }

        /* Sección del formulario */
        section#compra {
            padding: 40px 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
            width: 80%;
            max-width: 800px;
            margin: auto;
        }

        section#compra form {
            display: grid;
            gap: 15px;
            margin-top: 20px;
        }

        /* Campos del formulario */
        label {
            font-size: 18px;
            color: #007bff;
            /* Azul */
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #007bff;
            /* Azul */
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="number"] {
            max-width: 150px;
            margin: 0 auto;
        }

        /* Botón de enviar */
        button {
            background: #007bff;
            /* Azul */
            color: white;
            padding: 15px 30px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
        }

        button:hover {
            background: #0056b3;
            /* Azul más oscuro */
        }

        /* Pie de página */
        footer {
            background: #222;
            color: white;
            padding: 20px;
            margin-top: 40px;
        }

        h1{
            color: #0056b3;
        }
    </style>
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