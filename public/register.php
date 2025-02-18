aaa aaaaaaaaaaaaaaaaaaa

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse - Vida Saludable</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

    <header>
        <h1>Registrarse en Vida Saludable</h1>
    </header>

    <form action="register.php" method="POST">
        <label for="email">Correo </label>
        <input type="email" name="email" id="email" required>
        
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" required>
        
        <button type="submit">Registrarse</button>
    </form>

    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <footer>
        <p>&copy; 2024 Vida Saludable</p>
    </footer>
</body>
</html>
