<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parque Acuático - Inicio</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <header>
        <h1>Bienvenido al Parque Acuático</h1>
        <p>Disfruta de un día increíble con nosotros</p>
    </header>

    <nav>
        <ul>
            <li><a href="#atracciones">Atracciones</a></li>
            <li><a href="#precios">Precios</a></li>
            <li><a href="#compra">Compra</a></li>
            <li><a href="admin_login.php">Admin</a></li>
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
