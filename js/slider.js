// Obtener referencias a los elementos de los sliders y los botones
const sliders = document.querySelectorAll('.slider');
const prevButtons = document.querySelectorAll('.prev-btn');
const nextButtons = document.querySelectorAll('.next-btn');

// Agregar eventos a los botones de todas las secciones
prevButtons.forEach((button, index) => {
    button.addEventListener('click', () => {
        sliders[index].scrollBy({
            left: -sliders[index].offsetWidth,
            behavior: 'smooth'
        });
    });
});

nextButtons.forEach((button, index) => {
    button.addEventListener('click', () => {
        sliders[index].scrollBy({
            left: sliders[index].offsetWidth,
            behavior: 'smooth'
        });
    });
});
