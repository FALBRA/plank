function mostrarMas() {
    const parrafosOcultos = document.querySelectorAll('.bienvenidos_cuerpo .oculto');

    // Alternamos la clase oculta para mostrar u ocultar los párrafos
    parrafosOcultos.forEach(parrafo => parrafo.classList.toggle('mostrar'));

    const boton = document.querySelector('.bienvenidos button'); // Seleccionamos el botón correctamente
    // Cambiamos el texto del botón dependiendo del estado de los párrafos
    if (parrafosOcultos[0].classList.contains('mostrar')) {
        boton.textContent = 'Leer menos';
    } else {
        boton.textContent = 'Leer más';
    }
}
