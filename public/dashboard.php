<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Redirigir a iniciar sesión si no está autenticado
    exit();
}

// Aquí puedes agregar la lógica para mostrar información personalizada para el usuario
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Vida Saludable</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

    <header>
        <h1>Bienvenido a tu Panel</h1>
        <p>Has iniciado sesión exitosamente.</p>
    </header>

    <nav>
        <ul>
            <li><a href="pages/alimentacion.php">Alimentación Saludable</a></li>
            <li><a href="pages/ejercicio.php">Ejercicio Físico</a></li>
            <li><a href="pages/salud_mental.php">Salud Mental</a></li>
        </ul>
    </nav>

    <a href="logout.php">Cerrar Sesión</a>

    <footer>
        <p>&copy; 2024 Vida Saludable</p>
    </footer>
</body>
</html>
