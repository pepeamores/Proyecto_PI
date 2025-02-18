<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vida Saludable</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

    <!-- Botón de cambio de tema -->
    <button id="theme-toggle" class="theme-toggle">Cambiar Tema</button>

    <header class="header">
        <div class="header-content">
            <h1>Vida Saludable</h1>
            <p>Descubre cómo mejorar tu salud física, mental y emocional a través de hábitos saludables.</p>
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="register.php">Registrarse</a></li>
                <li><a href="pages/alimentacion.php">Alimentación Saludable</a></li>
                <li><a href="pages/ejercicio.php">Ejercicio Físico</a></li>
                <li><a href="pages/salud_mental.php">Salud Mental</a></li>
            </ul>
        </nav>
    </header>

    <!-- Sección destacada -->
    <section class="highlight">
        <img src="img/health.png" alt="Vida saludable">
        <div class="highlight-text">
            <h2>Vive Saludable Hoy</h2>
            <p>La clave de una vida plena y larga es cuidar tanto del cuerpo como de la mente. Aquí aprenderás cómo hacerlo.</p>
            <button class="cta-button">Descubre Más</button>
        </div>
    </section>

    <!-- Secciones interactivas -->
    <section class="interactive-sections">
        <div class="section-card">
            <img src="img/fitness.jpg" alt="Ejercicio Físico">
            <div class="card-content">
                <h3>Ejercicio Físico</h3>
                <p>Conoce las mejores rutinas de ejercicio para mantenerte en forma.</p>
                <button class="expand-btn" onclick="toggleSection('fitness')">Leer Más</button>
                <div id="fitness" class="extra-content">
                    <p>El ejercicio regular mejora tu salud cardiovascular, fortalece tus músculos y te ayuda a mantener un peso saludable.</p>
                </div>
            </div>
        </div>

        <div class="section-card">
            <img src="img/mental_health.jpg" alt="Salud Mental">
            <div class="card-content">
                <h3>Salud Mental</h3>
                <p>Aprende técnicas para cuidar de tu bienestar mental y emocional.</p>
                <button class="expand-btn" onclick="toggleSection('mental-health')">Leer Más</button>
                <div id="mental-health" class="extra-content">
                    <p>La salud mental es esencial para una vida equilibrada. Practica técnicas de relajación y meditación para mantenerla en su mejor estado.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonios -->
    <section class="testimonials">
        <h2>Testimonios</h2>
        <div id="testimony-slider">
            <p class="testimony-text">"Cambiar mis hábitos alimenticios me ha hecho sentir con más energía y vitalidad."</p>
            <p class="testimony-author">- Ana Pérez</p>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Vida Saludable. Todos los derechos reservados.</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
