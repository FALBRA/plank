// Función para manejar la búsqueda
const inputBusqueda = document.querySelector("#busqueda");

inputBusqueda.addEventListener("keyup", () => {
  const filtro = inputBusqueda.value.toUpperCase();
  const listaServicios = document.querySelector("#lista-servicios");
  const servicios = listaServicios.querySelectorAll(".servicio");

  // Iterar sobre cada servicio y mostrar u ocultar según la búsqueda
  servicios.forEach((servicio) => {
    const textoServicio = servicio.querySelector("h1").textContent || servicio.querySelector("h1").innerText;

    if (textoServicio.toUpperCase().indexOf(filtro) > -1) {
      servicio.style.display = "";
    } else {
      servicio.style.display = "none";
    }
  });
});


// Obtener todos los botones de filtro
var botonesFiltro = document.querySelectorAll('.filtro-botones a');

// Obtener todos los servicios
var servicios = document.querySelectorAll('.servicio');

// Función para manejar el evento de clic en los botones de filtro
function filtrarServicios(event) {
  event.preventDefault();

  // Obtener el texto del botón seleccionado
  var filtro = this.textContent;

  // Recorrer todos los servicios
  for (var i = 0; i < servicios.length; i++) {
    var servicio = servicios[i];
    var nombre = servicio.querySelector('.servicio-nombre h1').textContent;

    // Mostrar u ocultar los servicios según el filtro seleccionado
    if (filtro === 'Todos' || nombre === filtro) {
      servicio.style.display = 'block';
    } else {
      servicio.style.display = 'none';
    }
  }
}

// Agregar el evento de clic a cada botón de filtro
for (var i = 0; i < botonesFiltro.length; i++) {
  botonesFiltro[i].addEventListener('click', filtrarServicios);
}

function toggleSelected(event) {
  event.preventDefault();
  const link = event.target;
  const links = document.querySelectorAll(".filtro-botones a");
  links.forEach((item) => {
    item.classList.remove("selected");
  });
  link.classList.add("selected");
}
