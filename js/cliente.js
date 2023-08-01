const iconoClienteOption = document.getElementById('icono-cliente-option');
const actividadDiv = document.querySelector('.actividad');
const optionDiv = document.querySelector('.option');
const opcionesContent = document.querySelector('.opciones-content');

// Establecer la actividad como visible inicialmente y ocultar opciones content
actividadDiv.style.display = 'block';
opcionesContent.style.display = 'none';

iconoClienteOption.addEventListener('click', () => {
    // Verificar si la opción está visible o no
    if (optionDiv.style.display === 'block') {
        // Si la opción está visible, ocultarla y ocultar opciones content
        optionDiv.style.display = 'none';
        opcionesContent.style.display = 'none';
        actividadDiv.style.display = 'block';
    } else {
        // Si la opción está oculta, mostrarla y mostrar opciones content
        optionDiv.style.display = 'block';
        opcionesContent.style.display = 'block';
        actividadDiv.style.display = 'none';
    }
});