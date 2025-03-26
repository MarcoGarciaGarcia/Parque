<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parque Acuático - Inicio</title>
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

        /* Navegación */
        nav ul {
            background: #0056b3;
            /* Azul oscuro */
            padding: 10px;
            list-style: none;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        /* Sección */
        section {
            padding: 40px 20px;
        }

        /* Grid de elementos */
        .grid {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .item {
            width: 30%;
        }

        .item img {
            width: 100%;
            border-radius: 10px;
        }

        /* Tabla */
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #007bff;
            /* Azul */
            padding: 10px;
        }

        /* Botón */
        .btn {
            display: inline-block;
            background: #007bff;
            /* Azul */
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 18px;
            border-radius: 5px;
        }

        .btn:hover {
            background: #0056b3;
            /* Azul oscuro */
        }

        h1,h5 {
            color: #0056b3;
            /* Azul oscuro */
        }

        /* Pie de página */
        footer {
            background: #222;
            color: white;
            padding: 20px;
        }
    </style>
</head>

<body>

    <header>
        <h1>Bienvenido al Parque Acuático</h1>
        <h5>Disfruta de un día increíble con nosotros</h5>
    </header>

    <nav>
        <ul>
            <li><a href="#atracciones">Atracciones</a></li>
            <li><a href="#precios">Precios</a></li>
            <li><a href="#compra">Compra</a></li>
            <li><a href="./admin/login.php">Admin</a></li>
        </ul>
    </nav>

    <section id="atracciones">
        <h2>Nuestras Atracciones</h2>
        <div class="grid">
            <div class="item">
                <img src="assets/alberca_olas.jpg" alt="Alberca de Olas">
                <p>Alberca de Olas con Toboganes</p>
            </div>
            <div class="item">
                <img src="assets/lago_natural.jpg" alt="Lago Natural">
                <p>Lago Natural</p>
            </div>
            <div class="item">
                <img src="assets/cabanas.jpg" alt="Cabañas">
                <p>Cabañas para 4 y 6 personas</p>
            </div>
        </div>
        <div class="grid">
            <div class="item">
                <img src="assets/estacionamiento.jpg" alt="Alberca de Olas">
                <p>Estacionamiento</p>
            </div>
            <div class="item">
                <img src="assets/casas.jpg" alt="Lago Natural">
                <p>Casas de campaña</p>
            </div>
            <div class="item">
                <img src="assets/areas.jpg" alt="Cabañas">
                <p>Áreas verdes</p>
            </div>
        </div>
    </section>

    <section id="precios">
        <h2>Precios</h2>
        <table>
            <tr>
                <th>Servicio</th>
                <th>Precio</th>
            </tr>
            <tr>
                <td>Entrada Adulto</td>
                <td>$180</td>
            </tr>
            <tr>
                <td>Entrada Niño</td>
                <td>$120</td>
            </tr>
            <tr>
                <td>Espacio para casa de campaña</td>
                <td>$350 por noche</td>
            </tr>
            <tr>
                <td>Cabaña para 4 personas</td>
                <td>$2500</td>
            </tr>
            <tr>
                <td>Cabaña para 6 personas</td>
                <td>$3000</td>
            </tr>
        </table>
    </section>

    <section id="compra">
        <h2>Compra tu entrada</h2>
        <p>Selecciona los servicios que necesitas y obtén tu ticket</p>
        <a href="compra.php" class="btn">Comprar Ahora</a>
    </section>

    <footer>
        <p>&copy; 2025 Parque Acuático. Todos los derechos reservados.</p>
    </footer>

</body>

</html>