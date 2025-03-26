<?php
session_start();
require '../includes/db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT password FROM admins WHERE usuario = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hash);
        $stmt->fetch();

        if (hash('sha256', $password) === $hash) {
            $_SESSION['admin'] = $usuario;
            header("Location: panel.php");
            exit;
        } else {
            $error = "Contraseña incorrecta.";
        }
    } else {
        $error = "Usuario no encontrado.";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f7ff;
            /* Azul claro */
            text-align: center;
            margin: 0;
            padding: 0;
        }

        /* Contenedor del formulario */
        h2 {
            color: #0056b3;
            /* Azul oscuro */
            margin-top: 50px;
        }

        form {
            background-color: #ffffff;
            max-width: 300px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        /* Campos de entrada */
        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #007bff;
            /* Azul */
            border-radius: 5px;
            font-size: 16px;
        }

        /* Botón de enviar */
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            /* Azul */
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
            /* Azul más oscuro */
        }

        /* Mensajes de error */
        p {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h2>Iniciar Sesión</h2>
    <?php if (isset($error))
        echo "<p style='color:red'>$error</p>"; ?>
    <form method="POST">
        <input type="text" name="usuario" placeholder="Usuario" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit">Ingresar</button>
    </form>
</body>

</html>