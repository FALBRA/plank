/*-----------------------------Start opciones----------------------------------*/
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
/*-----------------------------End opciones----------------------------------*/
/*-----------------------------Start contenido de servicios cliente----------------------------------*/
function mostrarContenido(servicio) {
    const contenidoServicioCliente = document.querySelector('.contenido-servicio-cliente');
    const contenidoReparacion = document.querySelector('.contenido-reparacion');
    const contenidoInstalacion = document.querySelector('.contenido-instalacion');
    const contenidoDesarrolloWeb = document.querySelector('.contenido-desarrollo-web');

    switch (servicio) {
        case 'reparacion':
            contenidoReparacion.style.display = 'flex';
            contenidoInstalacion.style.display = 'none';
            contenidoDesarrolloWeb.style.display = 'none';
            break;
        case 'instalacion':
            contenidoReparacion.style.display = 'none';
            contenidoInstalacion.style.display = 'flex';
            contenidoDesarrolloWeb.style.display = 'none';
            break;
        case 'desarrollo-web':
            contenidoReparacion.style.display = 'none';
            contenidoInstalacion.style.display = 'none';
            contenidoDesarrolloWeb.style.display = 'flex';
            break;
        default:
            contenidoReparacion.style.display = 'none';
            contenidoInstalacion.style.display = 'none';
            contenidoDesarrolloWeb.style.display = 'none';
            break;
    }
}
/*-----------------------------End contenido de servicios cliente----------------------------------*/
/*----------------------------Start clicked selector----------------------------------------------*/
function activarDiv(elemento) {
    const divs = document.querySelectorAll("[data-active='true']");
  
    // Desactivar todos los divs activos
    divs.forEach((div) => {
      div.classList.remove("clicked");
      div.dataset.active = "false";
    });
  
    // Activar el div clickeado
    elemento.classList.add("clicked");
    elemento.dataset.active = "true";
  }
  
/*----------------------------End clicked selector----------------------------------------------*/