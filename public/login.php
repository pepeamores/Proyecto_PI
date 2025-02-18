<?php
session_start();
require 'db.php';  // Archivo de conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    // Buscar el usuario por correo
    $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    // Verificar la contraseña
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id']; // Guardar el ID del usuario en la sesión
        header('Location: dashboard.php'); // Redirigir al dashboard
    } else {
        $error = "Correo o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Vida Saludable</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

    <header>
        <h1>Iniciar Sesión</h1>
    </header>

    <form action="login.php" method="POST">
        <label for="email">Correo electrónico</label>
        <input type="email" name="email" id="email" required>
        
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" required>
        
        <button type="submit">Iniciar Sesión</button>
    </form>

    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <footer>
        <p>&copy; 2024 Vida Saludable</p>
    </footer>
</body>
</html>
