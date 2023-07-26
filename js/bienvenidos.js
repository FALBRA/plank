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




document.addEventListener('DOMContentLoaded', function () {
    const checkbox = document.getElementById('btn-rs');
    const labelIcon = document.querySelector('#menu-label-rs i');
  
    checkbox.addEventListener('click', function () {
      if (checkbox.checked) {
        labelIcon.className = 'fa-solid fa-chart-gantt';
      } else {
        labelIcon.className = 'fa-solid fa-chart-bar';
      }
    });
  });
