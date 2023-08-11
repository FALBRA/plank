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
/*----------------------------start efecto hover foto-------------------------------------------*/
const imagen = document.getElementById('imagen-cliente');
const texto = document.getElementById('cambiar-text');

imagen.addEventListener('mouseover', () => {
    imagen.style.opacity = 0.7;
    texto.style.opacity = 1;
});

imagen.addEventListener('mouseout', () => {
    imagen.style.opacity = 1;
    texto.style.opacity= 0;
});

texto.addEventListener('mouseover', () => {
    imagen.style.opacity = 0.7;
    texto.style.opacity = 1;
});
texto.addEventListener('mouseout', () => {
    imagen.style.opacity = 1;
    texto.style.opacity= 0;
});
/*----------------------------End efecto hover foto-----------------------------------------------*/
/*-----------------------------Start aparecer cambio de foto------------------------------------------*/
document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.getElementById("cambiar-text");
    const myForm = document.getElementById("form-imagen");
  
    toggleButton.addEventListener("click", function () {
      if (myForm.style.display === "none") {
        myForm.style.display = "flex";
      } else {
        myForm.style.display = "none";
      }
    });
  
    document.addEventListener("click", function (event) {
      if (!myForm.contains(event.target) && event.target !== toggleButton) {
        myForm.style.display = "none";
      }
    });
  });
  
/*-----------------------------Start aparecer cambio de foto------------------------------------------*/