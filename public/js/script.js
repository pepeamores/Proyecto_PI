// Modo Oscuro - Alternar entre tema claro y oscuro
const themeToggle = document.getElementById('theme-toggle');
const body = document.body;

themeToggle.addEventListener('click', () => {
    body.classList.toggle('dark-theme');
    const isDarkMode = body.classList.contains('dark-theme');
    localStorage.setItem('theme', isDarkMode ? 'dark' : 'light');
});

// Cargar el tema desde el localStorage
window.addEventListener('DOMContentLoaded', () => {
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark') {
        body.classList.add('dark-theme');
    }
});

// Secciones Desplegables
function toggleSection(sectionId) {
    const section = document.getElementById(sectionId);
    section.style.display = section.style.display === 'block' ? 'none' : 'block';
}

// Testimonios - Cambiar automáticamente
const testimonies = [
    { text: '"Cambiar mis hábitos alimenticios me ha hecho sentir con más energía y vitalidad."', author: 'Ana Pérez' },
    { text: '"Hacer ejercicio regularmente ha transformado mi cuerpo y mi mente."', author: 'Carlos Gómez' },
    { text: '"La meditación me ha dado claridad mental y paz interior."', author: 'Laura Fernández' }
];

let currentTestimonyIndex = 0;
const testimonySlider = document.getElementById('testimony-slider');

function updateTestimony() {
    const testimony = testimonies[currentTestimonyIndex];
    testimonySlider.querySelector('.testimony-text').textContent = testimony.text;
    testimonySlider.querySelector('.testimony-author').textContent = testimony.author;
    currentTestimonyIndex = (currentTestimonyIndex + 1) % testimonies.length;
}

setInterval(updateTestimony, 5000); // Cambiar cada 5 segundos
